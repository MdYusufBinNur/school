@extends('layouts.app')

{{--@section('style')--}}
    {{--<link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">--}}
{{--@endsection--}}
@section('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>--}}
    {{-- ...Some more scripts... --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
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
                    <h4 class="title">Social Linker List</h4>
                    <br>

                    <div class="card">
                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover text-center" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr>

                                        <th class="text-center"> Gallery Title</th>
                                        <th class="text-center"> Images</th>

                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($all_galleries))
                                        @foreach($all_galleries as $all_gallery)
                                            <tr>


                                                <td>{!! $all_gallery->gallery_title !!}</td>
                                                {{--<td>{!! $all_gallery->gallery_image !!}</td>--}}


                                                <td>
                                                    @foreach (json_decode($all_gallery->gallery_images) as $key=>$image)
                                                        @if($key%2 == 0)
                                                            <img src="{!! $image !!}" width="75px" height="auto" alt=""> &nbsp;
                                                        @endif

                                                    @endforeach
                                                        <br class="mb-20 mt-20">
                                                    @foreach (json_decode($all_gallery->gallery_images) as $key=>$image)
                                                        @if($key%2 != 0)
                                                            <img src="{!! $image !!}" width="75px" height="auto" alt=""> &nbsp;
                                                        @endif

                                                    @endforeach

                                                </td>

                                              {{--  <td>
                                                    @php($i = 0)
                                                    @foreach (json_decode($all_gallery->gallery_images) as $image)
                                                        @if($i%2 == 0)

                                                                <img src="{!! $image !!}" width="75px" height="auto" alt=""> &nbsp;
                                                        @endif
                                                    @php($i++)
                                                    @endforeach
                                                    <br class="mb-20 mt-20">
                                                    @foreach (json_decode($all_gallery->gallery_images) as $image)
                                                        @if($i%2 != 0)
                                                            <img src="{!! $image !!}" width="75px" height="auto" alt=""> &nbsp;
                                                        @endif
                                                        @php($i++)
                                                    @endforeach

                                                </td>--}}

                                                <td>

                                                    <a href="#" class="btn btn-simple btn-warning btn-icon" data-toggle="modal" onclick="get_gallery_data({{$all_gallery->id}})" data-target="#BrandModal"><i class="ti-pencil-alt"></i></a>

                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand"  id="del_brand_item" onclick="deleteGallery({{ $all_gallery->id }})"><i class="ti-trash"></i></a>
                                                    {{--<form action="{{ url('/delete_brand' ) }}" method="post" id="form">--}}
                                                    {{--@csrf()--}}
                                                    {{--<input type="text" hidden value="{{$all_brand_list->id}}" name="deleteBrand">--}}
                                                    {{--<button href="#" type="submit" class="btn btn-simple btn-info btn-icon like" onclick="archiveFunction()"><i class="ti-trash"></i></button>--}}
                                                    {{--</form>--}}
                                                </td>
                                            </tr>

                                        @endforeach
                                    @endif

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div><!--  end card  -->

                    <div class="col-12 text-center">
                        {{ $all_galleries->links() }}
                    </div>
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
                    <h4 class="modal-title">Gallery Information</h4>
                </div>
                <form action="{{ url('/update_gallery_info') }}" method="post" enctype="multipart/form-data">

                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="gallery_id" hidden name="gallery_id">


                            <div class="form-group">
                                <label class="control-label" for="gallery_title">
                                    Gallery Title
                                </label>
                                <input class="form-control" type="text" name="gallery_title" id="gallery_title" required/>
                            </div>

                       {{--     <div class="form-group input-group control-group increment">

                                <input type="file" name="gallery_image[]" class="form-control " />
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                </div>

                            </div>

                            <div class="clone hide">
                                <div class="form-group control-group input-group" style="margin-top:10px">
                                    <input type="file" name="gallery_image[]" class="form-control">
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                    </div>
                                </div>
                            </div>--}}
                            <div class="form-group">

                                <label for="document">Documents</label>
                                <div class="needsclick dropzone" id="document-dropzone">

                                </div>
                            </div>


                            <div class="form-group" >
                                <label for="old_logo">Old Image</label>
                                <br>
                                <div class="row" id="old_img">
                                    <div class="col-3" >
                                        <img src="" alt="" width="50" height="auto" id="old_logo">
                                    </div>
                                </div>

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

    <script>
        var uploadedDocumentMap = {}
        Dropzone.options.documentDropzone = {
            url: '{{ route('projects.storeMedia') }}',
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            success: function (file, response) {
                $('form').append('<input type="hidden" name="gallery_image[]" value="' + response.name + '">')
                uploadedDocumentMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                let name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedDocumentMap[file.name]
                }
                $('form').find('input[name="gallery_image[]"][value="' + name + '"]').remove()
            },
            init: function () {
                        @if(isset($project) && $project->document)
                let files =
                {!! json_encode($project->document) !!}
                    for (var i in files) {
                    var file = files[i]
                    this.options.addedfile.call(this, file)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="document[]" value="' + file.file_name + '">')
                }
                @endif
            }
        }
    </script>
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


