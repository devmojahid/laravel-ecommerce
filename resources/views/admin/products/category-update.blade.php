@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Category</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.update',$category->slug) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Category title</label>
                                <input type="text" name="title" value="{{ $category->title }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Man">
                            </div>

                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">select Status</label>
                                <select name="status" id="defaultSelect" class="form-select">
                                    <option>Status select</option>
                                    <option @if ($category->status == "active") checked @endif value="active">Active</option>
                                    <option @if ($category->status == "active") checked @endif value="inactive">InActive</option>
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
                                <textarea id="basic-default-message" name="summary" class="form-control" placeholder="category summary">{{  $category->summary  }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
