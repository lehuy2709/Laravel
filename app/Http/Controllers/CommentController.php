<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    //
    public function postComment($prodId, CommentRequest $request)
    {
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['product_id'] = $prodId;

        Comment::create($data);

        return redirect()->back()->with('success', 'Cảm ơn bạn đã bình luận');
    }
    public function index()
    {
        $comments = Comment::select('id', 'content', 'created_at', 'user_id', 'product_id')
            ->with(['user', 'product'])
            ->orderBy('created_at','DESC')
            ->paginate(7);
        return view('admin.comment.list', compact('comments'));
    }
    public function delete(Comment $comment){
        $comment->delete();
        return redirect()->back()->with('success','Xóa thành công');
    }
}
