
@extends('layouts.master')
@section('content')
        <div class="flex-center">           
            <div class="content">
                <div class="title m-b-md">
                    La-ravel
                </div>

                <div class="links">
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>

                <hr> 
                <div class="jumbotron">
                    <button class="btn btn-lg">ClickMe</button>
                    <p>
                        @if(session()->has('avatar'))
                                <img class="img img-thumbnail border-rounded" src="{{session('avatar')}}">
                        @endif
                    </p>
                    <p>
                   
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    </p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-xs-6"><div class="card"><img class=" aling-top img-circle" src="{{asset('images/avatar/john.jpg')}}"></div></div>
                    <div class="col-md-3 col-xs-6"><div class="card img-circle"><img class="img-circle" src="{{asset('images/avatar/joyce.jpg')}}"></div></div>
                    <div class="col-md-3 col-xs-6"><div class="card"><img class="img-circle" src="{{asset('images/avatar/drake.jpg')}}"></div></div>
                    <div class="col-md-3 col-xs-6 "><div class="card"><img class="img-circle" src="{{asset('images/avatar/mary.jpg')}}"></div>
                </div>     
            </div>
        </div>
@endsection()