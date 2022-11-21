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
                <a class="alert.link" href="{{URL::route('user.home')}}"> Home</a>
                <a class="alert.link mx-2" href=""> Logout</a>
            </div>
            <div class="col-lg-9">
                <div class="d-flex align-items-center justify-content-start">
                    <h1 class="fw-bold"> POLICE FAMILY QUARTERS MONITORING SYSTEM</h1>

                </div>
            </div>
        </div>
    </div>
    <div class="navbar-brand d-flex flex-column d-lg-none justify-content-end">
        
            <h class=" display-6 fw-bold text-dark w-100 text-center" style="font-size: 20px">
                <span class="align-items-end ">
                    <img src="images/logo_kerala (1).png" class=" mx-auto d-block img-fluid  w-50 h-75 " alt=" ">
                </span>QUARTERS MONITORING SYSTEM
            </h>

       
        <div class="d-flex flex-row- w-100 my-2 mx-3">
            <a class="alert.link" href="{{URL::route('user.home')}}"> Home</a>
            <a class="alert.link mx-2" href=""> Logout</a>
        </div>

    </div>
</head>

<body>

    <section class="vh-50    gradient-custom ">
        <div class="container py-0 h-100 ">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-12 col-lg-9 col-xl-9 ">
                    <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5 ">
                        @yield("content") 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>








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