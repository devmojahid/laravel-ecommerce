@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Brands</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>SI.</th>
                                    <th>Project</th>
                                    <th>parent Id</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($brands as $key=>$brand)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $key+1 }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $brand->name }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img width="50" height="50" src="{{ asset("storage/".$brand->logo) }}" alt=""></td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $brand->status }}</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('brand.edit',$brand->slug) }}" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('brand.delete',$brand->slug) }}"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl">

                <div class="card mb-4">
                    <div class="card-body">
                        <form action="{{ route("brand.store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Name</label>
                                <input type="text" name="name" class="form-control" id="basic-default-fullname"
                                    placeholder="Amazon">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Logo Upload</label>
                                <input class="form-control" name="logo" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Brand Email</label>
                                <input type="email" name="email" class="form-control" id="basic-default-fullname"
                                    placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">City</label>
                                <input type="text" name="city" class="form-control" id="basic-default-fullname"
                                    placeholder="Bangladesh">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Summary</label>
                                <textarea id="basic-default-message" name="summary" class="form-control" placeholder="summary"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

