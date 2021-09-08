@extends('administrator.layout.main')
@section('title')
    Upload results
@endsection
@section ('content')
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    <!-- Default box -->
    <form class="box" action="{{route('results.update')}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
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
            <div class="form-group">
                <label>Game</label>
                <select name="game_id" class="form-control">
                    @foreach($games as $game)
                        <option value="{{$game->id}}">{{$game->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Upload an Excel File</label>
                <input type="file" name="file" class="form-control">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-block btn-primary">Upload/Import</button>
        </div>
    </form>
@endsection
