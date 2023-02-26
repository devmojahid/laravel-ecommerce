@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span>Create Product</h4>


        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Product Information</h5>
                        </div>
                        <div class="card-body">
                            {{-- Product Name --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="basic-default-name"
                                        placeholder="Product Name">
                                </div>
                            </div>
                            {{-- Product Category Select --}}
                            <div class="row mb-3">
                                <label for="defaultInput" class="col-sm-2 col-form-label">Category</label>
                                <div class="col-sm-10">
                                    <select name="category_id" id="defaultSelect" class="form-select">
                                        <option value=" ">Category select</option>
                                        @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Product Brand Select --}}
                            <div class="row mb-3">
                                <label for="defaultInput" class="col-sm-2 col-form-label">Brand</label>
                                <div class="col-sm-10">
                                    <select name="brand_id" id="defaultSelect" class="form-select">
                                        <option value=" ">Brand select</option>
                                        @foreach ($brands as $brand)
                                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Product Color Select --}}
                            <div class="row mb-3">
                                <label for="defaultInput" class="col-sm-2 col-form-label">Color</label>
                                <div class="col-sm-10">
                                    <select name="color_id" id="defaultSelect" class="form-select">
                                        <option value=" ">Color select</option>
                                        @foreach ($colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- weight Select --}}
                            <div class="mb-3 row">
                                <label for="html5-number-input" class="col-md-2 col-form-label">weight</label>
                                <div class="col-md-10">
                                    <input name="weight" class="form-control" type="number" value="18" id="html5-number-input">
                                </div>
                            </div>

                            {{-- Barcode Select --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Barcode</label>
                                <div class="col-sm-10">
                                    <input type="text" name="barcode" class="form-control" id="basic-default-name"
                                        placeholder="Barcode">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Product Image --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Product Images</h5>
                        </div>
                        <div class="card-body">
                            {{-- Product Thumbnail --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Thumbnail</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="thumbnail" type="file" id="formFile">
                                </div>
                            </div>
                            {{-- Gallery Images --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Gallery</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="photos[]" type="file" id="formFile" multiple>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Product Video & Audio --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Product Video & Audio</h5>
                        </div>
                        <div class="card-body">
                            {{-- Product Thumbnail --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Video</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="product_video_link" type="url"
                                        value="https://youtube.com" id="html5-url-input">
                                </div>
                            </div>
                            {{-- Gallery Images --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Audio</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="product_audio_link" type="url"
                                        value="https://youtube.com" id="html5-url-input">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Product price + stock --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Product price + stock</h5>
                        </div>
                        <div class="card-body">
                            {{-- Product Price --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Price</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="price" type="number" value="18"
                                        id="html5-number-input">
                                </div>
                            </div>

                            {{-- Product Discount Type --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Discount Type</label>
                                <div class="col-sm-10">
                                    <select name="discount_type" id="defaultSelect" class="form-select">
                                        <option value="flat">Flat</option>
                                        <option value="percent">Percent</option>
                                    </select>
                                </div>
                            </div>

                            {{-- Product Discount Price --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Discount</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="discount" type="number" value="0"
                                        id="html5-number-input">
                                </div>
                            </div>

                            {{-- Product Discount Start --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Discount Start</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="discount_start" type="datetime-local"
                                        value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                                </div>
                            </div>

                            {{-- Product Discount End --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Discount End</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="discount_end" type="datetime-local"
                                        value="2021-06-18T12:30:00" id="html5-datetime-local-input">
                                </div>
                            </div>

                            {{-- Product Sku --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Sku</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="sku" type="text" value="sku"
                                        id="html5-text-input">
                                </div>
                            </div>

                            {{-- Product Stock --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Stock</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="number" name="stock" value="0"
                                        id="html5-number-input">
                                </div>
                            </div>


                        </div>
                    </div>

                    {{-- Product Summary Description --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Product Description</h5>
                        </div>
                        <div class="card-body">
                            {{-- summary --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Summary</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" name="summary" type="text" placeholder="Summary"
                                        id="html5-number-input"></textarea>
                                </div>
                            </div>

                            {{-- Description --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control tinymce-editor" rows="10" name="description" type="text" placeholder="Description"
                                        id="html5-number-input"></textarea>
                                </div>
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
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="meta_title" type="text"
                                        placeholder="Meta Title" id="html5-number-input">
                                </div>
                            </div>

                            {{-- meta Description --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control tinymce-editor" rows="10" name="meta_description" type="text" placeholder="Meta Description"
                                        id="html5-number-input"></textarea>
                                </div>
                            </div>

                            {{-- meta keywords --}}
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Meta Keywords</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="meta_keywords" type="text"
                                        placeholder="Meta Title" id="html5-number-input">
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    {{-- Shipping Configuration --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Shipping Configuration</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-6 col-form-label" for="basic-default-name">free_shipping</label>
                                <div class="col-sm-6">
                                    <input name="free_shipping" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes" >
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Vat Tax --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Vat Tax</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Vat</label>
                                <div class="col-sm-10">
                                    <input name="vat" class="form-control" type="number"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-default-name">Tax</label>
                                <div class="col-sm-10">
                                    <input name="tax" class="form-control" type="number"
                                        id="flexSwitchCheckChecked">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Featured --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Featured</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-8">
                                    <input name="featured" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- trending --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Trending</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-8">
                                    <input name="trending" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- best_rated --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Best Rated</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-8">
                                    <input name="best_rated" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- hot_new --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Hot New</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-8">
                                    <input name="hot_new" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- special_offer --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Special Offer</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-8">
                                    <input name="special_offer" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- special_deal --}}
                    <div class="card mb-4">
                        <div class="card-header border-bottom mb-3">
                            <h5 class="mb-0">Special Deal</h5>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label" for="basic-default-name">Status</label>
                                <div class="col-sm-8">
                                    <input name="special_deal" class="form-check-input" type="checkbox"
                                        id="flexSwitchCheckChecked" value="yes">
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

@push("scripts")
<script type="text/javascript">
    tinymce.init({
    selector: 'textarea.tinymce-editor',
    height: 400,
    menubar: true,
});
</script>
@endpush
