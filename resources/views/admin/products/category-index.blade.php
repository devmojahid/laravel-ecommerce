@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Category</h4>

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
                                    <th>image</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($allcategories as $key => $category)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $category->id }}</strong>
                                        </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $category->title }}</strong>
                                        </td>
                                        <td>{{ $category->parent_id }}</td>
                                        <td><img width="50" height="50" src="{{ asset("storage/".$category->photo) }}" alt=""></td>
                                        <td><span class="badge bg-label-primary me-1">{{ $category->status }}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('category.edit',$category->slug) }}" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
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
                        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Category title</label>
                                <input type="text" name="title" class="form-control" id="basic-default-fullname"
                                    placeholder="Man">
                            </div>

                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">select Status</label>
                                <select name="status" id="defaultSelect" class="form-select">
                                    <option>Status select</option>
                                    <option value="active">Active</option>
                                    <option value="inactive">InActive</option>
                                </select>
                            </div>

                            <div class="form-check mb-3">
                                <input class="form-check-input" value="1" name="is_parent" type="checkbox"
                                    value="1" id="is_parent" checked>
                                <label class="form-check-label" for="defaultCheck3"> Is Parent </label>
                            </div>

                            @php
                                $parents_categories = App\Models\Category::where(['is_parent' => '1'])->get();

                            @endphp


                            <div class="mb-3 d-none" id="parent_cat">
                                <label for="defaultSelect" class="form-label">select Parent Category</label>
                                <select name="status" id="defaultSelect" class="form-select">
                                    <option>Select Parent Category</option>
                                    @foreach ($parents_categories as $parents_categorie)
                                        @php
                                            $sub_categories = App\Models\Category::where(['parent_id' => $parents_categorie->id])->get();
                                        @endphp
                                        <option value="active">{{ $parents_categorie->title }}</option>
                                        @foreach ($sub_categories as $sub_categorie)
                                            <option value="active">--{{ $sub_categorie->title }}</option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="formFile" class="form-label">Photo Upload</label>
                                <input class="form-control" name="photo" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Icon Upload</label>
                                <input class="form-control" name="icon" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">summary</label>
                                <textarea id="basic-default-message" name="summary" class="form-control" placeholder="category summary"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="mt-3">

        <!-- Modal -->
        <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content p-5">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Category Update</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-fullname">Category title</label>
                            <input type="text" name="title" class="form-control" id="basic-default-fullname"
                                placeholder="Man">
                        </div>

                        <div class="mb-3">
                            <label for="defaultSelect" class="form-label">select Status</label>
                            <select name="status" id="defaultSelect" class="form-select">
                                <option>Status select</option>
                                <option value="active">Active</option>
                                <option value="inactive">InActive</option>
                            </select>
                        </div>

                        <div class="form-check mb-3">
                            <input class="form-check-input" value="1" name="is_parent" type="checkbox"
                                value="1" id="is_parent" checked>
                            <label class="form-check-label" for="defaultCheck3"> Is Parent </label>
                        </div>

                        @php
                            $parents_categories = App\Models\Category::where(['is_parent' => '1'])->get();

                        @endphp


                        <div class="mb-3 d-none" id="parent_cat">
                            <label for="defaultSelect" class="form-label">select Parent Category</label>
                            <select name="status" id="defaultSelect" class="form-select">
                                <option>Select Parent Category</option>
                                @foreach ($parents_categories as $parents_categorie)
                                    @php
                                        $sub_categories = App\Models\Category::where(['parent_id' => $parents_categorie->id])->get();
                                    @endphp
                                    <option value="active">{{ $parents_categorie->title }}</option>
                                    @foreach ($sub_categories as $sub_categorie)
                                        <option value="active">--{{ $sub_categorie->title }}</option>
                                    @endforeach
                                @endforeach
                            </select>
                        </div>


                        <div class="mb-3">
                            <label for="formFile" class="form-label">Photo Upload</label>
                            <input class="form-control" name="photo" type="file" id="formFile">
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Icon Upload</label>
                            <input class="form-control" name="icon" type="file" id="formFile">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="basic-default-message">summary</label>
                            <textarea id="basic-default-message" name="summary" class="form-control" placeholder="category summary"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('scripts')
    <script>
        $("#is_parent").change(function() {
            var is_checked = $('#is_parent').prop("checked");
            if (is_checked) {
                $("#parent_cat").addClass('d-none')
                $("#parent_cat").val("");
            } else {
                $('#parent_cat').removeClass('d-none');
            }
        });
    </script>
@endpush
