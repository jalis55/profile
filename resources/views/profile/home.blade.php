<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('public/assets/custom.css')}}">
</head>
<body>


  
<div class="container">
                    <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;<a class="h2" href="{{url('/home')}}">Admin</a>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
                            
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
                <hr>

  <div class="row">
     <div class="col-sm-3 col-md-3">
                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Menu</a>
                        </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="{{url('/skills')}}"><span class="glyphicon glyphicon-pencil">
                                      </span> Skill</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href="{{url('/work-exp')}}"><span class="glyphicon glyphicon-briefcase">
                                      </span> Work Exprience</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="{{url('/education')}}"><span class="glyphicon glyphicon-folder-open">
                                      </span> Education</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Account</a>
                        </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse">
                            <div class="panel-body">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <a href="{{url('/change-pp')}}">Change Profile picture</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Edit Account</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="">Logout</a>
                                        </td>
                                    </tr>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <div class="col-sm-9">
       @yield('admin_content')
      
    </div>
  </div>
</div>

</body>
</html>