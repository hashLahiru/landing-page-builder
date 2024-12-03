<div class="header-2">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
      <div class="container">
        <a class="navbar-brand mb-0" href="{{ $header2Data->H2_text1_url ?? null }}">{{ $header2Data->H2_text1 ?? null }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar"></span>
          <span class="navbar-toggler-bar"></span>
          <span class="navbar-toggler-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent2">
          <ul class="navbar-nav ml-auto">
            <a href="{{ $header2Data->H2_text2_url ?? null }}" class="btn btn-link btn-neutral">{{ $header2Data->H2_text2 ?? null }}</a>
            <a href="{{ $header2Data->H2_text3_url ?? null }}" class="btn btn-link btn-neutral">{{ $header2Data->H2_text3 ?? null }}</a>
            <a href="{{ $header2Data->H2_icon1_url ?? null }}" target="_blank" class="btn btn-link btn-neutral"><i class="{{ $header2Data->H2_icon1 ?? null }}"></i></a>
            <a href="{{ $header2Data->H2_icon2_url ?? null }}" target="_blank" class="btn btn-link btn-neutral"><i class="{{ $header2Data->H2_icon2 ?? null }}"></i></a>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page-header" style="background-image: url('{{ asset($header2Data->H2_img ?? '') }}');">
      <div class="filter"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
              <h1 class="title"> {{ $header2Data->H2_title ?? null }}</h1>
              <h5 class="description">{{ $header2Data->H2_para ?? null }}</h5>
              <br />
            </div>
            <div class="col-md-10 ml-auto mr-auto">
              <div class="card card-raised card-form-horizontal no-transition">
                <div class="card-body">
                  <form method="" action="{{ $header2Data->H2_action ?? null }}">
                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" value="" placeholder="{{ $header2Data->H2_placeholder1 ?? null }}" class="form-control" />
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" value="" placeholder="{{ $header2Data->H2_placeholder2 ?? null }}" class="form-control" />
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <input type="text" value="" placeholder="{{ $header2Data->H2_placeholder3 ?? null }}" class="form-control" />
                        </div>
                      </div>
                      <div class="col-md-3">
                        <button type="button" class="btn btn-danger btn-block"><i class="{{ $header2Data->H2_btn_icon ?? null }}"></i> &nbsp; {{ $header2Data->H2_btn_text ?? null }}</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>