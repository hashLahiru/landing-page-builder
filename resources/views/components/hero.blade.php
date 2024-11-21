<div class="page-header" data-parallax="true"
  style="background-image: url('{{ asset('img/sections/david-marcu.jpg') }}');">
  <div class="filter"></div>
  <div class="content-center">
    <div class="container">
      <div class="motto">
        <h1 class="title">{{ $landingPageData->title }}</h1>
        <h3 class="description">{{ $landingPageData->description }}</h3>
        <br />
        <a href="{{ $landingPageData->video_url }}" class="btn btn-neutral btn-round"><i
            class="{{ $landingPageData->icon_class }}"></i>{{ $landingPageData->watch_video_text }}</a>
        <button type="button" class="btn btn-outline-neutral btn-round">{{ $landingPageData->download_text }}</button>
      </div>
    </div>
  </div>
</div>