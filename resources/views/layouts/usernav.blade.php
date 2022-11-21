<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Police Quarters</title>
  <link rel="stylesheet" href="style.css">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
  

  @vite(['resources/sass/app.scss', 'resources/js/app.js'])


  <!--HeaderStart-->
  <div class="container-fluid px-5 d-none d-lg-block">
    <div class="row gx-5 py-3 align-items-center">
      <div class="col-lg-3 ">
        <div class="d-flex align-items-center justify-content-start">
          <img src="/images/logo_kerala (1).png" class=" slide d-block w-50 h-50" alt=" ">
        </div>
      </div>
      <div class="col-lg-9">
        <div class="d-flex align-items-center justify-content-start">
          <h1 class="fw-bold"> POLICE FAMILY QUARTERS MONITORING SYSTEM</h1>
          <!-- <span> <a class="alert.link" href=""> Home</a>    -->
          <!--<a class="alert.link mx-2" href=""> Logout</a></span> -->
        </div>
      </div>
    </div>
  </div>

</head>

<body>

  <nav class="navbar justify-content-end navbar-expand-lg bg-primary  navbar-dark shadow sm py-0 py-lg-0 px-0 px-lg-6">
    <div class="container-fluid bg-primary">
      <div class="row h-50">
        <div class="navbar-brand d-flex d-lg-none justify-content-center">
          <h class=" display-6 fw-bold text-white text-center w-100" style="font-size: 20px"><span class="align-items-center "><img src="images/logo_kerala (1).png" class=" mx-auto d-block img-fluid w-50 h-75 " alt=" "></span>QUARTERS MONITORING SYSTEM</h>
        </div>
      </div>
      <div class="row">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto py-0">
            <a href="{{URL::route('user.reg')}}" class=" nav-item nav-link"><button class="btn btn-primary  py-1 " type="button"> +New Application</button></a>
            <a href="{{URL::route('user.edit')}}" class=" nav-item nav-link"><button class="btn btn-primary   py-1 " type="button"> Edit Application</button> </a>
            <a href="{{URL::route('user.print')}}" class=" nav-item nav-link"><button class="btn btn-primary   py-1 " type="button"> Print Application </button></a>
            <a href="#" class=" nav-item nav-link "><button class="btn btn-primary   py-1 " type="button"> Application status</button></a>
            <a href="{{URL::route('user.selfvacate')}}" class=" nav-item nav-link "><button class="btn btn-primary   py-1 " type="button"> Self vacate</button> </a>
            <a href="{{URL::route('user.qtrstatus')}}" class=" nav-item nav-link "><button class="btn btn-primary   py-1 " type="button">Quarters status </button></a>

            <a href="#" class=" nav-item nav-link "><button type="button" class=" btn btn-primary   py-1" data-bs-toggle="modal" data-bs-target="#staticBackdrop1">
                Notifications <span class="badge text-primary">1</span>
              </button>
            </a>

            <a href="#" class=" nav-item nav-link "><button class="btn btn-primary  py-1 " type="button">Logout</button> </a>



          </div>
        </div>
      </div>
    </div>
  </nav>

  @yield("content")
</body>



@include('layouts.popup')




<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(216, 207, 207, 0.979);">
    Copyrights @ Kerala police | Portal of Kerala police QMS developed by Information and Communication Technology Wing, SCRB, Thiruvananthapuram.

  </div>
  <!-- Copyright -->
</footer>

<!--JS-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>



<!-- <script> 
  function myFunction() {
    let text = "IT'S A WILLING OPTION!\nEither OK or Cancel.";
    if (confirm(text) == true) {
      ;
    } else {
      text = "You canceled!";
    }
    
  }
  </script>-->


</html>