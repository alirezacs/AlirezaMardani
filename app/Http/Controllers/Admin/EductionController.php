<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Eduction\StoreRequest;
use App\Http\Requests\Eduction\UpdateRequest;
use App\Models\Eduction;
use Illuminate\Http\Request;

class EductionController extends Controller
{

    private Eduction $model;

    public function __construct()
    {
        $this->model = new Eduction();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $eductions = $this->model->all();

        return view('Admin.Eduction.index', compact('eductions'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Eduction.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $data = $request->only([
            'title',
            'in',
            'degree',
            'description',
            'is_active',
            'started_at',
            'ended_at'
        ]);

        /* Create Eduction */
        $eduction = $this->model->create($data);
        /* Create Eduction */

        return redirect()->route('eduction.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eduction $eduction)
    {
        return view('Admin.Eduction.edit', compact('eduction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Eduction $eduction)
    {

        $data = $request->only([
            'title',
            'in',
            'degree',
            'description',
            'is_active',
            'started_at',
            'ended_at'
        ]);

        /* Update Eduction */
        $res = $eduction->update($data);
        /* Update Eduction */

        return redirect()->route('eduction.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eduction $eduction)
    {
        $eduction->delete();
        return redirect()->route('eduction.index');
    }
}
