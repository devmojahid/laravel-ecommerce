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
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Tag</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($blogs as $key => $blog)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $key + 1 }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $blog->title }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $blog->category_id }}</td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>{{ $blog->tag_id }}</td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $blog->status }}</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('blog.edit', $blog->slug) }}"
                                                        href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('blog.delete', $blog->slug) }}"><i
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
                <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-4">
                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" name="title" class="form-control" id="basic-default-fullname"
                                    placeholder="Somthing Title">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Blog Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>

                            {{-- Blog Category Select --}}

                            <div class="row mb-3">
                                <label for="defaultInput" class="form-label">Category</label>
                                <div class="col-sm-12">
                                    <select name="category_id" id="defaultSelect" class="form-select" >
                                        <option value="">Category select</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>


                            {{-- Blog Category Select --}}
                            <div class="row mb-3">
                                <label for="defaultInput" class="form-label">Tag</label>
                                <div class="col-sm-12">
                                    <select name="tag_id" id="defaultSelect" class="form-select">
                                        <option value="">Tag select</option>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Content</label>
                                <textarea id="basic-default-message" name="content" class="tinymce-editor form-control" placeholder="summary"></textarea>
                            </div>


                        </div>
                    </div>

                    {{-- SEO Meta Tags --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">SEO Meta Tags</h5>
                        </div>
                        <div class="card-body">
                            {{-- meta title --}}
                            <div class="row mb-3">
                                <label class="form-label" for="basic-default-name">Meta Title</label>
                                <div class="col-sm-12">
                                    <input class="form-control" name="meta_title" type="text" placeholder="Meta Title"
                                        id="html5-number-input">
                                </div>
                            </div>

                            {{-- meta Description --}}
                            <div class="row mb-3">
                                <label class="form-label" for="basic-default-name">Meta Description</label>
                                <div class="col-sm-12">
                                    <textarea class="tinymce-editor form-control" rows="10" name="meta_description" type="text" placeholder="Meta Description"
                                        id="html5-number-input"></textarea>
                                </div>
                            </div>

                            {{-- meta keywords --}}
                            <div class="row mb-3">
                                <label class="form-label" for="basic-default-name">Meta Keywords</label>
                                <div class="col-sm-12">
                                    <input class="form-control" name="meta_keywords" type="text"
                                        placeholder="Meta Keywords" id="html5-number-input">
                                </div>
                            </div>

                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
<script type="text/javascript">
    tinymce.init({
    selector: 'textarea.tinymce-editor',
    height: 400,
    menubar: true,
});
</script>
@endpush
