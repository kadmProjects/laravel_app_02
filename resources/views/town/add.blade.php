@extends('adminlte::page')

@section('title', 'Town')

@section('content_header')
    <p><strong>Laravel App 02 - </strong>Add Town</p>
@endsection

@section('content')
    <div class="row justify-content-center add-town">
        <div class="col-md-12">
            <div class="card add-town-card">
                <div class="card-header">Add Town Form</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('storeTown') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="town" class="col-sm-2 offset-sm-2 col-form-label">Town Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm px-2 @error('town') is-invalid @enderror" value="{{ old('town') }}" id="town" name="town">
                                @error('town')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-sm-2 offset-sm-2 col-form-label">Country</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm px-2 @error('country') is-invalid @enderror" value="{{ old('country') }}" id="country" name="country">
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country_code" class="col-sm-2 offset-sm-2 col-form-label">Country Code</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm px-2 @error('country_code') is-invalid @enderror" value="{{ old('country_code') }}" id="country_code" name="country_code">
                                @error('country_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country_code_iso" class="col-sm-2 offset-sm-2 col-form-label">Country Code (ISO)</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-sm px-2 @error('country_code_iso') is-invalid @enderror" value="{{ old('country_code_iso') }}" id="country_code_iso" name="country_code_iso">
                                @error('country_code_iso')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3 offset-sm-4 mt-1">
                                <input type="reset" class="btn btn-danger btn-sm btn-block" id="add-town-reset-btn" value="Reset">
                            </div>
                            <div class="col-sm-3 mt-1">
                                <input type="submit" class="btn btn-primary btn-sm btn-block" id="add-town-submit-btn" value="submit">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection

@section('js')
    <script> console.log('Hi!'); </script>
@endsection