@extends('layouts.admin', ['pageTitle' => trans('page_titles.create_category')])

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Categories
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Categories</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Create Category:</h3>
                </div>
                <div class="box-body">
                    {{ Form::open(['route' => 'admin.categories.store', 'class' => 'form-horizontal', 'files' => true]) }}
                        @include('admin.categories.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection