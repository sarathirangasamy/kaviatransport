@extends('admin.layout.master')


@section('content')

	<div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Add Broker</center> 
                        <a href="{{ action('AdminController\BrokerController@index') }}"><button class="btn btn-info pull-right">View Broker</button></a>
                    </h4>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" method="post" action="{{ action('AdminController\BrokerController@store')}}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Name</label>
                                            <input type="text" class="form-control" value="{{ old('name') }}" placeholder="Enter Name" name="name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 1</label>
                                            <input type="number" class="form-control" value="{{ old('mobile_number_1') }}" placeholder="Enter Mobile Number 1" name="mobile_number_1" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 2</label>
                                            <input type="number" class="form-control" value="{{ old('mobile_number_2') }}" placeholder="Enter Mobile Number 2" name="mobile_number_2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 3</label>
                                            <input type="number" class="form-control" value="{{ old('mobile_number_3') }}" placeholder="Enter Mobile Number 3" name="mobile_number_3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Mobile Number 4</label>
                                            <input type="number" class="form-control" value="{{ old('mobile_number_4') }}" placeholder="Enter Mobile Number 4" name="mobile_number_4">
                                        </div>
                                     </div>
                                 </div>
                                 <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="address">Address:</label>
                                                <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
                                        </div>
                                     </div>
                                 </div>
                            </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>State <span>*</span></label>
                                                <select class="form-control StateDataChange" name="state">
                                                @foreach($States as $state)
                                                    <option value="{{ $state->id }}">{{ $state->StateName }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                     </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>District <span>*</span></label>
                                                <select class="form-control District DistrictValue" name="district">
                                            </select>
                                        </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="address">Services</label>
                                                <textarea class="form-control" id="service" name="service" rows="3" required></textarea>
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

@section('script')

    <script type="text/javascript">
        
            $('body').on('change', '.StateDataChange', function (e) {
                e.preventDefault();
                var State_id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/getDistrict",
                    data: {State_id: State_id},
                    success: function(data) {
                        if (data != '') {
                            var DistrictDetails = '';
                            $.each(data, function (index, value) {
                                DistrictDetails += '<option value="'+value.id+'">'+value.DistrictName+'</option>';
                            });
                            $('.District').html(DistrictDetails);
                        }
                    }
                });
            });

    </script>

@endsection

