<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&family=Kanit&family=Teko:wght@300&display=swap" rel="stylesheet">



<style>

.showitem_main{
width: 100%;
height: auto;
background-color: rgba(128, 128, 128, 0.788);
display: flex;
}

.showitem_left{
    width: 50%;
    height: auto;
}

.showitem_right{
    width: 50%;
    height: auto;
}

@media screen and (max-width: 740px) {
    .showitem_main{
flex-direction: column;
    }
    .showitem_left{
height: 400px;
width: 100%;
    }

    .showitem_right{
width: 100%;
    }
}



.showitem_main22{
width: 100%;
height: auto;
background-color: rgba(128, 128, 128, 0.788);
display: flex;
flex-direction: column;
}

.showitem_left22{
    width: 100%;
    height: 400px;
}

.showitem_right22{
    width: 100%;
    height: auto;
}




.showitem_main2{
width: 100%;
height: auto;
background-color: rgba(128, 128, 128, 0.788);
}

.showitem_right2{
width: 100%;
padding: 20px 10px 20px 10px
    }



    </style>

</head>


<body style=" background-color: {{$items->color}};  background-image:url('{{$items->theme}}'); background-size: cover; background-position: center; background-repeat: no-repeat" >

    @if($items->image && mb_strlen($items->description)>900)
<div class="showitem_main">
<div class="showitem_left" style="background-image:url('{{asset('uploads/items/'.$items->image)}}'); background-size: cover; background-position: top; background-repeat: no-repeat">
</div>
<div class="showitem_right">
    <h2 style="color: white; font-size: 2rem; margin: 20px 10px 10px 10px"> {{ $items->title }} </h2>
    <p style="color: white; margin: 20px 20px 10px 10px">{{ $items->description }}</p>
</div>
</div>

@elseif ($items->image && mb_strlen($items->description)<900)
<div class="showitem_main22">
    <div class="showitem_left22" style="background-image:url('{{asset('uploads/items/'.$items->image)}}'); background-size: cover; background-position: top; background-repeat: no-repeat">
    </div>
    <div class="showitem_right22">
        <h2 style="color: white; font-size: 2rem; margin: 20px 10px 10px 10px"> {{ $items->title }} </h2>
        <p style="color: white; margin: 20px 20px 10px 10px">{{ $items->description }}</p>
    </div>
    </div>    
@else
<div class="showitem_main2">
    <div class="showitem_right2">
        <h2 style="color: white; font-size: 2rem; margin: 20px 10px 10px 10px"> {{ $items->title }} </h2>
        <p style="color: white; margin: 20px 20px 10px 10px">{{ $items->description }}</p>
    </div>
    </div>    
@endif

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>