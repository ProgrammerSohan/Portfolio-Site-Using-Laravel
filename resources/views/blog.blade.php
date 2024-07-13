@extends('layouts.master')
@section('title','Blog Page')
@section('content')
<div class="bg-light text-center py-5">
        <div class="container">
            <h1 class="display-4">Welcome to Blog Page</h1>
            <div class="row mt-5">
            {{-- @foreach($blogs as $blog)
                <div class="col-md-4">
                       <div class="card">
                        <div class="card-body">
                            <h2>{{$blog['title']}}</h2>
                            <p>
                             {{$blog['body']}}
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach--}}

                @for ($i = 0; $i < count($blogs); $i++)
                <div class="col-md-4">
                       <div class="card">
                        <div class="card-body">
                            <h2>{{$blogs[$i]['title']}}</h2>
                            <p>
                             {{$blogs[$i]['body']}}
                            </p>
                        </div>
                    </div>
                </div>
                
                @endfor

            </div>
           
        </div>
    </div>
@endsection