@extends('admin.layout.app')

@section('title', 'Landing Page')

@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Upload Image</h3>
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" name="image" class="form-control" id="image" required>
                            @error('image')
                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Upload Image</button>
                    </form>
                </div>

                <div class="col-md-12 mt-3">
                    <h3>Uploaded Images</h3>
                    <div class="row mb-3">
                        @foreach ($images as $image)
                            <div class="col-md-3">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <p class="card-text">
                                            <img src="{{ asset('web_img/' . basename($image)) }}" class="img-fluid"
                                                alt="Thumbnail"><br><br>
                                            <strong>URL</strong><br>
                                            <input type="text" class="form-control"
                                                value="{{ 'web_img/' . basename($image) }}" readonly>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
