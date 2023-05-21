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
                            <form action="{{ route('cont.update') }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="modal-body">
                                    <div class="row  align-items-center p-3">
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Phone 1</label>
                                                <input class="form-control" type="text" name="cont_phone1"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_phone1 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Phone 2</label>
                                                <input class="form-control" type="text" name="cont_phone2"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_phone2 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Phone 3</label>
                                                <input class="form-control" type="text" name="cont_phone3"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_phone3 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Phone 4</label>
                                                <input class="form-control" type="text" name="cont_phone4"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_phone4 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">email1</label>
                                                <input class="form-control" type="text" name="cont_email1"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_email1 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">email2</label>
                                                <input class="form-control" type="text" name="cont_email2"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_email2 }}">
                                            </div>
                                        </div>
                                         <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">email3</label>
                                                <input class="form-control" type="text" name="cont_email3"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_email3 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">email4</label>
                                                <input class="form-control" type="text" name="cont_email4"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_email4 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Address1</label>
                                                <input class="form-control" type="text" name="cont_address1"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_address1 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Address2</label>
                                                <input class="form-control" type="text" name="cont_address2"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_address2 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Address3</label>
                                                <input class="form-control" type="text" name="cont_address3"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_address3 }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 pb-3">
                                            <div class="form-group mb-2">
                                                <label class="form-label">Address4</label>
                                                <input class="form-control" type="text" name="cont_address4"
                                                    placeholder="Enter Your phone"
                                                    value="{{ $continfo->cont_address4 }}">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer p-3">
                                            <button type="submit" class="btn btn-primary">
                                                <span data-feather="save"></span> contact Update
                                            </button>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
