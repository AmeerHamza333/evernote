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
.nav-link{
    font-family: Kanit;
    font-size: 1.3rem;
}

.main-div{
    width: 100%;
    height: 100%;
    background-image: url('https://img.freepik.com/free-vector/flat-abstract-background-with-geometric-shapes_52683-84923.jpg?w=740&t=st=1661167785~exp=1661168385~hmac=fc19985ecfeaca15a7e0557c12b8e54b79364ccaa4b17eb65144e217b6537318');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.main-div-layer{
    width: 100%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 60px 0px 50px 0px;
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

.inneree{
  border: 0px;
width: auto;
display: flex;
justify-content: center;
align-items: center;
gap: 7px;
height: auto;
padding: 10px 30px;
box-shadow: 1px 1px 2px 2px rgba(128, 128, 128, 0.288)
}

.first{
  display: none;
}

.second{
  display: flex;
    justify-content: center;
    align-items: center;
}

@media screen and (max-width: 991px) {
    .first{
    display: flex;
    justify-content: center;
    align-items: center;
    }    
    .second{
      display: none;
    }
}


.items_main{
  width: 100%;
  display: flex ;
     justify-content: center ;
      align-items: center; 
       flex-wrap: wrap;
       flex-direction: column;
        gap: 30px;
        margin-top: 10px;
}

.buttons{
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 10px;
    margin-top: 20px;
}

.btn-div{
    width: auto;
    height: auto;
    padding: 4px 7px;
    border-radius: 50%;
    background-color: white;
    box-shadow: 1px 1px 2px 2px rgba(220, 220, 220, 0.486);
}

.btn-div:hover{
    background-color: rgba(223, 223, 223, 0.5);
    border: 1px solid rgba(0, 0, 0, 0.555);
}
.itemcard{
    text-decoration: none;
    width: 100%;
}

.itemcard:hover{
cursor: pointer;
transform: scale(1.04);
}

.card{
    border-radius: 0px;
}

.card-body{
  padding: 0px;
}

    </style>

</head>
<body style = 'background-color: black;' >

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" ><span style = 'font-family:Teko; font-size: 2.5rem; color: red; font-weight: bold'>E</span>ver<span style = 'font-family:Teko;font-weight: bold; font-size: 2.5rem; color: red '>N</span>otes</a>


<div style="display: flex; gap: 10px">
    <div class="first">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu" style="position: relative"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="display: flex; justify-content: center; align-items:center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg>
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute; left: -100px; top: 40px">  
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3" style="background-color: white; width: 100%; border: 0px; display: flex; justify-content:flex-start">
              <li><a class="dropdown-item" ><i class="fas fa-sliders-h fa-fw"></i>View Profile</a></li>
            </button>
            
            <!-- Modal -->
           
            <li><hr class="dropdown-divider"></li>
            <li><a href = "{{url('/logout')}}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-bar-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0zM4.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
            </svg> Log Out</a></li>
          
          </ul>

        </li>
     </ul>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </div>
 


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link" href = "{{url('/home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href = "{{url('/items')}} ">Items</a>
        </li>
      </ul>
      

      <form action = '/search' class="form-inline my-2 my-lg-0" style="display: flex; gap: 5px">
        <input name = 'query' class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
      
<div class="second">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu" style="position: relative"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="display: flex; justify-content: center; align-items:center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
              <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            </svg>
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="position: absolute; left: -100px; top: 40px">
           
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter3" style="background-color: white; width: 100%; border: 0px; display: flex; justify-content:flex-start">
              <li><a class="dropdown-item" ><i class="fas fa-sliders-h fa-fw"></i>View Profile</a></li>
            </button>
            
            <!-- Modal -->
           
            <li><hr class="dropdown-divider"></li>
            <li><a href = "{{url('/logout')}}" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-bar-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M11.854 3.646a.5.5 0 0 1 0 .708L8.207 8l3.647 3.646a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0zM4.5 1a.5.5 0 0 0-.5.5v13a.5.5 0 0 0 1 0v-13a.5.5 0 0 0-.5-.5z"/>
            </svg> Log Out</a></li>
          
          </ul>


        </li>
     </ul>
    </div>

    </div>
  </div>

 

</nav>


<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">View Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
<div style="width: 100%; height: auto; display: flex; flex-direction: column; justify-content:center; align-items: center; gap: 20px">
  <div> <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" style=" width: 80px; height: 80px; border-radius: 50%;"> </div>
  <h6> {{ Session::get('email') }}  </h6>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter4" data-dismiss="modal">Edit Profile</button>
      </div>
    </div>
  </div>
</div>



  <form action="{{ url('/itemsupdate' . '/' . Session::get('email')) }}" method="POST" >
    {!! csrf_field() !!}
    @method("PUT")

  <div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">        
<div style="width: 100%; height: auto; display: flex; flex-direction: column; justify-content:center; align-items: center; gap: 20px">
  <div> <img src="https://www.w3schools.com/w3images/avatar2.png" alt="Avatar" style=" width: 80px; height: 80px; border-radius: 50%;"> </div>
  <input name="regemail" type="email" value=" {{ Session::get('email') }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">  Update Changes</button>
      </div>
    </div>
  </div>
</div>
</form>





<script>
  document.querySelectorAll('.dropdown-toggle').forEach(item => {
  item.addEventListener('click', event => {
 
    if(event.target.classList.contains('dropdown-toggle') ){
      event.target.classList.toggle('toggle-change');
    }
    else if(event.target.parentElement.classList.contains('dropdown-toggle')){
      event.target.parentElement.classList.toggle('toggle-change');
    }
  })
});
</script>




@if (count($items)>0)

<div class="items_main container">
                       
    @foreach($items as $item)
    @if (mb_strlen($item->description)>300)
    <a href="{{url('/itemshow/' . $item->itemId)}}" class="itemcard" style="color: white" >
        <div class="card" style = 'max-width: 100%;  height: 100%; text-decoration:none; width: 100%; height: 100%; background-color: rgba(128, 128, 128, 0.788)'> 
          @if($item->image)
          <img style="max-height: 260px; width: 100%; object-fit: cover; object-position: center" src= "{{asset('uploads/items/'.$item->image)}}" alt="" style = 'max-height: 200px'>
                    @endif
          <div class="card-body" style="  background-color: {{$item->color}}; color: white; background-image:url('{{$item->theme}}'); background-size: cover; background-position: center; background-repeat: no-repeat">
           <div style="width: 100%; height: 100%; background-color:rgba(0, 0, 0, 0.575); padding: 16px">
            <h5 class="card-title">{{ $item->title }}</h5>
@if(mb_strlen($item->description)>300)
<p class="card-text">{{substr($item->description, 0,  300) }} ... </p>
@else
<p class="card-text">{{  substr($item->description, 0,  300) }} </p>
@endif
<div class="buttons">
    <p style="margin: 0px; color: rgb(255, 255, 255); font-weight: bold; background-color: none;">{{ $item->updated_at}}</p>
    <button type="submit" class="btn btn-danger btn-sm"  title="Delete Student"><a href="{{url('/items/' . $item->itemId)}}" style="text-decoration: none; color: white; ">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
      <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
    </svg> </a></button>
    <form method="POST" action="{{ url('/items' . '/' . $item->itemId) }}" accept-charset="UTF-8" style="display:inline">
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg></button>
    </form>
</div>
</div>
</div>
</div>
</a>


@else
<a class="itemcard" style="color: white" >
  <div class="card" style = 'max-width: 100%;  height: 100%;  text-decoration:none; width: 100%; height: 100%; background-color: rgba(128, 128, 128, 0.788)'> 
    @if($item->image)
    <img style="max-height: 160px; width: 100%; object-fit: cover; object-position: top" src= "{{asset('uploads/items/'.$item->image)}}" alt="" style = 'max-height: 200px'>
              @endif
    <div class="card-body" style="  background-color: {{$item->color}}; color: white; background-image:url('{{$item->theme}}'); background-size: cover; background-position: center; background-repeat: no-repeat">
     <div style="width: 100%; height: 100%; background-color:rgba(0, 0, 0, 0.575); padding: 16px">
      <h5 class="card-title">{{ $item->title }}</h5>
@if(mb_strlen($item->description)>300)
<p class="card-text">{{substr($item->description, 0,  300) }} ... </p>
@else
<p class="card-text">{{  substr($item->description, 0,  300) }} </p>
@endif
<div class="buttons">
<p style="margin: 0px; color: rgb(255, 255, 255); font-weight: bold; background-color: none;">{{ $item->updated_at}}</p>
<button type="submit" class="btn btn-danger btn-sm" title="Delete Student"><a href="{{url('/items/' . $item->itemId)}}" style="text-decoration: none; color: white; ">  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
<path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
</svg> </a></button>
<form method="POST" action="{{ url('/items' . '/' . $item->itemId) }}" accept-charset="UTF-8" style="display:inline">
  {{ method_field('DELETE') }}
  {{ csrf_field() }}
  <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
  </svg></button>
</form>
</div>
</div>
</div>
</div>
</a>

@endif
    @endforeach
</div>


@else
<div style="height: 80vh; width: 100%; display: flex; justify-content: center; align-items: center">
<p style="font-size: 2rem; color: white">No Item</p>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     
</body>
</html>