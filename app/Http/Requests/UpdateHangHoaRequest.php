<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHangHoaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'tenHangHoa' => 'required|max:255',
            'soLuong' => 'required',
            'donGiaNhap' => 'required',
            'donGiaBan' => 'required',
            'anh' => 'image',
            'ghiChu' => 'required',
            'chatlieu_id' => 'required'
        ];
    }
}
