<div class="team-1">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center" >
          <h2 class="title">{{ $Teams1Data->T1_title ?? null }}</h2>
          <h5 class="description ">{{ $Teams1Data->T1_description ?? null }}</h5>
        </div>
       </div>
      <div class="row">
        <div class="col-md-3">
          <div class="card card-profile card-plain">
            <div class="card-avatar">
              <a href="{{ $Teams1Data->T1_img1_url ?? null }}"><img src="{{ asset($Teams1Data->T1_img1 ?? 'img/default.jpg') }}" alt="..."></a>

            </div>
            <div class="card-body">
              <a href="{{ $Teams1Data->T1_text1_url ?? null }}">
                <div class="author">
                  <h4 class="card-title">{{ $Teams1Data->T1_textA1 ?? null }}</h4>
                  <h6 class="card-category text-muted">{{ $Teams1Data->T1_textB1 ?? null }}</h6>
                </div>
              </a>
              <p class="card-description text-center">
                {{ $Teams1Data->T1_para1 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href=" {{ $Teams1Data->T1_iconA1_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i class="  {{ $Teams1Data->T1_iconA1 ?? null }}"></i></a>
              <a href=" {{ $Teams1Data->T1_iconB1_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i class=" {{ $Teams1Data->T1_iconB1 ?? null }}"></i></a>
              <a href=" {{ $Teams1Data->T1_iconC1_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i class=" {{ $Teams1Data->T1_iconC1 ?? null }}"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-profile card-plain">
            <div class="card-avatar">
              <a href="{{ $Teams1Data->T1_img2_url ?? null }}"><img src="{{ asset($Teams1Data->T1_img2 ?? 'img/default.jpg') }}" alt="..."></a>
            </div>
            <div class="card-body">
              <a href="{{ $Teams1Data->T1_text2_url ?? null }}">
                <div class="author">
                  <h4 class="card-title">{{ $Teams1Data->T1_textA2 ?? null }}</h4>
                  <h6 class="card-category text-muted">{{ $Teams1Data->T1_textB2 ?? null }}</h6>
                </div>
              </a>
              <p class="card-description text-center">
                {{ $Teams1Data->T1_para2 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="{{ $Teams1Data->T1_iconA2_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i class="{{ $Teams1Data->T1_iconA2 ?? null }}"></i></a>
              <a href="{{ $Teams1Data->T1_iconB2_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i class="{{ $Teams1Data->T1_iconB2 ?? null }}"></i></a>
              <a href="{{ $Teams1Data->T1_iconC2_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i class="{{ $Teams1Data->T1_iconC2 ?? null }}"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-profile card-plain">
            <div class="card-avatar">
              <a href="{{ $Teams1Data->T1_img3_url ?? null }}"><img src="{{ asset($Teams1Data->T1_img3 ?? 'img/default.jpg') }}" alt="..."></a>

            </div>
            <div class="card-body">
              <a href="{{ $Teams1Data->T1_text3_url ?? null }}">
                <div class="author">
                  <h4 class="card-title">{{ $Teams1Data->T1_textA3 ?? null }}</h4>
                  <h6 class="card-category text-muted">{{ $Teams1Data->T1_textB3 ?? null }}</h6>
                </div>
              </a>
              <p class="card-description text-center">
                {{ $Teams1Data->T1_para3 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="{{ $Teams1Data->T1_iconA3_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i class="{{ $Teams1Data->T1_iconA3 ?? null }}"></i></a>
              <a href="{{ $Teams1Data->T1_iconB3_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i class="{{ $Teams1Data->T1_iconB3 ?? null }}"></i></a>
              <a href="{{ $Teams1Data->T1_iconC3_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i class="{{ $Teams1Data->T1_iconC3 ?? null }}"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card card-profile card-plain">
            <div class="card-avatar">
              <a href="{{ $Teams1Data->T1_img4_url ?? null }}"><img src="{{ asset($Teams1Data->T1_img4 ?? 'img/default.jpg') }}" alt="..."></a>

            </div>
            <div class="card-body">
              <a href="{{ $Teams1Data->T1_text4_url ?? null }}">
                <div class="author">
                  <h4 class="card-title">{{ $Teams1Data->T1_textA4 ?? null }}</h4>
                  <h6 class="card-category text-muted">{{ $Teams1Data->T1_textB4 ?? null }}</h6>
                </div>
              </a>
              <p class="card-description text-center">
                {{ $Teams1Data->T1_para4 ?? null }}
              </p>
            </div>
            <div class="card-footer text-center">
              <a href="{{ $Teams1Data->T1_iconA4_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i class="{{ $Teams1Data->T1_iconA4 ?? null }}"></i></a>
              <a href="{{ $Teams1Data->T1_iconB4_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i class="{{ $Teams1Data->T1_iconB4 ?? null }}"></i></a>
              <a href="{{ $Teams1Data->T1_iconC4_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i class="{{ $Teams1Data->T1_iconC4 ?? null }}"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>