@extends("layouts.usertheme")

@section("content")

<div class="container-fluid bg-white" style="min-height :500px;">
    <div class="col-md-12 mx-auto  w-75">
        <h5 class="mt-2 w-100 text-center"> Please select your fields </h5>

        <select class="form-select w-100  mt-5 mx-auto" style=" font-weight: bold;" aria-label="Default select example">
            <option selected>SELECT UNIT</option>
            <option value="1" class="fw-bold">tvpm city</option>
            <option value="2" class="">kollam city</option>
            <option value="3">tvpm rural</option>
            <option value="3">special armed police</option>
        </select>


        <select class="form-select w-100 mt-3 mx-auto " style=" font-weight:bold;" aria-label="Default select example">
            <option selected>SELECT QUARTERS</option>
            <option value="1">vikas bhavan</option>
            <option value="2">cantonment</option>
            <option value="3">bhakthi vilasam</option>
            <option value="1">nemom</option>
            <option value="2">neyyattinkara</option>
            <option value="3">sap </option>

        </select>

        <select class="form-select w-100 mt-3 mx-auto" style=" font-weight:bold;">
            <option selected>SELECT CATEGORY</option>
            <option value="1">USQ</option>
            <option value="2">LSQ</option>
        </select>
    </div>
    <div class="col-md-12 text-center">

        <div class="col py-2">
            <button class="btn btn-warning" data-bs-toggle="collapse" type="button" data-bs-target="#col1">
                Submit
            </button>
            <div class="collapse  mt-3 " id="col1">

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
                                                        <thead style="background-color: #84a7d4;">
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

                <!-- table end -->
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