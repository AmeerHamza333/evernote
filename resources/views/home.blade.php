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

.main-section{
    width: 100%;
    height: auto;
    display: flex;
}



.inner-left{
    width: 50%;
    height: auto;
    padding: 60px 40px 30px 40px;  
}

.inner-left h2{
    font-family: Teko;
    font-size: 1.7rem;
    color: white;
}

.inner-left p{
    font-family: Barlow Condensed;
    font-size: 1rem;
    color: white;
}

.inner-right{
width: 50%;
height: auto;
background-image: url('https://img.freepik.com/free-vector/manager-prioritizing-tasks-list_74855-5272.jpg?w=740&t=st=1661161134~exp=1661161734~hmac=f5067419d550089582e89a84590d48735c22149c56293606f5f2b3afd6ef8556');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
animation-name: notes;
  animation-duration: 8s;
  animation-iteration-count: infinite;
}

@keyframes notes {
  0%   {
background-image: url('https://img.freepik.com/free-vector/manager-prioritizing-tasks-list_74855-5272.jpg?w=740&t=st=1661161134~exp=1661161734~hmac=f5067419d550089582e89a84590d48735c22149c56293606f5f2b3afd6ef8556');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
  20%  {
background-image: url('https://img.freepik.com/free-vector/diary-concept-illustration_114360-3755.jpg?w=740&t=st=1661162155~exp=1661162755~hmac=35dcb1ecc89648f6fba7ef8b4c4bb32c950e9ae179d6af0e226224a1eda3cd71');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
  40%  {
background-image: url('https://img.freepik.com/free-vector/hands-character-writing-letter-desk-with-papers-pencil-envelopes-coffee-cup_74855-10720.jpg?w=740&t=st=1661162330~exp=1661162930~hmac=98057516eee1b9ccc12a7fd50830d078ea3aed8266d88ca56f3ef39ce983eb3e');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }
  60% {
background-image: url('https://img.freepik.com/free-vector/diary-concept-illustration_114360-4158.jpg?w=740&t=st=1661162357~exp=1661162957~hmac=de6ac82db23b9ea80ae777aa9a89f7486bd16f5b3882bc6d781446357129053f');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }

  80% {
background-image: url('https://img.freepik.com/free-vector/notes-concept-illustration_114360-4349.jpg?w=740&t=st=1661162737~exp=1661163337~hmac=68d51ea0feed9c299b7f3eeb4325ac422b0aea83a06aef917bf9cf2ab9b3ed0a');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }

  100% {
background-image: url('https://img.freepik.com/free-vector/manager-prioritizing-tasks-list_74855-5272.jpg?w=740&t=st=1661161134~exp=1661161734~hmac=f5067419d550089582e89a84590d48735c22149c56293606f5f2b3afd6ef8556');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }
}

.inner-right-div{
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.802);
}


.inner-right2{
width: 50%;
height: auto;
background-image: url('https://img.freepik.com/free-vector/manager-prioritizing-tasks-list_74855-5272.jpg?w=740&t=st=1661161134~exp=1661161734~hmac=f5067419d550089582e89a84590d48735c22149c56293606f5f2b3afd6ef8556');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
animation-name: notes2;
  animation-duration: 8s;
  animation-iteration-count: infinite;
  display: none;
 
}

@keyframes notes2 {
  0%   {
background-image: url('https://img.freepik.com/free-vector/manager-prioritizing-tasks-list_74855-5272.jpg?w=740&t=st=1661161134~exp=1661161734~hmac=f5067419d550089582e89a84590d48735c22149c56293606f5f2b3afd6ef8556');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
  20%  {
background-image: url('https://img.freepik.com/free-vector/diary-concept-illustration_114360-3755.jpg?w=740&t=st=1661162155~exp=1661162755~hmac=35dcb1ecc89648f6fba7ef8b4c4bb32c950e9ae179d6af0e226224a1eda3cd71');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
  40%  {
background-image: url('https://img.freepik.com/free-vector/hands-character-writing-letter-desk-with-papers-pencil-envelopes-coffee-cup_74855-10720.jpg?w=740&t=st=1661162330~exp=1661162930~hmac=98057516eee1b9ccc12a7fd50830d078ea3aed8266d88ca56f3ef39ce983eb3e');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }
  60% {
background-image: url('https://img.freepik.com/free-vector/diary-concept-illustration_114360-4158.jpg?w=740&t=st=1661162357~exp=1661162957~hmac=de6ac82db23b9ea80ae777aa9a89f7486bd16f5b3882bc6d781446357129053f');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }

  80% {
background-image: url('https://img.freepik.com/free-vector/notes-concept-illustration_114360-4349.jpg?w=740&t=st=1661162737~exp=1661163337~hmac=68d51ea0feed9c299b7f3eeb4325ac422b0aea83a06aef917bf9cf2ab9b3ed0a');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }

  100% {
background-image: url('https://img.freepik.com/free-vector/manager-prioritizing-tasks-list_74855-5272.jpg?w=740&t=st=1661161134~exp=1661161734~hmac=f5067419d550089582e89a84590d48735c22149c56293606f5f2b3afd6ef8556');
background-size: cover;
background-position: center;
background-repeat: no-repeat;
  }
}

.inner-right-div2{
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.708);
}




@media screen and (max-width: 700px) {
    .main-section{
    flex-direction: column;
    }

    .inner-left{
        width: 100%;
        padding: 20px 10px 20px 10px;  
    }

    .inner-right2{
    width: 100%;
    height: 50vh;
display: block;
}

.inner-right{
    display: none;
}


}

    </style>

</head>
<body style = 'background-color: black'>
    
<!-- NAVBAR START -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
    <a class="navbar-brand" ><span style = 'font-family:Teko; font-size: 2.5rem; color: red; font-weight: bold'>E</span>ver<span style = 'font-family:Teko;font-weight: bold; font-size: 2.5rem; color: red '>N</span>otes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
       
       
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-primary" type="submit">  <a href = "{{url('/login')}} " style="text-decoration: none; color: white"> REGISTER </a> </button>
      </form>
    </div>
  </div>
</nav>

<!-- NAVBAR END -->


<div class="main-section">
    
    <div class="inner-right2">
        <div class="inner-right-div2"></div>
    </div>

<div class="inner-left">
    <h2>Welcome to EverNotes</h2>
    <p>EverNotes is one of those unrevealed tools that nobody seems to know about. If you’re looking for an essential GoogleNotes alternative, EverNote is the one tool that you can start working on. You need to just login and use it for free.</p>
    <p>EverNotes is a notes saving application in which you can save your things every time. This application provides you security and safety of your things. In this application you can save your things in a sequence. You can set the reminder. You can view your all records anywhere and anytime through your login. We provide you the facility of searching. We can Grab the text from an image and quickly find that note again just through a simple search.  </p>
    <p>Our Application is user friendly. Anyone can easy to understand and use. We can Capture, edit, share and collaborate on the notes using any device, from anywhere. We can Add notes, lists, photos, and audio to Keep.</p>
    <p>Sometimes multiple shopping before a holiday tour can be hectic. Before you forget to buy yourself the comfortable footwear from your favourite store, add a location-based reminder to your shopping list before you reach your destination.</p>
    <button type="button" class="btn btn-primary"><a href = "{{url('/login')}} " style="text-decoration: none; color: white"> Get Started</a></button>

</div>

<div class="inner-right">
    <div class="inner-right-div"></div>
</div>


</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>