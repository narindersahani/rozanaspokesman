@extends('layouts.admin', ['pageTitle' => trans('page_titles.edit_video')])

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Posts
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Posts</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Post:</h3>
                </div>
                <div class="box-body">
                    {{ Form::model($video, ['route' => ['admin.videos.update', $video->getKey()], 'class' => 'form-horizontal', 'files' => true]) }}
                        {{ Form::hidden('id', $video->getKey()) }}
                        @include('admin.videos.partials.form')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection