<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SparePart;
use Illuminate\Support\Str;

class SparePartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('listSparePart', ['sparepart' => SparePart::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inputSparePart');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'model' => 'required',
            'manufacturer' => 'required',
            'type' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $name = $request->manufacturer . ' ' . $request->model;

        SparePart::create([
            'id' => Str::random(5),
            'name' => $name,
            'model' => $request->model,
            'manufacturer' => $request->manufacturer,
            'type' => $request->type,
            'price' => $request->price,
            'stock' => $request->stock
        ]);
        return redirect(route('sparepart.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('showSparePart', ['sparepart' => SparePart::where('id', $id)->first()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $sparepart = SparePart::findOrFail($id);

        return view('editSparePart', ['sparepart'=>SparePart::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'model' => 'required',
            'manufacturer' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        $name = $request->manufacturer . ' ' . $request->model;

        $sparepart = SparePart::findOrFail($id);

        $sparepart->update([
            'name' => $name,
            'model' => $request->model,
            'manufacturer' => $request->manufacturer,
            'price' => $request->price,
            'stock' => $request->stock
        ]);
        return redirect(route('sparepart.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sparepart = SparePart::findOrFail($id);
        $sparepart->delete();
        return redirect(route('sparepart.index'));
    }
}
