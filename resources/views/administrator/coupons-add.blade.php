@extends('administrator.layout.main')
@section('title')
    Add new Coupon
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
    <form class="box" action="{{route('coupons.store')}}" method="post" enctype="multipart/form-data">
        @method('POST')
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
                <label>Coupon Name</label>
                <label>
                    <input type="text" name="title" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label>Coupon Code</label>
                <label>
                    <input type="text" id="code" name="code" class="form-control">
                </label>
                <a onclick="setCode()" style="cursor: pointer">Generate Code</a>
            </div>
            <div class="form-group">
                <label>Coupon expire Date</label>
                <label>
                    <input type="date" placeholder="ex: 2021-02-26" name="expireDate" class="form-control">
                </label>
            </div>
            <div class="form-group">
                <label>Amount</label>
                <label>
                    <input type="text" name="amount" class="form-control">
                </label>
            </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-block btn-primary">Add</button>
        </div>
    </form>
@endsection
