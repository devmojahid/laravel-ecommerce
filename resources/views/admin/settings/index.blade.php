@extends('admin.parsial.admin-master')
@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Gennarel Settings</h4>
        <form action="{{ route("settings.update") }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-10">
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Gennarel Settings</h5>
                        </div>
                        <div class="card-body">
                            {{-- Site Logo --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Logo</label>
                                <div class="col-sm-10">
                                    <input type="file" name="logo" class="form-control" id="basic-default-name" value="{{ $setting->logo }}" >
                                </div>
                            </div>
                            {{-- Favicon --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Favicon</label>
                                <div class="col-sm-10">
                                    <input type="file" name="favicon" class="form-control" id="basic-default-name" value="{{ $setting->favicon }}"
                                >
                                </div>
                            </div>

                            {{-- Phone Number --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Phone Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone" class="form-control" id="basic-default-name"
                                    value="{{ $setting->phone }}">
                                </div>
                            </div>
                            {{-- Phone Number2 --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Phone Number 2</label>
                                <div class="col-sm-10">
                                    <input type="text" name="phone2" class="form-control" id="basic-default-name"
                                    value="{{ $setting->phone2 }} ">
                                </div>
                            </div>

                            {{-- Email  --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="basic-default-name"
                                    value="{{ $setting->email }}">
                                </div>
                            </div>
                            {{-- suppport Email  --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Support Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="support_email" class="form-control" id="basic-default-name"
                                    value="{{ $setting->support_email }}">
                                </div>
                            </div>

                            {{-- Address  --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" class="form-control" id="basic-default-name"
                                    value="{{ $setting->address }}">
                                </div>
                            </div>
                            {{-- city  --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">City</label>
                                <div class="col-sm-10">
                                    <input type="text" name="city" class="form-control" id="basic-default-name"
                                    value="{{ $setting->city }}">
                                </div>
                            </div>

                            {{-- Facebook  --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Facebook</label>
                                <div class="col-sm-10">
                                    <input type="utl" name="facebook" class="form-control" id="basic-default-name"
                                    value="{{ $setting->facebook }}">
                                </div>
                            </div>

                            {{-- Twitter  --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Twitter</label>
                                <div class="col-sm-10">
                                    <input type="utl" name="twitter" class="form-control" id="basic-default-name"
                                    value="{{ $setting->twitter }}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
