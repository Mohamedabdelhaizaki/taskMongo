@extends('layOuts.container')

@section('title', 'Export Users')
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

                    <form action="{{ route('users.exportUsers') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-4 mb-2">
                                <label for="orderBy">Order By</label>
                                <select class="form-control" id="orderBy" name="orderBy" required>
                                    <option value="" disabled selected>Select Order By</option>
                                    <option value="firstName">First Name</option>
                                    <option value="LastName">Last Name</option>
                                    <option value="numberOfMessages">Number Of Messages</option>
                                    <option value="age">Age</option>
                                    <option value="gender">Gender</option>
                                    
                                </select>
                            </div>

                            <div class="col-4 mb-2">
                                <label for="type">Type</label>
                                <select class="form-control" id="type" name="type" required>
                                    <option value="" disabled selected>SelectType</option>
                                    <option value="Asc">Ascending</option>
                                    <option value="Desc">Descending</option>
                                </select>
                            </div>
                            <div class="col-4 pt-2">
                                <button type="submit" class="btn btn-success btn-lg">Export data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card-->
        </div>
        <!-- end col-->
    </div>
</div> <!-- container -->


@endsection