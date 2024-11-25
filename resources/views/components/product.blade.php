<div class="section text-center landing-section">
  <div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto">
        <h2 class="title">{{ $productData->product_title ?? null }}</h2>
        <h5>{{ $productData->product_description ?? null }} </h5>
        <br />
        <a href="{{ $productData->detail_button_url ?? null }}" class="btn btn-danger btn-fill btn-round">{{
          $productData->detail_button_text ?? null }}</a>
      </div>
    </div>
    <br /><br />
    <div class="row">
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->icon_1 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->text_1 ?? null }}</h4>
            <p class="description">{{ $productData->description_1 ?? null }}</p>
            <a href="{{ $productData->button_1_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->button_1_text ?? null }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->icon_2 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->text_2 ?? null }}</h4>
            <p>{{ $productData->description_2 ?? null }}</p>
            <a href="#pkp" class="btn btn-link btn-danger">{{ $productData->button_2_text ?? null }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->icon_3 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->text_3 ?? null }}</h4>
            <p>{{ $productData->description_3 ?? null }}</p>
            <a href="{{ $productData->button_3_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->button_3_text ?? null }}</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info">
          <div class="icon icon-danger">
            <i class="{{ $productData->icon_4 ?? null }}"></i>
          </div>
          <div class="description">
            <h4 class="info-title">{{ $productData->text_4 ?? null }}</h4>
            <p>{{ $productData->description_4 ?? null }}</p>
            <a href="{{ $productData->button_4_url ?? null }}" class="btn btn-link btn-danger">{{
              $productData->button_4_text ?? null }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>