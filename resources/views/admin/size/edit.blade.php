@extends('admin.layout.master')

@section('title', 'Quản lý Size')

@section('content-title', 'Sửa Size')

@section('content')
    <form action="{{Route('admin.size.update',$size)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" name="name" value="{{ isset($size) ? $size->name : '' }}">
        </div>

        @error('name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror


        <div style="margin-bottom:20px">
            <button type="submit" class="btn btn-primary">
                Edit
            </button>
            <a href="{{ Route('admin.size.list') }}" class="btn btn-info">Back</a>
        </div>

    </form>

@endsection
