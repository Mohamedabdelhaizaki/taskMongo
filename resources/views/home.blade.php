@extends('layOuts.container')
@section('title', 'Home')
@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item active"><i class="uil-home-alt me-1"></i>Home</li>
                    </ol>
                </div>
                <h4 class="page-title">Home</h4>
            </div>
        </div>
    </div>





    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4> {{ date('F') }} {{ date('Y') }} </h4>
                    <!-- end card-body -->
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col-->
    </div>


</div> <!-- container -->
@endsection