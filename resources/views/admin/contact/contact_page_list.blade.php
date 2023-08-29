<?php
/**
 * Created by PhpStorm.
 * User: yusuf
 * Date: 9/13/2019
 * Time: 11:09 AM
 */?>

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
                    <h4 class="title">CONTACT LIST</h4>
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
                                        <th> Name</th>
                                        <th> Phone</th>
                                        <th> Subject</th>
                                        <th> Message</th>
                                        <th class="disabled-sorting">Actions</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @if(!empty($all_contacts))
                                        @foreach($all_contacts as $all_contact)
                                            <tr>
                                                <td>{!! $all_contact->name !!}</td>
                                                <td>{!! $all_contact->phone !!}</td>
                                                <td>{!! $all_contact->subject !!}</td>
                                                <td>{!! $all_contact->message !!}</td>

                                                <td>

                                                    {{--<a href="#" class="btn btn-simple btn-warning btn-icon" data-toggle="modal" onclick="get_contact_data({{$all_contact->id}})" data-target="#BrandModal"><i class="ti-pencil-alt"></i></a>--}}

                                                    <a href="" class="btn btn-simple btn-info btn-icon del_brand"  id="del_brand_item" onclick="deleteContactPage({{ $all_contact->id }})"><i class="ti-trash"></i></a>

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

            </div> <!-- end row -->

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


