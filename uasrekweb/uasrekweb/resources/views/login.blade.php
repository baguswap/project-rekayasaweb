<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="icon" type="image/png" href="../assets/img/logo-umby2.png">
    <title>LOGIN ADMIN</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        
        <div class="col-md-4 col-md-offset-4">
            
            <br><br>
            <div class="text-center">
  <img src="../assets/img/logo-umby2.png" width="30%" text-align="center" alt="">
</div>
     
            <h3 class="text-center"><b>LOGIN SISTEM PENDAFTARAN MAHASISWA BARU</b></h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
               
            </form>
        </div>
    </div>
</body>
</html>