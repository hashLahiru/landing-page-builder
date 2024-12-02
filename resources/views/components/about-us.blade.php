<div class="section section-dark text-center landing-section">
    <div class="container">
        <h2 class="title pb-2">{{ $aboutData->AB_title ?? null }}</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-profile card-plain">
                    <div class="card-avatar">
                        <a href="{{ $aboutData->AB_img1_url ?? null }}"><img src="{{ asset($aboutData->AB_img1 ?? null ) }}" alt="..."></a>
                    </div>
                    <div class="card-body">
                        <a href="{{ $aboutData->AB_text1_url ?? null }}">
                            <div class="author">
                                <h4 class="card-title">{{ $aboutData->AB_textA1 ?? null }}</h4>
                                <h6 class="card-category text-muted">{{ $aboutData->AB_textB1 ?? null }}</h6>
                            </div>
                        </a>
                        <p class="card-description text-center">
                            {{ $aboutData->AB_para1 ?? null }}
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ $aboutData->AB_iconA1_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i
                                class="{{ $aboutData->AB_iconA1 ?? null }}"></i></a>
                        <a href="{{ $aboutData->AB_iconB1_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i
                                class="{{ $aboutData->AB_iconB1 ?? null }}"></i></a>
                        <a href="{{ $aboutData->AB_iconC1_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i
                                class="{{ $aboutData->AB_iconC1 ?? null }}"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile card-plain">
                    <div class="card-avatar">
                        <a href=" {{ $aboutData->AB_img2_url ?? null }}"><img src="{{ asset( $aboutData->AB_img2 ?? null ) }}" alt="..."></a>
                    </div>
                    <div class="card-body">
                        <a href="{{ $aboutData->AB_text2_url ?? null }}">
                            <div class="author">
                                <h4 class="card-title">{{ $aboutData->AB_textA2 ?? null }}</h4>
                                <h6 class="card-category text-muted">{{ $aboutData->AB_textB2 ?? null }}</h6>
                            </div>
                        </a>
                        <p class="card-description text-center">
                            {{ $aboutData->AB_para2 ?? null }}
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ $aboutData->AB_iconA2_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i
                                class="{{ $aboutData->AB_iconA2 ?? null }}"></i></a>
                        <a href="{{ $aboutData->AB_iconB2_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i
                                class="{{ $aboutData->AB_iconB2 ?? null }}"></i></a>
                        <a href="{{ $aboutData->AB_iconC2_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i
                                class="{{ $aboutData->AB_iconC2 ?? null }}"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile card-plain">
                    <div class="card-avatar">
                        <a href=" {{ $aboutData->AB_iconA2_url ?? null }}"><img src="{{ asset( $aboutData->AB_img3 ?? null ) }}" alt="..."></a>
                    </div>
                    <div class="card-body">
                        <a href="{{ $aboutData->AB_text3_url ?? null }}">
                            <div class="author">
                                <h4 class="card-title">  {{ $aboutData->AB_textA3 ?? null }}</h4>
                                <h6 class="card-category text-muted">  {{ $aboutData->AB_textB3 ?? null }}</h6>
                            </div>
                        </a>
                        <p class="card-description text-center">
                            {{ $aboutData->AB_para3 ?? null }}
                        </p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ $aboutData->AB_iconA3_url ?? null }}" class="btn btn-link btn-just-icon btn-twitter"><i
                                class="{{ $aboutData->AB_iconA3 ?? null }}"></i></a>
                        <a href="{{ $aboutData->AB_iconB3_url ?? null }}" class="btn btn-link btn-just-icon btn-dribbble"><i
                                class="{{ $aboutData->AB_iconB3 ?? null }}"></i></a>
                        <a href="{{ $aboutData->AB_iconC3_url ?? null }}" class="btn btn-link btn-just-icon btn-linkedin"><i
                                class="{{ $aboutData->AB_iconC3 ?? null }}"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>