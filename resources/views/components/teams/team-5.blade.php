<div class="team-5 section-image" style="background-image: url('{{ asset($Teams5Data->T5_mainimg ?? 'img/default.jpg') }}')"
>
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">{{ $Teams5Data->T5_title ?? null }}</h2>
          <h5 class="description">{{ $Teams5Data->T5_description ?? null }}</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card card-profile card-plain">
            <div class="row">
              <div class="col-md-5">
                <div class="card-img-top">
                  <a href="{{ $Teams5Data->T5_img1_url ?? null }}">
                    <img class="img" src="{{ asset( $Teams5Data->T5_img1 ?? null ) }}" />

                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams5Data->T5_textA1 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams5Data->T5_textB1 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams5Data->T5_para1 ?? null }}
                  </p>
                  <div class="card-footer">
                    <a href="{{ $Teams5Data->T5_iconA1_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="{{ $Teams5Data->T5_iconA1 ?? null }}"></i></a>
                    <a href="{{ $Teams5Data->T5_iconB1_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="{{ $Teams5Data->T5_iconB1 ?? null }}"></i></a>
                    <a href="{{ $Teams5Data->T5_iconC1_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="{{ $Teams5Data->T5_iconC1 ?? null }}"></i></a>
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
                  <a href="{{ $Teams5Data->T5_img2_url ?? null }}">
                    <img class="img" src="{{ asset($Teams5Data->T5_img2 ?? 'img/default.jpg') }}" />

                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams5Data->T5_textA2 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams5Data->T5_textB2 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams5Data->T5_para2 ?? null }}
                  </p>
                  <div class="card-footer">
                    <a href=" {{ $Teams5Data->T5_iconA2_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class=" {{ $Teams5Data->T5_iconA2 ?? null }}"></i></a>
                    <a href=" {{ $Teams5Data->T5_iconB2_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class=" {{ $Teams5Data->T5_iconB2 ?? null }}"></i></a>
                    <a href=" {{ $Teams5Data->T5_iconC2_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class=" {{ $Teams5Data->T5_iconC2 ?? null }}"></i></a>
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
                  <a href="{{ $Teams5Data->T5_img3_url ?? null }}">
                    <img class="img" src="{{ asset($Teams5Data->T5_img3 ?? 'img/default.jpg') }}" />

                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title">{{ $Teams5Data->T5_textA3 ?? null }}</h4>
                  <h6 class="card-category">{{ $Teams5Data->T5_textB3 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams5Data->T5_para3 ?? null }}
                  </p>
                  <div class="card-footer">
                    <a href="{{ $Teams5Data->T5_iconA3_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="{{ $Teams5Data->T5_iconA3 ?? null }}"></i></a>
                    <a href="{{ $Teams5Data->T5_iconB3_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="{{ $Teams5Data->T5_iconB3 ?? null }}"></i></a>
                    <a href="{{ $Teams5Data->T5_iconC3_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="{{ $Teams5Data->T5_iconC3 ?? null }}"></i></a>
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
                  <a href=" {{ $Teams5Data->T5_img4_url ?? null }}">
                    <img class="img" src="{{asset($Teams5Data->T5_img4 ?? 'img/default.jpg') }}" />
                  </a>
                </div>
              </div>
              <div class="col-md-7">
                <div class="card-body text-left">
                  <h4 class="card-title"> {{ $Teams5Data->T5_textA4 ?? null }}</h4>
                  <h6 class="card-category"> {{ $Teams5Data->T5_textB4 ?? null }}</h6>
                  <p class="card-description">
                    {{ $Teams5Data->T5_para4 ?? null }}
                  </p>
                  <div class="card-footer">
                    <a href="{{ $Teams5Data->T5_iconA4_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="  {{ $Teams5Data->T5_iconA4 ?? null }}"></i></a>
                    <a href="{{ $Teams5Data->T5_iconB4_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="  {{ $Teams5Data->T5_iconB4 ?? null }}"></i></a>
                    <a href="{{ $Teams5Data->T5_iconC4_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral"><i class="  {{ $Teams5Data->T5_iconC4 ?? null }}"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>