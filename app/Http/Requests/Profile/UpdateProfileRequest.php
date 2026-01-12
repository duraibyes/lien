<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'first_name' => ['required', 'string', 'max:30'],
            'last_name' => ['required', 'string', 'max:30'],
            'phone' => ['required', 'string', 'digits:10'],
            'office_phone' => ['nullable', 'string', 'digits:10'],
            'address' => ['required', 'string'],
            'city' => ['required', 'string', 'max:50'],
            'state_id' => ['required', 'integer', 'exists:states,id'],
            'zip_code' => ['required', 'string', 'max:10'],
            'country' => ['nullable', 'string', 'max:50'],
            'company_id' => ['nullable', 'integer', 'exists:companies,id'],
            'company_name' => ['required', 'string', 'max:100'],
            'website' => ['nullable', 'string', 'url', 'max:100'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ];
    }
}
