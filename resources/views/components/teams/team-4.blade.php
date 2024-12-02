<div class="team-4 section-image" style="background-image: url('{{ asset($Teams4Data->T4_mainimg ?? 'img/default.jpg') }}')">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">{{ $Teams4Data->T4_title ?? null }}</h2>
          <h5 class="description">{{ $Teams4Data->T4_description ?? null }}</h5>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-body">
              <div class="card-avatar">
                <a href="{{ $Teams4Data->T4_img1_url ?? null }}">
                  <img src="{{ asset($Teams4Data->T4_img1 ?? 'img/default.jpg') }}" alt="..." />

                  <h4 class="card-title">{{ $Teams4Data->T4_text1 ?? null }}</h4>
                </a>
              </div>
              <p class="card-description text-center">
                {{ $Teams4Data->T4_para1 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="{{ $Teams4Data->T4_iconA1_url ?? null }}" class="btn btn-just-icon btn-linkedin"><i class="{{ $Teams4Data->T4_iconA1 ?? null }}"></i></a>
              <a href="{{ $Teams4Data->T4_iconB1_url ?? null }}" class="btn btn-just-icon btn-dribbble"><i class="{{ $Teams4Data->T4_iconB1 ?? null }}"></i></a>
              <a href="{{ $Teams4Data->T4_iconC1_url ?? null }}" class="btn btn-just-icon btn-instagram"><i class="{{ $Teams4Data->T4_iconC1 ?? null }}"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-body">
              <div class="card-avatar">
                <a href="{{ $Teams4Data->T4_img2_url ?? null }}">
                  <img src="{{ asset($Teams4Data->T4_img2 ?? 'img/default.jpg') }}" alt="..." />

                  <h4 class="card-title">{{ $Teams4Data->T4_text2 ?? null }}</h4>
                </a>
              </div>
              <p class="card-description text-center">
                {{ $Teams4Data->T4_para2 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="{{ $Teams4Data->T4_iconA2_url ?? null }}" class="btn btn-just-icon btn-linkedin"><i class="{{ $Teams4Data->T4_iconA2 ?? null }}"></i></a>
              <a href="{{ $Teams4Data->T4_iconB2_url ?? null }}" class="btn btn-just-icon btn-dribbble"><i class="{{ $Teams4Data->T4_iconB2 ?? null }}"></i></a>
              <a href="{{ $Teams4Data->T4_iconC2_url ?? null }}" class="btn btn-just-icon btn-pinterest"><i class="{{ $Teams4Data->T4_iconC2 ?? null }}"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-body">
              <div class="card-avatar">
                <a href="{{ $Teams4Data->T4_img3_url ?? null }}">
                  <img src="{{ asset($Teams4Data->T4_img3 ?? 'img/default.jpg') }}" alt="..." />

                  <h4 class="card-title">{{ $Teams4Data->T4_text3 ?? null }}</h4>
                </a>
              </div>
              <p class="card-description text-center">
                {{ $Teams4Data->T4_para3 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="{{ $Teams4Data->T4_iconA3_url ?? null }}" class="btn btn-just-icon btn-youtube"><i class="{{ $Teams4Data->T4_iconA3 ?? null }}"></i></a>
              <a href="{{ $Teams4Data->T4_iconB3_url ?? null }}" class="btn btn-just-icon btn-twitter"><i class="{{ $Teams4Data->T4_iconB3 ?? null }}"></i></a>
              <a href="{{ $Teams4Data->T4_iconC3_url ?? null }}" class="btn btn-just-icon btn-instagram"><i class="{{ $Teams4Data->T4_iconC3 ?? null }}"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>