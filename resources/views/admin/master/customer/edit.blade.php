@extends('admin.layout.master')

@section('content')

	<div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Edit Customer</center>
                    </h4>
                </div>
                <div class="box-body">
                   <form method="post" action="{{ action('AdminController\CustomerController@update',$customers->id) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="PUT">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Customer Name</label>
                                            <input type="text" class="form-control" value="{{ $customers->name }}" placeholder="Enter Name" name="name" required>
                                        </div>
                                    </div>
                                </div>
                           
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Amount</label>
                                            <input type="number" class="form-control" value="{{ $customers->amount }}" placeholder="Enter Amount" name="amount" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number</label>
                                            <input type="text" class="form-control" value="{{ $customers->mobile }}" placeholder="Enter Mobile Number" name="mobile" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="address">Address:</label>
                                            <textarea class="form-control" id="address" name="address" rows="3" required>{{ $customers->address }}</textarea>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                            <br>
                            <div align="center">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

