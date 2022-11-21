@extends("layouts.usertheme")

@section("content")


<div class="container-fluid bg-white" style="min-height :500px;">
    <div class="col-md-12 text-center">
        <!-- <div class="container-fluid" style="text-align:center;"> -->
        <h5><br> Please select your search area </h5>
        <select class="form-select w-75 mx-auto " style=" font-weight: bold;" aria-label="Default select example">
            <option selected>Select  application id</option>
            <option value="1" class="fw-bold">900842051122</option>
            <option value="2" class="fw-bold">900856051122</option>
            <option value="3" class="fw-bold">900842121122</option>
            <option value="3">900857121122</option>
        </select>

    </div>
    <div class="col-md-12 text-center">

        <div class="col py-2">
            <button class="btn btn-warning" data-bs-toggle="collapse" type="button" data-bs-target="#col1">
                Submit
            </button>
            <div class="collapse bg-white mt-2 " id="col1">





                <!-- table -->
                <section class="intro">
                    <div class="bg-image h-100" style="background-color: #638cca;">
                        <div class="mask d-flex align-items-center h-100">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12">
                                        <div class="card">
                                            <div class="card-body p-0">
                                                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 300px">
                                                    <table class="table table-striped mb-0">
                                                        <thead style="background-color: #7aa6df;">
                                                            <tr>
                                                                <th scope="col">Unit</th>
                                                                <th scope="col">Quarters Name</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Quarters Number</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Thiruvananthapuram city</td>
                                                                <td>vikas bhavan</td>
                                                                <td>flat</td>
                                                                <td>B8</td>
                                                                <td>Filled</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Thiruvananthapuram city</td>
                                                                <td>cantonment</td>
                                                                <td>single</td>
                                                                <td>AB12</td>
                                                                <td>Filled</td>

                                                            </tr>
                                                            <tr>
                                                                <td>Thiruvananthapuram rural</td>
                                                                <td>nemom</td>
                                                                <td>flat</td>
                                                                <td>C12</td>
                                                                <td class="text-danger fw-bold ">Vacant</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Special armed police</td>
                                                                <td>sap</td>
                                                                <td>USQ</td>
                                                                <td>116</td>
                                                                <td>Filled</td>
                                                            </tr>




                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="container bg-white" id="box">
                    <div class="row well mt-3 ">
                        <center>
                            <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection