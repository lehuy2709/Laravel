@extends('admin.layout.master')

@section('title', 'Quản lý danh mục')

@section('content-title', 'Thêm mới sản phẩm')

@section('content')
    <form action="{{ Route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>

        @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group">
            <label for="">Category</label>
            <select name="category_id" class="form-control">
                @foreach ($category as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Price</label>
            <input type="text" class="form-control" name="price" value="{{ old('price') }}">
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

        @error('image')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea name="description" id="editor" class="form-control" value="{{ old('description') }}"></textarea>
        </div>

        @error('description')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="form-control">
                <option value="0">InActive</option>
                <option value="1">Active</option>
            </select>
        </div>


        <div class="form-group">
            <label for="">Size</label>
            <select name="size_id" class="form-control">
                @foreach ($size as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>





        <div style="margin-bottom:20px">
            <button type="submit" class="btn btn-primary">
                Create
            </button>
            <a href="{{ Route('admin.product.list') }}" class="btn btn-info">Back</a>
        </div>

    </form>

@endsection
