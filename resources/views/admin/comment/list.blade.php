@extends('admin.layout.master')

@section('title', 'Quản lý bình luận')

@section('content-title', 'Quản lý bình luận ')

@section('content')
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Content</th>
                <th>Email</th>
                <th>Name</th>
                <th>Name Product</th>
                <th>Comment On</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $item)
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->user_id == 0 ? 'Email đã xóa' : $item->user->email }}</td>
                    <td>{{ $item->user_id == 0 ? 'Tài khoản đã xóa' : $item->user->name }}</td>
                    <td>{{ $item->product_id == 0 ? 'Sản phẩm đã xóa' : $item->product->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td style="display: flex; gap:10px;">

                        <form action="{{Route('admin.comment.delete',$item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Xóa</button>
                        </form>

                    </td>


                </tr>
            @endforeach


        </tbody>
    </table>
    <div>
        {{ $comments->links() }}
    </div>
@endsection
