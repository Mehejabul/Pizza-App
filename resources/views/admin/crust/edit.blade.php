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
                                <h3 class="me-auto">Edit Pizzacrust</h3>
                                <button class="btn btn-sm btn-primary me-2 deviceSubmit">
                                    <span class="text-light" data-feather="save"></span>
                                </button>
                                <a title="Back" href="{{ route('crust.index') }}" class="btn btn-sm btn-secondary">
                                    <span class="text-light" data-feather="rotate-ccw"></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('crust.update', $crust->pcrust_slug) }}" method="post" enctype="multipart/form-data" id="deviceForm">
                                @method('put')
                                @csrf
                                        <div class="row mb-4 border py-2">
                                            <label for="user-name-input" class="col-sm-3 col-form-label"> Crust Tite</label>
                                            <div class="col-sm-9">
                                                <input name="pcrust_title" type="text" class="form-control @error('pcrust_title') is-invalid @enderror" placeholder="Enter Pizza crust Title" value="{{ $crust->pcrust_title }}">
                                                 @error('pcrust_title')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-3 col-form-label"> Crust Price</label>
                                            <div class="col-sm-9">
                                                <input name="pcrust_price" type="text"class="form-control" placeholder="Enter Pizza Crust price" value="{{ $crust->pcrust_price }}">
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-3 col-form-label"> Crust Order</label>
                                            <div class="col-sm-9">
                                                <input name="pcrust_order" type="number"class="form-control @error('pcrust_order') is-invalid @enderror"placeholder="Enter pizza Crust order list" value="{{ $crust->pcrust_order }}">
                                                @error('pcrust_order')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
   @push('custom-script')
    <script>
        $(document).ready(function () {
            $('.deviceSubmit').on('click',function () {
                $('#deviceForm').submit();
            });
        });
    </script>
@endpush
