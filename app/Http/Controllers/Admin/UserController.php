<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{

    private User $model;

    public function __construct()
    {
        $this->model = new User();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = $this->model->all();

        return view('Admin.User.index', compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        return view('Admin.User.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $user)
    {

        $data = $request->only([
            'first_name',
            'last_name',
            'email',
            'phone',
            'avatar',
            'age',
            'address',
            'language',
            'facebook_uri',
            'twitter_uri',
            'instagram_uri',
            'biography',
        ]);

        /* Check For Avatar */
        if($request->hasFile('avatar')){

            /* Delete Old Avatar */
            if($user->avatar && Storage::exists('Avatar/' . $user->avatar)){
                Storage::delete('Avatar/' . $user->avatar);
            }
            /* Delete Old Avatar */

            $file = $request->file('avatar');
            $avatar = $file->store('Avatar/');
            $data['avatar'] = $file->hashName();

        }
        /* Check For Avatar */

        /* Update User */
        $user->update($data);
        /* Update User */

        return redirect()->route('user.index');

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
