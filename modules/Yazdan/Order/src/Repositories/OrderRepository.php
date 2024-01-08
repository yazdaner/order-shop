<?php

namespace Yazdan\Order\Repositories;

use Illuminate\Support\Facades\DB;
use Yazdan\Order\App\Models\Order;
use Yazdan\Product\Repositories\VariationRepository;

class OrderRepository
{
    const STATUS_PROCESSING = 'processing';
    const STATUS_PREPARING = 'preparing';
    const STATUS_SENT = 'sent';
    const STATUS_REJECTED = 'rejected';
    static $statuses = [self::STATUS_PROCESSING, self::STATUS_PREPARING, self::STATUS_SENT, self::STATUS_REJECTED];


    public static function create($data) :void
    {
        DB::transaction(function() use ($data){
            $variation = VariationRepository::get($data->variation_id);
            $variation->decrement('quantity', $data->quantity);
            Order::create([
            'user_id' => auth()->id(),
            'variation_id' => $data->variation_id,
            'quantity' => $data->quantity,
            'price' => $variation->price,
            'total_price' => $variation->getPrice() * $data->quantity,
            'status' => self::STATUS_PROCESSING,
        ]);
        });
    }

    public static function update($order,$data)
    {
        return $order->update([
            'status' => $data->status,
            'tracking_code' => $data->tracking_code,
        ]);
    }
}
