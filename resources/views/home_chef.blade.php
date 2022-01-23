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
                  
                   {{__('messages.You are chef logged in')}}<br>
                    <a href="{{route('add.meal')}}" class="btn btn-light">{{__('messages.Add Meal')}}</a><br>
                    <a href="{{route('add.drink')}}" class="btn btn-light">{{__('messages.Add Drink')}}</a><br>
                    <a href="{{route('all.meals')}}" class="btn btn-light">{{__('messages.view Meals')}}</a><br>
                    <a href="{{route('all.drinks')}}" class="btn btn-light">{{__('messages.view Drinks')}}</a><br>
                    <a href="{{route('Get.All.Order')}}" class="btn btn-light">   {{__('messages.View Order')}}     </a><br>
                    <img class ="img" src= "/img/about.jpg" >
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
