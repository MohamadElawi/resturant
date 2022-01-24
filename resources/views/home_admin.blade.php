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
                  
                   {{__('messages.You are admins logged in')}}!<br><br>
                        <a href="{{route('Get.All.Employee')}}" class="btn btn-light">{{__('messages.Employees')}}</a><br>
                        <a href="{{route('employee.create')}}" class="btn btn-light">{{__('messages.Employee Registration')}}</a><br>
                        <a href="{{route('all.users')}}" class="btn btn-light">{{__('messages.Users')}}</a><br>
                        <a href="{{route('Get.All.Order')}}" class="btn btn-light">   {{__('messages.View Order')}}     </a><br>
                       


                     
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

