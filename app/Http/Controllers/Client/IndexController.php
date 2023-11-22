<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Eduction;
use App\Models\Experience;
use App\Models\Portfolio;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {

        $user = User::all()->first();
        $skills = Skill::where('is_active', true)->get();
        $portfolios = Portfolio::where('is_active', true)->get();
        $experiences = Experience::where('is_active', true)->get();
        $eductions = Eduction::where('is_active', true)->get();
        $comments = Comment::where('is_active', true)->get();

        return view('Client.index', compact('user', 'skills', 'portfolios', 'experiences', 'eductions', 'comments'));
    }

}
