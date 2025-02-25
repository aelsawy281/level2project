@extends('admin.master')

@section('title', __('keywords.add_new_member'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_member') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.members.store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <x-form-lable field="name"></x-form-lable>
                                    <input type="text" name="name" class="form-control"
                                    placeholder="{{ __('keywords.name') }}">
                                     <x-validation-error field="name"></x-validation-error>
                                </div>
                                <div class="col-md-6">
                                    <x-form-lable field="position"></x-form-lable>
                                    <input type="text" name="position" class="form-control"
                                    placeholder="{{ __('keywords.position') }}">
                                     <x-validation-error field="napositionme"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="image"></x-form-lable>
                                    <input type="file" name="image" class="form-control-file"
                                    placeholder="{{ __('keywords.image') }}">
                                     <x-validation-error field="image"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="facebook"></x-form-lable>
                                    <input type="text" name="facebook" class="form-control"
                                    placeholder="{{ __('keywords.facebook') }}">
                                     <x-validation-error field="facebook"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="twitter"></x-form-lable>
                                    <input type="text" name="twitter" class="form-control"
                                    placeholder="{{ __('keywords.twitter') }}">
                                     <x-validation-error field="twitter"></x-validation-error>
                                </div>

                                <div class="col-md-6 mt-2">
                                    <x-form-lable field="linkedin"></x-form-lable>
                                    <input type="text" name="linkedin" class="form-control" placeholder="{{ __('keywords.linkedin') }}"></input>
                                     <x-validation-error field="linkedin"></x-validation-error>
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
