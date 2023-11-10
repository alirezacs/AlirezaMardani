<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Models\Comment;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class CommentController extends Controller
{

    private Comment $model;

    public function __construct()
    {
        $this->model = new Comment();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $comments = $this->model->all();

        return view('Admin.Comment.index', compact('comments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Comment.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $data = $request->only([
            'name',
            'avatar',
            'position',
            'description',
            'is_active'
        ]);

        /* Check For Avatar */
        if($request->hasFile('avatar')){

            $file = $request->file('avatar');
            $avatar = $file->store('Avatar');
            $data['avatar'] = $file->hashName();

        }
        /* Check For Avatar */

        /* Create Comment */
        $comment = $this->model->create($data);
        /* Create Comment */

        return redirect()->route('comment.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        return view('Admin.Comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Comment $comment)
    {

        $data = $request->only([
            'name',
            'position',
            'description',
            'avatar',
            'is_active',
        ]);

        /* Check For Avatar */
        if($request->hasFile('avatar')){

            /* Delete Old Avatar */
            if($comment->avatar && Storage::exists('Avatar/' . $comment->avatar)){
                Storage::delete('Avatar/' . $comment->avatar);
            }
            /* Delete Old Avatar */

            $file = $request->file('avatar');
            $avatar = $file->store('Avatar');
            $data['avatar'] = $file->hashName();

        }
        /* Check For Avatar */

        /* Update Comment */
        $res = $comment->update($data);
        /* Update Comment */

        return redirect()->route('comment.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {

        /* Delete Avatar */
        if($comment->avatar && Storage::exists('Avatar/' . $comment->avatar)){
            Storage::delete('Avatar/' . $comment->avatar);
        }
        /* Delete Avatar */

        /* Delete Comment */
        $res = $comment->delete();
        /* Delete Comment */

        return redirect()->route('comment.index');

    }

    /**
     * @param $hash
     * @return Application|Response|\Illuminate\Contracts\Foundation\Application|ResponseFactory
     */
    public function getAvatar($hash): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory
    {
        if(!Storage::exists('Avatar/' . $hash)){
            abort('404', 'Avatar Not Found');
        }

        $file = Storage::get('Avatar/' . $hash);
        $fileType = Storage::mimeType('Avatar/' . $hash);

        return response($file)->header('Content-Type', $fileType);
    }
}
