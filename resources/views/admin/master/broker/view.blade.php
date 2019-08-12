 @extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>View Broker</center>
                        <a href="{{ action('AdminController\BrokerController@create') }}"><button class="btn btn-info pull-right">Add Broker</button></a>
                    </h4>
                </div>
               
                <div class="box-body">
                    <div class="table-responsive">
                        @if(!$Brokers->isEmpty())
                            <table class="table table-bordered table-striped DataTable table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile Number 1</th>
                                        <th>Mobile Number 2</th>
                                        <th>Mobile Number 3 Number</th>
                                        <th>Mobile Number 4</th>
                                        <th>Address</th>
                                        <th>State</th>
                                        <th>District</th>
                                        <th>Service</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Brokers as $broker)
                                        <tr>
                                            <td>{{ $broker->name }}</td>
                                            <td>{{ $broker->mobile_number_1 }}</td>
                                            <td>{{ $broker->mobile_number_2 }}</td>
                                            <td>{{ $broker->mobile_number_3 }}</td>
                                            <td>{{ $broker->mobile_number_4 }}</td>
                                            <td>{{ $broker->address }}</td>
                                            <td>{{ $broker->state }}</td>
                                            <td>{{ $broker->district }}</td>
                                            <td>{{ $broker->service }}</td>
                                            <td>
                                                <form method="POST" enctype="multipart/form-data" action="{{ action('AdminController\BrokerController@destroy',$broker->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">    
                                                    <a href="{{ action('AdminController\BrokerController@edit',$broker->id) }}"><i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-danger"><i class="fa fa-trash" style="color: white;" onclick="return confirm('Are you sure you want to delete this item?');"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <blockquote><p>No Broker till now added!!</p></blockquote>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection