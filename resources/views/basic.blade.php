<link rel='stylesheet' href="{{ asset('css/basic.css') }}">

@extends('master')

@section('title') Basic Topics
@endsection

@section('section')

    <div class="content_1">

        <div id='title1'>
            <h5>Some basics</h5>
        </div>

        <p>If you want to start your laravel project the simplest command you are ever going to need is</p>

            <li class='thisLi'><i>Laravel new page</i></li>


        <p>In order to start our 'page' project.<br>
        Disregarding that, lets list some topics.</p>

        <div class="container">

            <div class="row">

                <div class="col-6">
                    &nbsp;&nbsp; &nbsp;&nbsp; Known topics:
                <ul  style='display:block' class='mt-1'>
                    @foreach ($knownTopics as $item)

                        <li>{{ $item->name }}</li>

                    @endforeach
                </ul>

                </div>
                <div  class="col-6">
                        &nbsp;&nbsp; Unknown topics:
                    <ul style='display:block' class='mt-1'>
                        @foreach ($unknownTopics as $item)
                            <li> {{ $item->name }} </li>
                        @endforeach
                    </ul>

                </div>

            </div>


        </div>
        <hr>
        <div class='contenedor mt-4' >

            <form action="topics" method='POST' >

                <div class="form-group mx-auto" style='width:800px;display:block;'>
                    <input class='form-control mb-2' autocomplete="off" type='text' name='name' value="{{ old('name') }}" placeholder='name'>
                    <input @if (old('known')=='1') checked @endif type='radio' name='known' value='1' id='yes'>&nbsp;<label for='yes'>Known</label>
                    <input @if (old('known')=='0') checked @endif type='radio' name='known' value='0' id='no'>&nbsp;<label for='no'>Unknown</label>
                    <button class='mx-auto btn btn-primary' style='display:block' type='submit'>Add topic</button>
                    @csrf
                </div>

            </form>

        </div>
        @if ($errors->has('name'))
        <div style='position:absolute; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                <span>{{ $errors->first('name') }}</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        @elseif ($errors->has('known'))
        <div style='position:absolute; width:100%;' class="alert alert-primary alert-dismissible fade show" role="alert">
                <span>Is it a known or an unknown topic?</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
        </div>
        @endif

    </div>
@endsection