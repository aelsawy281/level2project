@extends('admin.master')

@section('title', __('keywords.add_new_testmonial'))

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="h5 page-title">{{ __('keywords.add_new_testmonial') }}</h2>

                <div class="card shadow">
                    <div class="card-body">
                        <form action="{{ route('admin.testmonials.store') }}" method="post" enctype="multipart/form-data">
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

                                <div class="col-md-12 mt-2">
                                    <x-form-lable field="image"></x-form-lable>
                                    <input type="file" name="image" class="form-control-file"
                                    placeholder="{{ __('keywords.image') }}">
                                     <x-validation-error field="image"></x-validation-error>
                                </div>

                                <div class="col-md-12 mt-2">
                                    <x-form-lable field="description"></x-form-lable>
                                    <textarea name="description" class="form-control" placeholder="{{ __('keywords.description') }}"></textarea>
                                     <x-validation-error field="description"></x-validation-error>
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
