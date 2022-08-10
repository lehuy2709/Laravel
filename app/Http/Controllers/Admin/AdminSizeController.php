<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSizeRequest;
use App\Http\Requests\UpdateSizeRequest;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;

class AdminSizeController extends Controller
{
    public function index()
    {
        $sizes = Size::Select('id', 'name')->paginate(4);
        return view('admin.size.list', compact('sizes'));
    }
    public function create()
    {

        return view('admin.size.add');
    }

    public function store(CreateSizeRequest $request)
    {
        Size::create($request->all());
        return redirect()->route('admin.size.list')->with('success', 'thêm mới thành công');
    }
    public function delete(Size $size)
    {
        $products = Product::where('size_id', $size->id)->get();
        $productsId = $products->pluck('id');
        Product::whereIn('id', $productsId)->update(['size_id' => 0]);
        $size->delete();
        return redirect()->route('admin.size.list')->with('success', 'Xóa thành công');
    }

    public function edit(Size $size)
    {
        return view('admin.size.edit', compact('size'));
    }

    public function update(UpdateSizeRequest $request,Size $size)
    {
        $size->update(['name'=>$request->name]);
        return redirect()->route('admin.size.list')->with('success', 'Sửa thành công');

    }
}
