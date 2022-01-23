<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

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

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a @if(Auth::user()->User_type == 'admin')
                             href="{{ url('/home/admin') }}"
    
                        @elseif(Auth::user()->User_type == 'chef')
                            href="{{ url('/home/chef') }}"
    
                        @else 
                            href="{{ url('/home') }}"  @endif
                        
                    >{{__('messages.Home')}}</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

            <div class="content">
                <div class="title m-b-md">
                    {{__('messages.customer order')}}
                </div>


             @if (Session::has('success'))  
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
             @endif 

            <form method="post" action="{{Route('save.order.customer')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">{{__('messages.Client Name')}}</label>
                      <input type="text" class="form-control" name="name"  placeholder="{{__('messages.Enter Client Name')}} ">
                      @error('name')
                      <small  class="form-text text-danger">{{$message}}</small>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">{{__('messages.Client Number')}}</label>
                        <input type="int" class="form-control" name="number" placeholder="{{__('messages.Enter Client Number')}} ">
                        @error('number')
                        <small  class="form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>

                      <div class="form-group">
                          <label for="exampleInputEmail1">{{__('messages.Chose Meals')}} </label>
                          <select class="form-control" name="meal_id[]" multiple>
                              @foreach ($meals as $meal)
                              <option value="{{$meal->id}}">{{$meal ->name}}   {{__('messages.price')}}   {{$meal->price}} 
                              </option>
                              @endforeach
                              
                          </select>
                        </div>
  
                      <div class="form-group">
                          <label for="exampleInputEmail1">{{__('messages.Choose drinks')}}</label>
                          <select class="form-control" name="drink_id[]" multiple>
                              @foreach ($drinks as $drink)
                              <option value="{{$drink->id}}">{{$drink ->name}} {{__('messages.price')}}{{$drink->price}} </option>
                              @endforeach
                              
                          </select>
                        </div>
                    
                    
                    <button type="submit" class="btn btn-primary">{{__('messages.Send')}}</button>
            </form>
                  
                
            </div>
        </div>
    </body>
</html>
