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

    </style>

</head>


<body style = 'background-color: black;' >


    <div class="main-div" >
        <div class="main-div-layer">
    <div class="container login-box">
        <form action="{{ url('/items' . '/' . $items->itemId) }}" method="POST" enctype="multipart/form-data">
          {!! csrf_field() !!}
          @method("PUT")
          <label for="exampleFormControlTextarea1" style="width: 100%; display: flex; justify-content: center; font-size: 2rem">Update Note</label>
            <div class="login-box-inner">
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Title</label>
            <input type="text" name = 'title' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "{{$items->title}}">
            {{-- <span style="font-family: Barlow Condensed; color: red">
              @error('title')
              Title Field is required  
              @enderror
              </span>   --}}
          </div>
           
    
    
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea name = 'description' type = 'text' class="form-control" id="exampleFormControlTextarea1" rows=5" >{{$items->description}}</textarea>
            </div>
    
            <div class="form-group" style="display: flex; gap: 10px; flex-wrap: wrap">
             {{-- <button class="inneree">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                <path d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z"/>
              </svg> 
              <p style="margin: 0px">Add Image</p>
            </button>  --}}
    
            <input type="file" name="image" id="image" class="form-control" >
    
            {{-- <input type="text" name = 'color' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <button class="inneree">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette" viewBox="0 0 16 16">
                <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
                <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z"/>
              </svg>
              <p style="margin: 0px">Background Colors</p>
            </button>   --}}
            
    
    {{-- background color modal --}}
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button> --}}
    
    
    <button type="button" class="btn btn-primary inneree" data-toggle="modal" data-target="#exampleModalCenter">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-palette" viewBox="0 0 16 16">
        <path d="M8 5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm4 3a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.5 7a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm.5 6a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
        <path d="M16 8c0 3.15-1.866 2.585-3.567 2.07C11.42 9.763 10.465 9.473 10 10c-.603.683-.475 1.819-.351 2.92C9.826 14.495 9.996 16 8 16a8 8 0 1 1 8-8zm-8 7c.611 0 .654-.171.655-.176.078-.146.124-.464.07-1.119-.014-.168-.037-.37-.061-.591-.052-.464-.112-1.005-.118-1.462-.01-.707.083-1.61.704-2.314.369-.417.845-.578 1.272-.618.404-.038.812.026 1.16.104.343.077.702.186 1.025.284l.028.008c.346.105.658.199.953.266.653.148.904.083.991.024C14.717 9.38 15 9.161 15 8a7 7 0 1 0-7 7z"/>
      </svg>
      <p style="margin: 0px">Background Colors</p>
    </button>  
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Background Color</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <select  name = 'color' class="form-select" size="6" aria-label="size 3 select example" style="display: flex; background: #009966;">
              {{-- <option selected>Open this select menu</option> --}}
              <option value="#FFFFFF" selected style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); padding: 15px 20px; margin-top: 5px">No Color</option>
              <option value="#FF0000" style="background-color: #FF0000; color: white; padding: 15px 20px; margin-top: 5px">Red </option>
              <option value="#0000FF" style="background-color: #0000FF; color: white; padding: 15px 20px; margin-top: 5px">Blue </option>
              <option value="#00008B" style="background-color: #00008B; color: white; padding: 15px 20px; margin-top: 5px">Dark Blue </option>
              <option value="#800080" style="background-color: #800080; color: white; padding: 15px 20px; margin-top: 5px">Purple </option>
              <option value="#FF00FF" style="background-color: #FF00FF; color: white; padding: 15px 20px; margin-top: 5px">Magenta</option>
              <option value="#FFA500" style="background-color: #FFA500; color: white; padding: 15px 20px; margin-top: 5px">Orange</option>
              <option value="#A52A2A" style="background-color: #A52A2A; color: white; padding: 15px 20px; margin-top: 5px">Brown</option>
              <option value="#800000" style="background-color: #800000; color: white; padding: 15px 20px; margin-top: 5px">Maroon</option>
              <option value="#008000" style="background-color: #008000; color: white; padding: 15px 20px; margin-top: 5px">Green</option>
              <option value="#808000" style="background-color: #808000; color: white; padding: 15px 20px; margin-top: 5px">Olive</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal">Done</button>
          </div>
        </div>
      </div>
    </div>
    
    
    
    
    
    
    
            {{-- <input type="text" name = 'theme' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> --}}
            <button type="button" class="btn btn-primary inneree" data-toggle="modal" data-target="#exampleModalCenter2">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
              </svg>
              <p style="margin: 0px">Background Themes</p>
            </button>  
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Background Theme</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <select  name = 'theme'  size="2" aria-label="size 3 select example" style="display: flex; background: #009966; width: 100% ">
                     
                      <option value="#FFFFFF" selected style="background-color: rgb(255, 255, 255); color: rgb(0, 0, 0); padding: 90px 10px; margin-top: 5px;">No Theme</option>
                      <option value="https://img.freepik.com/free-vector/comic-style-background_23-2148827393.jpg?w=740&t=st=1661345024~exp=1661345624~hmac=5b7aa597a8c5e2062b9553e488e3991e93ab21e9fc429db506701f312d490a5f" style=" background-image: url('https://img.freepik.com/free-vector/comic-style-background_23-2148827393.jpg?w=740&t=st=1661345024~exp=1661345624~hmac=5b7aa597a8c5e2062b9553e488e3991e93ab21e9fc429db506701f312d490a5f'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/colourful-dynamic-flow-background_52683-42964.jpg?w=740&t=st=1661344697~exp=1661345297~hmac=352ecce12c2a1161d20f5ac9fde60543c439bf2f142cd3022f91e868190277a8" style=" background-image: url('https://img.freepik.com/free-vector/colourful-dynamic-flow-background_52683-42964.jpg?w=740&t=st=1661344697~exp=1661345297~hmac=352ecce12c2a1161d20f5ac9fde60543c439bf2f142cd3022f91e868190277a8'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/comic-style-background_23-2148827394.jpg?w=740&t=st=1661345133~exp=1661345733~hmac=8d3270eba0051fcbe09d63ef3b52bb239788af82d371b477e188154cb5069432" style=" background-image: url('https://img.freepik.com/free-vector/comic-style-background_23-2148827394.jpg?w=740&t=st=1661345133~exp=1661345733~hmac=8d3270eba0051fcbe09d63ef3b52bb239788af82d371b477e188154cb5069432'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/flat-hand-drawn-psychedelic-groovy-background_23-2148881838.jpg?w=740&t=st=1661345170~exp=1661345770~hmac=c4d61ccf235a5a90035640fe2480b1b49bf8f6b2c2467dce96dd2122f0fab00e" style=" background-image: url('https://img.freepik.com/free-vector/flat-hand-drawn-psychedelic-groovy-background_23-2148881838.jpg?w=740&t=st=1661345170~exp=1661345770~hmac=c4d61ccf235a5a90035640fe2480b1b49bf8f6b2c2467dce96dd2122f0fab00e'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/abstract-halftone-background-concept_23-2148605018.jpg?w=740&t=st=1661345273~exp=1661345873~hmac=8e65bde12e8e92e7ff037c569cddd549791af5a179479ab7a80a417e88a98b6f" style=" background-image: url('https://img.freepik.com/free-vector/abstract-halftone-background-concept_23-2148605018.jpg?w=740&t=st=1661345273~exp=1661345873~hmac=8e65bde12e8e92e7ff037c569cddd549791af5a179479ab7a80a417e88a98b6f'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/comic-style-background_23-2148827265.jpg?w=740&t=st=1661345350~exp=1661345950~hmac=5a338784cbe108b6412986e7c8a3704dfd2ccadf9b80403320713724775e3adc" style=" background-image: url('https://img.freepik.com/free-vector/comic-style-background_23-2148827265.jpg?w=740&t=st=1661345350~exp=1661345950~hmac=5a338784cbe108b6412986e7c8a3704dfd2ccadf9b80403320713724775e3adc'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/gradient-geometric-background_23-2148828429.jpg?w=740&t=st=1661345426~exp=1661346026~hmac=48babe4089ca251b0b542373377cedd0acf8cbb6a1537964791574f43dca6ba8" style=" background-image: url('https://img.freepik.com/free-vector/gradient-geometric-background_23-2148828429.jpg?w=740&t=st=1661345426~exp=1661346026~hmac=48babe4089ca251b0b542373377cedd0acf8cbb6a1537964791574f43dca6ba8'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/abstract-halftone-background_23-2148605211.jpg?w=740&t=st=1661345494~exp=1661346094~hmac=828a9504431fcb50a1f704ef37671c9c3964feaf8d34e2d0badb1acd6f2b24e7" style=" background-image: url('https://img.freepik.com/free-vector/abstract-halftone-background_23-2148605211.jpg?w=740&t=st=1661345494~exp=1661346094~hmac=828a9504431fcb50a1f704ef37671c9c3964feaf8d34e2d0badb1acd6f2b24e7'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
                      <option value="https://img.freepik.com/free-vector/watercolor-floral-wallpaper-concept_23-2148535375.jpg?w=740&t=st=1661345547~exp=1661346147~hmac=13d47727c980bc9018dba4dd7620d03f4f2ed771c40fcecca162b63a2ae86401" style=" background-image: url('https://img.freepik.com/free-vector/watercolor-floral-wallpaper-concept_23-2148535375.jpg?w=740&t=st=1661345547~exp=1661346147~hmac=13d47727c980bc9018dba4dd7620d03f4f2ed771c40fcecca162b63a2ae86401'); background-size: cover; background-position: center; background-repeat: no-repeat; padding: 90px 10px; margin-top: 5px; "></option>
      
                    </select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-dismiss="modal">Done</button>
                  </div>
                </div>
              </div>
            </div>
    
            </div>
            
          
            <button type="submit" class="btn btn-primary">Update ITEM</button>
        </div>
        </form>
    </div>
    </div>
    </div>
    





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     

</body>
</html>