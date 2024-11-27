<div class="section text-center landing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <h2 class="title">{{ $productData->f1_title ?? null }}</h2>
        <h5>{{ $productData->f1_description ?? null }} </h5>
        <br />
        {{-- <a href="{{ $productData->detail_button_url ?? null }}" class="btn btn-danger btn-fill btn-round">{{
          $productData->detail_button_text ?? null }}</a> --}}
      </div>
    </div>
    <br /><br />
    <div class="row">
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->f1_icon1 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->f1_text1 ?? null }}</h4>
            <p class="description">{{ $productData->f1_description1 ?? null }}</p>
            <a href="{{ $productData->f1_button1_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->f1_button1_text ?? null }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->f1_icon2 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->f1_text2 ?? null }}</h4>
            <p>{{ $productData->f1_description2 ?? null }}</p>
            <a href="{{ $productData->f1_button2_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->f1_button2_text ?? null }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->f1_icon3 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->f1_text3 ?? null }}</h4>
            <p>{{ $productData->f1_description3 ?? null }}</p>
            <a href="{{ $productData->f1_button3_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->f1_button3_text ?? null }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->f1_icon4 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->f1_text4 ?? null }}</h4>
            <p>{{ $productData->f1_description4 ?? null }}</p>
            <a href="{{ $productData->f1_button4_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->f1_button4_text ?? null }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>