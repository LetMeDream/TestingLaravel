<link rel='stylesheet' href="{{ asset('css/relationships.css') }}">

@extends('master')

@section('title')
    Relationship's practice
@endsection


@section('section')

    <div class="content_1">

        <div class="content_r">
                <h2 class='d-none d-md-block'> Let's practice some relationships with our users </h2>
                <p class='d-block d-md-none'> Let's practice some relationships with our users  </p>
        </div>

        <div class="content_r1">

            <div class="container">
                <div class="row">

                    <div class='col-2'><b>Id </b> </div>
                    <div class='col-3'><b>Nombre</b>  </div>
                    <div class='col-3'><b>Status</b>  </div>
                    <div class='col-4'><b><span class='text-muted'> Company </span></b></div>

                    @foreach ($users as $user)

                            <div class='col-2'>{{ $user->id }}</div>
                            <div class='col-3'>
                            <a href='users/{{$user->id}}'> {{ $user->name }} </a>
                            </div>
                            <div class='col-3'>{{ $user->status }}</div>
                            <div class='col-4'><span class='text-muted'>{{ $user->company->name }}</span></div>

                    @endforeach





                </div>
            </div>

            <a class='btn btn-primary mt-2' href='/users/create'>Create new user</a>

            <hr>




            <div class="container">
                <div style='text-align:center;'><b>Companies</b> and their <b>Users</b>:</div>
                <ul>
                    @foreach ($companies as $company)

                   <li>{{ $company->name }}</li>

                        @foreach ($company->users as $user)
                            <p style='padding:0;margin:0'>&nbsp;&nbsp;&nbsp;{{$user->name}}</p>
                        @endforeach

                    @endforeach
                </ul>

            </div>


        </div>


    </div>

@endsection