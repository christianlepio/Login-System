@extends('layouts.layout')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <div class="container">
            <div class="card mt-5 mx-1">
                <div class="card-header fs-4 py-1 fw-bold">
                    <figure class="mt-1 image is-32x32">
                        <img src="/img/logoko.JPG">
                    </figure>
                     &nbsp;|&nbsp;<span class="fs-5 lh-lg">REGISTRATION MODULE</span>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input is-info" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Last name </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input is-info" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">First name </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control input is-info" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Email Address </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control input is-info" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Username </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control input is-info" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Password </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control input is-info" id="floatingInput" placeholder="name@example.com">
                                    <label for="floatingInput">Confirm Password </label>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-4">

                            </div>
                            <div class="col-4">
                                <button class="button is-info is-rounded">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection