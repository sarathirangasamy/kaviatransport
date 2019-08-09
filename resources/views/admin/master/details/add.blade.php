@extends('admin.layout.master')


@section('content')

	<div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Add Detail</center> 
                        <a href="{{ action('AdminController\DetailsController@index') }}"><button class="btn btn-info pull-right">View Detail</button></a>
                    </h4>
                </div>
                <div class="box-body">
                    <form class="form-horizontal" method="post" action="{{ action('AdminController\DetailsController@store')}}">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Loading Date</label>
                                            <input type="date" class="form-control" name="loading_date" value="{{ old('loading_date') }}" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Truck No</label>
                                            <input type="text" class="form-control" value="{{ old('truckno') }}" placeholder="Enter truckno" name="truckno"  required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Weight-</label>
                                            <input type="number" class="form-control CalculateValue weight" value="{{ old('weight') }}" placeholder="Enter Weight" name="weight">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Customer</label>
                                            <select class="form-control Customer CalculateValue" name="customers_id">
                                            <option selected disabled>Please Select Customer</option>
                                                @foreach($Customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Frieght</label>
                                            <input type="number" class="form-control CalculateTotalFrightValue frieght" value="{{ old('frieght') }}" placeholder="Enter Frieght" name="frieght">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Tuck Frieght</label>
                                            <input type="number" class="form-control CalculateTotalFrightValue TuckFrieght" value="{{ old('tuck_frieght') }}" placeholder="Enter Tuck Frieght" name="tuck_frieght">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Loading</label>
                                            <input type="number" class="form-control CalculateTotalFrightValue Loading" value="{{ old('loading') }}" placeholder="Enter Loading" name="loading">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Halting</label>
                                            <input type="number" class="form-control CalculateTotalFrightValue Halting" value="{{ old('halting') }}" placeholder="Enter Halting" name="halting">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Comission</label>
                                            <input type="number" class="form-control" value="{{ old('comission') }}" placeholder="Enter Comission" name="comission">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Total Frieght</label>
                                            <input type="number" class="form-control TotalFrightValue" value="{{ old('totalfrieght') }}" placeholder="Enter Total Frieght" name="totalfrieght" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Amount Type</label>
                                            <select class="form-control AdvanceType CalculateTotalFrightValue" name="AdvanceType">
                                            <option selected disabled>Please Select Advance Type</option>
                                                <option value="amount">Amount</option>
                                                <option value="percentage">Percentage %</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <div class="form-group AdvanceAmount_div">
                                        <div class="col-sm-12">
                                            <label>Advance in Amount</label>
                                            <input type="number" class="form-control AdvanceAmount CalculateTotalFrightValue" value="{{ old('advance_in_amount') }}" placeholder="Advance in Amount" name="advance_in_amount">
                                        </div>
                                    </div>
                                    <div class="form-group AdvancePercentage_div">
                                        <div class="col-sm-12">
                                            <label>Advance in Percentage</label>
                                            <input type="number" class="form-control AdvancePercentage CalculateTotalFrightValue" value="{{ old('advance_in_percentage') }}" placeholder="Enter Advance" name="advance" onkeyup="this.value = minmax(this.value, 0, 100)">
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                             <label>Balance</label>
                                            <input type="number" class="form-control BalanceAmount" value="{{ old('balance') }}" placeholder="Enter Balance" name="balance">
                                        </div>
                                     </div>
                                 </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Remark</label>
                                            <input type="number" class="form-control" value="{{ old('remark') }}" placeholder="Enter Remark" name="remark">
                                        </div>
                                     </div>
                                 </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Note</label>
                                            <input type="number" class="form-control" value="{{ old('note') }}" placeholder="Enter Note" name="note">
                                        </div>
                                     </div>
                                 </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <div class="col-sm-12">
                                            <label>Driver No</label>
                                            <input type="number" class="form-control" value="{{ old('driverno') }}" placeholder="Enter Driver Mobile No" name="driverno">
                                        </div>
                                     </div>
                                 </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <div class="col-sm-12">
                                            <label>Owner No</label>
                                            <input type="number" class="form-control" value="{{ old('ownerno') }}" placeholder="Enter Owner No" name="ownerno">
                                        </div>
                                     </div>
                                 </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>Tr.Com</label>
                                            <input type="number" class="form-control CalculateTotalFrightValue trcom" value="{{ old('trcom') }}" placeholder="Enter Tr.Com" name="trcom">
                                        </div>
                                     </div>
                                 </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                         <div class="col-sm-12">
                                            <label>Profit</label>
                                            <input type="number" class="form-control CalculateTotalFrightValue TotalProfit" value="{{ old('profit') }}" placeholder="Enter Profit" name="profit">
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

<script>

    function minmax(value, min, max) 
    {
        if(parseInt(value) < min || isNaN(parseInt(value))) 
            return min; 
        else if(parseInt(value) > max) 
            return max; 
        else return value;
    }

    $(document).ready(function(){
        var frieght = '';
        $('.CalculateValue').on('keyup change',function(){
            var weight= $('.weight').val();
            Calculation(weight);
        });
    
        $('.Customer').on('change',function(){
            var Customer_id= $('.Customer').val();
            $.ajax({
                type: "get",
                url: "/getCustomerDetails",
                data: {Customer_id: Customer_id},
                success: function(data) {
                    frieght = (data.amount);
                    $('.frieght').val(frieght * $('.weight').val());
                }
            });
        });

        function Calculation(weight){
            $('.frieght').val(frieght * weight);
        }
    });

    $(document).ready(function(){
        var BalanceAmount = '';
        $('.CalculateTotalFrightValue').on('keyup change',function(){


            $('.CalculateTotalFrightValue').each(function(){
                $('.TotalFrightValue').val((parseFloat($('.TuckFrieght').val() || 0) + (parseFloat($('.Halting').val() || 0))) - parseFloat($('.Loading').val() || 0));
                    
                if($('.AdvanceType').val() == 'amount'){
                    BalanceAmount = ((parseFloat($('.TotalFrightValue').val() || 0)) - parseFloat($('.AdvanceAmount').val() || 0)).toFixed(2);
                }else{
                    BalanceAmount = (parseFloat($('.TotalFrightValue').val())  - (parseFloat($('.AdvancePercentage').val())/ 100) * $('.TotalFrightValue').val()).toFixed(2);
                }
                $('.BalanceAmount').val(BalanceAmount);
                
                var TotalProfit = (parseFloat($('.frieght').val() || 0) - parseFloat($('.TuckFrieght').val() || 0) + parseFloat($('.Loading').val() || 0) - parseFloat($('.trcom').val() || 0)).toFixed(2);
                $('.TotalProfit').val(TotalProfit);

            });
        });
    });

$('.AdvancePercentage_div').hide();

    $(document).ready(function(){
        $('.AdvanceType').on('change',function(){
            var AdvanceType= $('.AdvanceType').val();
            if(AdvanceType == 'amount'){
                $('.AdvanceAmount_div').show();
                $('.AdvancePercentage_div').hide();
            }else{
                $('.AdvanceAmount_div').hide();
                $('.AdvancePercentage_div').show();
            }
        });
    });

</script>

@endsection




