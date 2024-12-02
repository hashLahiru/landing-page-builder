<div class="team-2 section-image" style="background-image: url('{{ asset($Teams2Data->T2_mainimg ?? 'img/default.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">{{ $Teams2Data->T2_title ?? null }}</h2>
          <h5 class="description">{{ $Teams2Data->T2_description ?? null }}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href="{{ $Teams2Data->T2_img1_url ?? null }}">
                <img class="img" src="{{ asset($Teams2Data->T2_img1 ?? 'img/default.jpg') }}" />

              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">{{ $Teams2Data->T2_textA1 ?? null }}</h4>
              <h6 class="card-category">{{ $Teams2Data->T2_textB1 ?? null }}</h6>
              <div class="card-footer">
                <a href="{{ $Teams2Data->T2_iconA1_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconA1 ?? null }}"></i></a>
                <a href="{{ $Teams2Data->T2_iconB1_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconB1 ?? null }}"></i></a>
                <a href="{{ $Teams2Data->T2_iconC1_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconC1 ?? null }}"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href="{{ $Teams2Data->T2_img2_url ?? null }}">
                <img class="img" src="{{ asset($Teams2Data->T2_img2 ?? 'img/default.jpg') }}" />

              </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">{{ $Teams2Data->T2_textA2 ?? null }}</h4>
              <h6 class="card-category">{{ $Teams2Data->T2_textB2 ?? null }}r</h6>
              <div class="card-footer">
                <a href="{{ $Teams2Data->T2_iconA2_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconA2 ?? null }}"></i></a>
                <a href="{{ $Teams2Data->T2_iconB2_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconB2 ?? null }}"></i></a>
                <a href="{{ $Teams2Data->T2_iconC2_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconC2 ?? null }}"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href="{{ $Teams2Data->T2_img3_url ?? null }}">
                <img class="img" src="{{ asset($Teams2Data->T2_img3 ?? 'img/default.jpg') }}" />

             </a>
            </div>
            <div class="card-body">
              <h4 class="card-title">{{ $Teams2Data->T2_textA3 ?? null }}</h4>
              <h6 class="card-category">{{ $Teams2Data->T2_textB3 ?? null }}</h6>
              <div class="card-footer">
                <a href="{{ $Teams2Data->T2_iconA3_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconA3 ?? null }}"></i></a>
                <a href="{{ $Teams2Data->T2_iconB3_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconB3 ?? null }}"></i></a>
                <a href="{{ $Teams2Data->T2_iconC3_url ?? null }}" class="btn btn-neutral btn-link btn-just-icon"><i class="{{ $Teams2Data->T2_iconC3 ?? null }}"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>