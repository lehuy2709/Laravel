<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::select('id', 'thumbnail', 'name')->paginate(5);
        return view('admin.category.list', compact('categories'));
    }
    public function create()
    {
        return view('admin.category.add');
    }
    public function store(AddCategoryRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            $image = $request->thumbnail;
            $imageName = $image->hashName();
            $imageName = $request->name . '_' . $imageName;
            $data['thumbnail'] = $image->storeAs('images/category', $imageName);
        }
        $data['slug'] = Str::slug($request->name);
        Category::create($data);
        return redirect()->route('admin.category.list')->with('success', 'Thêm danh mục thành công');
    }

    public function delete(Category $category)
    {
        $products = Product::where('category_id', $category->id)->get();
        $productsId = $products->pluck('id');
        Product::whereIn('id', $productsId)->update(['category_id' => 0]);
        $category->delete();
        return redirect()->route('admin.category.list')->with('success', 'Xóa thành công');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $data = $request->all();
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->thumbnail;
            $thumbnailName = $request->name . '_' . $thumbnail->hashName();
            $data['thumbnail'] = $thumbnail->storeAs('images/category', $thumbnailName);
        }
        $data['slug'] = Str::slug($request->name);
        $category->update($data);
        return redirect()->route('admin.category.list')->with('success', 'Sửa thành công');
    }
}
