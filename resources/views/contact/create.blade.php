<link rel='stylesheet' href="{{ asset('css/contact/create.css') }}">

@extends('master')

@section('section')


<div class='contenedor'>

        <h2>Contact Us</h2>

        <form action='/contact' method='POST'>

                @csrf
                <label for='name'>Name</label>
                <input autocomplete="off" class='form-control' name='name' placeholder='Name' value="{{ old('name')  }}">
                @if ($errors->has('name'))
                            <div style='position:relative; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <span>{{ $errors->first('name') }}</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                @endif

                <label for='email'>Email</label>
                <input autocomplete="off" class='form-control' name='email' placeholder='Email' value="{{ old('email') }}">
                @if ($errors->has('email'))
                            <div style='position:relative; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <span>Please, enter a valid email.</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                @endif

                <label for='message'>Message</label>
                <textarea name='message' class='form-control'>{{ old('message') }} </textarea>

                @if ($errors->has('message'))
                            <div style='position:relative; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                                    <span>Please, state your message.</span>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                            </div>
                @endif

                <button type='submit' class='btn btn-dark mt-1' >Send message</button>
        </form>

        @if($SuccessMessage)
            <div class="message"><p> {{ $SuccessMessage }} </p></div>
        @endif

</div>


@endsection