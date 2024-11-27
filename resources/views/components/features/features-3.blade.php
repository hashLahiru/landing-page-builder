<div class="features-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            <div class="container">
              <h2 class="title">{{ $feature3Data->f3_title ?? null }}</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="info info-horizontal">
                <div class="icon icon-success">
                  <i class="{{ $feature3Data->f3_icon1 ?? null }}"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ $feature3Data->f3_text1 ?? null }}</h4>
                  <p>{{ $feature3Data->f3_para1 ?? null }}</p>
                  <a href="{{ $feature3Data->f3_button1_url ?? null }}" class="btn btn-link">{{ $feature3Data->f3_button1_text ?? null }}</a>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-warning">
                  <i class="{{ $feature3Data->f3_icon2 ?? null }}"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ $feature3Data->f3_text2 ?? null }}</h4>
                  <p>{{ $feature3Data->f3_para2 ?? null }}</p>
                  <a href="{{ $feature3Data->f3_button2_url ?? null }}" class="btn btn-link">{{ $feature3Data->f3_button2_text ?? null }}</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info info-horizontal">
                <div class="icon icon-danger">
                  <i class="{{ $feature3Data->f3_icon3 ?? null }}"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ $feature3Data->f3_text3 ?? null }}</h4>
                  <p>{{ $feature3Data->f3_para3 ?? null }}</p>
                  <a href="{{ $feature3Data->f3_button3_url ?? null }}" class="btn btn-link">{{ $feature3Data->f3_button3_text ?? null }}</a>
                </div>
              </div>
              <div class="info info-horizontal">
                <div class="icon icon-primary">
                  <i class="{{ $feature3Data->f3_icon4 ?? null }}"></i>
                </div>
                <div class="description">
                  <h4 class="info-title">{{ $feature3Data->f3_text4 ?? null }}</h4>
                  <p>{{ $feature3Data->f3_para4 ?? null }}</p>
                  <a href="{{ $feature3Data->f3_button4_url ?? null }}" class="btn btn-link">{{ $feature3Data->f3_button4_text ?? null }}</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-5 ml-auto">
          <div class="iphone-container">
            <img src="{{ asset($feature3Data->f3_img_url ?? 'img/default.jpg') }}" alt="iPhone Image">
           
          </div>
        </div>
      </div>
    </div>
  </div>