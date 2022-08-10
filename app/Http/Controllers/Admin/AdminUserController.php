<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    public function index()
    {
        $users = User::select('id', 'name', 'avatar', 'role', 'status', 'role', 'email')->paginate(5);
        return view('admin.user.list', compact('users'));
    }
    public function updateStatus(User $user)
    {
        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->update(['status' => $user->status]);
        return redirect()->back()->with('success', 'Cập nhật trạng thái thành công');
    }

    public function updateRole(User $user)
    {
        if ($user->role == 1) {
            $user->role = 0;
        } else {
            $user->role = 1;
        }
        $user->update(['role' => $user->role]);
        return redirect()->back()->with('success', 'Cấp quyền thành công');
    }
    public function delete(User $user)
    {
        $Comment = Comment::where('user_id', $user->id)->get();
        $CommentId = $Comment->pluck('id');
        Comment::whereIn('id', $CommentId)->update(['user_id' => 0]);
        $user->delete();
        return redirect()->back()->with('success', 'Xóa thành công');
    }
}
