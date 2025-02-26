<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMemberRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'name' => 'required|string|min:2',
             'position' => 'required|string|min:2',
             'image' => 'nullable|image|mimes:jpg,png',
             'facebook' => 'nullable|string|min:5',
             'twitter'=> 'nullable|string|min:5',
             'linkedin'=> 'nullable|string|min:5',
        ];
    }

    public function attributes(): array
    {
        return [
             'name' => __("keywords.name"),
             'position' => __("keywords.position"),
             'image' => __("keywords.image"),
             'facebook' => __("keywords.facebook"),
             'twitter' => __("keywords.twitter"),
             'linkedin' => __("keywords.facebook"),
        ];
    }
}
