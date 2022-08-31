<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Kanit&family=Teko:wght@300&display=swap" rel="stylesheet">


    <style>
.main-div{
    width: 100%;
    height: 100%;
    background-image: url('https://img.freepik.com/free-vector/flat-abstract-background-with-geometric-shapes_52683-84925.jpg?w=740&t=st=1661168187~exp=1661168787~hmac=508f91443dff43750b01610aaa028ca8c68b0622b5b4832fa5e7d1fa6fa26004');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.main-div-layer{
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.789)
}

.login-box{
    background-color: white;
    border-radius: 10px;
    box-shadow: 2px 2px 3px 4px rgba(27, 26, 26, 0.344);
    padding: 50px 30px 50px 30px;
}

.login-box-inner{
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 30px
}

.signuptext{
width: 100%;
display: flex;
justify-content: center;
}

.signupbtn{
    background-color: red;
    padding: 4px 7px;
    color: white;
    font-family: Kanit;
    font-size: 0.9rem;
    text-decoration: none;
}
.signupbtn:hover{
    cursor: pointer;
}


@media screen and (max-width: 574px) {
    .login-box{
border-radius: 0px;
    }
}


    </style>

</head>
<body style="background-color:  rgba(0, 0, 0, 0.679)">

    <div class="main-div" >
        <div class="main-div-layer">
<div class="container login-box">
        <form action="{{url('/')}}/register" method="POST">
            @csrf
            <div class="login-box-inner">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{old('firstname')}}">
                    <span style="font-family: Barlow Condensed; color: red">
                        @error('firstname')
                        {{$message}}  
                        @enderror
                    </span>
                </div>

                
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{old('lastname')}}">
                    <span style="font-family: Barlow Condensed; color: red">
                        @error('lastname')
                        {{$message}}  
                        @enderror
                    </span>
                </div>
           
                <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{old('email')}}">
               

                @if (Session::has('registeredemailexist'))
                <span style="font-family: Barlow Condensed; color: red">
                    {{ Session::get('registeredemailexist') }}
                </span>
        @else
        <span style="font-family: Barlow Condensed; color: red">
            @error('email')
            {{$message}}  
            @enderror
        </span>
                @endif

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" >
                <span style="font-family: Barlow Condensed; color: red">
                    @error('password')
                    {{$message}}  
                    @enderror
                </span>
            </div>
           
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </div>
        </form>
    </div>
</div>
    </div>
    

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>