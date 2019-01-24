
@extends("admin.layout.main")
@section('content')

<div class="container-fluid">

<div class="row">
    <div class="col-md-12">
   <div class="panel">

      <div class="panel-body">
      <div class="row">
        <button style="margin-left: 25px; margin-bottom: 20px;" type="button" class="btn btn-primary" data-toggle="collapse" data-target="#filter-panel">
            <span class="fa fa-cog"></span> Advanced Search
        </button>
        <div id="filter-panel" class="collapse filter-panel">
            <div class="panel panel-default search-panel">
                <div class="panel-body">
                    <form class="form-inline"  id="form">

                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Enrolled:</label>
                            <select id="enrolled" name="enrolled" class="form-control">
                                <option value="">Select</option>
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>

                            </select>
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Sex:</label>
                            <select id="gender" name="gender" class="form-control">
                                <option value="">Select</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                            </select>
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Primary Sample Type:</label>
                            <select id="sample_type" name="sample_type" class="form-control">
                                <option value="">Select</option>
                                <option value="1">Whole Blood</option>
                                <option value="2">Serum</option>
                                <option value="3">Plasma</option>
                                <option value="4">DNA</option>
                                <option value="5">Cell line (LCL)</option>
                                <option value="6">Tissue</option>
                                <option value="7">Other</option>
                            </select>
                        </div><!-- form group [search] -->
                        <div class="form-group">
                            <label class="filter-col" style="margin-right:0;" for="pref-search">Tube Type:</label>
                            <select id="tube_type" name="tube_type" class="form-control">
                                <option value="">---Select ---</option>
                                <option value="1p">1p</option>
                                <option value="1g">1g</option>
                                <option value="1y">1y</option>
                                <option value="1p/1g">1p/1g</option>
                                <option value="2p/2g">2p/2g</option>
                                <option value="2p/2g">2p/1g</option>
                                <option value="1p/2g">1p/2g</option>
                                <option value="other">other</option>
                            </select>
                        </div><!-- form group [search] -->

                        <div class="form-group">

                            <button id="sub" style="margin-top: 32px;" type="button" class="btn btn-primary filter-col">
                                <span class="fa fa-record"></span> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    </table><table id="example" class="display table-responsive table-striped" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Study ID</th>
                <th>Name</th>
                <th>Family ID</th>
                <th>MRN</th>
                <!--<th>Sample Available</th>-->
                <th>Sample Type</th>
                <th>Tube Type</th>
                <th>Race</th>
                <th>Biobank ID</th>
                @if($role_name !='employee')
                <th>Action</th>
                @endif
            </tr>
        </thead>
        <!-- <tfoot>
             <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>Study ID</th>
                <th>Family ID</th>
                <th>MRN</th>
                <th>Sample Rec Date</th>
                @if($role_name !='employee')
                <th>Action</th>
                @endif
            </tr>
        </tfoot> -->
        <tbody id="mydata">
           @foreach($infos as $key=>$i)
            <tr>
                <td>{{$i -> study_id}}</td>
                <td>{{$i -> first_name}} {{$i -> last_name}}</td>
                <td>{{$i -> family_id}}</td>
                <td>{{$i -> mrn}}</td>
                <!--<td>{{$i -> sample}}</td>-->
                <td>{{App\Http\Controllers\admin\FormController::get_format($i->primary_sample_type,'primarySample')}}</td>
                <td>{{($i -> tube_type)?$i -> tube_type:''}}</td>
                <td>{{($i -> race)?$race[$i -> race]:''}}</td>
                <td>{{$i -> sdg_id}}</td>
                <!--<td>{{($i -> ethnicity)?$ethnicity[$i -> ethnicity]:''}}</td>-->
                @if($role_name !='employee')
                <td><a href="{{ route('form.edit' ,$i->patient_info_id) }}" class="btn btn-default btn-sm" ><i class="fa fa-edit"></i></a>
                     <form action="{{url('form', [$i->patient_info_id])}}" method="POST" style="display: inline-block;">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <!-- <input type="submit" class="btn btn-danger" value="Delete"/> -->
                        <button type="submit" class="btn btn-default btn-sm">
                            <i class="fa fa-times"></i>
                        </button>
                     </form>


                </td>
                @endif
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
</div>

  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Select Field</h4>
      </div>
      <div class="modal-body">
        <form action="{{url('download/per/10/page/1')}}" method="post" id="field">
            {{ csrf_field() }}
            <div class="row">
            @foreach($columns as $key => $column)
              <div class="col-md-4 form-group">
                <label for="recipient-name" class="control-label">{{$column}}</label>
                <input type="checkbox" class="form-control" id="recipient-name" name="field[{{$key}}]" value="{{$key}}">
              </div>
            @endforeach
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Download CSV</button>
            </div>
        </form>
      </div>

    </div>
  </div>
</div>
@endsection
@section('style')
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    var APP_URL = {!! json_encode(url('/')) !!};
    function filterGlobal () {
        $('#example').DataTable().search(
            $('#global_filter').val(),
            $('#global_regex').prop('checked'),
            $('#global_smart').prop('checked')
        ).draw();
    }

    function filterColumn ( i ) {
        $('#example').DataTable().column( i ).search(
            $('#col'+i+'_filter').val(),
            $('#col'+i+'_regex').prop('checked'),
            $('#col'+i+'_smart').prop('checked')
        ).draw();
    }

    $(document).ready(function() {
        $('#example').DataTable();

        $('input.global_filter').on( 'keyup click', function () {
            filterGlobal();
        } );

        $('input.column_filter').on( 'keyup click', function () {
            filterColumn( $(this).parents('tr').attr('data-column') );
        });

        $(document).on('click','.paginate_button',function(){
                  var current_page = $(this).html();
                  var length = $('select[name="example_length"]').val();
                  var pagination_url =APP_URL+"/download/per/"+length+"page/"+current_page;

                  $(".csv").attr("href",pagination_url);
                  $("form#field").attr("action",pagination_url);
        });

        $(document).on('change','select[name="example_length"]',function(){
                  var current_page = $(document).find("#example_paginate a.current").html();
                  var length = $('select[name="example_length"]').val();
                  var pagination_url =APP_URL+"/download/per/"+length+"/page/"+current_page;

                  $(".csv").attr("href",pagination_url);
                  $("form#field").attr("action",pagination_url);
        });

        $('button').click(function() {
            $('#exampleModal').modal('hide');
        });

    });



</script>
<script type="text/javascript">

        $('#sub').on('click', function () {
          $.ajax({
            url: '{{ route('form.searchandlist') }}',
            type: 'GET',
            data: $('#form').serialize(),
            success: function (data) {
                console.log(data);
              // $("#mydata").html(data);
            }
          });
        });


</script>

@endsection