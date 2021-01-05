<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingsRequest extends FormRequest
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
    public function rules()
    {
        return [
            'id' => 'required|exists:settings',
            'value' => 'required',
            'plain_value' => 'nullable|Numeric',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'غير موجود بسحلات.',
            'value.required' => 'لايوجد قيمة.',
            'plain_value.required' => 'الرجاء اداخل رسوم الدفع.'
        ];
    }
}
