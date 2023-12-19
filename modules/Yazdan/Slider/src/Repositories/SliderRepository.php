<?php

namespace Yazdan\Slider\Repositories;

use Yazdan\Slider\App\Models\Slider;

class SliderRepository
{
    const TYPE_MAIN = 'main';
    const TYPE_INDEX_MIDDLE = 'index middle';
    const TYPE_INDEX_BOTTOM = 'index bottom';

    static $types = [
        self::TYPE_MAIN,
        self::TYPE_INDEX_MIDDLE,
        self::TYPE_INDEX_BOTTOM
    ];

    public static function all()
    {
        return Slider::query()->orderBy("priority")->get();
    }

    public static function findById($id)
    {
        return Slider::findOrFail($id);
    }

    public static function store($data)
    {
        return Slider::create([
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
        Slider::where('id', $id)->update([
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
        Slider::where('id', $id)->delete();
    }
}



