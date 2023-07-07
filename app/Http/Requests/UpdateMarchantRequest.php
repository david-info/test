<?php

namespace App\Http\Requests;

use App\Models\Marchant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMarchantRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('marchant_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
                'unique:marchants,email,' . request()->route('marchant')->id,
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
        ];
    }
}
