@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">

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
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <form id="registerFormValidation" action="{{ url('/add_new_message') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('/message_list') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>MESSAGE</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="name">
                                        Name
                                    </label>

                                    <input class="form-control" type="text" name="name" id="name"/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="designation">
                                        Designation
                                    </label>

                                    <input class="form-control" type="text" name="designation" id="designation"/>
                                </div>

                                <div class="form-group">
                                    <label class="control-label" for="group">
                                        Group/Company Name
                                    </label>

                                    <input class="form-control" type="text" name="group" id="group"/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="message">Message<star>*</star></label>
                                    {{--<input class="form-control" name="title_description" id="title_description" type="text" />--}}
                                    <textarea rows="3" class="form-control" name="message" id="message" type="text" ></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Image </label>
                                    <input type="file" name="image" class="form-control"/>
                                </div>
                                <div class="category"><star>*</star> Required fields</div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                <div class="clearfix"></div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Sociallinker_Icon--}}
@endsection
