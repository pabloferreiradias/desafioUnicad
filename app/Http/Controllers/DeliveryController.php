<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function index()
    {
        $deliverys = Delivery::all();
        return view('delivery.index',compact('deliverys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('delivery.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $delivery = Delivery::find($id);
        return view('delivery.edit',compact('delivery','id'));
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
        $delivery= Delivery::find($id);
        $delivery->client_id = $request->get('client_id');
        $delivery->origin = $request->get('origin');
        $delivery->destiny = $request->get('destiny');
        $delivery->delivery_date = $request->get('delivery_date');
        $delivery->save();
        return redirect('delivery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $delivery = new Delivery;
        $delivery->client_id = $request->get('client_id');
        $delivery->origin = $request->get('origin');
        $delivery->destiny = $request->get('destiny');
        $delivery->delivery_date = $request->get('delivery_date');
        $delivery->save();
        
        return redirect('delivery')->with('success', 'Deliverye adicionado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delivery = Delivery::find($id);
        $delivery->delete();
        return redirect('delivery')->with('success','Information has been  deleted');
    }

    public function route($id)
    {
        $delivery = Delivery::find($id);
        $origin = $delivery->origin;
        $destiny = $delivery->destiny;
        return view('delivery.route',compact('origin','destiny'));
    }
}
