@extends('layouts.app')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
           
          
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li class="nav-item active">
                <a class="nav-link" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"> {{ $properties['native'] }} <span class="sr-only">(current)</span></a>
            </li>
        @endforeach
      </ul>
    </div>
  </nav> 


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @yield('user_type')
                            {{__('messages.You are logged in')}}!<br>
                            <a href="{{route('Maels.drinks')}}" class="btn btn-light">{{__('messages.Request Food')}}</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
