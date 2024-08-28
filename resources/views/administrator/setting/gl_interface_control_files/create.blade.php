@extends('administrator.master')
@section('title', __('Add GL Interface Control File'))

@section('main_content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>{{ __('Add GL Interface Control File') }}</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('Dashboard') }}</a></li>
            <li><a href="{{ route('gl_interface_control_files.index') }}">{{ __('GL Interface Management') }}</a></li>
            <li class="active">{{ __('Add Control File') }}</li>
        </ol>
    </section>

    <section class="content">
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">{{ __('Add Control File') }}</h3>
            </div>
            <div class="box-body">
                <form action="{{ route('gl_interface_control_files.store') }}" method="POST">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label for="control_setup_name">{{ __('Control Setup Name') }}</label>
                        <input type="text" name="control_setup_name" class="form-control" value="{{ old('control_setup_name') }}">
                    </div>
                    <div class="form-group">
                        <label for="gl_code_account_name">{{ __('GL Code Account Name') }}</label>
                        <input type="text" name="gl_code_account_name" class="form-control" value="{{ old('gl_code_account_name') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
