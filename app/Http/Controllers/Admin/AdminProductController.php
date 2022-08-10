<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::Select('id', 'name', 'price', 'image', 'status', 'size_id', 'category_id')
            ->with(['category', 'size'])
            ->paginate(5);
        return view('admin.product.list', compact('products'));
    }

    public function create()
    {
        $category = Category::Select('id', 'name')->get();
        $size = Size::Select('id', 'name')->get();
        return view('admin.product.add', compact('category', 'size'));
    }

    public function store(CreateProductRequest $request)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = $image->hashName();
            $imageName = $request->name . '_' . $imageName;
            $data['image'] = $image->storeAs('images/product', $imageName);
        }
        $data['slug'] = Str::slug($request->name);
        Product::create($data);
        return
            redirect()->route('admin.product.list')->with('success', 'Thêm sản phẩm thành công');
    }
    public function updateStatus(Product $product)
    {
        if ($product->status == 1) {
            $product->status = 0;
        } else {
            $product->status = 1;
        }
        $product->update(['status' => $product->status]);
        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công');
    }

    public function delete(Product $product)
    {
        $Comment = Comment::where('product_id', $product->id)->get();
        $CommentId = $Comment->pluck('id');
        Comment::whereIn('id', $CommentId)->update(['product_id' => 0]);
        $product->delete();
        return redirect()->route('admin.product.list')->with('success', 'Xóa thành công');
    }

    public function edit(Product $product)
    {
        $category = Category::Select('id', 'name')->get();
        $size = Size::Select('id', 'name')->get();
        return view('admin.product.edit', compact('product', 'category', 'size'));
    }

    public function update(UpdateProductRequest $request, Product $product)
    {
        $data = $request->all();
        if ($request->hasFile('image')) {
            $image = $request->image;
            $imageName = $request->name . '_' . $image->hashName();
            $data['image'] = $image->storeAs('images/product', $imageName);
        }
        $data['slug'] = Str::slug($request->name);
        $product->update($data);
        return redirect()->route('admin.product.list')->with('success', 'Sửa thành công');
    }
}
