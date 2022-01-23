@extends('Layouts.app')

@section('content')


    @if(Auth::user()->User_type == 'admin')
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
                    
                        You are logged in admins!<br>
                            <a href="{{route('Get.All.Employee')}}" class="btn btn-success">information Employees</a><br>
                            <a href="{{route('all.users')}}" class="btn btn-danger">information Users</a><br>
                            <a href="{{route('all.users')}}" class="btn btn-primary">Home</a><br>
                            <a href="{{route('all.users')}}" class="btn btn-warning">information Employee</a>


                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    @elseif(Auth::user()->User_type == 'chef')
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
                    
                        You are logged in chif
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
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
                                You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


        
    @endsection



<script type ="text/javascript">
document.title ="{{$user['name']}}'s profile " ;
</script>