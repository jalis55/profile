@extends('layouts.app')

@section('content')
 <div class="container">
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
                                            <a href=""><span class="glyphicon glyphicon-pencil">
                                      </span> Skill</a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <a href=""><span class="glyphicon glyphicon-briefcase">
                                      </span> Work Exprience</a>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <a href=""><span class="glyphicon glyphicon-folder-open">
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

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-9">
            	
                    @yield('admin_content')
           
               
            </div>

        </div>
    </div>

            


@endsection
