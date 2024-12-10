
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <div>
        <h1>Day La Header Components</h1>
        <h2>Xin Chao {{$name}}</h2>  </div>
        <br>
        <div class="fex justify-center">
          @if(Session::has('K23-CNT3_NguyenCongTung'))
              <div class="alr alr-success">
                  <p>XinChao: 
                  {{Session::get('K23-CNT3_NguyenCongTung') }}</p>
                  <a href="/ctlogout">Đăng Xuất</a>
              </div>
              @else
              <a href="/ctlogin">Login</a> 
              @endif
      </div>
</body>
</html>