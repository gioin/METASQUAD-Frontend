@extends('administrator.layout.main')

@section('title')
    Change Password
@endsection
@section ('content')
    <!-- Default box -->
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form class="box" action="{{route('changePassword')}}" method="post">
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
            @if ($errors->has('current-password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
            @endif
            <div class="form-group">
                <label>Current password</label>
                <input type="password" name="current-password" class="form-control" placeholder="enter your old password">
            </div>
            @if ($errors->has('new-password'))
                <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
            @endif
            <div class="form-group">
                <label>New password</label>
                <input type="password" name="new-password" class="form-control" placeholder="enter your new password">
            </div>
            <div class="form-group">
                <label>Repeat new password</label>
                <input type="password" name="new-password_confirmation" class="form-control" placeholder="repeat your new password">
            </div>
        </div>

        <!-- /.box-body -->
        <div class="box-footer">
            <input type="submit" class="btn btn-block btn-primary" value="Edit">
        </div>
    </form>

@endsection
