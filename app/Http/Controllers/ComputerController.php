<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\SparePart;
use Illuminate\Support\Str;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('listComputer', ['computer' => Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('buildComputer', ['sparepart' => SparePart::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => "required",
            'chassis' => "required",
            'motherboard' => "required",
            'cpu' => "required",
            'gpu' => "required",
            'ram' => "required",
            'storage' => "required",
            'os' => "required",
            'power' => "required"
        ]);

        $total_price = SparePart::where('name', $request->chassis)->first()->price +
        SparePart::where('name', $request->motherboard)->first()->price + 
        SparePart::where('name', $request->cpu)->first()->price + 
        SparePart::where('name', $request->gpu)->first()->price + 
        SparePart::where('name', $request->ram)->first()->price + 
        SparePart::where('name', $request->storage)->first()->price + 
        SparePart::where('name', $request->power)->first()->price;

        $new_computer = Computer::create([
            'id' => Str::upper(Str::substr($request->name, 0, 5)),
            'name' => $request->name,
            'chassis' => SparePart::where('name', $request->chassis)->first()->id,
            'motherboard' => SparePart::where('name', $request->motherboard)->first()->id,
            'cpu' => SparePart::where('name', $request->cpu)->first()->id,
            'gpu' => SparePart::where('name', $request->gpu)->first()->id,
            'ram' => SparePart::where('name', $request->ram)->first()->id,
            'storage' => SparePart::where('name', $request->storage)->first()->id,
            'os' => $request->os,
            'power' => SparePart::where('name', $request->power)->first()->id,
            'total_price' => $total_price
            
        ]);

        return view ('computerSummary', [
            'computer' => $new_computer
        ]);

        
        
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
        return view('showComputer', ['computer' => Computer::where('id', $id)->first()]);
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
        $computer = Computer::findOrFail($id);

        return view('editComputer', [
            'computer'=>Computer::findOrFail($id),
            'sparepart' => SparePart::all()
        ]);
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
            'name' => "required",
            'chassis' => "required",
            'motherboard' => "required",
            'cpu' => "required",
            'gpu' => "required",
            'ram' => "required",
            'storage' => "required",
            'os' => "required",
            'power' => "required"
        ]);

        $computer = Computer::findOrFail($id);
        $temp_price = $computer->total_price;

        if($request->name != $computer->name){
            $computer->update(['name' => $request->name]);
        }

        if($request->chassis != $computer->chassis){
            $computer->update(['chassis' => SparePart::where('name', $request->chassis)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->chassis)->first()->price;
            
            $temp_id = SparePart::where('name', $request->chassis)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
            
        }

        if($request->motherboard != $computer->motherboard){
            $computer->update(['motherboard' => SparePart::where('name', $request->motherboard)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->motherboard)->first()->price;

            $temp_id = SparePart::where('name', $request->motherboard)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
        }

        if($request->cpu != $computer->cpu){
            $computer->update(['cpu' => SparePart::where('name', $request->cpu)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->cpu)->first()->price;

            $temp_id = SparePart::where('name', $request->cpu)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
        }

        if($request->gpu != $computer->gpu){
            $computer->update(['gpu' => SparePart::where('name', $request->gpu)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->gpu)->first()->price;

            $temp_id = SparePart::where('name', $request->gpu)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
        }

        if($request->ram != $computer->ram){
            $computer->update(['ram' => SparePart::where('name', $request->ram)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->ram)->first()->price;

            $temp_id = SparePart::where('name', $request->ram)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
        }

        if($request->storage != $computer->storage){
            $computer->update(['storage' => SparePart::where('name', $request->storage)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->storage)->first()->price;

            $temp_id = SparePart::where('name', $request->storage)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
        }

        if($request->os != $computer->os){
            $computer->update(['os' => $request->os]);
        }

        if($request->power != $computer->power){
            $computer->update(['power' => SparePart::where('name', $request->power)->first()->id]);
            $temp_price = $temp_price+SparePart::where('name', $request->power)->first()->price;

            $temp_id = SparePart::where('name', $request->power)->first()->id;
            $stock = SparePart::findOrFail($temp_id)->stock;
            $stock = $stock-1;

            $replace_stock = SparePart::findOrFail($temp_id);
            $replace_stock->update(['stock' => $stock]);
        }

        if($temp_price != $request->total_price){
            $computer->update(['total_price' => $temp_price]);
        }

        return view ('editComputerSummary', [
            'computer' => Computer::where('id', $computer->id)->first()
        ]);

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
        $computer = Computer::findOrFail($id);
        $computer->delete();
        return redirect(route('computer.index'));
    }
}
