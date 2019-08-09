
@extends('admin.layout.master')
@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Edit Broker</center> 
                        <a href="{{ action('AdminController\BrokerController@index') }}"><button class="btn btn-info pull-right">View Broker</button></a>
                    </h4>
                </div>
                <div class="box-body">
                     <form method="post" action="{{ action('AdminController\BrokerController@update',$brokers->id) }}">
                        {{ csrf_field() }}
                         <input name="_method" type="hidden" value="PUT">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{ $brokers->name }}" placeholder="Enter Name" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 1</label>
                                            <input type="number" class="form-control" value="{{ $brokers->mobile_number_1 }}" placeholder="Enter Mobile Number 1" name="mobile_number_1" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 2</label>
                                            <input type="number" class="form-control" value="{{ $brokers->mobile_number_2 }}" placeholder="Enter Mobile Number 2" name="mobile_number_2" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 3</label>
                                            <input type="number" class="form-control" value="{{ $brokers->mobile_number_3 }}" placeholder="Enter Mobile Number 3" name="mobile_number_3" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 4</label>
                                            <input type="number" class="form-control" value="{{ $brokers->mobile_number_4 }}" placeholder="Enter Mobile Number 4" name="mobile_number_4" required>
                                        </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="address">Address:</label>
                                                <textarea class="form-control" id="address" name="address" rows="3" required>{{ $brokers->address }}
                                             </textarea>
                                        </div>
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

