<?php

namespace Yazdan\Category\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Yazdan\Blog\App\Models\Blog;
use Yazdan\Category\App\Http\Requests\CategoryRequest;
use Yazdan\Category\App\Models\Category;
use Yazdan\Category\Repositories\CategoryRepository;
use Yazdan\Common\Responses\AjaxResponses;

class CategoryController extends Controller
{

    public function index()
    {
        $this->authorize('manage', Category::class);
        $categories = CategoryRepository::getAllPaginate(10);
        $types = CategoryRepository::$types;
        return view('Category::admin.index', compact('categories','types'));
    }

    public function store(CategoryRequest $request)
    {
        $this->authorize('manage', Category::class);
        CategoryRepository::create($request);
        newFeedbacks();
        return back();
    }

    public function edit($categoryId)
    {
        $this->authorize('manage', Category::class);
        $types = CategoryRepository::$types;
        $category = CategoryRepository::findById($categoryId);
        $parentCategories = CategoryRepository::getAllExceptById($categoryId);
        return view('Category::admin.edit', compact('category', 'parentCategories','types'));
    }

    public function update($categoryId, CategoryRequest $request)
    {
        $this->authorize('manage', Category::class);
        CategoryRepository::updating($categoryId, $request);
        newFeedbacks();
        return redirect(route('admin.categories.index'));
    }

    public function destroy($categoryId)
    {
        $this->authorize('manage', Category::class);
        CategoryRepository::delete($categoryId);
        return AjaxResponses::SuccessResponses();
    }

    // front

    public function categoryShow(Category $category)
    {
        $blogs = Blog::where('category_id',$category->id)->paginate(12);
        return view('Category::front.show', compact('category','blogs'));
    }
}
