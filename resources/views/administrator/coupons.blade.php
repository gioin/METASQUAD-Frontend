@extends('administrator.layout.main')
@section('title')
    Coupons
@endsection
@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('administrator/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection
@section ('content')
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <div class="box">
        <div class="box-header with-border">
            <a href="{{route('coupons.create')}}" class="btn btn-primary">Add Coupon</a>
        </div>
        <div class="box-header with-border">
            <h3 class="box-title"></h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Coupon Code</th>
                    <th>expireDate</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $coupon)
                    <tr>
                        <td>{{$coupon->title}}</td>
                        <td align="center">{{$coupon->code}}</td>
                        <td align="center">{{$coupon->expireDate}}</td>
                        <td> <a href="{{route('coupons.edit', $coupon->id)}}" class="btn btn-block btn-success">Edit</a> <br>
                            <form action="{{route('coupons.destroy', $coupon->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-block btn-danger">Delete</button>
                            </form>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Coupon Code</th>
                    <th>expireDate</th>
                    <th>Manage</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('js')
    <!-- DataTables -->
    <script src="{{asset('administrator/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('administrator/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

    <!-- page script -->
    <script>
        $(function () {
            $('#example1').DataTable({
                "order": [[ 0, "desc" ]],
                'paging'      : true,
                'lengthChange': false,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false,
                "pageLength"  : 50
            });
        })
    </script>
@endsection
