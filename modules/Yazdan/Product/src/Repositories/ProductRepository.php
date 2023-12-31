<?php

namespace Yazdan\Product\Repositories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Yazdan\Media\App\Models\Media;
use Yazdan\Media\App\Models\Gallery;
use Yazdan\Seller\App\Models\Seller;
use Yazdan\Product\App\Models\Product;

class ProductRepository
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    static $statuses = [
        self::STATUS_ACTIVE,
        self::STATUS_INACTIVE,
    ];
    public static function getAll()
    {
        return Product::all();
    }

    public static function getAllPaginate($value)
    {
        return Product::latest()->paginate($value);
    }

    public static function findById($id)
    {
        return Product::find($id);
    }

    public static function getAllExceptById($id)
    {
        return self::getAll()->filter(function ($item) use ($id) {
            return $item->id != $id;
        });
    }


    public static function delete($id)
    {
        $product = Product::whereId($id)->first();

        // gallery
        destroyImages($product);

        // media
        destroyImage($product);

        //comment
        $product->comments()->delete();

        //product
        $product->delete();

        return true;
    }

    public static function store($data,$sellerId)
    {
        DB::transaction(function () use($data,$sellerId) {
            $product = Product::create([
                'seller_id' => $sellerId,
                'media_id' => $data->media_id,
                'category_id' => $data->category_id,
                'title' => $data->title,
                'slug' =>  $data->slug ? Str::slug($data->slug) : Str::slug($data->title),
                'status' => $data->status,
                'description' => $data->description,
                'body' => $data->body,
            ]);
            addImagesGallery($product,$data);
        });
    }

    public static function update($id,$data)
    {
        return Product::whereId($id)->update([
            'media_id' => $data->media_id,
            'category_id' => $data->category_id,
            'title' => $data->title,
            'slug' =>  $data->slug ? Str::slug($data->slug) : Str::slug($data->title),
            'status' => $data->status,
            'description' => $data->description,
            'body' => $data->body,
        ]);
    }

}
