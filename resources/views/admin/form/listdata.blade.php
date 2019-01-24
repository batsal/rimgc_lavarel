

@section('content')

    <div id="adddata">
        <table id="example" class="display table-responsive table-striped" cellspacing="0" width="100%">
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

            <tbody id="mydata">
            @foreach($infos as $key=>$i)
                <tr>
                    <td>{{$i -> study_id}}</td>
                    <td>{{$i -> first_name}} {{$i -> last_name}}</td>
                    <td>{{$i -> family_id}}</td>
                    <td>{{$i -> mrn}}</td>
                    <td>{{App\Http\Controllers\admin\FormController::get_format($i->primary_sample_type,'primarySample')}}</td>
                    <td>{{($i -> tube_type)?$i -> tube_type:''}}</td>
                    <td>{{($i -> race)?$race[$i -> race]:''}}</td>
                    <td>{{$i -> sdg_id}}</td>
                    @if($role_name !='employee')
                        <td><a href="{{ route('form.edit' ,$i->patient_info_id) }}"
                               class="btn btn-default btn-sm"><i class="fa fa-edit"></i></a>
                            <form action="{{url('form', [$i->patient_info_id])}}" method="POST"
                                  style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Select Field</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('download/per/10/page/1')}}" method="post" id="field">
                            {{ csrf_field() }}
                            <div class="row">
                                @foreach($columns as $key => $column)
                                    <div class="col-md-4 form-group">
                                        <label for="recipient-name" class="control-label">{{$column}}</label>
                                        <input type="checkbox" class="form-control" id="recipient-name"
                                               name="field[{{$key}}]" value="{{$key}}">
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


        @section('style')
            <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        @endsection
        @section('script')
            <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript">
                var APP_URL ={!! json_encode(url('/')) !!};

                function filterGlobal() {
                    $('#example').DataTable().search(
                        $('#global_filter').val(),
                        $('#global_regex').prop('checked'),
                        $('#global_smart').prop('checked')
                    ).draw();
                }

                function filterColumn(i) {
                    $('#example').DataTable().column(i).search(
                        $('#col' + i + '_filter').val(),
                        $('#col' + i + '_regex').prop('checked'),
                        $('#col' + i + '_smart').prop('checked')
                    ).draw();
                }

                $(document).ready(function () {
                    $('#example').DataTable();

                    $('input.global_filter').on('keyup click', function () {
                        filterGlobal();
                    });

                    $('input.column_filter').on('keyup click', function () {
                        filterColumn($(this).parents('tr').attr('data-column'));
                    });

                    $(document).on('click', '.paginate_button', function () {
                        var current_page = $(this).html();
                        var length = $('select[name="example_length"]').val();
                        var pagination_url = APP_URL + "/download/per/" + length + "page/" + current_page;

                        $(".csv").attr("href", pagination_url);
                        $("form#field").attr("action", pagination_url);
                    });

                    $(document).on('change', 'select[name="example_length"]', function () {
                        var current_page = $(document).find("#example_paginate a.current").html();
                        var length = $('select[name="example_length"]').val();
                        var pagination_url = APP_URL + "/download/per/" + length + "/page/" + current_page;

                        $(".csv").attr("href", pagination_url);
                        $("form#field").attr("action", pagination_url);
                    });

                    $('button').click(function () {
                        $('#exampleModal').modal('hide');
                    });

                });


            </script>
        @endsection
    </div>
@endsection
