@extends('administrator.layout.main')
@section('title')
    Add New Tournament
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
    <form class="box" action="{{route('tournaments.store')}}" method="post" enctype="multipart/form-data">
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
                <label>UPCOMING Tournament?<span style="font-size: 10px;">(Click, if this event is upcoming)</span> <input type="checkbox" name="upcoming" value="1" style="width: 60px;cursor: pointer"></label>
            </div>
            <div class="form-group">
                <label>UPCOMING text(Description)</label>
                <input type="text" name="upcoming_text" class="form-control" value="UPCOMING">
            </div>
            <div class="form-group">
                <label>Tournament Name</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Text</label>
                <textarea class="form-control my-editor" name="text" rows="10" cols="80">
</textarea>
            </div>
            <div class="form-group">
                <label>Game</label>
                <select name="game_id" class="form-control">
                    @foreach($games as $game)
                    <option value="{{$game->id}}">{{$game->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control">
            </div>
            <div class="form-group">
                <label>Prize</label>
                <input type="text" name="prize" class="form-control">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
                <label>Divisions</label>
                <input type="text" name="division" class="form-control">
            </div>
            <div class="form-group">
                <label>Tournament start date</label>
                <input type="text" name="tournament_start_date" placeholder="ex. 2021-02-11" class="form-control">
            </div>
            <div class="form-group">
                <label>Tournament start time</label>
                <input type="text" name="tournament_start_time" placeholder="ex. 11:05" class="form-control">
            </div>
            <div class="form-group">
                <label>Tournament end date</label>
                <input type="text" name="tournament_end_date" placeholder="ex. 2021-02-15" class="form-control">
            </div>
            <div class="form-group">
                <label>Tournament end time</label>
                <input type="text" name="tournament_end_time" placeholder="ex. 11:05" class="form-control">
            </div>
            <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="closed">Closed</option>
                    <option value="active">Active</option>
                </select>
            </div>
            <label for="main_image">Logo</label>
            <input type="file" name="logo" id="logo" accept="image/*">
            <p class="help-block">The required format: jpg,jpeg,png,gif,svg;</p>

            <label for="main_image">Image</label>
            <input type="file" name="image" id="main_image" accept="image/*">
            <p class="help-block">The required format: jpg,jpeg,png,gif,svg;</p>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-block btn-primary">Add</button>
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
