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
                                <h3 class="me-auto">Social</h3>
                            </div>
                       </div>
                        <div class="card-body">
                           <form action="{{ route('sm.update') }}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                            <div class="modal-body">
                                <div class="row  align-items-center p-3">
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Facebook Link</label>
                                            <input class="form-control" type="text" name="sm_facebook" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_facebook }}">
                                        </div>
                                    </div>
                                     <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Twitter Link</label>
                                            <input class="form-control" type="text" name="sm_twitter" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_twitter }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Youtube Link</label>
                                            <input class="form-control" type="text" name="sm_youtube" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_youtube }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Instagram Link</label>
                                            <input class="form-control" type="text" name="sm_instagram" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_instagram }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">linkedin Link</label>
                                            <input class="form-control" type="text" name="sm_linkedin" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_linkedin }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4 pb-3">
                                        <div class="form-group mb-2">
                                            <label class="form-label">Pinterest Link</label>
                                            <input class="form-control" type="text" name="sm_pinterest" placeholder="Enter Facebook Link"
                                                value="{{ $socialmedia->sm_pinterest }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="modal-footer p-3">
                                <button type="submit" class="btn btn-primary">
                                    <span data-feather="save" ></span> Social Update
                                </button>
                            </div>
                           </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
