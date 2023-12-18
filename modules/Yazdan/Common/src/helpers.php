<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Morilog\Jalali\Jalalian;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;

function newFeedbacks($title = 'با موفقعیت', $body = 'عملیات انجام شد', $type = 'success')
{
    $session = session()->has('feedbacks') ? session()->get('feedbacks') : [];
    $session[] = ['title' => $title, 'body' => $body, 'type' => $type];
    session()->flash('feedbacks', $session);
}

function providerGetRoute($path, $controller, $method, $name)
{

    return Route::get($path, ['uses' => $controller . '@' . $method, 'as' => $name]);
}


function dateFromJalali($date, $format = 'Y/m/d')
{
    return $date ? Jalalian::fromFormat($format, $date)->toCarbon() : null;
}

function getJalaliFromFormat($date, $format = "Y/m/d")
{
    return Jalalian::fromCarbon(\Carbon\Carbon::createFromFormat($format, $date))->format($format);
}

function fromCarbon($date, $format = 'Y/m/d H:i')
{
    return Jalalian::fromCarbon($date)->format($format);
}

function checkView($model, Request $request)
{
    $tableName  = $model->getTable();
    if (!auth()->check()) {
        $cookie_name = (Str::replace('.', '', ($request->ip())) . '-' . $model->id . '-' . $tableName);
    } else {
        $cookie_name = (auth()->id() . '-' . $model->id . '-' . $tableName);
    }
    if (Cookie::get($cookie_name) == '') {
        $cookie = cookie($cookie_name, '1', 60);
        $model->incrementReadCount();
        return $cookie;
    } else {
        return false;
    }
}
