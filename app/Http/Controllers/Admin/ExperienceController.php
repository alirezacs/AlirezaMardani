<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Experience\StoreRequest;
use App\Http\Requests\Experience\UpdateRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    private Experience $model;

    public function __construct()
    {
        $this->model = new Experience();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $experiences = $this->model->all();

        return view('Admin.Experience.index', compact('experiences'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Experience.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $data = $request->only([
            'at',
            'as',
            'started_at',
            'ended_at',
            'description',
            'present',
            'is_active'
        ]);

        /* Create Experience */
        $experience = $this->model->create($data);
        /* Create Experience */

        return redirect()->route('experience.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
        return view('Admin.Experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Experience $experience)
    {

        $data = $request->only([
            'as',
            'at',
            'started_at',
            'ended_at',
            'description',
            'present',
            'is_active'
        ]);

        /* Update Experience */
        $res = $experience->update($data);
        /* Update Experience */

        return redirect()->route('experience.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {

        $experience->delete();

        return redirect()->route('experience.index');

    }
}
