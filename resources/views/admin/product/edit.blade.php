@extends('admin.layout.master')

@section('title', 'Quản lý sản phẩm')

@section('content-title', 'Sửa sản phẩm')

@section('content')
    <form action="{{ Route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ isset($product) ? $product->name : '' }}">
        </div>

        @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" class="form-control">
                @if ($product->category_id == 0)
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                @else
                    <option selected hidden value="{{ $product->category_id }}">{{ $product->category->name }}</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                @endif

            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" name="price" value="{{ isset($product) ? $product->price : '' }}">
        </div>

        @error('price')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group">
            <label for="exampleInputEmail1">Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="image">
        </div>


        @if (isset($product))
            <div>
                <img src="{{ asset($product->image) }}" alt="" width="150px">
            </div>
        @endif


        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" id="editor" class="form-control" value="{{ old('description') }}">{{ isset($product) ? $product->description : '' }}</textarea>
        </div>

        @error('description')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror



        <div class="form-group">
            <label for="">Size</label>
            <select name="size_id" class="form-control">
                @if ($product->size_id == 0)
                    @foreach ($size as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                @else
                    <option selected hidden value="{{ $product->size_id }}">{{ $product->size->name }}</option>
                    @foreach ($size as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                @endif


            </select>
        </div>





        <div style="margin-bottom:20px">
            <button type="submit" class="btn btn-primary">
                Edit
            </button>
            <a href="{{ Route('admin.product.list') }}" class="btn btn-info">Back</a>
        </div>

    </form>

@endsection
