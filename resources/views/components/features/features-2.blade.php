<div class="features-2">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title">{{ $feature2Data->f2_title ?? null }}</h2>
          <h5 class="description">{{ $feature2Data->f2_description ?? null }}</h5>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card" data-background="image" style="background-image:  url('{{ asset($feature2Data->f2_img1_url ?? 'img/default.jpg') }}');">

           <div class="card-body">
              <h6 class="card-category">{{ $feature2Data->f2_text1 ?? null }}</h6>
              <div class="card-icon">
                <i class="{{ $feature2Data->f2_icon1 ?? null }}"></i>
              </div>
              <p class="card-description">{{ $feature2Data->f2_para1 ?? null }}</p>
              <div class="card-footer">
                <a href="{{ $feature2Data->f2_button1_url ?? null }}" class="btn btn-link btn-neutral">
                  <i class="{{ $feature2Data->f2_button1_icon ?? null }}" aria-hidden="true"></i> {{ $feature2Data->f2_button1_text ?? null }}
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" data-background="image" style="background-image: url('{{ asset('img/sections/anders-jilden.jpg') }}');">
            <div class="card-body">
              <h6 class="card-category">UI Kits</h6>
              <div class="card-icon">
                <i class="nc-icon nc-single-copy-04"></i>
              </div>
              <p class="card-description">Imagine if you could go to the profile of a friend and instead of scrolling through...</p>
              <div class="card-footer">
                <a href="javascript:;" class="btn btn-link btn-neutral">
                  <i class="fa fa-book" aria-hidden="true"></i> Show more
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" data-background="image" style="background-image: url('{{ asset('img/sections/uriel-soberanes.jpg') }}'); ">
            <div class="card-body">
              <h6 class="card-category">Development</h6>
              <div class="card-icon">
                <i class="nc-icon nc-time-alarm"></i>
              </div>
              <p class="card-description"> For starters, it seemed like a good idea to keep a running list of Vision investments.</p>
              <div class="card-footer">
                <a href="javascript:;" class="btn btn-link btn-neutral">
                  <i class="fa fa-book" aria-hidden="true"></i> Show more
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>