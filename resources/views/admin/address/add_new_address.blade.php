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
                        <form id="registerFormValidation" action="{{ url('/add_new_address') }}" method="post">
                            @csrf()
                            <div class="card-header">
                                <a href="{{ url('/address_list') }}" class="btn btn-outline-dark  pull-right">List</a>

                                <div class="form-group pull-left">
                                    <h5><strong>ADDRESS</strong></h5>
                                </div>

                            </div>
                            <div class="clearfix"></div>

                            <div class="card-content">
                                <div class="form-group">
                                    <label class="control-label" for="category_info">
                                        EIN NO<star>*</star>
                                    </label>
                                    <label for="category_name"></label><input class="form-control" type="text" name="ein_no" id="ein_no" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="category_info">
                                        SCHOOL CODE
                                    </label>
                                    <label for="category_name"></label><input class="form-control" type="text" name="school_code" id="school_code" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="category_info">
                                        COLLEGE CODE
                                    </label>
                                    <label for="category_name"></label>
                                    <input class="form-control" type="text" name="college_code" id="college_code" />
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="link">PHONE</label>
                                    <input class="form-control" name="phone" id="phone" type="text" required/>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="address">ADDRESS</label>
                                    <input class="form-control" name="address"  type="text" required/>
                                </div>

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
