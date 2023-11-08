<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\StoreRequest;
use App\Http\Requests\Skill\UpdateRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{

    private Skill $model;

    public function __construct()
    {
        $this->model = new Skill();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $skills = $this->model->all();

        return view('Admin.Skill.index', compact('skills'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.Skill.form');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $data = $request->only([
            'name',
            'percent',
            'description',
            'is_active'
        ]);

        /* Create Skill */
        $skill = $this->model->create($data);
        /* Create Skill */

        return redirect()->route('skill.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {

        return view('Admin.Skill.edit', compact('skill'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Skill $skill)
    {

        $data = $request->only([
            'name',
            'percent',
            'is_active',
            'description'
        ]);

        /* Update Skill */
        $res = $skill->update($data);
        /* Update Skill */

        return redirect()->route('skill.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {

        $skill->delete();

        return redirect()->route('skill.index');

    }
}
