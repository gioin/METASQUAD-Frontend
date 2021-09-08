@extends('administrator.layout.main')
@section('title')
    Tickets
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('administrator/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section ('content')
    <div class="box">
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
                    <th>ID</th>
                    <th>Game</th>
                    <th>Tournament</th>
                    <th>User</th>
                    <th>Ticket count</th>
                    <th>Single Ticket Price</th>
                    <th>Total Price</th>
                    <th>Transaction Id</th>
                    <th>Payer Id</th>
                    <th>Payment Status</th>
                    <th>Payment Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $ticket)
                    <tr>
                        <td>{{$ticket->id}}</td>
                        <td>{{$ticket->gameName}}</td>
                        <td>{{$ticket->tournamentName}}</td>
                        <td>{{$ticket->userName}}</td>
                        <td>{{$ticket->ticket_count}}</td>
                        <td>{{$ticket->single_ticket_price}}</td>
                        <td>{{$ticket->total_price}}</td>
                        <td>{{$ticket->transaction_id}}</td>
                        <td>{{$ticket->payer_id}}</td>
                        <td>{{$ticket->payment_status}}</td>
                        <td>{{$ticket->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Game</th>
                    <th>Tournament</th>
                    <th>User</th>
                    <th>Ticket count</th>
                    <th>Single Ticket Price</th>
                    <th>Total Price</th>
                    <th>Transaction Id</th>
                    <th>Payer Id</th>
                    <th>Payment Status</th>
                    <th>Payment Date</th>
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
