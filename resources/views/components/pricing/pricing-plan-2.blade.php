<div class="pricing-2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ml-auto mr-auto text-center">
          <h2 class="title">{{ $PricingPlan2Data->pp2_title ?? null }}</h2>
          <h5 class="description">{{ $PricingPlan2Data->pp2_description ?? null }}</h5>
          <br>
          <ul class="nav nav-pills nav-pills-danger justify-content-center">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="{{ $PricingPlan2Data->pp2_nav1_url ?? null }}" role="tab">{{ $PricingPlan2Data->pp2_nav1 ?? null }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="{{ $PricingPlan2Data->pp2_nav2_url ?? null }}" role="tab">{{ $PricingPlan2Data->pp2_nav2 ?? null }}</a>
            </li>
          </ul>
        </br>
      </br>
          <!-- Pill panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="month" role="tabpanel"></div>
            <div class="tab-pane" id="year" role="tabpanel"></div>
          </div>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-pricing" data-background="image" style="background-image: url('{{asset($PricingPlan2Data->pp2_img1 ?? 'img/default.jpg') }} ')">
            <div class="card-body">
              <h6 class="card-category">{{ $PricingPlan2Data->pp2_text1 ?? null }}</h6>
              <h1 class="card-title"><small>{{ $PricingPlan2Data->pp2_textA1 ?? null }}</small>{{ $PricingPlan2Data->pp2_textA2 ?? null }}<small>{{ $PricingPlan2Data->pp2_textA3 ?? null }}</small></h1>
              <ul>
                <li><b>{{ $PricingPlan2Data->pp2_li_A1 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_A2 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_A3 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_A4 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_A5 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_A6 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_A7 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_A8 ?? null }}</li>
              </ul>
              <a href="{{ $PricingPlan2Data->pp2_btn1_url ?? null }}" class="btn btn-warning btn-round ">
                {{ $PricingPlan2Data->pp2_btn1_text ?? null }}
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-pricing" data-background="image" style="background-image: url('{{asset($PricingPlan2Data->pp2_img2 ?? 'img/default.jpg') }} ')">
            <div class="card-body">
              <h6 class="card-category">{{ $PricingPlan2Data->pp2_text2 ?? null }}</h6>
              <h1 class="card-title"><small>{{ $PricingPlan2Data->pp2_textB1 ?? null }}</small>{{ $PricingPlan2Data->pp2_textB2 ?? null }}<small>{{ $PricingPlan2Data->pp2_textB3 ?? null }}</small></h1>
              <ul>
                <li><b>{{ $PricingPlan2Data->pp2_li_B1 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_B2 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_B3 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_B4 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_B5 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_B6 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_B7 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_B8 ?? null }}</li>
              </ul>
              <a href="{{ $PricingPlan2Data->pp2_btn2_url ?? null }}" class="btn btn-success btn-round">
                {{ $PricingPlan2Data->pp2_btn2_text ?? null }}
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-pricing" data-background="image" style="background-image: url('{{asset($PricingPlan2Data->pp2_img3 ?? 'img/default.jpg') }} ')">
            <div class="card-body">
              <h6 class="card-category">{{ $PricingPlan2Data->pp2_text3 ?? null }}</h6>
              <h1 class="card-title"><small>{{ $PricingPlan2Data->pp2_textC1 ?? null }}</small>{{ $PricingPlan2Data->pp2_textC2 ?? null }}<small>{{ $PricingPlan2Data->pp2_textC3 ?? null }}</small></h1>
              <ul>
                <li><b>{{ $PricingPlan2Data->pp2_li_C1 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_C2 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_C3 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_C4 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_C5 ?? null }}</b>  {{ $PricingPlan2Data->pp2_liT_C6 ?? null }}</li>
                <li><b>{{ $PricingPlan2Data->pp2_li_C7 ?? null }}</b> {{ $PricingPlan2Data->pp2_liT_C8 ?? null }}</li>
              </ul>
              <a href="{{ $PricingPlan2Data->pp2_btn3_url ?? null }}" class="btn btn-danger btn-round ">{{ $PricingPlan2Data->pp2_btn3_text ?? null }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>