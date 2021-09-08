@extends('administrator.layout.main')
@section('title')
    Edit Coupon - {{$data->title}}
@endsection
@section ('content')
    @if($message=Session::get('success'))
        <div class="alert alert-success">
            {{$message}}
        </div>
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Default box -->
    <form class="box" action="{{route('coupons.update',$data->id)}}" method="post" enctype="multipart/form-data">
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
                <label>Game Name</label>
                <input type="text" name="title" class="form-control" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label>Coupon Code</label>
                <input type="text" name="code" value="{{$data->code}}" class="form-control">
            </div>
            <div class="form-group">
                <label>Coupon expire Date</label>
                <input type="text" placeholder="ex: 2021-02-26" value="{{$data->expireDate}}" name="expireDate" class="form-control">
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-block btn-primary">Edit</button>
        </div>
    </form>
@endsection
