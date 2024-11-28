<div class="page-header" style="background-image: url('{{ $headerData->background_image_url ?? null }}');">
    <div class="filter"></div>
    <div class="content-center">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="iframe-container">
                        <iframe src="{{ $headerData->video_url ?? null }}" frameborder="0" allowfullscreen
                            height="250"></iframe>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <h2 class="title">{{ $headerData->title ?? null }}</h2>
                    <h5 class="description">{{ $headerData->description ?? null }}</h5>
                    <br />
                    <a href="{{ $headerData->button_url ?? null }}" target="_blank" class="btn btn-danger">
                        <i class="{{ $headerData->button_icon ?? null }}"></i> {{ $headerData->button_text ?? null }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
