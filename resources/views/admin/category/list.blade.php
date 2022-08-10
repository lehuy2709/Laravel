@extends('admin.layout.master')

@section('title', 'Quản lý danh mục')

@section('content-title', 'Quản lý danh mục')

@section('content')
    <div>
        <a href="{{ Route('admin.category.create') }}" class="btn btn-success" style="margin-bottom:20px;">Create</a>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $item)
            <tr>

                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td><img src="{{ asset($item->thumbnail) }}" alt="" width="50"></td>
                <td style="display: flex; gap:10px;">

                    <form action="{{ Route('admin.category.delete', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Xóa</button>
                    </form>
                    <div>
                        <a href="{{ Route('admin.category.edit', $item->id) }}" class="btn btn-info">Sửa</a>
                    </div>


                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        {{ $categories->links() }}
    </div>
@endsection
