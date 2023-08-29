@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@endsection

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                            <span><b> Success - </b> {{ Session::get('success') }}</span>
                        </div>
                    @endif

                    @if(Session::get('error'))
                        <div class="alert alert-warning">
                            <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                            <span><b> Success - </b> {{ Session::get('error') }}</span>
                        </div>
                    @endif

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4 class="title">Member Info List</h4>
                    <br>

                    <div class="card">
                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th class="text-center"> Category</th>
                                        <th class="text-center"> Name</th>
                                        <th class="text-center"> Designation</th>
                                        <th class="text-center"> Mobile</th>
                                        <th class="text-center"> Image</th>
                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($all_members))
                                        @foreach($all_members as $all_member)
                                            <tr class="text-center">
                                                <td>{!! $all_member->member_type !!}</td>

                                                <td>{!! $all_member->name !!}</td>
                                                <td>{!! $all_member->designation !!}</td>
                                                <td>{!! $all_member->mobile !!}</td>
                                                <td class="text-center">
                                                    <img src="{!! $all_member->image !!}" width="100px" height="auto" alt=""> </td>
                                                <td>

                                                    <a href="#" class="btn btn-simple btn-warning btn-icon" data-toggle="modal" onclick="get_member_data({{$all_member->id}})" data-target="#BrandModal"><i class="ti-pencil-alt"></i></a>

                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand"  id="del_brand_item" onclick="deleteMember({{ $all_member->id }})"><i class="ti-trash"></i></a>

                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--  end card  -->
                </div> <!-- end col-md-12 -->

                {{--<div class="col-md-4 col-md-offset-4">--}}
                {{--<div class="card">--}}
                {{--<div class="card-content text-center">--}}
                {{--<h5>Custom HTML description</h5>--}}
                {{--<button class="btn btn-default btn-fill" onclick="demo.showSwal('custom-html')">Try me!</button>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
            </div> <!-- end row -->

        </div>
    </div>

    <div class="modal fade" id="BrandModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Member Information</h4>
                </div>
                <form action="{{ url('/update_member_info') }}" method="post" enctype="multipart/form-data">

                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="member_id" hidden name="member_id">

                            <div class="form-group">
                                <label class="control-label" for="category_info">
                                    Name
                                </label>
                                <label for="category_name"></label>
                                <input class="form-control" type="text" name="name" id="name"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="category_info">
                                    Selected Type
                                </label>
                                <label for="category_name"></label>
                                <input class="form-control" type="text"  id="old_type" readonly/>
                            </div>
                            <div class="form-group">
                                <label for="">Select Category<star>*</star></label>
                                <select  title="-" class="selectpicker"  data-style="btn-dark  btn-block" data-size="7" name="member_type" id="member_type" >
                                    <option value="teacher">Teacher</option>
                                    <option value="member">Faculty Member</option>
                                    <option value="govt_body">Governing Body</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="category_info">
                                    Designation
                                </label>
                                <label for="category_name"></label>
                                <input class="form-control" type="text" name="designation" id="designation"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="category_info">
                                    Mobile
                                </label>
                                <label for="category_name"></label>
                                <input class="form-control" type="text" name="mobile" id="mobile"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Image </label>
                                <input type="file" name="image" class="form-control"/>
                            </div>

                            <div class="form-group">
                                <label for="old_logo">Old Image</label>
                                <br>
                                <img src="" alt="" width="50" height="auto" id="old_logo">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" >Update</button>
                    </div>


                </form>


            </div>

        </div>
    </div>

@endsection

@section('script')
    <script>

    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            $('#datatables').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search records",
                    class: 'navbar-form navbar-left navbar-search-form'
                }
            });


            var table = $('#datatables').DataTable();
            // Edit record
            table.on( 'click', '.edit', function () {
                $tr = $(this).closest('tr');

                var data = table.row($tr).data();
                alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );
            } );

            // Delete a record
            table.on( 'click', '.remove', function (e) {
                $tr = $(this).closest('tr');
                table.row($tr).remove().draw();
                e.preventDefault();
            } );

            //Like record
            table.on( 'click', '.like', function () {
                alert('You clicked on Like button');
            });

        });
    </script>
    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
@endsection


