<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Log Masuk</title>
</head>
<body>
    <div id="card">
      <div id="card-content">
        <div id="card-title">
          <h2>LOG MASUK</h2>
          <div class="underline-title"></div>
        </div>
        <form action="{{ route('login')}}" method="POST" class="form">
            @csrf
          <label for="user-email" style="padding-top:13px">
              &nbsp;Nama Pengguna
            </label>
          <input id="user-email" class="form-content" name="Username" required />
          <div class="form-border"></div><br>
          <label for="user-password" style="padding-top:22px">&nbsp;Kata Laluan
            </label>
          <input id="user-password" class="form-content" type="password" name="password" required />
          <div class="form-border"></div>
          <a href="#">
            <legend id="forgot-pass"></legend>
          </a>
          <input id="submit-btn" type="submit" name="submit" value="LOGIN" />
          <a href="#" id="signup"></a>
        </form>
      </div>
    </div>
  </body>
</html>