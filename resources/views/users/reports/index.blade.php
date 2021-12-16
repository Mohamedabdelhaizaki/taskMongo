@extends('layOuts.container')
@section('headerScripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"> </script>

@endsection('headerScripts')

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
        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <canvas id="pieChart" style="width:100%;max-width:700px;margin:4px;padding;4px"></canvas>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>

        <div class="col-9">
            <div class="card">
                <div class="card-body">
                    <div class="col-12">
                        <canvas id="barChart" style="width:100%;max-width:700px;margin:4px;padding;4px"></canvas>
                    </div>
                </div>
            </div>
            <!-- end card-->
        </div>

        <!-- end col-->
    </div>


</div> <!-- container -->


@endsection



@section('scripts')
<script>
$(function() {

    var app = @json($arrayData);

    var barxValues = ["0-10", "10-20", "20-30", "40-50", "50-60", "60-70", "70-80", "80-90", "90-100"];
    var baryValues = [55, 49, 44, 24, 15, 55, 49, 100, 24];

    new Chart("barChart", {
        type: "bar",
        data: {
            labels: barxValues,
            datasets: [{
                data: baryValues
            }]
        },
        options: {
            title: {
                display: true,
                text: "World Wide aaar Production"
            }
        }
    });


    var xValues = ["Male", "Female"];
    var yValues = app;
    var barColors = ["green", "blue"];

    new Chart("pieChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            title: {
                text: "Male vs Females"
            }
        }
    });
});
</script>

@endsection