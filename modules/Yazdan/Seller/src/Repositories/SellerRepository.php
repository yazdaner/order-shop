<?php

namespace Yazdan\Seller\Repositories;

use Yazdan\Seller\App\Models\Seller;

class SellerRepository
{
    public static function all()
    {
        return Seller::query()->get();
    }

    public static function findById($id)
    {
        return Seller::findOrFail($id);
    }

    public static function store($data)
    {
        return Seller::create([
            'priority' => $data->priority,
            'media_id' => $data->media_id,
            'link' => $data->link,
            'title' => $data->title,
            'description' => $data->description,
            'status' => $data->status,
            'type' => $data->type,
        ]);
    }

    public static function update($id, $data)
    {
        Seller::where('id', $id)->update([
            'priority' => $data->priority,
            'media_id' => $data->media_id,
            'link' => $data->link,
            'title' => $data->title,
            'description' => $data->description,
            'status' => $data->status,
            'type' => $data->type,
        ]);
    }

    public function delete($id)
    {
        Seller::where('id', $id)->delete();
    }
}



