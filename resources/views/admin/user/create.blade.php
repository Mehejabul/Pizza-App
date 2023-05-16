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
                                <h3 class="me-auto">Create User</h3>
                                <button class="btn btn-sm btn-primary me-2">
                                    <span class="text-light" data-feather="save"></span>
                                </button>
                                <a title="Back" href="#" class="btn btn-sm btn-secondary">
                                    <span data-feather="rotate-ccw"></span>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                                <ul class="nav nav-underline" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#tab-home"  role="tab" aria-controls="tab-home" aria-selected="true">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#tab-profile" role="tab" aria-controls="tab-profile" aria-selected="false">Address</a>
                                    </li>
                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tab-home" role="tabpanel"aria-labelledby="home-tab">
                                        <div class="row mb-4 border py-2">
                                            <label for="user-name-input" class="col-sm-3 col-form-label"> Full Name</label>
                                            <div class="col-sm-9">
                                                <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name">
                                                 @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-3 col-form-label"> Phone</label>
                                            <div class="col-sm-9">
                                                <input name="phone" type="text"class="form-control @error('phone') is-invalid @enderror" placeholder="Enter Your Phone">
                                                @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-3 col-form-label"> Email</label>
                                            <div class="col-sm-9">
                                                <input name="email" type="email"class="form-control @error('phone') is-invalid @enderror"placeholder="Enter Your Email">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-3 col-form-label"> password</label>
                                            <div class="col-sm-9">
                                                <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your password">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-3 col-form-label"> Confirm Password</label>
                                            <div class="col-sm-9">
                                                <input name="password_confrimation" type="password"  class="form-control @error('password') is-invalid @enderror" placeholder="Enter Your Confirm Password">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-image-input" class="col-sm-3 col-form-label"> Image</label>
                                            <div class="col-sm-9">
                                                <input id="input_image" name="image" type="file" class="form-control @error('image') is-invalid @enderror" placeholder="Enter Your image">
                                                @error('image')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                         <div class="row mb-4 border py-2">
                                        <div class="col-sm-9 offset-sm-2">
                                            <img id="input_image_preview" width="200" class="rounded me-2" src="{{ asset('media/no-image.png') }}" alt="">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="tab-pane fade" id="tab-profile" role="tabpanel"
                                        aria-labelledby="profile-tab">
                                        <div class="row mb-4 border py-2">
                                            <label for="user-name-input" class="col-sm-2 col-form-label"> post office </label>
                                            <div class="col-sm-9">
                                                <input name="post_office" type="text" class="form-control @error('post_office') is-invalid @enderror" placeholder="Enter Your post_office">
                                                @error('post_office')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 border py-2">
                                            <label for="user-phone-input" class="col-sm-2 col-form-label"> Address</label>
                                            <div class="col-sm-9">
                                                <input name="address" type="text"  class="form-control @error('address') is-invalid @enderror" placeholder="Enter Your address">
                                                @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <script type="text/javascript">
    $('#input_image').change(function () {
        let reader = new FileReader();
        reader.onload = (e) => {
            $('#input_image_preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    });
</script>
    @endsection
