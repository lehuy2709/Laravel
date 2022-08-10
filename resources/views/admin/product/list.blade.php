@extends('admin.layout.master')

@section('title', 'Quản lý sản phẩm')

@section('content-title', 'Quản lý sản phẩm ')

@section('content')
    <div>
        <a href="{{ Route('admin.product.create') }}" class="btn btn-success" style="margin-bottom:20px;">Create</a>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Category</th>
                <th>Size</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ number_format($item->price) }}</td>
                    <td><img src="{{ asset($item->image) }}" alt="" width="50"></td>
                    <td>
                        <form action="{{ Route('admin.product.updateStatus', $item->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            @if ($item->status == 1)
                                <button class="badge badge-success" style="border:none">Active</button>
                            @else
                                <button class="badge badge-warning" style="border:none">In-Active</button>
                            @endif
                        </form>
                    </td>
                    <td>
                        {{ $item->category_id == 0 ? 'Danh Mục bị xóa' : $item->category->name }}
                    </td>
                    <td>
                        {{ $item->size_id == 0 ? 'Size bị xóa' : $item->size->name }}
                    </td>
                    <td style="display: flex; gap:10px;">

                        <form action="{{ Route('admin.product.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>
                        </form>
                        <div>
                            <a href="{{ Route('admin.product.edit', $item->id) }}" class="btn btn-info">Sửa</a>
                        </div>


                    </td>


                </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        {{ $products->links() }}
    </div>
@endsection
