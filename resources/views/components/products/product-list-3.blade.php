<div class="projects-3" id="projects-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <div class="space-top"></div>
          <h6 class="category">{{ $ProductList3Data->p3_text ?? null }}</h6>
          <h2 class="title">{{ $ProductList3Data->p3_title ?? null }}</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href="{{ $ProductList3Data->p3_img1_url ?? null }}">
                <img class="img" src="{{asset($ProductList2Data->p3_img1 ?? 'img/default.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList3Data->p3_textA1 ?? null }}</h6>
              <h4 class="card-title">{{ $ProductList3Data->p3_textB1 ?? null }}</h4>
              <p class="card-description">
                {{ $ProductList3Data->p3_para1 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 ">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href=" {{ $ProductList3Data->p3_img2_url ?? null }}">
                <img class="img" src="{{asset($ProductList2Data->p3_img2 ?? 'img/default.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category"> {{ $ProductList3Data->p3_textA2 ?? null }}</h6>
              <h4 class="card-title"> {{ $ProductList3Data->p3_textB2 ?? null }}</h4>
              <p class="card-description">
                {{ $ProductList3Data->p3_para2 ?? null }}  
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href=" {{ $ProductList3Data->p3_img3_url ?? null }}  ">
                <img class="img" src="{{asset($ProductList2Data->p3_img3 ?? 'img/default.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category"> {{ $ProductList3Data->p3_textA3 ?? null }}  </h6>
              <h4 class="card-title"> {{ $ProductList3Data->p3_textB3 ?? null }}  </h4>
              <p class="card-description">
                {{ $ProductList3Data->p3_para3 ?? null }}  
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href="{{ $ProductList3Data->p3_img5_url ?? null }}">
                <img class="img" src="{{asset('img/sections/rawpixel-coms.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList3Data->p3_textA5 ?? null }}</h6>
              <h4 class="card-title">{{ $ProductList3Data->p3_textB5 ?? null }}</h4>
              <p class="card-description">
                {{ $ProductList3Data->p3_para5 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href=" {{ $ProductList3Data->p3_para5 ?? null }}">
                <img class="img" src="{{asset('img/sections/patrick-tomasso.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList3Data->p3_para5 ?? null }}</h6>
              <h4 class="card-title"> {{ $ProductList3Data->p3_para5 ?? null }}</h4>
              <p class="card-description">
                {{ $ProductList3Data->p3_para5 ?? null }}
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile card-plain">
            <div class="card-img-top">
              <a href="http://www.creative-tim.com/product/paper-kit">
                <img class="img" src="{{asset('img/sections/rawpixel-coms.jpg') }}" />
              </a>
            </div>
            <div class="card-body">
              <h6 class="card-category">Material</h6>
              <h4 class="card-title">How to find the contacts.</h4>
              <p class="card-description">
                Boom, the invitations start flying and Brella makes it easy to accept/decline
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>