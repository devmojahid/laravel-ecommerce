@extends('admin.parsial.admin-master')

@section('admin_content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Product/</span> Coupon</h4>

        <!-- Basic Layout -->
        <div class="row">
            <div class="col-xl">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>SI.</th>
                                    <th>Code</th>
                                    <th>Value</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($coupons as $key => $coupon)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $key + 1 }} </td>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> {{ $coupon->code }} </td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $coupon->value }}</span> </td>
                                        <td><span class="badge bg-label-primary me-1"> {{ $coupon->status }}</span> </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ route('coupon.edit', $coupon->id) }}"
                                                        href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('coupon.delete', $coupon->id) }}"><i
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
                        <form action="{{ route('coupon.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Code</label>
                                <input type="text" name="code" class="form-control" id="basic-default-fullname"
                                    placeholder="BDFCS">
                            </div>

                            <div class="row mb-3">
                                <label for="defaultInput" class="form-label">Type</label>
                                <div class="col-sm-12">
                                    <select name="type" id="defaultSelect" class="form-select">
                                        <option value="">Coupon Type</option>
                                        <option value="percent">Percent</option>
                                        <option value="fixed">Fixed</option>

                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Value</label>
                                <input type="number" name="value" class="form-control" id="basic-default-fullname"
                                    placeholder="BDFCS">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Min Ammount</label>
                                <input type="number" name="min_order_amount" class="form-control" id="basic-default-fullname"
                                    placeholder="BDFCS">
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="basic-default-fullname">Max Ammount</label>
                                <input type="number" name="max_discount_amount" class="form-control" id="basic-default-fullname"
                                    placeholder="BDFCS">
                            </div>

                            <div class="mb-3 row">
                                <label for="html5-date-input" class="form-label">Start Date</label>
                                  <input class="form-control" name="start_date" type="date" value="2021-06-18" id="html5-date-input">
                              </div>

                            <div class="mb-3 row">
                                <label for="html5-date-input" class="form-label">End Date</label>
                                  <input class="form-control" name="end_date" type="date" value="2021-06-18" id="html5-date-input">
                              </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
