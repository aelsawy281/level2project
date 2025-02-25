<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMemberRequest extends FormRequest
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
             'image' => 'required|image|mimes:jpg,png',
             'facebook' => 'required|string|min:5',
             'twitter'=> 'required|string|min:5',
             'linkedin'=> 'required|string|min:5',
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
