@extends("layouts.usertheme")

@section("content")


<h6 class="text-center w-100"> APPENDIX-1 [Vide rule 10(a)]</h6>
<h3 class=" pb-2 text-center pb-md-0 mb-md-5">Application for allotment of family quarters</h3>
<form class=" bg-white">

  <div class="row ">
    <div class="form-group col-xl-6 mt-3">
      <!-- <label for="inputname">APPLICANT NAME</label> -->
      <input type="text" class="form-control" id="inputname" placeholder="APPLICANT NAME">
    </div>
    <div class="form-group col-xl-6 mt-3">
      <!-- <label for="inputpen">PEN</label> -->
      <input type="text" class="form-control" id="inputpen" placeholder="PEN No">
    </div>
    
  </div>

  <div class="row ">
  <div class="form-group col-md-4 mt-3">
      <!-- <label for="inputpay">PAY</label> -->
      <input type="text" class="form-control" id="inputpay" placeholder="Pay">
    </div>
    <div class="form-group col-md-4 mt-3">
      <!-- <label for="inputsp">SCALE OF PAY</label> -->
      <input type="text" class="form-control" id="inputsp" placeholder="Scale of pay">
    </div>
    
    <div class="form-group col-md-4 mt-3">
      <!-- <label for="inputoffice">Office in which employed</label> -->
      <input type="text" class="form-control" id="inputoffice" placeholder="Office in which employed">
    </div>
  </div>
  <div class="row ">
  <div class="form-group col-md-6 mt-2">
      <label for="inputdob">DATE OF BIRTH</label>
      <input type="date" class="form-control" id="inputdob" placeholder="DATE OF BIRTH">
    </div>
    <div class="form-group col-md-6 mt-2">
      <label for="inputsa">DATE OF SUPERANNUATION</label>
      <input type="date" class="form-control" id="inputsa" placeholder="superannuation">
    </div>
  </div>

  <div class="form-group mt-3 ">
    <!-- <label for="inputAddress">Address</label> -->
    <textarea class="form-control" id="inputAddress" placeholder="Address"></textarea>
  </div>
  <div class="row ">
    <div class="form-group col-md-4 mt-3">
      <!-- <label for="inputCity">VILLAGE</label> -->
      <input type="text" class="form-control" id="inputCity" placeholder="VILLAGE">
    </div>
    <div class="form-group col-md-4 mt-3">
      <!-- <label for="inputCity">TALUK</label> -->
      <input type="text" class="form-control" id="inputCity" placeholder="TALUK">
    </div>
    <div class="form-group col-md-4 mt-3">
      <!-- <label for="inputZip">DISTRICT</label> -->
      <input type="text" class="form-control" id="inputZip" placeholder="DISTRICT">
    </div>
  </div>


  <div class="form-group mt-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       <b> WHETHER MARRIED ANDdS PROPOSED TO OCCUPY QUARTERS IS ALLOTTED WITH FAMILY</b>
      </label>
    </div>
  </div>
  
  <div class="form-group mt-3">
    <div class="checkbox">
      <input type="checkbox" data-bs-toggle="collapse" data-bs-target="#collapseOne"> <b>WHETHER HUSBAND/WIFE IS EMPLOYED AND IF SO PARTICULARS REGARDING:</b>
      </input>
    </div>
  </div>
  <div id="collapseOne" aria-expanded="false" class="collapse">
    <div class="row mt-3">
      <div class="form-group col-md-4">
        <!-- <label for="inputCity">Place Of Employment</label> -->
        <input type="text" class="form-control" id="inputCity" placeholder="Place Of Employment">
      </div>
      <div class="form-group col-md-4">
        <!-- <label for="inputCity">PAY</label> -->
        <input type="text" class="form-control" id="inputCity" placeholder="PAY">
      </div>
      <div class="form-group col-md-4">
        <!-- <label for="inputZip">Scale of Pay</label> -->
        <input type="text" class="form-control" id="inputZip" placeholder="Scale of Pay">
      </div>
    </div>

  </div>
  <div class="form-group mt-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        <b> WHETHER OWNS A HOUSE WITHIN HIS/HER HEAD QUARTERS CITY OF TOWN OR WITHIN A RADIUS OF FIVE MILES/EIGHT KILOMETERS FROM HIS OR HER OFFICE</b>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-6 mt-3">
      <label>Upload marriage certiticate in pdf format</label>
      <input type="file" class="form-control" id="inputEmail4" placeholder="Allicant name..">
    </div>
  </div>
  <div class="form-group mt-3">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        <b> DECLARATION</b>
          <p>I have read and understood the rules for the allotment and occupation of quarters for police personnel in kerala.I hereby declare that i shall abide by the said rules and all other rules Government pay,from time to time ,make in this regard . The information furnished by me above is correct and true to the best of my knowledge and belief
          </p> </label>
    </div>
  </div>

  <div class="form-group text-center mt-3">
  <button type="submit" class="btn btn-primary mx-auto ">UPDATE</button>
  <button type="cancel" class="btn btn-primary mx-auto ">CANCEL</button>
  </div>
</form>


@endsection