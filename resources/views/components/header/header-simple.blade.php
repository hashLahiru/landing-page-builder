<div class="header-4">
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
    <div class="container">
      <a class="navbar-brand mb-0" href="www.creative-tim.html">Creative Tim</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
        <span class="navbar-toggler-bar"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent2">
        <ul class="navbar-nav ml-auto">
          <a href="javascript:;" class="btn btn-link btn-neutral">Components</a>
          <a href="javascript:;" class="btn btn-link btn-neutral">Tutorial</a>
          <a href="javascript:;" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-twitter"></i></a>
          <a href="javascript:;" target="_blank" class="btn btn-link btn-neutral"><i class="fa fa-facebook"></i></a>
        </ul>
      </div>
    </div>
  </nav>

  <div class="page-header" style="background-image: url('{{asset('/img/video-placeholder.png') }} ')">
    <div class="filter"></div>
    <div class="content-center">
    <div>
      <!-- We show the video image placeholder instead of the video for small devices  -->
      <div class="video-image" style="background-image: url('{{ asset('img/video-placeholder.png') }}');"></div>
 
 
      {{-- <div class="video-image" style="background-image: url('assets/img/video-placeholder.png')"></div> --}}
      <video id="video-source" preload="auto" loop="loop" muted="muted" volume="0">
        <source src="assets/video/fireworks.mp4" type="video/mp4">
        Video not supported
      </video>
      <div class="content-center">
        <div class="container upper-container text-center">
          <div class="video-text">
            <h2>Make it</h2>
            <h1 class="title-uppercase title-no-upper-margin">Stand out</h1>
          </div>
          <br />
          <!--  We hide the play button on small devices -->
          <button type="button" data-video="video-source" data-toggle="video" class="btn btn-lg btn-neutral">
            <i class="fa fa-play"></i> Play Video
          </button>
        </div>
      </div>
   </div>
   </div>
  </div>

  </div>

































