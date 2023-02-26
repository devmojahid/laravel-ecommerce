@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Category</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('brand.update',$brand->slug) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" name="name" value="{{ $brand->name }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Amazon">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Logo Upload</label>
                                <input class="form-control" value="{{ $brand->logo }}" name="logo" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Brand Email</label>
                                <input type="email" name="email" value="{{ $brand->email }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">City</label>
                                <input type="text" name="city" value="{{ $brand->city }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Bangladesh">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Summary</label>
                                <textarea id="basic-default-message" name="summary" class="form-control" placeholder="summary">{{ $brand->summary }}</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
