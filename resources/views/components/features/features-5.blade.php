<div class="features-5 section-image" style="background-image: url('{{ asset($feature5Data->f5_img_url ?? 'img/default.jpg') }}');">
    <div class="container">
      <div class="row">
        <div class="ml-auto mr-auto">
          <h2 class="title text-center">{{ $feature5Data->f5_title ?? null }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5 ml-auto">
          <div class="info">
            <div class="icon">
              <i class="{{ $feature5Data->f5_icon1 ?? null }}" aria-hidden="true"></i>
            </div>
            <h4 class="title">{{ $feature5Data->f5_text1 ?? null }}</h4>
            <p>{{ $feature5Data->f5_para1 ?? null }}</p>
          </div>
        </div>
        <div class="col-sm-5 mr-auto">
          <div class="info">
            <div class="icon">
              <i class="{{ $feature5Data->f5_icon2 ?? null }}" aria-hidden="true"></i>
            </div>
            <h4 class="title">{{ $feature5Data->f5_text2 ?? null }}</h4>
            <p>{{ $feature5Data->f5_para2 ?? null }}</p>
          </div>
        </div>
      </div>
      <div class="row bottom-line">
        <div class="col-sm-5 ml-auto">
          <div class="info">
            <div class="icon">
              <i class="{{ $feature5Data->f5_icon3 ?? null }}" aria-hidden="true"></i>
            </div>
            <h4 class="title">{{ $feature5Data->f5_text3 ?? null }}</h4>
            <p>{{ $feature5Data->f5_para3 ?? null }}</p>
          </div>
        </div>
        <div class="col-sm-5 mr-auto">
          <div class="info">
            <div class="icon">
              <i class="{{ $feature5Data->f5_icon4 ?? null }}" aria-hidden="true"></i>
            </div>
            <h4 class="title">{{ $feature5Data->f5_text4 ?? null }}</h4>
            <p>{{ $feature5Data->f5_para4 ?? null }}</p>
          </div>
        </div>
      </div>
    </div>
  </div>