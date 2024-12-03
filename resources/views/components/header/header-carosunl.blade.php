<div class="header-3">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
      <div class="container">
        <a class="navbar-brand mb-0" href="{{ $header3Data->H3_text1_url ?? null }}">{{ $header3Data->H3_text1 ?? null }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar"></span>
          <span class="navbar-toggler-bar"></span>
          <span class="navbar-toggler-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent3">
          <ul class="navbar-nav ml-auto">
            <a href="{{ $header3Data->H3_text2_url ?? null }}" class="btn btn-link btn-neutral">{{ $header3Data->H3_text2 ?? null }}</a>
            <a href="{{ $header3Data->H3_text3_url ?? null }}" class="btn btn-link btn-neutral">{{ $header3Data->H3_text3 ?? null }}</a>
            <a href="{{ $header3Data->H3_icon1_url ?? null }}" target="_blank" class="btn btn-link btn-neutral"><i class="{{ $header3Data->H3_icon1 ?? null }}"></i></a>
            <a href="{{ $header3Data->H3_icon2_url ?? null }}" target="_blank" class="btn btn-link btn-neutral"><i class="{{ $header3Data->H3_icon2 ?? null }}"></i></a>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page-carousel">
      <div class="filter"></div>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <div class="page-header" style="background-image: url('{{ asset($header3Data->H3_C1_img ?? '') }}');">
              <div class="filter"></div>
              <div class="content-center">
                <div class="container">
                  <div class="row">
                    <div class="col-md-6 text-left">
                      <h1 class="title">{{ $header3Data->H3_C1_title ?? null }}</h1>
                      <h5>{{ $header3Data->H3_C1_para ?? null }}</h5>
                      <br />
                      <div class="buttons">
                        <a href="{{ $header3Data->H3_C1_btnurl ?? null }}" class="btn btn-danger btn-round  btn-lg">
                          {{ $header3Data->H3_C1_btntext ?? null }}
                        </a>
                        <a href="{{ $header3Data->H3_C1_icon1url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C1_icon1 ?? null }}"></i>
                        </a>
                        <a href="{{ $header3Data->H3_C1_icon2url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C1_icon2 ?? null }}"></i>
                        </a>
                        <a href="{{ $header3Data->H3_C1_icon3url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C1_icon3 ?? null }}"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="page-header" style="background-image: url('{{ asset($header3Data->H3_C2_img ?? '') }}')">
              <div class="filter"></div>
              <div class="content-center">
                <div class="container">
                  <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                      <h1 class="title">{{ $header3Data->H3_C2_title ?? null }}</h1>
                      <h5>{{ $header3Data->H3_C2_para ?? null }}</h5>
                      <br />
                      <h6>{{ $header3Data->H3_C2_text ?? null }}</h6>
                      <div class="buttons">
                        <a href="{{ $header3Data->H3_C2_icon1url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C2_icon1 ?? null }}"></i>
                        </a>
                        <a href="{{ $header3Data->H3_C2_icon2url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C2_icon2 ?? null }}"></i>
                        </a>
                        <a href="{{ $header3Data->H3_C2_icon3url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C2_icon3 ?? null }}"></i>
                        </a>
                        <a href="{{ $header3Data->H3_C2_icon4url ?? null }}" class="btn btn-neutral btn-link btn-just-icon">
                          <i class="{{ $header3Data->H3_C2_icon4 ?? null }}"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="page-header" style="background-image: url('{{ asset($header3Data->H3_C3_img ?? '') }}')">
              <div class="filter"></div>
              <div class="content-center">
                <div class="container">
                  <div class="row">
                    <div class="col-md-7 ml-auto text-right">
                      <h2 class="title">{{ $header3Data->H3_C3_title ?? null }}</h2>
                      <h5>{{ $header3Data->H3_C3_para ?? null }}</h5>
                      <br />
                      <div class="buttons">
                        <a href="{{ $header3Data->H3_C3_btn1url ?? null }}" class="btn btn-neutral btn-link btn-lg">
                          <i class="{{ $header3Data->H3_C3_btn1icon ?? null }}"></i> {{ $header3Data->H3_C3_btn1 ?? null }}
                        </a>
                        <a href="{{ $header3Data->H3_C3_btn2url ?? null }}" class="btn btn-success btn-round btn-lg">
                          <i class="{{ $header3Data->H3_C3_btn2icon ?? null }}"></i> {{ $header3Data->H3_C3_btn2 ?? null }}
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="left carousel-control carousel-control-prev" href="{{ $header3Data->H3_leftbtn_url ?? null }}" role="button" data-slide="prev">
          <span class="{{ $header3Data->H3_leftbtn_icon ?? null }}"></span>
          <span class="sr-only">{{ $header3Data->H3_leftbtn ?? null }}</span>
        </a>
        <a class="right carousel-control carousel-control-next" href="{{ $header3Data->H3_rightbtn_url ?? null }}" role="button" data-slide="next">
          <span class="{{ $header3Data->H3_rightbtn_icon ?? null }}"></span>
          <span class="sr-only">{{ $header3Data->H3_rightbtn ?? null }}</span>
        </a>
      </div>
    </div>
  </div>