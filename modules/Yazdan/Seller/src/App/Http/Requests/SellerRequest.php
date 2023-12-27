<?php

namespace Yazdan\Seller\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "seller_name" => ['required','persian_alpha'],
            "shop_name" => ['required','persian_alpha'],
            "slug" => ['required','is_not_persian','unique:sellers,slug'],

            "mobile" => ['required','iran_mobile'],
            "card_number" => ['required','card_number'],

            "sheba_number" => ['required','sheba'],
            "national_number" => ['required','melli_code'],

            "postal_code" => ['required','iran_postal_code'],
            "address" => ['required'],
            "description" => ['required']

        ];
    }

    public function attributes()
    {
        return [
            "seller_name" => 'نام و نام خانوادگی',
            "shop_name" => 'نام فروشگاه',
            "slug" => 'نام فروشگاه به انگلیسی',
            "mobile" => 'شماره تماس',
            "account_number" => 'شماره حساب',
            "sheba_number" => 'شماره شبا',
            "national_number" => 'کد ملی',
            "postal_code" => 'کد پستی',
            "address" => 'آدرس',
            "description" => 'زمینه کاری'
        ];
    }
}
