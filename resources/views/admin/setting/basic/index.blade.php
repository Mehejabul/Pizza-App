@extends('layouts.dashboard')
@section('content')
<div class="content">
    <div class="pb-5">
        <div class="row g-4">
            <div class="col-12 col-xxl-6">
                <div class="mb-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex mb-2">
                                <h3 class="me-auto">BasicSetting</h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('basic.update') }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-body">
                                    <div class="row  align-items-center p-3">
                                        <div class="col-md-4 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">website name</label>
                                                <input class="form-control" type="text" name="bs_company"
                                                    placeholder="Enter Website Name"
                                                    value="{{ $basicsetting->bs_company }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">website url</label>
                                                <input class="form-control" type="text" name="bs_url"
                                                    placeholder="Enter Website Url" value="{{ $basicsetting->bs_url }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Website Title</label>
                                                <input class="form-control" type="text" name="bs_title"
                                                    placeholder="Enter Website Title"
                                                    value="{{$basicsetting->bs_title }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center">
                                            <div class="form-group mb-2">
                                                <label class="form-label" style="float: left;">Logo</label>
                                                <input name="old_bs_logo" type="hidden" value="{{ $basicsetting->bs_logo }}">
                                                <input id="input_image" class="form-control" type="file" name="bs_logo">
                                                <img id="input_image_preview" class="mt-3" width="200px" height="120px"
                                                    src="{{ empty($basicsetting->bs_logo) ? asset('media/no-image.png') : asset($basicsetting->bs_logo) }}" alt="">
                                            </div>
                                        </div>
                                            <div class="col-md-4 text-center">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" style="float: left;">Fabicon</label>
                                                    <input name="old_bs_fabicon" type="hidden"
                                                        value="{{ $basicsetting->bs_fabicon }}">
                                                    <input id="input_image" class="form-control" type="file"
                                                        name="bs_fabicon">
                                                    <img id="input_image_preview" class="mt-3" width="200px"height="120px"
                                                        src="{{ empty($basicsetting->bs_fabicon) ? asset('media/no-image.png') : asset($basicsetting->bs_fabicon) }}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-4 text-center">
                                                <div class="form-group mb-2">
                                                    <label class="form-label" style="float: left;">Footer logo</label>
                                                    <input name="old_bs_flogo" type="hidden"
                                                        value="{{ $basicsetting->bs_flogo }}">
                                                    <input id="input_image" class="form-control" type="file"
                                                        name="bs_flogo">
                                                    <img id="input_image_preview" class="mt-3" width="200px"height="120px"
                                                        src="{{ empty($basicsetting->bs_flogo) ? asset('media/no-image.png') : asset($basicsetting->bs_flogo) }}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer p-3">
                                            <button type="submit" class="btn btn-primary">
                                                <span data-feather="save"></span> Basic Update
                                            </button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
