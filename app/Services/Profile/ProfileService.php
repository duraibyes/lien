<?php

namespace App\Services\Profile;

use App\Models\Company;
use App\Models\UserDetails;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\User;

class ProfileService
{
    public function update(User $user, array $data): void
    {
        DB::transaction(function () use ($user, $data) {

            /* -------------------------
             | 1. Update User Name
             --------------------------*/
            $user->update([
                'name' => trim($data['first_name'] . ' ' . $data['last_name']),
            ]);

            /* -------------------------
             | 2. Company Create / Update
             --------------------------*/
            $companyData = [
                'company'  => $data['company_name'],
                'website'  => $data['website'] ?? null,
                'state_id' => $data['state_id'],
                'address'  => $data['address'],
                'city'     => $data['city'],
                'zip'      => $data['zip_code'],
            ];

            if (!empty($data['office_phone'])) {
                $companyData['phone'] = $data['office_phone'];
            }

            $company = Company::updateOrCreate(
                ['user_id' => $user->id],
                $companyData
            );

            /* -------------------------
             | 3. User Details Fetch
             --------------------------*/
            $userDetails = UserDetails::where('user_id', $user->id)->first();

            /* -------------------------
             | 4. Image Handling
             --------------------------*/
            $imagePath = $userDetails?->image;

            if (!empty($data['image'])) {
                if ($imagePath) {
                    Storage::disk('public')->delete($imagePath);
                }

                $imagePath = $data['image']->store('profile-images', 'public');
            }

            /* -------------------------
             | 5. User Details Create / Update
             --------------------------*/
            $userDetailsData = [
                'company_id' => $company->id,
                'first_name' => $data['first_name'],
                'last_name'  => $data['last_name'],
                'phone'      => $data['phone'],
                'address'    => $data['address'],
                'city'       => $data['city'],
                'state_id'   => $data['state_id'],
                'zip_code'   => $data['zip_code'],
                'image'      => $imagePath,
            ];

            if (!empty($data['office_phone'])) {
                $userDetailsData['office_phone'] = $data['office_phone'];
            }

            if (!empty($data['country'])) {
                $userDetailsData['country'] = $data['country'];
            }

            UserDetails::updateOrCreate(
                ['user_id' => $user->id],
                $userDetailsData
            );
        });
    }
}
