<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormRequest extends FormRequest
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
            'last_name'           => 'required|string|regex:/^[ぁ-んァ-ヶーa-zA-Z0-9一-龠０-９、。 ｦ-ﾟ Ａ-Ｚ ａ-ｚ 々 〃 ゝ 﨑 －\-\n\r]+$/u|max:20',
            'first_name'          => 'required|string|regex:/^[ぁ-んァ-ヶーa-zA-Z0-9一-龠０-９、。 ｦ-ﾟ Ａ-Ｚ ａ-ｚ 々 〃 ゝ 﨑 －\-\n\r]+$/u|max:20',
            'last_name_kana'      => 'required|regex:/^[ア-ン゛゜ァ-ォャ-ョー 　ヴ ｦ-ﾟ ｧ-ｫｬ-ｮ- ｰ －]+$/u|string|max:20',
            'first_name_kana'     => 'required|regex:/^[ア-ン゛゜ァ-ォャ-ョー 　ヴ ｦ-ﾟ ｧ-ｫｬ-ｮ- ｰ －]+$/u|string|max:20',
            'zip'                 => 'required|regex:/^\d{7}$/|min:7',
            'address'             => 'required|string|regex:/^[ぁ-んァ-ヶーa-zA-Z0-9一-龠０-９、。 ｦ-ﾟ Ａ-Ｚ ａ-ｚ 々 〃 ゝ 﨑 －\-\n\r]+$/u|max:255',
            'telephone'           => 'required|regex:/^(0{1}\d{9,10})$/',
            'email'               => 'required|string|email|confirmed|max:255',
            'email_confirmation'  => 'required|string|email|max:255',
        ];
    }

    public function messages()
    {
        return [
            'address.regex' => 'ご住所の書式が正しくありません。<br>記号の入力は全角ハイフンと半角ハイフンのみ可能です。',
        ];
    }
}
