@extends('admin.master')

@section('title', __('keywords.edit_setting'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.settings') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <x-success-alert></x-success-alert>
                        <form action="{{ route('admin.settings.update', ['setting' => $setting]) }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <x-form-lable field="phone"></x-form-lable>
                                    <input type="text" name="phone" class="form-control"
                                        placeholder="{{ __('keywords.phone') }}" value="{{ $setting->phone }}">
                                    <x-validation-error field="phone"></x-validation-error>
                                </div>

                                <div class="col-md-6">
                                    <x-form-lable field="email"></x-form-lable>
                                    <input type="text" name="email" class="form-control"
                                        placeholder="{{ __('keywords.email') }}" value="{{ $setting->email }}">
                                    <x-validation-error field="email"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="address"></x-form-lable>
                                    <input type="text" name="address" class="form-control"
                                        placeholder="{{ __('keywords.address') }}" value="{{ $setting->address }}">
                                    <x-validation-error field="address"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="facebook"></x-form-lable>
                                    <input type="url" name="facebook" class="form-control"
                                        placeholder="{{ __('keywords.facebook') }}" value="{{ $setting->facebook }}">
                                    <x-validation-error field="facebook"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="linkedin"></x-form-lable>
                                    <input type="url" name="linkedin" class="form-control"
                                        placeholder="{{ __('keywords.linkedin') }}" value="{{ $setting->linkedin }}">
                                    <x-validation-error field="linkedin"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="twitter"></x-form-lable>
                                    <input type="url" name="twitter" class="form-control"
                                        placeholder="{{ __('keywords.twitter') }}" value="{{ $setting->twitter }}">
                                    <x-validation-error field="twitter"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="instagram"></x-form-lable>
                                    <input type="url" name="instagram" class="form-control"
                                        placeholder="{{ __('keywords.instagram') }}" value="{{ $setting->instagram }}">
                                    <x-validation-error field="instagram"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="youtube"></x-form-lable>
                                    <input type="url" name="youtube" class="form-control"
                                        placeholder="{{ __('keywords.youtube') }}" value="{{ $setting->youtube }}">
                                    <x-validation-error field="youtube"></x-validation-error>
                                </div>

                            </div>

                            <x-submit-button></x-submit-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
