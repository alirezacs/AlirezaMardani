<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Portfolio\StoreRequest;
use App\Http\Requests\Portfolio\UpdateRequest;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{

    private Portfolio $model;

    public function __construct()
    {
        $this->model = new Portfolio();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $portfolios = $this->model->all();

        return view('Admin.Portfolio.index', compact('portfolios'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Admin.Portfolio.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $data = $request->only([
            'title',
            'technology',
            'link',
            'description',
            'is_active',
            'image',
        ]);

        /* Check For Image */
        if($request->hasFile('image')){
            $file = $request->file('image');
            $image = $file->store('Portfolio/Images/');
            $data['image'] = $file->hashName();
        }
        /* Check For Image */

        /* Create Portfolio */
        $portfolio = $this->model->create($data);
        /* Create Portfolio */

        return redirect()->route('portfolio.index');

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Portfolio $portfolio)
    {

        return view('Admin.Portfolio.edit', compact('portfolio'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Portfolio $portfolio)
    {

        $data = $request->only([
            'title',
            'technology',
            'link',
            'image',
            'description',
            'is_active'
        ]);

        /* Check For Image */
        if($request->hasFile('image')){

            /* Delete Old Image */
            if($portfolio->image && Storage::exists('Portfolio/Images/' . $portfolio->image)){
                Storage::delete('Portfolio/Images/' . $portfolio->image);
            }
            /* Delete Old Image */

            $file = $request->file('image');
            $image = $file->store('Portfolio/Images');
            $data['image'] = $file->hashName();

        }
        /* Check For Image */

        /* Update Portfolio */
        $res = $portfolio->update($data);
        /* Update Portfolio */

        return redirect()->route('portfolio.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Portfolio $portfolio)
    {

        /* Delete Image */
        if($portfolio->image && Storage::exists('Portfolio/Images/' . $portfolio->image)){
            Storage::delete('Portfolio/Images/' . $portfolio->image);
        }
        /* Delete Image */

        /* Delete Portfolio */
        $res = $portfolio->delete();
        /* Delete Portfolio */

        return redirect()->route('portfolio.index');

    }

    public function getImag($hash)
    {

        if(!Storage::exists('Portfolio/Images/' . $hash)){
            abort('404', 'Avatar Not Found');
        }

        $file = Storage::get('Portfolio/Images/' . $hash);
        $fileType = Storage::mimeType('Portfolio/Images/' . $hash);

        return response($file)->header('Content-Type', $fileType);

    }
}
