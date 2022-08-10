@extends('admin.layout.master')

@section('title', 'Quản lý Size')

@section('content-title', 'Quản lý Size')

@section('content')
    <div>
        <a href="{{ Route('admin.size.create') }}" class="btn btn-success" style="margin-bottom:20px;">Create</a>
    </div>
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sizes as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td style="display: flex; gap:10px;">

                        <form action="{{Route('admin.size.delete',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>
                        </form>
                        <div>
                            <a href="{{Route('admin.size.edit',$item->id)}}" class="btn btn-info">Sửa</a>
                        </div>


                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <div>
        {{ $sizes->links() }}
    </div>
@endsection
