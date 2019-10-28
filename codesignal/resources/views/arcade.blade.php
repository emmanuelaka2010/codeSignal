<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title>CODE SIGNAL</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/all.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    </head>
<body style="background: #2b3d52;">
 <i class="fas fa-code"></i>
 <i class="far fa-clone"></i>
 <i class="far fa-clone"></i>

<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: #33485f; color: white">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
     <img src="Logo_white.svg">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="color: #ccc;" href="#"><i class="far fa-user-circle"></i> MY PROFILES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ccc;" href="#"><i class="fas fa-yin-yang"></i> TEST CENTER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ccc;" href="#"><i class="far fa-star"></i>  LEADER</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: #ccc;" href="#"><i class="fa fa-clone"></i>  FORUM</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>







<div class="container" style="margin-top:5%;">

   <div class="row">
    <div class="col-md-6"style="margin-top:5%;margin-bottom:10px;width:100px;height:400px;margin-left:25%;">
                    <!-- Card -->
              <div class="card" >

                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"style="width:;height:200px;">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body"style="width:;height:100px;">
                 <a href="{{ url('/arcade/intro') }}"> <h4 class="card-title" style="margin-left:40%;">intro</h4></a>
                </div>

              </div>
    </div>
  </div>


  <div class="row">
  	<div class="col-md-6"style="margin-top:-1%;margin-bottom:10px;width:100px;height:400px;margin-left:25%;">
                    <!-- Card -->
              <div class="card" >

                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"style="width:;height:200px;">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body"style="width:;height:100px;">
                  <h4 class="card-title" style="margin-left:40%;">The Core</h4>
                </div>

              </div>
    </div>
  </div>

  <div class="row">
    <div class="col" style="height:400px;width:280px;margin-left:3%;">
       <div class="card" >

                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"style="width:;height:200px;">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body"style="width:;height:100px;">
                  <h4 class="card-title" style="margin-left:40%;">Databases</h4>
                </div>

              </div>
      
    </div>

    <div class="col" style="height:400px;width:280px;margin-left:3%">
       <div class="card" >

                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"style="width:;height:200px;">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body"style="width:;height:100px;">
                  <h4 class="card-title" style="margin-left:40%;">Python</h4>
                </div>

              </div>
    </div>
  </div>

  <div class="row">
  	<div class="col-md-6"style="margin-top:1%;margin-bottom:10px;width:100px;height:400px;margin-left:25%;">
  		  
         <div class="card" >

                <!-- Card image -->
                <div class="view overlay">
                  <img class="card-img-top" src="https://mdbootstrap.com/img/Mockups/Lightbox/Thumbnail/img%20(67).jpg" alt="Card image cap"style="width:;height:200px;">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>

                <!-- Card content -->
                <div class="card-body"style="width:;height:100px;">
                  <h4 class="card-title" style="margin-left:40%;">Graphs</h4>
                </div>

              </div>
  	</div>
  </div>

</div>




<script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/mdb.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('popper.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('all.js') }}"></script>
</body>
</html>
