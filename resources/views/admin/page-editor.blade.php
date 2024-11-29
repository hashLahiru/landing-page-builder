@extends('admin.layout.app')

@section('title', 'Landing Page')

@section('content')
    <div class="row border-bottom white-bg dashboard-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="componentDropdown">Select Component</label>
                            <select name="componentDropdown" id="componentDropdown" class="form-control">
                                <option value="">Select a component</option>
                                @foreach ($components as $component)
                                    <option value="{{ $component->id }}">{{ $component->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12" id="componentFieldsContainer">
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <img style="margin-top: 10px;" src="https://via.placeholder.com/600x400?text=Landscape+Image"
                        alt="Dummy Landscape" class="img-fluid">
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <button id="saveButton" class="btn btn-primary mb-5 ml-auto d-block">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection
