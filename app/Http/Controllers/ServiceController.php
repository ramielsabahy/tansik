<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.service');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $image = $request->image;
        $title = $request->name;
        $content = $request->desc;
        $image_new_name = time() . $image->getClientOriginalName();
        $image->move('uploads/services', $image_new_name);
        // $user->profile->avatar = 'uploads/services/' . $image_new_name;
        \App\Service::create(['image' => 'uploads/services/'.$image_new_name, 'title' => $title, 'content' => $content]);
        return redirect()->back();
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function order(Request $request)
    {
        $name = $request->name;
        $phone = $request->phone;
        $address = $request->address;
        $service = $request->service;
        $details = $request->details;

        \App\ServiceOrder::create(['name' => $name, 'phone' => $phone, 'address' => $address, 'service' => $service, 'details' => $details]);
        return response()->json('done',200);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $services = \App\Service::get();
        return view('service.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = \App\Service::where('id', $id)->first();
        return view('service.edit')->with('service', $service);
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
        $service = \App\Service::find($id);
        if($request->hasFile('image')){
            $image = $request->image;
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/services', $image_new_name);
            $service->image = 'uploads/services/'.$image_new_name;
        }
        $service->title = $request->name;
        $service->content = $request->desc;
        $service->save();
        return redirect()->route('showService');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        \App\Service::where('id', $id)->delete();
        return redirect()->back();
    }

    public function deleteOrder(Request $request, $id){
        \App\ServiceOrder::where('id', $id)->delete();
        return redirect()->back();
    }
}
