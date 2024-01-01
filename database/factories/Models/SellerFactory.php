<?php

namespace Database\Factories\Models;

use Yazdan\Seller\App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\Factory;


class SellerFactory extends Factory
{
    protected $model = Seller::class;

    public function definition(): array
    {
        return [
            'user_id' => '1',
            'shop_name' => 'ششش',
            'slug' => fake()->slug(),
            'seller_name' => 'سسس',
            'postal_code' => '1994815691', // password
            'address' => 'aaaaaaaaaaaaaaaaaaaaaaaaaa',
            'national_number' => '3490566122',
            'mobile' => '07712345678',
            'card_number' => '5022291327321780',
            'sheba_number' => 'IR910570290111517257539001',
            'description' => 'صصصصصصصصصصصصصصصص',
            'status' => 'new',
        ];
    }
}
