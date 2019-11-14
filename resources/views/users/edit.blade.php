<link rel='stylesheet' href="{{ asset('css/users/create.css') }}">

@extends('master')

@section('title')
    Editing info for user {{ $user->name }}
@endsection

@section('section')

<div class="here">


        <div class="row">

                <div class="col-12 mt-3" style='text-align:center'>
                    <h3>Editing details for {{ $user->name }}</h3>
                </div>

                <div class="col-7 mx-auto mt-4">
                    <form action="/users/{{$user->id}}" method='POST'>

                        @method('PATCH')

                        @include('users.form')
                        <button type='submit' class='btn btn-secondary'>Save User</button>


                    </form>

                    @if ($errors->has('name'))
                        <div style='position:relative; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                                <span>{{ $errors->first('name') }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @elseif ($errors->has('status'))
                        <div style='position:relative; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                                <span>Is it an active or an inactive user?</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @elseif ($errors->has('email'))
                        <div style='position:relative; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                                <span> {{ $errors->first('email') }}</span>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                        </div>
                    @endif

                </div>
        </div>
</div>
@endsection
