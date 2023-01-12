<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('js/bootstrap.min.css')}}">
    <script
        src="{{url('js/jquery.min.js')}}">

    </script>

    <script src="{{url('js/bootstrap.min.js')}}"></script>

</head>
<body>
    <br>

    @if(count($errors)>0)
        @foreach($errors->all() as $error )
            <p class="alert alert-danger" > {{$error}} </p>
        @endforeach
    @endif

    <div class="col-lg-offset-f col-lg-4">
        <form action="{{url('/store')}}" method="post" id="form">

            {{csrf_field()}}
            <input type="text" name="name" class="form-control" >
            @captcha()
            <input type="submit" class="btn btn-success" >

        </form>
    </div>

<script >


    $(document).ready(function () {
        // $('#form').submit();
    })
</script>


</body>
</html>
