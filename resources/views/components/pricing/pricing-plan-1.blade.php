<div class="pricing-1 section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <h2 class="title"> {{ $PricingPlan1Data->pp1_title ?? null }} </h2>
          <h5 class="description">{{ $PricingPlan1Data->pp1_description ?? null }}</h5>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-3">
          <div class="card card-pricing" data-color="orange">
            <div class="card-body">
              <div class="card-icon">
                <span class="icon-simple"><i class="{{ $PricingPlan1Data->pp1_icon1 ?? null }}"></i></span>
              </div>
              <h3 class="card-title">{{ $PricingPlan1Data->pp1_text1 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan1Data->pp1_para1 ?? null }}
              </p>
              <div class="card-footer">
                <a href="{{ $PricingPlan1Data->pp1_btn1_url ?? null }}" class="btn btn-neutral btn-round">{{ $PricingPlan1Data->pp1_btn1_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-pricing" data-color="yellow">
            <div class="card-body">
              <div class="card-icon">
                <span class="icon-simple"><i class="{{ $PricingPlan1Data->pp1_icon2 ?? null }}"></i></span>
              </div>
              <h3 class="card-title">{{ $PricingPlan1Data->pp1_text2 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan1Data->pp1_para2 ?? null }}
              </p>
              <div class="card-footer">
                <a href="  {{ $PricingPlan1Data->pp1_btn2_url ?? null }}" class="btn btn-neutral btn-round">  {{ $PricingPlan1Data->pp1_btn2_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-pricing" data-color="green">
            <div class="card-body">
              <div class="card-icon">
                <span class="icon-simple"><i class="{{ $PricingPlan1Data->pp1_icon3 ?? null }}"></i></span>
              </div>
              <h3 class="card-title">{{ $PricingPlan1Data->pp1_text3 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan1Data->pp1_para3 ?? null }}
              </p>
              <div class="card-footer">
                <a href=" {{ $PricingPlan1Data->pp1_btn3_url ?? null }}" class="btn btn-neutral btn-round"> {{ $PricingPlan1Data->pp1_btn3_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-pricing" data-color="blue">
            <div class="card-body">
              <div class="card-icon">
                <span class="icon-simple"><i class="{{ $PricingPlan1Data->pp1_icon4 ?? null }}"></i></span>
              </div>
              <h3 class="card-title">{{ $PricingPlan1Data->pp1_text4 ?? null }}</h3>
              <p class="card-description">
                {{ $PricingPlan1Data->pp1_para4 ?? null }}
              </p>
              <div class="card-footer">
                <a href="  {{ $PricingPlan1Data->pp1_btn4_url ?? null }}" class="btn btn-neutral btn-round">  {{ $PricingPlan1Data->pp1_btn4_text ?? null }}</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>