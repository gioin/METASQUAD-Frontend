@extends('administrator.layout.main')
@section('title')
    Games
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
            <a href="{{route('games.create')}}" class="btn btn-primary">Add Game</a>
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
                    <th>Image</th>
                    <th>Manage</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $game)
                    <tr>
                        <td>{{$game->title}}</td>
                        <td align="center"><img width="140px" height="100px" src="{{asset("storage/games/". $game->image)}}" /> </td>
                        <td> <a href="{{route('games.edit', $game->id)}}" class="btn btn-block btn-success">Edit</a> <br>
                            <form action="{{route('games.destroy', $game->id)}}" method="post">
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
                    <th>Image</th>
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
