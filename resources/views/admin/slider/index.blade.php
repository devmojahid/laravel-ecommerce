@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Slider</h4>

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
                                    <th>Image</th>
                                    <th>Background Color</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($sliders as $key=>$slider)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $key+1 }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $slider->title }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img width="50" height="50" src="{{ asset('storage/'.$slider->image) }}" alt=""></td>
                                        <td><div class="" style="
                                            width: 25px;
                                            height: 25px;
                                            background: {{ $slider->background_color }};
                                            border-radius: 50%;
                                            margin: 0 auto;
                                        "></div></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('slider.edit',$slider->id) }}" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="{{ route('slider.delete',$slider->id) }}"><i
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
                        <form action="{{ route("slider.store") }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" name="title" class="form-control" id="basic-default-fullname"
                                    placeholder="Amazon">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" name="image" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Link Url</label>
                                <input type="url" name="link" class="form-control" id="basic-default-fullname"
                                    placeholder="Bangladesh">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Link Text</label>
                                <input type="text" name="link_text" class="form-control" id="basic-default-fullname"
                                    placeholder="Bangladesh">
                            </div>

                            <div class="mb-3">
                                <label for="html5-color-input" class="col-md-2 col-form-label">Background Color</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="background_color" type="color" value="#000000"
                                        id="html5-color-input">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="basic-default-message" name="description" class="form-control" placeholder="description"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

