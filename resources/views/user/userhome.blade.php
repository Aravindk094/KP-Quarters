@extends("layouts.usernav")
@section("content")
<div class="row mt-0 ">
  <div class="container">
    <marquee class="text1" onmouseover="this.stop();" onmouseout="this.start();">
      <p class="textinner">Before submitting application, applicants must read rules and regulations!.</p>
    </marquee>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/imgslide.jpg" class=" slide d-block w-100 " style="max-height: 500px;" alt=" ">
          <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-start justify-content-start">
            <div class="text-start p-5" style="max-width: 900px;">

              <h3 class="text-dark">PQMS</h3>
              <h6 class="display-6 text-dark mb-md-2 fst-italic">Rules and Regulations</h6>
              <!-- <a href="#" class="btn btn-warning py-md-2 px-md-2 me-3">Read More..</a> -->
              <button type="button" class="btn btn-warning py-md-2 px-md-2 me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>

            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide1.jpg" class=" slide d-block w-100 " style="max-height: 500px;" alt=" ">
          <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-start justify-content-start">
            <div class="text-start p-5" style="max-width: 900px;">
              <h3 class="text-dark">PQMS</h3>
              <h6 class="display-6 text-dark mb-md-2 fst-italic">Rules and Regulations</h6>
              <!-- <a href="#" class="btn btn-warning py-md-2 px-md-2 me-3">Read More..</a> -->
              <button type="button" class="btn btn-warning py-md-2 px-md-2 me-3" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Read More
              </button>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide2.jpg" class="slide d-block w-100 " style="max-height: 500px;" alt=" ">
          <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-start justify-content-start">
            <div class="text-start p-5" style="max-width: 900px;">
              <h3 class="text-dark">PQMS</h3>
              <h6 class="display-6 text-dark mb-md-2 fst-italic">Rules and Regulations</h6>
              <!-- <a href="#" class="btn btn-warning py-md-2 px-md-2 me-3">Read More..</a> -->
              <button type="button" class="btn btn-warning py-md-2 px-md-2 me-3" data-bs-toggle="modal" data-bs-target="staticBackdrop">
                Read More
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

</div>
<!--Header End-->


<!-- Modal-Rules & Regulations  -->

@include('layouts.popup')

<!-- <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->
@endsection