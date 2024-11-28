<div class="projects-1">
    <div class="container">
      <div class="row">
        <div class="col-md-8 ml-auto mr-auto text-center">
          <h2 class="title"> {{ $ProductList1Data->p1_title ?? null }}</h2>
          <h5 class="description"> {{ $ProductList1Data->p1_description ?? null }}</h5>
        </div>
        <div class="project-pills">
          <ul class="nav nav-pills nav-pills-danger">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="{{ $ProductList1Data->p1_navl_url ?? null }}" role="tab">{{ $ProductList1Data->p1_nav1 ?? null }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="{{ $ProductList1Data->p1_nav2_url ?? null }}" role="tab">{{ $ProductList1Data->p1_nav2 ?? null }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="{{ $ProductList1Data->p1_nav3_url ?? null }}" role="tab">{{ $ProductList1Data->p1_nav3 ?? null }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="{{ $ProductList1Data->p1_nav4_url ?? null }}" role="tab">{{ $ProductList1Data->p1_nav4 ?? null }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="{{ $ProductList1Data->p1_nav5_url ?? null }}" role="tab">{{ $ProductList1Data->p1_nav5 ?? null }}</a>
            </li>
          </ul>
          <!-- Pill panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="pill-1" role="tabpanel"></div>
            <div class="tab-pane" id="pill-2" role="tabpanel"></div>
            <div class="tab-pane" id="pill-3" role="tabpanel"></div>
            <div class="tab-pane" id="pill-4" role="tabpanel"></div>
            <div class="tab-pane" id="pill-5" role="tabpanel"></div>
            <div class="tab-pane" id="pill-6" role="tabpanel"></div>
          </div>
        </div>
      </div>
      <div class="space-top"></div>
      <div class="row">
        <div class="col-md-5">

          <div class="card" data-background="image" style="background-image: url('{{ asset($ProductList1Data->p1_img1 ?? 'img/default.jpg') }}')">
         
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList1Data->p1_textA1 ?? null }}</h6>
              <a href="javascript:;">
                <h3 class="card-title">{{ $ProductList1Data->p1_textB1 ?? null }}</h3>
              </a>
              <p class="card-description">
                {{ $ProductList1Data->p1_para1 ?? null }} 
              </p>
              <br />
              <a href="{{ $ProductList1Data->p1_btn1_url ?? null }}" class="btn btn-danger btn-round">
                <i class="{{ $ProductList1Data->p1_btn1_icon ?? null }}" aria-hidden="true"></i> {{ $ProductList1Data->p1_btn1_text ?? null }}
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-7">                        
          <div class="card" data-background="image" style="background-image: url('{{ asset($ProductList1Data->p1_img2 ?? 'img/default.jpg') }}')">
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList1Data->p1_textA2 ?? null }}</h6>
              <h3 class="card-title">{{ $ProductList1Data->p1_textB2 ?? null }}</h3>
              <p class="card-description">
                {{ $ProductList1Data->p1_para2 ?? null }} 
              </p>
              <br />
              <a href="{{ $ProductList1Data->p1_btn2_url ?? null }}" class="btn btn-primary btn-round">
                <i class="{{ $ProductList1Data->p1_btn2_icon ?? null }}" aria-hidden="true"></i> {{ $ProductList1Data->p1_btn2_text ?? null }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="card" data-background="image" style="background-image: url('{{ asset($ProductList1Data->p1_img3 ?? 'img/default.jpg') }}')">
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList1Data->p1_textA3 ?? null }}</h6>
              <a href="javascript:;">
                <h3 class="card-title">{{ $ProductList1Data->p1_textB3 ?? null }}</h3>
              </a>
              <p class="card-description">
                {{ $ProductList1Data->p1_para3 ?? null }} 
              </p>
              <br />
              <a href="{{ $ProductList1Data->p1_btn3_url ?? null }}" class="btn btn-info btn-round">
                <i class="{{ $ProductList1Data->p1_btn3_icon ?? null }}" aria-hidden="true"></i> {{ $ProductList1Data->p1_btn3_text ?? null }}
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="card" data-background="image" style="background-image: url('{{ asset($ProductList1Data->p1_img4 ?? 'img/default.jpg') }}')">
            <div class="card-body">
              <h6 class="card-category">{{ $ProductList1Data->p1_textA4 ?? null }}</h6>
              <h3 class="card-title">{{ $ProductList1Data->p1_textB4 ?? null }}</h3>
              <p class="card-description">
                {{ $ProductList1Data->p1_para4 ?? null }}  
              </p>
              <br />
              <a href="{{ $ProductList1Data->p1_btn4_url ?? null }} " class="btn btn-warning btn-round">
                <i class="{{ $ProductList1Data->p1_btn4_icon ?? null }} " aria-hidden="true"></i>{{ $ProductList1Data->p1_btn4_text ?? null }} 
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>