<?php

namespace Yazdan\Front\App\Providers;

use Yazdan\Blog\App\Models\Blog;
use Yazdan\About\App\Models\About;
use Yazdan\Slider\App\Models\Slider;
use Illuminate\Support\Facades\Route;
use Yazdan\Setting\App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use Yazdan\Slider\Repositories\SliderRepository;
use Yazdan\Category\Repositories\CategoryRepository;
use Yazdan\Product\App\Models\Product;

class FrontServiceProvider extends ServiceProvider
{
    public function register()
    {
        Route::middleware('web')
            ->group(__DIR__ . '/../../Routes/front_routes.php');

        $this->loadViewsFrom(__DIR__ . '/../../Resources/views/', 'Front');

        view()->composer('Front::sections.slider', function ($view) {
            $sliders = Slider::where('type', SliderRepository::TYPE_MAIN)->where('status', true)->orderBy('priority')->get();
            $view->with(compact('sliders'));
        });

        view()->composer('Front::sections.middleBanner', function ($view) {
            $banner = Slider::where('type', SliderRepository::TYPE_INDEX_MIDDLE)->where('status', true)->orderBy('priority')->first();
            $view->with(compact('banner'));
        });

        view()->composer('Front::sections.bottomBanner', function ($view) {
            $banner = Slider::where('type', SliderRepository::TYPE_INDEX_BOTTOM)->where('status', true)->orderBy('priority')->first();
            $view->with(compact('banner'));
        });


        view()->composer(['Front::sections.footer', 'Home::sections.sidebar', 'Contact::front.index', 'Blog::front.show'], function ($view) {
            $setting = Setting::first();
            $view->with(compact('setting'));
        });

        view()->composer('Front::sections.navbar', function ($view) {
            $blogCategories = CategoryRepository::treeWithType(Blog::class);
            $productCategories = CategoryRepository::treeWithType(Product::class);
            $view->with(compact('blogCategories','productCategories'));
        });

        view()->composer('Front::sections.blogs', function ($view) {
            $blogs = Blog::orderBy('updated_at', 'DESC')->take(3)->get();
            $view->with(compact('blogs'));
        });

        view()->composer('Front::sections.about', function ($view) {
            $about = About::select('banner4', 'banner5', 'banner6', 'frontBody')->first();
            $view->with(compact('about'));
        });

        view()->composer(['Front::sections.products'], function ($view) {
            $products = Product::all();
            $view->with(compact('products'));
        });

        view()->composer(['Front::sections.footer'], function ($view) {
            $blogs = Blog::latest()->take(4)->get();
            $view->with(compact('blogs'));
        });
    }
}
