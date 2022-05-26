@extends('layouts.layout')
@section('content')
<section class="hero is-small is-info">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-justify-content-center p-2">
                <div class="column is-two-fifths mb-5 mt-5">
                    <form class="box px-5 mb-5 mt-5">
                        <center>
                        <figure class="image is-96x96">
                            <img src="/img/logoko.JPG">
                        </figure>
                        </center>
                        <h1 class="has-text-centered is-size-2 mt-3 mb-5">E - SYSTEMS</h1>
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                            <input class="input is-rounded" type="email" placeholder="e.g. alex@example.com">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password</label>
                            <div class="control">
                            <input class="input is-rounded mb-3" type="password" placeholder="********">
                            </div>
                        </div>
                        <center>
                            <button class="button is-success is-rounded mb-5">Sign In</button>
                            <button class="button is-link is-rounded mb-5">Register</button>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection