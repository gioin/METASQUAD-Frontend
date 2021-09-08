@extends('administrator.layout.main')
@section('title')
    Tournaments
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
            <a href="{{route('tournaments.create')}}" class="btn btn-primary">Add Tournament</a>
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
                    <th>Upcoming</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Game</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $tournament)
                    <tr>
                        <td>{{$tournament->upcoming ? 'Yes' : 'No'}}</td>
                        <td>{{$tournament->title}}</td>
                        <td align="center"><img width="140px" height="100px" src="{{asset("storage/tournaments/". $tournament->image)}}" /> </td>
                        <td>{{$tournament->game->title}}</td>
                        <td>{{$tournament->price}}</td>
                        <td>{{$tournament->tournament_start_date}}</td>
                        <td> <a href="{{route('tournaments.edit', $tournament->id)}}" class="btn btn-block btn-success">Edit</a> <br>
                            <form action="{{route('tournaments.destroy', $tournament->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-block btn-danger">Delete</button>
                            </form>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Upcoming</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Game</th>
                    <th>Price</th>
                    <th>Date</th>
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
