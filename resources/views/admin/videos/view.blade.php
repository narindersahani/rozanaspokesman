@extends('layouts.admin', ['pageTitle' => trans('page_titles.posts') . ': ' . $post->getTitle()])

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Posts : {{ $post->getTitle() }}
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="{{ route('admin.posts.index') }}">
                <i class="fa fa-file"></i> Posts
            </a>
        </li>
        <li class="active">{{ $post->getTitle() }}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Posts:</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-bordered table-striped table-hover">
                                <colgroup> 
                                    <col class="col-xs-3">
                                    <col class="col-xs-7">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th>Headings</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">ID</th>
                                        <td>{{$post->getKey()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Title</th>
                                        <td>{{$post->getTitle()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Short Description</th>
                                        <td>{{$post->getShortDescription()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Description</th>
                                        <td>{!! $post->getDescription() !!}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Event Date</th>
                                        <td>{{$post->getEventDate()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Start Date</th>
                                        <td>{{$post->getStartDate()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">End Date</th>
                                        <td>{{$post->getEndDate()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">YouTube Video Url</th>
                                        <td>{{$post->getUrl()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Display Order</th>
                                        <td>{{$post->getDisplayOrder()}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Status</th>
                                        <td>{{$post->getStatus() ? 'Yes' : 'No' }}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row"></th>
                                        <td>
                                            <a href="{{ route('admin.videos.index') }}" class="btn btn-default">Back</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
