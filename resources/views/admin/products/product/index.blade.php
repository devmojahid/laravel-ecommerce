@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="d-flex align-items-center justify-content-between">
            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Products/</span>All Products</h4>
            <h4 class="fw-bold py-3 mb-4"> <a href="{{ route('product.create') }}">Add Product</a> </h4>
        </div>



        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>SI.</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $key + 1 }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $product->name }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <img width="50" height="50" src="{{ asset("storage/".$product->thumbnail) }}" alt=""></td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $product->stock }}</span> </td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $product->price }}</span> </td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $product->status }}</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('product.edit', $product->slug) }}"
                                                        href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('product.delete', $product->slug) }}"><i
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
        </div>
    </div>
@endsection
