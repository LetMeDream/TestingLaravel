@extends('master')

@section('title')
    Details for {{ $user->name }}
@endsection

@section('section')
    <div class="container mt-5" style='text-align:center;'>
        <div class="contenedor" style='position:absolute; width:80%; left:8%;'>

            <div class="row">
                <div class="col-12">
                    <h1>Details for {{ $user->name}}</h1>
                </div>
            </div>

                <div class="row">
                        <div class="col-3"><b>ID</b></div>
                        <div class="col-3"><b>Name</b></div>
                        <div class="col-3"><b>Status</b></div>
                        <div class="col-3"><b>Company</b></div>

                        <div class="col-3">{{$user->id}}</div>
                        <div class="col-3">{{$user->name}}</div>
                        <div class="col-3">{{$user->status}}</div>
                        <div class="col-3">{{$user->company->name}}
                        <a href="/users/{{$user->id}}/edit">Edit</a>
                        </div>

                </div>
                <div class="row">
                    <div class="delete">
                        <form action='/users/{{$user->id}}' method="POST">
                            @method('DELETE')
                            @csrf
                            <button type='submit' class='btn btn-danger'>Delete</button>
                        </form>
                    </div>
                </div>

        </div>

    </div>


@endsection