<div class="testimonials-2 section section-testimonials">
    <div class="container">
      <div class="row">
        <div class="col-md-2 mr-auto">
          <div class="testimonials-people">

            <img class="left-first-person add-animation" src="{{ asset($feedback2Data->fb2_leftimg1 ?? 'img/default.jpg') }}" alt="" />
            <img class="left-second-person add-animation" src="{{ asset($feedback2Data->fb2_leftimg2 ?? 'img/default.jpg') }}" alt="" />
            <img class="left-third-person add-animation" src="{{ asset($feedback2Data->fb2_leftimg3 ?? 'img/default.jpg') }}" alt="" />
            <img class="left-fourth-person add-animation" src="{{ asset($feedback2Data->fb2_leftimg4 ?? 'img/default.jpg') }}" alt="" />
            <img class="left-fifth-person add-animation" src="{{ asset($feedback2Data->fb2_leftimg5 ?? 'img/default.jpg') }}" alt="" />
            <img class="left-sixth-person add-animation" src="{{ asset($feedback2Data->fb2_leftimg6 ?? 'img/default.jpg') }}" alt="" />

        </div>
        </div>
        <div class="col-md-6 ml-auto mr-auto">
          <div class="page-carousel">
            <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <div class="card card-testimonial card-plain">
                    <div class="card-avatar">
                      <img class="img" src="{{ asset($feedback2Data->fb2_mainimg1 ?? 'img/default.jpg') }}" alt="" />

                    </div>
                    <div class="card-body">
                      <h5 class="card-description">
                        {{ $feedback2Data->fb2_para1 ?? null }}
                      </h5>
                      <div class="card-footer">
                        <h4 class="card-title">{{ $feedback2Data->fb2_textname1 ?? null }}</h4>
                        <h6 class="card-category">{{ $feedback2Data->fb2_text1 ?? null }}</h6>
                        <div class="card-stars">
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card card-testimonial card-plain">
                    <div class="card-avatar">
                      <img class="img" src="{{ $feedback2Data->fb2_mainimg2 ?? 'https://s3.amazonaws.com/creativetim_bucket/photos/134607/thumb.?1487680276' }}"
                      />
                    </div>
                    <div class="card-body">
                      <h5 class="card-description">
                        {{ $feedback2Data->fb2_para2 ?? null }}
                      </h5>
                      <div class="card-footer">
                        <h4 class="card-title">{{ $feedback2Data->fb2_textname2 ?? null }}</h4>
                        <h6 class="card-category">{{ $feedback2Data->fb2_text2 ?? null }}</h6>
                        <div class="card-stars">
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="card card-testimonial card-plain">
                    <div class="card-avatar">
                      <img class="img" src="{{ asset($feedback2Data->fb2_mainimg3 ?? 'img/default.jpg') }}" alt="" />

                    </div>
                    <div class="card-body">
                      <h5 class="card-description">
                        {{ $feedback2Data->fb2_para3 ?? null }}
                      </h5>
                      <div class="card-footer">
                        <h4 class="card-title">{{ $feedback2Data->fb2_textname3 ?? null }}</h4>
                        <h6 class="card-category">{{ $feedback2Data->fb2_text3 ?? null }}</h6>
                        <div class="card-stars">
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                          <i class="{{ $feedback2Data->fb2_staricon ?? null }}" aria-hidden="true"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="left carousel-control carousel-control-prev" href="{{ $feedback2Data->fb2_prebutton_url ?? null }}" role="button" data-slide="prev">
                <span class="{{ $feedback2Data->fb2_prebutton_icon ?? null }}"></span>
                <span class="sr-only">{{ $feedback2Data->fb2_prebutton_text ?? null }}</span>
              </a>
              <a class="right carousel-control carousel-control-next" href="{{ $feedback2Data->fb2_nextbutton_url ?? null }}" role="button" data-slide="next">
                <span class="{{ $feedback2Data->fb2_nextbutton_icon ?? null }}"></span>
                <span class="sr-only">{{ $feedback2Data->fb2_nextbutton_text ?? null }}</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-2 ml-auto">
          <div class="testimonials-people">
            
            <img class="right-sixth-person add-animation" src="{{ asset($feedback2Data->fb2_rightimg1 ?? 'img/default.jpg') }}" alt="" />
            <img class="right-fourth-person add-animation" src="{{ asset($feedback2Data->fb2_rightimg2 ?? 'img/default.jpg') }}" alt="" />
            <img class="right-third-person add-animation" src="{{ asset($feedback2Data->fb2_rightimg3 ?? 'img/default.jpg') }}" alt="" />
            <img class="right-first-person add-animation" src="{{ asset($feedback2Data->fb2_rightimg4 ?? 'img/default.jpg') }}" alt="" />
            <img class="right-second-person add-animation" src="{{ asset($feedback2Data->fb2_rightimg5 ?? 'img/default.jpg') }}" alt="" />
            <img class="right-fifth-person add-animation" src="{{ asset($feedback2Data->fb2_rightimg6 ?? 'img/default.jpg') }}" alt="" />
            
        </div>
      </div>
    </div>
  </div>