@extends('admin.layout.master')

@section('title', 'Quản lý danh mục')

@section('content-title', 'Sửa danh mục')

@section('content')
    <form action="{{ Route('admin.category.update', $category) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ isset($category) ? $category->name : '' }}">
        </div>

        @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror

        <div class="form-group">
            <label for="exampleInputEmail1">Thumbnail</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="thumbnail"
                value="{{ isset($category) ? $category->thumbnail : '' }}">
        </div>

        @if (isset($category))
            <div>
                <img src="{{ asset($category->thumbnail) }}" alt="" width="150px">
            </div>
        @endif
        <br>



        <div style="margin-bottom:20px">
            <button type="submit" class="btn btn-primary">
                Edit
            </button>
            <a href="{{ Route('admin.category.list') }}" class="btn btn-info">Back</a>
        </div>

    </form>

@endsection
