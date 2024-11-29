<div class="pricing-3 section-image" style="background-image: url('{{asset($PricingPlan3Data->pp3_img_url ?? 'img/default.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <h2 class="title">{{ $PricingPlan3Data->pp3_title ?? null }}</h2>
          <h5 class="description">{{ $PricingPlan3Data->pp3_description ?? null }}</h5>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-3 ml-auto mr-auto">
          <div class="card card-pricing">
            <div class="card-body">
              <h6 class="card-category">{{ $PricingPlan3Data->pp3_textA1 ?? null }}</h6>
              <div class="card-icon">
                <i class="{{ $PricingPlan3Data->pp3_icon1 ?? null }}"></i>
              </div>
              <h3 class="card-title">{{ $PricingPlan3Data->pp3_textA2 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan3Data->pp3_para1 ?? null }}
              </p>
              <div class="card-footer">
                <a href="{{ $PricingPlan3Data->pp3_btn1_url ?? null }}" class="btn btn-info btn-round card-link">{{ $PricingPlan3Data->pp3_btn1_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mr-auto">
          <div class="card card-pricing" data-background="color" data-color="blue">
            <div class="card-body">
              <h6 class="card-category">{{ $PricingPlan3Data->pp3_textB1 ?? null }}</h6>
              <div class="card-icon">
                <i class="{{ $PricingPlan3Data->pp3_icon2 ?? null }}"></i>
              </div>
              <h3 class="card-title">{{ $PricingPlan3Data->pp3_textB2 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan3Data->pp3_para2 ?? null }}
              </p>
              <div class="card-footer">
                <a href="{{ $PricingPlan3Data->pp3_btn2_url ?? null }}" class="btn btn-neutral btn-round card-link">{{ $PricingPlan3Data->pp3_btn2_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 mr-auto">
          <div class="card card-pricing">
            <div class="card-body">
              <h6 class="card-category">{{ $PricingPlan3Data->pp3_textC1 ?? null }}</h6>
              <div class="card-icon">
                <i class="{{ $PricingPlan3Data->pp3_icon3 ?? null }}"></i>
              </div>
              <h3 class="card-title">{{ $PricingPlan3Data->pp3_textC2 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan3Data->pp3_para3 ?? null }}
              </p>
              <div class="card-footer">
                <a href="{{ $PricingPlan3Data->pp3_btn3_url ?? null }}" class="btn btn-info btn-round card-link">{{ $PricingPlan3Data->pp3_btn3_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>