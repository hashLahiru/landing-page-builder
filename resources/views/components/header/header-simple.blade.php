<div class="header-4">
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
    <div class="container">
      <a class="navbar-brand mb-0" href="{{ $header4Data->H4_text1_url ?? null }}">{{ $header4Data->H4_text1 ?? null }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav ml-auto">
          <a href="{{ $header4Data->H4_text2_url ?? null }}" class="btn btn-link btn-neutral">{{ $header4Data->H4_text2 ?? null }}</a>
          <a href="{{ $header4Data->H4_text3_url ?? null }}" class="btn btn-link btn-neutral">{{ $header4Data->H4_text3 ?? null }}</a>
          <a href="{{ $header4Data->H4_icon1_url ?? null }}" target="_blank" class="btn btn-link btn-neutral"><i class="{{ $header4Data->H4_icon1 ?? null }}"></i></a>
          <a href="{{ $header4Data->H4_icon2_url ?? null }}" target="_blank" class="btn btn-link btn-neutral"><i class="{{ $header4Data->H4_icon2 ?? null }}"></i></a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="page-header" style="background-image: url('{{asset($header4Data->H4_img1_url ?? '') }} ')">
    <div class="filter"></div>
    <div class="content-center">
    <div>
      <!-- We show the video image placeholder instead of the video for small devices  -->
      <div class="video-image" style="background-image: url('{{ asset($header4Data->H4_img2_url ?? '') }}');"></div>
 
 
      {{-- <div class="video-image" style="background-image: url('assets/img/video-placeholder.png')"></div> --}}
      <video id="video-source" preload="auto" loop="loop" muted="muted" volume="0">
        <source src="{{ $header4Data->H4_video_url ?? null }}" type="video/mp4">
          {{ $header4Data->H4_video_text ?? null }}
      </video>
      <div class="content-center">
        <div class="container upper-container text-center">
          <div class="video-text">
            <h2> {{ $header4Data->H4_textA1 ?? null }}</h2>
            <h1 class="title-uppercase title-no-upper-margin"> {{ $header4Data->H4_textA2 ?? null }}</h1>
          </div>
          <br />
          <!--  We hide the play button on small devices -->
          <button type="button" data-video=" {{ $header4Data->H4_btn_url ?? null }}" data-toggle="video" class="btn btn-lg btn-neutral">
            <i class=" {{ $header4Data->H4_btn_icon ?? null }}"></i>  {{ $header4Data->H4_btn_text ?? null }}
          </button>
        </div>
      </div>
   </div>
   </div>
  </div>

  </div>

































