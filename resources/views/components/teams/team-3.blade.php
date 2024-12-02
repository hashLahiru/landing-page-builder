<div class="team-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">{{ $Teams3Data->T3_title ?? null }}</h2>
          <h5 class="description">{{ $Teams3Data->T3_description ?? null }}</h5>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-6">
          <div class="card card-profile card-plain">
            <div class="row">
              <div class="col-md-5">
                <div class="card-img-top">
                  <a href="{{ $Teams3Data->T3_img1_url ?? null }}">
                    <img class="img" src="{{ asset($Teams3Data->T3_img1 ?? 'img/default.jpg') }}" />

                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams3Data->T3_textA1 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams3Data->T3_textB1 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams3Data->T3_para1 ?? null }}
                  </p>
                  <div class="card-footer pull-left">
                    <a href="{{ $Teams3Data->T3_iconA1_url ?? null }}" class="btn btn-just-icon btn-link btn-twitter"><i class="{{ $Teams3Data->T3_iconA1 ?? null }}"></i></a>
                    <a href="{{ $Teams3Data->T3_iconB1_url ?? null }}" class="btn btn-just-icon btn-link btn-facebook"><i class="{{ $Teams3Data->T3_iconB1 ?? null }}"></i></a>
                    <a href="{{ $Teams3Data->T3_iconC1_url ?? null }}" class="btn btn-just-icon btn-link btn-google"><i class="{{ $Teams3Data->T3_iconC1 ?? null }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-profile card-plain">
            <div class="row">
              <div class="col-md-5">
                <div class="card-img-top">
                  <a href="{{ $Teams3Data->T3_img2_url ?? null }}">
                    <img class="img" src="{{ asset($Teams3Data->T3_img2 ?? 'img/default.jpg') }}" />
                   
                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams3Data->T3_textA2 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams3Data->T3_textB2 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams3Data->T3_para2 ?? null }}
                  </p>
                  <div class="card-footer pull-left">
                    <a href=" {{ $Teams3Data->T3_iconA2_url ?? null }}" class="btn btn-just-icon btn-link btn-linkedin"><i class=" {{ $Teams3Data->T3_iconA2 ?? null }}"></i></a>
                    <a href=" {{ $Teams3Data->T3_iconB2_url ?? null }}" class="btn btn-just-icon btn-link btn-dribbble"><i class= "{{ $Teams3Data->T3_iconB2 ?? null }}"></i></a>
                    <a href=" {{ $Teams3Data->T3_iconC2_url ?? null }}" class="btn btn-just-icon btn-link btn-pinterest"><i class=" {{ $Teams3Data->T3_iconC2 ?? null }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-profile card-plain">
            <div class="row">
              <div class="col-md-5">
                <div class="card-img-top">
                  <a href="{{ $Teams3Data->T3_img3_url ?? null }}">
                    <img class="img" src="{{ asset($Teams3Data->T3_img3 ?? 'img/default.jpg') }}" />
                   
                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams3Data->T3_textA3 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams3Data->T3_textB3 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams3Data->T3_para3 ?? null }}
                  </p>
                  <div class="card-footer pull-left">
                    <a href="{{ $Teams3Data->T3_iconA3_url ?? null }}" class="btn btn-just-icon btn-link btn-youtube"><i class="{{ $Teams3Data->T3_iconA3 ?? null }}"></i></a>
                    <a href="{{ $Teams3Data->T3_iconB3_url ?? null }}" class="btn btn-just-icon btn-link btn-twitter"><i class="{{ $Teams3Data->T3_iconB3 ?? null }}"></i></a>
                    <a href="{{ $Teams3Data->T3_iconC3_url ?? null }}" class="btn btn-just-icon btn-link btn-instagram"><i class="{{ $Teams3Data->T3_iconC3 ?? null }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card card-profile card-plain">
            <div class="row">
              <div class="col-md-5">
                <div class="card-img-top">
                  <a href="{{ $Teams3Data->T3_img4_url ?? null }}">
                    <img class="img" src="{{ asset($Teams3Data->T3_img4 ?? 'img/default.jpg') }}" />
                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams3Data->T3_textA4 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams3Data->T3_textB4 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams3Data->T3_para4 ?? null }}
                  </p>
                  <div class="card-footer pull-left">
                    <a href="{{ $Teams3Data->T3_iconA4_url ?? null }}" class="btn btn-just-icon btn-link btn-linkedin"><i class="{{ $Teams3Data->T3_iconA4 ?? null }}"></i></a>
                    <a href="{{ $Teams3Data->T3_iconB4_url ?? null }}" class="btn btn-just-icon btn-link btn-instagram"><i class="{{ $Teams3Data->T3_iconB4 ?? null }}"></i></a>
                    <a href="{{ $Teams3Data->T3_iconC4_url ?? null }}" class="btn btn-just-icon btn-link btn-dribbble"><i class="{{ $Teams3Data->T3_iconC4 ?? null }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>