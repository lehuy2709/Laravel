@extends('admin.layout.master')

@section('title', 'Quản lý người dùng')

@section('content-title', 'Quản lý người dùng ')

@section('content')
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Avatar</th>
                <th>Role</th>
                <th>Status</th>

                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>

                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td><img src="{{ asset($item->avatar) }}" alt="" width="50"></td>
                    <td>
                        <form action="{{Route('admin.user.updateRole',$item->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            @if ($item->role == 1)
                                <button class="badge badge-success" style="border:none">Admin</button>
                            @else
                                <button class="badge badge-warning" style="border:none">Guest</button>
                            @endif
                        </form>
                    </td>
                    <td>
                        <form action="{{Route('admin.user.updateStatus',$item->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            @if ($item->status == 1)
                                <button class="badge badge-info" style="border:none">Active</button>
                            @else
                                <button class="badge badge-danger" style="border:none">Banned</button>
                            @endif
                        </form>
                    </td>
                    <td style="display: flex; gap:10px;">

                        <form action="{{Route('admin.user.delete',$item->id)}}" method="POST">
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
        {{ $users->links() }}
    </div>
@endsection
