<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tiny.cloud/1/1jc85oh0f27pqf9x8r1nudp0heovwg7jwgsbth4hqwn10mtu/tinymce/4/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var editor_config = {
    path_absolute : "http://localhost:5000/laravel.vn/",
    selector: "textarea",
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 0.8,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>Thêm bài viết</h1>
        {{-- @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}
    {!! Form::open(['url'=>'post/store','method'=>'POST','files'=>true]) !!}
    <div class="form-group">
        {!! Form::text('title', '', ['class'=>'form-control','placeholder'=>'Tiêu đề']) !!}
        @error('title')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::textarea('content', '', ['class'=>'form-control','placeholder'=>'Nội dung']) !!}
        @error('content')
        <small class="form-text text-danger">{{$message}}</small>
        @enderror
    </div>
    <div class="form-group">
        {!! Form::file('file', ['class'=>'form-control-file']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Thêm mới', ['name'=>'sm-add','class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}
    </div>

</body>

</html>