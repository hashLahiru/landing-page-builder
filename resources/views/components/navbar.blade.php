<nav class="navbar navbar-expand-lg nav-down navbar-absolute navbar-transparent" color-on-scroll="500">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="{{ $navbarData->nav_title_url ?? null }}" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom" target="_blank">
            {{ $navbarData->nav_title ?? null }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" data-nav-image="{{ asset($navbarData->nav_img ?? null ) }}" data-color="orange">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="{{ $navbarData->nav_text1_url ?? null }} " class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">
                {{ $navbarData->nav_text1 ?? null }} </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger">
              <a href="{{ $navbarData->nav_text1A_url ?? null }} " class="dropdown-item">
                {{ $navbarData->nav_text1A ?? null }}
              </a>
              <a href="{{ $navbarData->nav_text1B_url ?? null }} " class="dropdown-item">
                {{ $navbarData->nav_text1B ?? null }}
              </a>
              <a href="{{ $navbarData->nav_text1C_url ?? null }} " class="dropdown-item">
                {{ $navbarData->nav_text1C ?? null }}
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href=" {{ $navbarData->nav_text2_url ?? null }}" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown">
                {{ $navbarData->nav_text2 ?? null }}
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" data-scroll="true" data-id="#headers" href="  {{ $navbarData->nav_text2A_url ?? null }}">
                <i class="{{ $navbarData->nav_text2A_icon ?? null }}"></i>
                {{ $navbarData->nav_text2A ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#features" href="  {{ $navbarData->nav_text2B_url ?? null }}">
                <i class="{{ $navbarData->nav_text2B_icon ?? null }}"></i>
                {{ $navbarData->nav_text2B ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#blogs" href="  {{ $navbarData->nav_text2C_url ?? null }}">
                <i class="{{ $navbarData->nav_text2C_icon ?? null }}"></i>
                {{ $navbarData->nav_text2C ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#teams" href="  {{ $navbarData->nav_text2D_url ?? null }}">
                <i class="{{ $navbarData->nav_text2D_icon ?? null }}"></i>
                 {{ $navbarData->nav_text2D ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#projects" href="{{ $navbarData->nav_text2E_url ?? null }}">
                <i class="{{ $navbarData->nav_text2E_icon ?? null }}"></i>
                {{ $navbarData->nav_text2E ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#pricing" href="{{ $navbarData->nav_text2F_url ?? null }}">
                <i class="{{ $navbarData->nav_text2F_icon ?? null }}"></i>
                {{ $navbarData->nav_text2F ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#testimonials" href="{{ $navbarData->nav_text2G_url ?? null }}">
                <i class="{{ $navbarData->nav_text2G_icon ?? null }}"></i>
                {{ $navbarData->nav_text2G ?? null }}
              </a>
              <a class="dropdown-item" data-scroll="true" data-id="#contact-us" href="{{ $navbarData->nav_text2H_url ?? null }}">
                <i class="{{ $navbarData->nav_text2H_icon ?? null }}"></i>
                {{ $navbarData->nav_text2H ?? null }}
              </a>
            </div>
          </li>
          <li class="dropdown nav-item">
            <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
              Examples
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-danger" aria-labelledby="navbarDropdownMenuLink1">
              <a class="dropdown-item" href="about-us.html">
                <i class="nc-icon nc-bank"></i>
                About-us
              </a>
              <a class="dropdown-item" href="add-product.html">
                <i class="nc-icon nc-basket"></i>
                Add Product
              </a>
              <a class="dropdown-item" href="blog-post.html">
                <i class="nc-icon nc-badge"></i>
                Blog Post
              </a>
              <a class="dropdown-item" href="blog-posts.html">
                <i class="nc-icon nc-bullet-list-67"></i>
                Blog Posts
              </a>
              <a class="dropdown-item" href="contact-us.html">
                <i class="nc-icon nc-mobile"></i>
                Contact Us
              </a>
              <a class="dropdown-item" href="discover.html">
                <i class="nc-icon nc-world-2"></i>
                Discover
              </a>
              <a class="dropdown-item" href="ecommerce.html">
                <i class="nc-icon nc-send"></i>
                Ecommerce
              </a>
              <a class="dropdown-item" href="landing-page.html">
                <i class="nc-icon nc-spaceship"></i>
                Landing Page
              </a>
              <a class="dropdown-item" href="login-page.html">
                <i class="nc-icon nc-lock-circle-open"></i>
                Login Page
              </a>
              <a class="dropdown-item" href="product-page.html">
                <i class="nc-icon nc-album-2"></i>
                Product Page
              </a>
              <a class="dropdown-item" href="profile-page.html">
                <i class="nc-icon nc-single-02"></i>
                Profile Page
              </a>
              <a class="dropdown-item" href="register-page.html">
                <i class="nc-icon nc-bookmark-2"></i>
                Register Page
              </a>
              <a class="dropdown-item" href="search-with-sidebar.html">
                <i class="nc-icon nc-zoom-split"></i>
                Search Page
              </a>
              <a class="dropdown-item" href="settings.html">
                <i class="nc-icon nc-settings-gear-65"></i>
                Settings Page
              </a>
              <a class="dropdown-item" href="twitter-redesign.html">
                <i class="nc-icon nc-tie-bow"></i>
                Twitter
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="btn btn-round btn-danger" href="https://www.creative-tim.com/product/paper-kit-2-pro" target="_blank">
              <i class="nc-icon nc-cart-simple"></i> Buy Now
            </a>
          </li>
          <!-- <li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
						<i class="fab fa-twitter"></i>
						<p class="hidden-lg-up">Twitter</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
						<i class="fab fa-facebook-square"></i>
						<p class="hidden-lg-up">Facebook</p>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
						<i class="fab fa-instagram"></i>
						<p class="hidden-lg-up">Instagram</p>
					</a>
				</li> -->
        </ul>
      </div>
    </div>
  </nav>





















{{-- <nav class="navbar navbar-expand-lg fixed-top nav-down">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="/" rel="tooltip" title="Paper Kit 2 PRO" data-placement="bottom">
                Paper Kit 2 Pro
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation" data-nav-image="{{ asset('img/blurred-image-1.jpg') }}">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink"
                        data-toggle="dropdown">
                        Components
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav> --}}
