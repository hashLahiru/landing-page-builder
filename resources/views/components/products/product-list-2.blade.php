<div class="projects-2 section section-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h6 class="text-muted">{{ $ProductList2Data->p2_text ?? null }}  </h6>
          <h2 class="title">{{ $ProductList2Data->p2_title ?? null }}  </h2>
          <h5 class="description">{{ $ProductList2Data->p2_description ?? null }}  </h5>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-plain">
            <div class="card-img-top">
              <a href="{{ $ProductList2Data->p2_img1_url ?? null }}">
                <img class="img" src="{{asset($ProductList2Data->p2_img1 ?? 'img/default.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <a href="{{ $ProductList2Data->p2_text1_url ?? null }}" target="_blank">
                <h4 class="card-title">{{ $ProductList2Data->p2_text1 ?? null }}</h4>
              </a>
              <h6 class="card-category text-muted">{{ $ProductList2Data->p2_subtext1 ?? null }}</h6>
              <p class="card-description">
                {{ $ProductList2Data->p2_para1 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-plain">
            <div class="card-img-top">
              <a href=" {{ $ProductList2Data->p2_img2_url ?? null }}">
                <img class="img" src="{{asset($ProductList2Data->p2_img2 ?? 'img/default.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <a href="{{ $ProductList2Data->p2_text2_url ?? null }}" target="_blank">
                <h4 class="card-title"> {{ $ProductList2Data->p2_text2 ?? null }} </h4>
              </a>
              <h6 class="card-category text-muted"> {{ $ProductList2Data->p2_subtext2 ?? null }}</h6>
              <p class="card-description">
                {{ $ProductList2Data->p2_para2 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-plain">
            <div class="card-img-top">
              <a href="{{ $ProductList2Data->p2_img3_url ?? null }}">
                <img class="img" src= "{{asset($ProductList2Data->p2_img3 ?? 'img/default.jpg') }}"/>
              </a>
            </div>
            <div class="card-body">
              <a href="{{ $ProductList2Data->p2_text3_url ?? null }}" target="_blank">
                <h4 class="card-title">{{ $ProductList2Data->p2_text3 ?? null }}</h4>
              </a>
              <h6 class="card-category text-muted">{{ $ProductList2Data->p2_subtext3 ?? null }}</h6>
              <p class="card-description">
                {{ $ProductList2Data->p2_para3 ?? null }}
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>