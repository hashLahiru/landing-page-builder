<div class="features-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">{{ $feature4Data->f4_title ?? null }}</h2>
          <h5 class="description">{{ $feature4Data->f4_description ?? null }}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="ipad-container">
    
            <img src="{{ asset($feature4Data->f4_img_url ?? 'img/default.jpg') }}" alt="iPad Image">
          </div>
        </div>
        <div class="col-md-4 offset-1">
          <div class="info info-horizontal">
            <div class="icon icon-info">
              <i class="{{ $feature4Data->f4_icon1 ?? null }}" aria-hidden="true"></i>
            </div>
            <div class="description">
              <h4 class="info-title">{{ $feature4Data->f4_text1 ?? null }}</h4>
              <p>{{ $feature4Data->f4_para1 ?? null }}</p>
            </div>
          </div>
          <div class="info info-horizontal">
            <div class="icon icon-success">
              <i class="{{ $feature4Data->f4_icon2 ?? null }}" aria-hidden="true"></i>
            </div>
            <div class="description">
              <h4 class="info-title">{{ $feature4Data->f4_text2 ?? null }}</h4>
              <p>{{ $feature4Data->f4_para2 ?? null }}</p>
            </div>
          </div>
          <div class="info info-horizontal">
            <div class="icon icon-danger">
              <i class="{{ $feature4Data->f4_icon3 ?? null }}" aria-hidden="true"></i>
            </div>
            <div class="description">
              <h4 class="info-title">{{ $feature4Data->f4_text3 ?? null }}</h4>
              <p>{{ $feature4Data->f4_para3 ?? null }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>