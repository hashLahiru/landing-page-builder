<div class="project-4 section section-dark">
<div class="container">
    <div class="row">
      <div class="col-md-8 ml-auto mr-auto text-center">
        <h2 class="title">{{ $ProductList4Data->p4_title ?? null }}</h2>
        <h5 class="description">{{ $ProductList4Data->p4_description ?? null }}</h5>
      </div>
    </div>
    <div class="space-top"></div>
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="card" data-background="image" style="background-image: url('{{asset($ProductList4Data->p4_img1 ?? 'img/default.jpg') }} ')">
          <div class="card-icon">
            <i class="{{ $ProductList4Data->p4_imgicon1 ?? null }}"></i>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="card card-plain">
          <div class="card-body">
            <h6 class="card-category">{{ $ProductList4Data->p4_textA1 ?? null }}</h6>
            <a href="{{ $ProductList4Data->p4_textB1_url ?? null }}">
              <h3 class="card-title">{{ $ProductList4Data->p4_textB1 ?? null }}</h3>
            </a>
            <p class="card-description">
              {{ $ProductList4Data->p4_para1 ?? null }}
            </p>
            <div class="card-footer">
              <a href=" {{ $ProductList4Data->p4_btn1_url ?? null }}" class="btn btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_btn1_icon ?? null }}" aria-hidden="true"></i>  {{ $ProductList4Data->p4_btn1_text ?? null }}
              </a>
              <a href="{{ $ProductList4Data->p4_iconA1_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_iconA1 ?? null }}" aria-hidden="true"></i>
              </a>
              <a href="{{ $ProductList4Data->p4_iconB1_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_iconB1 ?? null }}" aria-hidden="true"></i>
              </a>
              <a href="{{ $ProductList4Data->p4_iconC1_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_iconC1 ?? null }}" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <hr /><br />
    <div class="row">
      <div class="col-md-5 ml-auto">
        <div class="card card-plain">
          <div class="card-body">
            <h6 class="card-category"> {{ $ProductList4Data->p4_textA2 ?? null }}</h6>
            <a href="{{ $ProductList4Data->p4_textB2_url ?? null }}">
              <h3 class="card-title">{{ $ProductList4Data->p4_textB2 ?? null }}</h3>
            </a>
            <p class="card-description">
              {{ $ProductList4Data->p4_para2 ?? null }}
            </p>
            <div class="card-footer">
              <a href="{{ $ProductList4Data->p4_btn2_url ?? null }}" class="btn btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_btn2_icon ?? null }}" aria-hidden="true"></i> {{ $ProductList4Data->p4_btn2_text ?? null }}
          
                <a href="{{ $ProductList4Data->p4_iconA2_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_iconA2 ?? null }}" aria-hidden="true"></i>
              </a>
              <a href="{{ $ProductList4Data->p4_iconB2_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_iconB2 ?? null }}" aria-hidden="true"></i>
              </a>
              <a href="{{ $ProductList4Data->p4_iconC2_url ?? null }}" class="btn btn-just-icon btn-link btn-neutral">
                <i class="{{ $ProductList4Data->p4_iconC2 ?? null }}" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 mr-auto">
        <div class="card" data-background="image" style="background-image: url('{{asset($ProductList4Data->p4_img2 ?? 'img/default.jpg') }} ')">    
          <div class="card-icon">
            <i class="{{ $ProductList4Data->p4_imgicon2 ?? null }}"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
