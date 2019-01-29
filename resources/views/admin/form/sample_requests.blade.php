@extends("admin.layout.main")
@section('content')

<form name="research" class="form-horizontal" method="post" role="form" action='{{route("form.update",$id)}}'>
  {{ csrf_field() }}
  <div class="row">
    <div class="container-fluid">
      <div class="col-lg-6 m-t">
        <!--<h3 class="page-header"><i class="fa fa-file-text-o"></i> Form elements</h3>-->
        <!-- <ol class="breadcrumb">
                  <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
                  <li><i class="icon_document_alt"></i>Forms</li>
                  <li><i class="fa fa-file-text-o"></i>Form elements</li>
                </ol> -->
      </div>
      <div class="col-lg-6 m-t">
        <section class="pull-right">
          <a href="{{route('form.create')}}" class="btn btn-primary">Enroll New Subjects</a>&nbsp;&nbsp;
          <a href="{{route('form.index')}}" class="btn btn-primary">View All enrolled subjects</a>&nbsp;&nbsp;

          @if(Auth::user()->authorizeRoles(['admin']))

            @endif
            <a href="{{route('dashboard')}}" class="btn btn-primary">BackToMain</a>&nbsp;&nbsp;

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

  <!-- Basic Forms & Horizontal Forms-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <section class="panel head-f">
          <div class="col-md-offset-1  panel-body">
            <div class="col-md-4 inline text-left">
              <label for="family_id" class="col-md-6 control-label">Family ID</label>
              <div class="col-md-6">
                <h5>{{$edit -> family_id}}</h5>
              </div>
            </div>
            <div class="col-md-4 inline text-left">
              <label for="study_id" class="col-md-6 control-label">Study ID</label>
              <div class="col-md-6">
                <h5>{{$edit -> study_id}}</h5>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

</form>

@endsection
