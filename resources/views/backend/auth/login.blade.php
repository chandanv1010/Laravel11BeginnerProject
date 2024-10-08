<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/customize.css') }}">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Welcome to IN+</h2>

                <p>
                    Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                </p>

                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                </p>

                <p>
                    When an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>

                <p>
                    <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox">
                    <div class="ibox-content">
                        <form class="m-t" role="form" action="{{ route('auth.login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    class="form-control" 
                                    placeholder="Email" 
                                    name="email" 
                                    value="{{ old('email') }}"
                                >
                                @if($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <input 
                                    type="password" 
                                    class="form-control" 
                                    placeholder="Password" 
                                    name="password"
                                >
                                @if($errors->has('password'))
                                    <div class="error">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success block full-width m-b" style="margin-bottom:10px;">Login</button>
    
                            <a href="#">
                                <small>Forgot password?</small>
                            </a>
                        </form>
                        <p class="m-t">
                            <small>Laravel Admin System</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Laravel Admin System
            </div>
        </div>
    </div>

</body>

</html>
