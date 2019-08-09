 @extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Details</center>
                        <a href="{{ action('AdminController\DetailsController@create') }}"><button class="btn btn-info pull-right">Add Details</button></a>
                    </h4>
                </div>
                 <div class="box-body">
                    <div class="table-responsive">
                        @if(!empty($detail))
                            <table class="table table-bordered table-striped DataTable table-hover">
                                <thead>
                                    <tr>
                                        <th>Loading Date</th>
                                        <th>Truck No</th>
                                        <!-- <th>Weight </th> -->
                                        <th>From </th>
                                        <!-- <th>Frieght </th> -->
                                        <!-- <th>Tuck Frieght </th> -->
                                        <th>Loading </th>
                                        <!-- <th>Halting </th> -->
                                        <th>Comission</th>
                                        <!-- <th>otal Frieght</th> -->
                                        <th>Advance 80%</th>
                                        <th>Balance</th>
                                        <!-- <th>Remark</th> -->
                                        <!-- <th>Note</th> -->
                                        <!-- <th>Driver No</th> -->
                                        <!-- <th>Owner No</th> -->
                                        <!-- <th>Tr.Com</th> -->
                                        <th>Profit</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($detail as $details)
                                        <tr>
                                            <td>{{ $details->loading_date }}</td>
                                            <td>{{ $details->truckno }}</td>
                                            <!-- <td>{{ $details->weight }}</td> -->
                                            <td>{{ $details->CustomerDetails->name }}</td>
                                            <!-- <td>{{ $details->frieght }}</td> -->
                                            <!-- <td>{{ $details->tuck_frieght }}</td> -->
                                            <td>{{ $details->loading }}</td>
                                            <!-- <td>{{ $details->halting }}</td> -->
                                            <td>{{ $details->comission }}</td>
                                            <!-- <td>{{ $details->totalfrieght }}</td> -->
                                            <td>{{ $details->advance }}</td>
                                            <td>{{ $details->balance }}</td>
                                            <!-- <td>{{ $details->remark }}</td> -->
                                            <!-- <td>{{ $details->note }}</td> -->
                                            <!-- <td>{{ $details->driverno }}</td> -->
                                            <!-- <td>{{ $details->ownerno }}</td> -->
                                            <!-- <td>{{ $details->trcom }}</td> -->
                                            <td>{{ $details->profit }}</td>
                                            <td> 









                                               
                                                <form  method="POST" enctype="multipart/form-data" action="{{ action('AdminController\DetailsController@destroy',$details->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ action('AdminController\DetailsController@edit',$details->id) }}"> <i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <blockquote><p>No Customer till now added!!</p></blockquote>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection