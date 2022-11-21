@extends('layouts.usertheme')

@section('content')
<div class="container bg-white" style="min-height: 500px; font-size:medium; font: display 2px;;">
    <!--    check box -->

    <!-- Default inline 1-->
    <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline1">
        <label class="custom-control-label " for="defaultInline1">TRANSFER</label>
    </div>

    <!-- Default inline 2-->
    <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline2">
        <label class="custom-control-label" for="defaultInline2">RETIRED</label>
    </div>

    <!-- Default inline 3-->
    <div class="custom-control custom-checkbox custom-control-inline">
        <input type="checkbox" class="custom-control-input" id="defaultInline3">
        <label class="custom-control-label" for="defaultInline3">OTHER</label>
    </div>
    <br>

    <div class="form-outline text-danger">
        <input type="text" id="typeText" class="form-control" style="min-height :100px ;" />
        <label class="form-label" for="typeText">If other please mention your reason</label>
    </div>

    <!-- <button type="submit" class="btn btn-primary">Submit</button><br> -->

    <form>
        <input type='file' required />
        KWA Nodues certificate
        <button type="submit"> Submit </button>

    </form>
    <form><br>
        <input type='file' required />
        KSEB Nodues certificate
        <button type="submit"> Submit </button>

    </form><br>

    <button type="submit" class="btn btn-primary">Submit</button>


</div>



@endsection