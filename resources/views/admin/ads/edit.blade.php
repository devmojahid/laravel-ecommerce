@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span>Ads</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('ads.update',$ad->id) }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Title</label>
                                <input type="text" name="title" value="{{ $ad->title }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Amazon">
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" value="{{ $ad->image }}" name="image" type="file" id="formFile">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Link Url</label>
                                <input type="url" name="url" value="{{ $ad->url }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Bangladesh">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Link Text</label>
                                <input type="text" name="link_text" value="{{ $ad->link_text }}" class="form-control" id="basic-default-fullname"
                                    placeholder="Bangladesh">
                            </div>

                            <div class="mb-3">
                                <label for="html5-color-input" class="col-md-2 col-form-label">Background Color</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="background_color" type="color" value="{{ $ad->background_color }}"
                                        id="html5-color-input">
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-message">Description</label>
                                <textarea id="basic-default-message" name="description" class="form-control" placeholder="description">{{ $ad->description }}</textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
