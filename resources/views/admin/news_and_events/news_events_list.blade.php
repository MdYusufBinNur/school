<?php
/**
 * Created by PhpStorm.
 * User: yusuf
 * Date: 9/14/2019
 * Time: 12:23 AM
 */
?>
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
                    <h4 class="title">News And Event Lists</h4>
                    <br>

                    <div class="card">
                        <div class="card-content">
                            <div class="toolbar">
                                <!--Here you can write extra buttons/actions for the toolbar-->
                            </div>
                            <div class="fresh-datatables">
                                <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                    <thead>
                                    <tr class="text-center">
                                        <th class="text-center"> Date</th>
                                        <th class="text-center"> Title</th>
                                        <th class="text-center"> Image</th>

                                        <th class="disabled-sorting text-center">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($all_news_events))
                                        @foreach($all_news_events as $all_news_event)
                                            <tr class="text-center">

                                                <td>{!! $all_news_event->date !!}</td>
                                                <td>{!! $all_news_event->title !!}</td>

                                                <td class="text-center">
                                                    <img src="{!! $all_news_event->image !!}" width="100px" height="auto" alt="">
                                                </td>

                                                <td>
                                                    <a href="#" class="btn btn-simple btn-warning btn-icon" data-toggle="modal" onclick="get_news_events_data({{$all_news_event->id}})" data-target="#BrandModal"><i class="ti-pencil-alt"></i></a>
                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand"  id="del_brand_item" onclick="deleteNewsEvents({{ $all_news_event->id }})"><i class="ti-trash"></i></a>
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
                    <h4 class="modal-title">News&Events Information</h4>
                </div>
                <form action="{{ url('/update_news_events_info') }}" method="post" enctype="multipart/form-data">

                    @csrf()
                    <div class="modal-body">
                        <div class="row" style="padding: 10px">

                            <input type="text" id="news_events_id" hidden name="news_events_id">

                            <div class="form-group">
                                <label class="control-label" for="news_events_title">
                                     Title
                                </label>

                                <input class="form-control" type="text" name="title" id="news_events_title"/>
                            </div>

                            <div class="form-group">
                                <label class="control-label" for="date">
                                    Date
                                </label>

                                <div class="form-group">
                                    <input type="date" name="date" id="date" class="form-control">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label">Image </label>
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


        });
    </script>
    {{--<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>--}}
@endsection



