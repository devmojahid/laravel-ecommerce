@extends("admin.parsial.admin-master")

@section("admin_content")
<div class="page-header breadcrumb-wrap">
    <div class="container">
        <div class="breadcrumb">
            <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
            <span></span> Pages <span></span> My Account
        </div>
    </div>
</div>

<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-8 col-md-12 m-auto">
                <div class="row">
                    <div class="heading_s1">
                        <img class="border-radius-15" src="assets/imgs/page/reset_password.svg" alt="">
                        <h2 class="mb-15 mt-15">Set new password</h2>
                        <p class="mb-30">Please create a new password that you don’t use on any other site.</p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <form action="{{ route("user.reset.password.store") }}" method="post">
                                    @csrf
                                    <input type="hidden" name="email" value="{{ $email }}">
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group">
                                        <input type="text" required="" name="new_password" placeholder="Password *">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" required="" name="confirm_password" placeholder="Confirm you password *">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-heading btn-block hover-up">Reset password</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>=
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
