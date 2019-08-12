<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\broker; 
use App\States; 

class BrokerController extends Controller
{
    /**
     * Display a listing of the resource.   
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $Data['Brokers'] = broker::get();
        return view('admin.master.broker.view',$Data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        $States = States::get();
        return view('admin.master.broker.add',compact('States'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return request()->all();
        $broker = new broker;
        $broker->name = request('name');
        $broker->mobile_number_1 = request('mobile_number_1');
        $broker->mobile_number_2 = request('mobile_number_2');
        $broker->mobile_number_3 = request('mobile_number_3');
        $broker->mobile_number_4 = request('mobile_number_4');
        $broker->address = request('address');
        $broker->state = request('state');
        $broker->district = request('district');
        $broker->service = request('service');
        // $broker->address = request('districts');
        // $broker->address = request('states');
        // $broker->admin_id = auth()->user()->id;
        $broker->save();
        return back();
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Data['brokers'] = broker::findorfail($id);
        return view('admin.master.broker.edit',$Data);
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
        $broker = broker::findorfail($id);
        $broker->name = request('name');  
        $broker->mobile_number_1 = request('mobile_number_1');
        $broker->mobile_number_2 = request('mobile_number_2');
        $broker->mobile_number_3 = request('mobile_number_3');
        $broker->mobile_number_4 = request('mobile_number_4');
        $broker->address = request('address');
        $broker->state = request('state');
        $broker->district = request('district');
        $broker->service = request('service');
        $broker->save();
       return redirect(action('AdminController\BrokerController@index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         broker::findorfail($id)->delete();
        return back();
    }
}
