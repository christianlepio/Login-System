@extends('layouts.layout')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="container">
            <div class="card mt-5 mx-1">
                <div class="card-header fs-4 fw-bold">Registration Module</div>
                <form action="" method="post">
                    <div class="row justify-content-center mx-1">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Last name </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">First name </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mx-1">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email Address </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Username </label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mx-1">
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Password </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Confirm Password </label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection