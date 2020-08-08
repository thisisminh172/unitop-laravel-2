<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h1>Đăng ký</h1>
        {!! Form::open(['url'=>'user/store','method'=>'POST']) !!}
        <div class="form-group">
            {!! Form::label('username', 'Tên đăng nhập') !!}
            {!! Form::text('username', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Mật khẩu') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('city', 'Thành phố') !!}
            {!! Form::select('city', [0=>'Chọn',1=>'Hà Nội',2=>'Tp.HCM',3=>'Đà Nẵng'], 1,
            ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('gender', 'Giới tính') !!}
            <div class="form-check">
                {!! Form::radio('gender', 'male', '', ['class'=>'form-check-input','id'=>'male']) !!}
                {!! Form::label('male', 'Nam', ['class'=>'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::radio('gender', 'female', 'checked', ['class'=>'form-check-input','id'=>'female']) !!}
                {!! Form::label('female', 'Nữ', ['class'=>'form-check-label']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('skills', 'Kỹ năng') !!}
            <div class="form-check">
                {!! Form::checkbox('skills', 'html', '', ['class'=>'form-check-input','id'=>'html']) !!}
                {!! Form::label('html', 'Html', ['class'=>'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'css', '', ['class'=>'form-check-input','id'=>'css']) !!}
                {!! Form::label('css', 'CSS', ['class'=>'form-check-label']) !!}
            </div>
            <div class="form-check">
                {!! Form::checkbox('skills', 'php', '', ['class'=>'form-check-input','id'=>'php']) !!}
                {!! Form::label('php', 'PHP', ['class'=>'form-check-label']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::label('birth', 'Ngày sinh') !!}
            {!! Form::date('birth', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('intro', 'Giới thiệu bản thân') !!}
            {!! Form::textarea('intro', '', ['class'=>'form-control','id'=>'intro']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Đăng ký', ['name'=>'sm-reg','class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>

</body>

</html>