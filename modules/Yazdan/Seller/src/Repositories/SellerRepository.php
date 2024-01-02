<?php

namespace Yazdan\Seller\Repositories;

use Illuminate\Support\Str;
use Yazdan\Seller\App\Models\Seller;

class SellerRepository
{
    const STATUS_NEW = "new";
    const STATUS_APPROVED = "approved";
    const STATUS_REJECTED = "rejected";

    static $statues = [
        self::STATUS_REJECTED,
        self::STATUS_APPROVED,
        self::STATUS_NEW
    ];

    public static function all()
    {
        return Seller::query()->get();
    }

    public static function findById($id)
    {
        return Seller::findOrFail($id);
    }

    public static function store($data): void
    {
        Seller::create([
            "user_id" => auth()->id(),
            "seller_name" => $data->seller_name,
            "shop_name" => $data->shop_name,
            "slug" => Str::slug($data->slug),
            "mobile" => $data->mobile,
            "card_number" => $data->card_number,
            "sheba_number" => $data->sheba_number,
            "national_number" => $data->national_number,
            "postal_code" => $data->postal_code,
            "address" => $data->address,
            "description" => $data->description,
        ]);
    }

    public static function update($id, $data): void
    {
        Seller::where('id', $id)->update([
            "seller_name" => $data->seller_name,
            "shop_name" => $data->shop_name,
            "slug" => Str::slug($data->slug),
            "mobile" => $data->mobile,
            "card_number" => $data->card_number,
            "sheba_number" => $data->sheba_number,
            "national_number" => $data->national_number,
            "postal_code" => $data->postal_code,
            "address" => $data->address,
            "description" => $data->description,
        ]);
    }
    public static function updateFromSeller($id, $data): void
    {
        Seller::where('id', $id)->update([
            "body" => $data->body,
            "media_id" => $data->media_id,
        ]);
    }

    public static function updateStatus($id, string $status)
    {
        return Seller::query()->where("id", $id)->update([
            "status" => $status
        ]);
    }

    public static function getSeller()
    {
        return Seller::where('user_id',auth()->id())->whereStatus(self::STATUS_APPROVED)->first() ?? null;
    }

    public static function getSellerId()
    {
        return self::getSeller() ? self::getSeller()->id : null;
    }
}
