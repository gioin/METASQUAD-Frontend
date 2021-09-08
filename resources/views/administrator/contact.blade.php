@extends('administrator.layout.main')
@section('title')
    Contact Page
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
    <form class="box" action="{{route('contact.update')}}" method="post">
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
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" name="email" class="form-control" value="{{$data->email}}">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" name="country" class="form-control" value="{{$data->country}}">
            </div>
            <div class="form-group">
                <label>State</label>
                <input type="text" name="state" class="form-control" value="{{$data->state}}">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="city" class="form-control" value="{{$data->city}}">
            </div>
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="{{$data->address}}">
            </div>
            <div class="form-group">
                <label>Address 2</label>
                <input type="text" name="address2" class="form-control" value="{{$data->address}}">
            </div>
            <div class="form-group">
                <label>Zip Code</label>
                <input type="text" name="zip" class="form-control" value="{{$data->zip}}">
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea class="form-control my-editor" name="text" rows="10" cols="80">
                        {{$data->text}}
</textarea>
            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-block btn-primary">Edit</button>
        </div>
    </form>
@endsection

@section('js')
    <script src="//cdn.tiny.cloud/1/jdn05ya8f15gcn1p4ytfnnc8gwj48oxiwlhjlr5hll053isg/tinymce/5/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: 'textarea.my-editor',
            relative_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table directionality",
                "emoticons template paste textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            file_picker_callback : function(callback, value, meta) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
                if (meta.filetype == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.openUrl({
                    url : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no",
                    onMessage: (api, message) => {
                        callback(message.content);
                    }
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endsection
