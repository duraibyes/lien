<?php

namespace App\Http\Controllers;

use App\Models\Remedy;
use App\Models\TierTable;
use App\Models\RemedyDate;
use App\Models\RemedyStep;
use App\Models\ProjectDetail;
use App\Models\TierRemedyStep;
use App\Models\NotificationSettings;
use Illuminate\Support\Facades\Auth;


class Notification
{
    public $days;
    public $project_name;
    public $project_id;
}

class NotificationController extends Controller
{
    public static function showProjectNoticeOwner($project) {
        $remedy = Remedy::where('state_id', $project->state_id)->where('project_type_id', $project->project_type_id);
        $remedyStepsCount = RemedyStep::whereIn('remedy_id', $remedy->pluck('id'))->where('long_description', 'LIKE', '%Notice to Owner%')->count();
        if($remedyStepsCount > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function getUserProjectDeadlines()
    {
        try {
            $user = Auth::user();
            $projects = ProjectDetail::where('user_id', $user->id)->get();
            $deoist = array();
            // var_dump($projects);
            $setting = NotificationSettings::where('user_id', Auth::user()->id)->first();
            if (isset($setting)) {
                $days_alert = $setting->days;
            } else {
                $days_alert = 0;
            }
            $deadline_list = array();

            foreach ($projects  as $project) {
                $remedy = Remedy::where('state_id', $project->state_id);
                // load the project detail record to get scalar role/customer ids
                $roleDetail = ProjectDetail::find($project->id);

                $remedyIds = $remedy->pluck('id')->toArray();
                if (empty($remedyIds)) {
                    continue; // no remedies for this project, skip
                }

                $remedySteps = RemedyStep::whereIn('remedy_id', $remedyIds);
                // fetch tiers and ensure pluck returns an array to avoid driver binding issues
                $tiers = TierTable::where('role_id', $project->role_id)->get();
                $tiersIds = $tiers->pluck('id')->toArray();
                if (empty($tiersIds)) {
                    continue; // no tiers for this project, skip
                }

                $tierRemedySteps = TierRemedyStep::whereIn('tier_id', $tiersIds);
                $tierRemedyStepIds = $tierRemedySteps->pluck('remedy_step_id')->toArray();
                if (empty($tierRemedyStepIds)) {
                    continue; // nothing mapped to tiers, skip
                }

                $remedyStepsNew = $remedySteps->whereIn('id', $tierRemedyStepIds);

                $remedyDate = RemedyDate::where('status', '1')
                    ->whereIn('remedy_id', $remedyIds)
                    ->whereIn('id', $remedyStepsNew->pluck('remedy_date_id')->toArray())
                    ->orderBy('date_order', 'ASC')->get();

                // use scalar role/customer ids from loaded project detail
                $tier = TierTable::where('role_id', $roleDetail->role_id)->where('customer_id', $roleDetail->customer_id)->get();
                $tierRem = TierRemedyStep::whereIn('tier_id', $tier->pluck('id')->toArray());
                $deadline1 = RemedyStep::where('status', '1')
                    ->whereIn('remedy_date_id', $remedyDate->pluck('id')->toArray())
                    ->whereIn('remedy_id', $remedy->pluck('id')->toArray());
                $deadlines = $deadline1->whereIn('id', $tierRem->pluck('remedy_step_id')->toArray())->get();

                foreach ($deadlines as $key => $value) {
                    $years = $value->years;
                    $months = $value->months;
                    $days = $value->days;
                    $remedyDateId = $value->remedy_date_id;
                    $daysRemain = ($years * 365) + ($months * 30) + ($days * 1);
                    if (($daysRemain <= $days_alert) && $daysRemain > 0) {
                        $deadline = new Notification();
                        $deadline->days = $daysRemain;
                        $deadline->project_name = $project->project_name;
                        $deadline->project_id = $project->id;

                        array_push($deadline_list, $deadline);
                    }
                }
            }

            return $deadline_list;
        } catch (\Exception $e) {
            // safe fallback for view: return no deadlines on errors
            return [];
        }
    }
     
}
