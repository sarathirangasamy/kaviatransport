
@extends('admin.layout.master')
@section('content')

	<div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Add Customer</center>
                        <a href="{{ action('AdminController\CustomerController@index') }}"><button class="btn btn-info pull-right">View Customer</button></a>
                    </h4>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" method="post" action="{{ action('AdminController\CustomerController@store')}}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Customer Name</label>
                                            <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" name="name" required>
                                        </div>
                                    </div>
                                </div>
                     
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Amount</label>
                                            <input type="number" class="form-control" value="{{ old('amount') }}" placeholder="Enter Amount" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number</label>
                                            <input type="number" class="form-control" value="{{ old('mobile') }}" placeholder="Enter Mobile Number" name="mobile" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="address">Address:</label>
                                            <textarea class="form-control" id="address" name="address" rows="3" required>{{ old('address') }}</textarea>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                            <br>
                            <div align="center">
                                <button type="submit" class="btn btn-info">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

