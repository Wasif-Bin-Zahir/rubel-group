@extends('admin.layouts.master')

@section('content')
    <div class="content-header pt-2"></div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @include('admin.partials._alert')
                    <div class="card card-purple card-outline">
                        <div class="card-header">
                            <h3 class="card-title mt-1">Edit Committee Category</h3>
                            <a href="{{ route('backend.cms.committee-category.index') }}" type="button" class="btn btn-success btn-sm text-white float-right">View Committee Category List</a>
                        </div>
                        {!! Form::open(['url' => route('backend.cms.committee-category.update', [$committeeCategory->id]), 'method' => 'put', 'files' => true]) !!}
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title" class="@error('title') text-danger @enderror">Title <span class="text-danger">*</span></label>
                                        <input id="title" name="title" value="{{ old('title') ?: $committeeCategory->title }}" type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Enter title" autofocus>
                                        @error('title')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title_bn" class="@error('title_bn') text-danger @enderror">Title (Bengali)</label>
                                        <input id="title_bn" name="title_bn" value="{{ old('title_bn') ?: $committeeCategory->title_bn }}" type="text" class="form-control @error('title_bn') is-invalid @enderror" placeholder="Enter title" autofocus>
                                        @error('title_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description" class="@error('description') text-danger @enderror">Description</label>
                                        <textarea id="description" name="description" class="form-control" rows="3" placeholder="Enter description">{!! old('description') ?: $committeeCategory->description !!}</textarea>
                                        @error('description')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description_bn" class="@error('description_bn') text-danger @enderror">Description (Bengali)</label>
                                        <textarea id="description_bn" name="description_bn" class="form-control" rows="3" placeholder="Enter description">{!! old('description_bn') ?: $committeeCategory->description_bn !!}</textarea>
                                        @error('description_bn')
                                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success float-right ml-1">Submit</button>
                            <a href="{{ route('backend.cms.committee-category.index') }}" type="button" class="btn btn-dark text-white float-right">Cancel</a>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
