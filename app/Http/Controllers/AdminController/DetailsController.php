<?php

namespace App\Http\Controllers\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Details;
use App\Customer;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Data['detail'] = Details::where([['admin_id',auth()->user()->id]])->get();
        return view('admin.master.details.view',$Data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Data['Customers'] = Customer::get();
        return view('admin.master.details.add',$Data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detail = new Details;
        $detail->loading_date = request('loading_date');
        $detail->truckno = request('truckno');
        $detail->weight = request('weight');
        $detail->customers_id = request('customers_id');
        $detail->frieght = request('frieght');
        $detail->tuck_frieght = request('tuck_frieght');
        $detail->loading = request('loading');
        $detail->halting = request('halting');
        $detail->comission = request('comission');
        $detail->totalfrieght = request('totalfrieght');
        $detail->advance = request('advance');
        $detail->balance = request('balance');
        $detail->remark = request('remark');
        $detail->note = request('note');
        $detail->driverno = request('driverno');
        $detail->ownerno = request('ownerno');
        $detail->trcom = request('trcom');
        $detail->profit = request('profit');
        $detail->admin_id = auth()->user()->id;
        $detail->save();
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
        //
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
    }

    public function getCustomerDetails()
    {
        return $Data['Customers'] = Customer::findorfail(request('Customer_id'));
    }
}
