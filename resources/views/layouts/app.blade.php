<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>varapp</title>
</head>
<body>
@include('inc.navbar')
    <div class="conteiner">
    @if(Request::is('/'))
    @include('inc.showcase')
    @endif
        <div class="row">
            <div class="col-md-8 col-lg-8">


            @yield('content')

            </div>
            </div>
    </div>

    
   

 @include('inc.footer')
    
</body>
</html>