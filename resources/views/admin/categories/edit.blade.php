@extends('layouts.admin', ['pageTitle' => trans('page_titles.edit_category')])

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
                    <h3 class="box-title">Edit Category:</h3>
                </div>
                <div class="box-body">
                    {{ Form::model($category, ['route' => ['admin.categories.update', $category->getKey()], 'class' => 'form-horizontal', 'files' => true]) }}
                        {{ Form::hidden('id', $category->getKey()) }}
                        @include('admin.categories.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection