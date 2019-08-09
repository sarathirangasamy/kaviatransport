 @extends('admin.layout.master')

@section('content')

    <div class="row">
        <div class="col-xs-12">
            <div class="box box-info">
                <div class="box-header">
                    <h4>
                        <center>Customers</center>
                        <a href="{{ action('AdminController\CustomerController@create') }}"><button class="btn btn-info pull-right">Add Customer</button></a>
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        @if(!empty($Customers))
                            <table class="table table-bordered table-striped DataTable table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Mobile Number</th>
                                        <th>Address</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($Customers as $Customer)
                                        <tr>
                                            <td>{{ $Customer->name }}</td>
                                            <td>{{ $Customer->mobile }}</td>
                                            <td>{{ $Customer->address }}</td>
                                            <td>{{ $Customer->amount }}</td>
                                            <td>    
                                                <form  method="POST" enctype="multipart/form-data" action="{{ action('AdminController\CustomerController@destroy',$Customer->id) }}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ action('AdminController\CustomerController@edit',$Customer->id) }}"> <i class="fa fa-pencil"></i></a>
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