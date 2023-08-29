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
                        <form id="registerFormValidation" action="{{ url('/add_new_member') }}" method="post" enctype="multipart/form-data">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('/member_list') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>MEMBER</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="category_info">
                                         Name
                                    </label>
                                    <label for="category_name"></label>
                                    <input class="form-control" type="text" name="name" id="name"/>
                                </div>
                                <div class="form-group">
                                    <label for="">Select Category<star>*</star></label>
                                    <select  title="-" class="selectpicker"  data-style="btn-dark  btn-block" data-size="7" name="member_type" id="member_type"  required>
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
