<div class="pricing-5 section-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2 class="title">{{ $PricingPlan5Data->pp5_title ?? null }}</h2>
          <div class="choose-plan">
            <ul class="nav nav-pills nav-pills-danger" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="{{ $PricingPlan5Data->pp5_nav1_url ?? null }}" role="tab">{{ $PricingPlan5Data->pp5_nav1 ?? null }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="{{ $PricingPlan5Data->pp5_nav2_url ?? null }}" role="tab">{{ $PricingPlan5Data->pp5_nav2 ?? null }}</a>
              </li>
            </ul>
          </div>
          <br />
          <p class="description text-gray">{{ $PricingPlan5Data->pp5_description ?? null }}</p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="tab-content text-center">
            <div class="tab-pane active" id="personal" role="tabpanel">
              <div class="space-top"></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-pricing">
                    <div class="card-body">
                      <h6 class="card-category text-primary">{{ $PricingPlan5Data->pp5_headertextA1 ?? null }}</h6>
                      <h1 class="card-title">{{ $PricingPlan5Data->pp5_headertextA2 ?? null }}</h1>
                      <ul>
                        <li><b>{{ $PricingPlan5Data->pp5_numA1 ?? null }}</b> {{ $PricingPlan5Data->pp5_textA1 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numA2 ?? null }}</b> {{ $PricingPlan5Data->pp5_textA2 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numA3 ?? null }}</b> {{ $PricingPlan5Data->pp5_textA3 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numA4 ?? null }}</b> {{ $PricingPlan5Data->pp5_textA4 ?? null }}</li>
                      </ul>
                      <a href=" {{ $PricingPlan5Data->pp5_btn1_url ?? null }}" class="btn btn-primary btn-round"> {{ $PricingPlan5Data->pp5_btn1_text ?? null }}</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-pricing" data-color="orange">
                    <div class="card-body">
                      <h6 class="card-category text-success">{{ $PricingPlan5Data->pp5_headertextB1 ?? null }}</h6>
                      <h1 class="card-title">{{ $PricingPlan5Data->pp5_headertextB2 ?? null }}</h1>
                      <ul>
                        <li><b>{{ $PricingPlan5Data->pp5_numB1 ?? null }}</b> {{ $PricingPlan5Data->pp5_textB1 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numB2 ?? null }}</b> {{ $PricingPlan5Data->pp5_textB2 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numB3 ?? null }}</b> {{ $PricingPlan5Data->pp5_textB3 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numB4 ?? null }}</b> {{ $PricingPlan5Data->pp5_textB4 ?? null }}</li>
                      </ul>
                      <a href="{{ $PricingPlan5Data->pp5_btn2_url ?? null }}" class="btn btn-neutral btn-round">{{ $PricingPlan5Data->pp5_btn2_text ?? null }}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="commercial" role="tabpanel">
              <div class="space-top"></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="card card-pricing">
                    <div class="card-body">
                      <h6 class="card-category text-warning">{{ $PricingPlan5Data->pp5_headertextC1 ?? null }}</h6>
                      <h1 class="card-title">{{ $PricingPlan5Data->pp5_headertextC2 ?? null }}</h1>
                      <ul>
                        <li><b>{{ $PricingPlan5Data->pp5_numC1 ?? null }}</b> {{ $PricingPlan5Data->pp5_textC1 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numC2 ?? null }}</b> {{ $PricingPlan5Data->pp5_textC2 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numC3 ?? null }}</b> {{ $PricingPlan5Data->pp5_textC3 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numC4 ?? null }}</b> {{ $PricingPlan5Data->pp5_textC4 ?? null }}</li>
                      </ul>
                      <a href="{{ $PricingPlan5Data->pp5_btn3_url ?? null }}" class="btn btn-warning btn-round">{{ $PricingPlan5Data->pp5_btn3_text ?? null }}</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card card-pricing" data-color="orange">
                    <div class="card-body">
                      <h6 class="card-category text-success">{{ $PricingPlan5Data->pp5_headertextD1 ?? null }}</h6>
                      <h1 class="card-title">{{ $PricingPlan5Data->pp5_headertextD2 ?? null }}</h1>
                      <ul>
                        <li><b>{{ $PricingPlan5Data->pp5_numD1 ?? null }}</b> {{ $PricingPlan5Data->pp5_textD1 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numD2 ?? null }}</b> {{ $PricingPlan5Data->pp5_textD2 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numD3 ?? null }}</b> {{ $PricingPlan5Data->pp5_textD3 ?? null }}</li>
                        <li><b>{{ $PricingPlan5Data->pp5_numD4 ?? null }}</b> {{ $PricingPlan5Data->pp5_textD4 ?? null }}</li>
                      </ul>
                      <a href="{{ $PricingPlan5Data->pp5_btn4_url ?? null }}" class="btn btn-neutral btn-round">{{ $PricingPlan5Data->pp5_btn4_text ?? null }}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>