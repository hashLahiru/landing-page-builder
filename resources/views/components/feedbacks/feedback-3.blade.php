<div class="testimonials-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <h2 class="title"> {{ $feedback3Data->fb3_title ?? null }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ml-auto">
          <div class="card" data-background="color" data-color="orange">
            <div class="card-body">
              <div class="author">
                <a href="javascript:;">
                  <img src="{{ asset($feedback3Data->fb3_img1 ?? 'img/default.jpg') }}" alt="..." class="avatar img-raised">
               
                  <span>{{ $feedback3Data->fb3_text1 ?? null }}</span>
                </a>
              </div>
              <span class="category-social pull-right">
                <i class="{{ $feedback3Data->fb3_icon1 ?? null }}"></i>
              </span>
              <div class="clearfix"></div>
              <p class="card-description">
                {{ $feedback3Data->fb3_para1 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" data-background="color" data-color="green">
            <div class="card-body">
              <div class="author">
                <a href="javascript:;">
                  <img src="{{ asset($feedback3Data->fb3_img2 ?? 'img/default.jpg') }}" alt="..." class="avatar img-raised">

                  <span>{{ $feedback3Data->fb3_text2 ?? null }}</span>
                </a>
              </div>
              <span class="category-social pull-right">
                <i class="{{ $feedback3Data->fb3_icon2 ?? null }}"></i>
              </span>
              <div class="clearfix"></div>
              <p class="card-description">
                {{ $feedback3Data->fb3_para2 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mr-auto">
          <div class="card" data-background="color" data-color="yellow">
            <div class="card-body">
              <div class="author">
                <a href="javascript:;">
                  <img src="{{ asset($feedback3Data->fb3_img3 ?? 'img/default.jpg') }}" alt="..." class="avatar img-raised">

                  <span>{{ $feedback3Data->fb3_text3 ?? null }}</span>
                </a>
              </div>
              <span class="category-social pull-right">
                <i class="{{ $feedback3Data->fb3_icon3 ?? null }}"></i>
              </span>
              <div class="clearfix"></div>
              <p class="card-description">
                {{ $feedback3Data->fb3_para3 ?? null }}
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ml-auto">
          <div class="card" data-background="color" data-color="blue">
            <div class="card-body">
              <div class="author">
                <a href="javascript:;">
                  <img src="{{ asset($feedback3Data->fb3_img4 ?? 'img/default.jpg') }}" alt="..." class="avatar img-raised">

                  <span>{{ $feedback3Data->fb3_text4 ?? null }}</span>
                </a>
              </div>
              <span class="category-social pull-right">
                <i class="{{ $feedback3Data->fb3_icon4 ?? null }}"></i>
              </span>
              <div class="clearfix"></div>
              <p class="card-description">
                {{ $feedback3Data->fb3_para4 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mr-auto">
          <div class="card" data-background="color" data-color="purple">
            <div class="card-body">
              <div class="author">
                <a href="javascript:;">
                  <img src="{{ asset($feedback3Data->fb3_img5 ?? 'img/default.jpg') }}" alt="..." class="avatar img-raised">

                  <span>{{ $feedback3Data->fb3_text5 ?? null }}</span>
                </a>
              </div>
              <span class="category-social pull-right">
                <i class="{{ $feedback3Data->fb3_icon5 ?? null }}"></i>
              </span>
              <div class="clearfix"></div>
              <p class="card-description">
                {{ $feedback3Data->fb3_para5 ?? null }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>