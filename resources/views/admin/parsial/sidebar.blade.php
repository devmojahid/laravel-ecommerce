<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('dashboard') }}" class="app-brand-link">
        <span class="app-brand-text demo menu-text fw-bolder ms-2">Final Ecomm</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

        <!-- Products -->

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon bx bx-briefcase-alt-2"></i>
          <div data-i18n="Authentications">Products</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route("category.index") }}" class="menu-link">
              <div data-i18n="Basic">Category</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-register-basic.html" class="menu-link">
              <div data-i18n="Basic">Tags</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route("brand.index") }}" class="menu-link">
              <div data-i18n="Basic">Brands</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route("color.index") }}" class="menu-link">
              <div data-i18n="Basic">Color</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route("product.index") }}" class="menu-link">
              <div data-i18n="Basic">ALl Product</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route("coupon.index") }}" class="menu-link">
              <div data-i18n="Basic">Coupons</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route("product.create") }}" class="menu-link">
              <div data-i18n="Basic">Create Product</div>
            </a>
          </li>
        </ul>
      </li>

       <!-- Blogs -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
          <div data-i18n="Authentications">Blog</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route("blog.index") }}" class="menu-link">
              <div data-i18n="Basic">Posts</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{ route("category.index") }}" class="menu-link">
              <div data-i18n="Basic">Categories</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-forgot-password-basic.html" class="menu-link">
              <div data-i18n="Basic">Tags</div>
            </a>
          </li>
        </ul>
      </li>

        <!-- Slider -->
        <li class="menu-item">
            <a href="{{ route("order.index") }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Order List</div>
            </a>
        </li>

        <!-- Slider -->
        <li class="menu-item">
            <a href="{{ route("slider.index") }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Slider</div>
            </a>
        </li>

        <!-- Ads -->
        <li class="menu-item">
            <a href="{{ route("ads.index") }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Analytics">Ads</div>
            </a>
        </li>
       <!-- Manage Site -->
      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
          <div data-i18n="Authentications">Manage Site</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="{{ route("settings.index") }}" class="menu-link">
              <div data-i18n="Basic">General Settings</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-register-basic.html" class="menu-link">
              <div data-i18n="Basic">Home Page</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-forgot-password-basic.html" class="menu-link">
              <div data-i18n="Basic">Services</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-forgot-password-basic.html" class="menu-link">
              <div data-i18n="Basic">Social Login</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-forgot-password-basic.html" class="menu-link">
              <div data-i18n="Basic">SMTP</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
          <div data-i18n="Authentications">Authentications</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="auth-login-basic.html" class="menu-link" target="_blank">
              <div data-i18n="Basic">Login</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-register-basic.html" class="menu-link" target="_blank">
              <div data-i18n="Basic">Register</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
              <div data-i18n="Basic">Forgot Password</div>
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </aside>
