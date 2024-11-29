<div class="testimonials-1 section-image" style="background-image: url('{{asset($feedback1Data->fb1_img_url ?? 'img/default.jpg') }} ')">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <h2 class="title">{{ $feedback1Data->fb1_title ?? null }}</h2>
          <h5 class="description">{{ $feedback1Data->fb1_description ?? null }}</h5>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-testimonial">
            <div class="card-icon">
              <i class="{{ $feedback1Data->fb1_icon1 ?? null }}" aria-hidden="true"></i>
            </div>
            <div class="card-body">
              <p class="card-description">
                {{ $feedback1Data->fb1_para1 ?? null }}
              </p>
              <div class="card-footer">
                <h4 class="card-title">{{ $feedback1Data->fb1_text1 ?? null }}</h4>
                <h6 class="card-category">{{ $feedback1Data->fb1_usertext1 ?? null }}</h6>
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="{{asset($feedback1Data->fb1_profile1 ?? 'img/default.jpg') }}" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-testimonial">
            <div class="card-icon">
              <i class="{{ $feedback1Data->fb1_icon2 ?? null }}" aria-hidden="true"></i>
            </div>
            <div class="card-body">
              <p class="card-description">
                {{ $feedback1Data->fb1_para2 ?? null }}
              </p>
              <div class="card-footer">
                <h4 class="card-title">{{ $feedback1Data->fb1_text2 ?? null }}</h4>
                <h6 class="card-category">{{ $feedback1Data->fb1_usertext2 ?? null }}</h6>
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="{{asset($feedback1Data->fb1_profile2 ?? 'img/default.jpg') }}" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-testimonial">
            <div class="card-icon">
              <i class="{{ $feedback1Data->fb1_icon3 ?? null }}" aria-hidden="true"></i>
            </div>
            <div class="card-body">
              <p class="card-description">
                {{ $feedback1Data->fb1_para3 ?? null }}
              </p>
              <div class="card-footer">
                <h4 class="card-title">{{ $feedback1Data->fb1_text3 ?? null }}</h4>
                <h6 class="card-category">{{ $feedback1Data->fb1_usertext3 ?? null }}</h6>
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="{{asset($feedback1Data->fb1_profile3 ?? 'img/default.jpg') }}" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>