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
                    {{__('messages.Information User')}}
                </div>
    

             @if (Session::has('delete'))  
                <div class="alert alert-danger" role="alert">
                    {{Session::get('delete')}}
                </div>
             @endif 

             @if (Session::has('faild'))  
             <div class="alert alert-success" role="alert">
                 {{Session::get('faild')}}
             </div>
          @endif  

             <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{__('messages.User Name')}}</th>
                    <th scope="col">{{__('messages.User Email')}} </th>
                    <th scope="col">{{__('messages.User Phone')}} </th>
                    <th scope="col">{{__('messages.User type')}} </th>
                    <th scope="col">{{__('messages.operation')}}</th>
                  </tr>
                </thead>
    
                <tbody>
                     @foreach($users as $user)
                  <tr>
                    <th scope="row">{{$user ->id}}</th>
                    <td>{{$user ->name}}</td>
                    <td>{{$user ->email}}</td>
                    <td>{{$user ->phone}}</td>
                    <td>{{$user ->User_type}}</td>
                   
                    <td> <a href='{{route('edit.user',$user ->id)}}' class='btn btn-success'>{{__('messages.Edit premission')}}</a></td>
                    <td> <a href='{{route('delete.user',$user ->id)}}' class='btn btn-danger'>{{__('messages.Delete')}}</a></td> 
                   
                  </tr>
                  @endforeach 
                
                </tbody>
              </table>
                  
                
            </div>
        </div>
    </body>
</html>
