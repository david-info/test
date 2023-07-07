<?php

namespace App\Http\Requests;

use App\Models\Marchant;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyMarchantRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('marchant_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:marchants,id',
        ];
    }
}
