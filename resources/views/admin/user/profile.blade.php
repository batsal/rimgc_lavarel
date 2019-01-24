@extends("admin.layout.main")
@section('content')
<div class="container-fluid">
      <div class="row" >
                <div class="col-lg-6 m-t">
                  <h3 class="page-header" style="margin-top: 0px;"><i class="fa fa-file-text-o"></i> Profile Info </h3>
               
                </div>
                 <div class="col-lg-6 m-t">
                   <section class="pull-right">                  
                         <a href="" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;

                         <a href="{{url('form')}}" class="btn btn-primary">View All Enrolled Subjects</a>&nbsp;&nbsp;

                        @if(Auth::user()->authorizeRoles(['admin']))
                       <a href="{{route('dashboard')}}" class="btn btn-primary">Back To Dashboard</a>
                       @endif
                    </section>
                </div>
      </div>
    </div>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
<div id="edit-profile" class="tab-pane">
                    <section class="panel">
                      <div class="panel-body bio-graph-info">
                        <h1> Profile Info</h1>
                        <form class="form-horizontal" method="post" role="form" action="{{route('user.edit', $user->id)}}">
                           {{ csrf_field() }}
                                                 
                         <div class="form-group">
                            <label class="col-lg-4 control-label">First Name</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }} ">
                            </div>
                          </div>
                          
                                                   
                          <div class="form-group">
                            <label class="col-lg-4 control-label">Email</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="email" name="email" 
                              value="{{ $user->email }}">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-4 control-label">Password</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="password" name="password">
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-lg-4 control-label">Confirm Password</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" id="confirm-password" name="password_confirmation">
                            </div>
                          </div>
                          
                          <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </section>
                  </div>
@endsection