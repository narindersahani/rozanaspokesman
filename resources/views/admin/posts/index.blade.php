@extends('layouts.admin', ['pageTitle' => trans('page_titles.posts')])

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
                    <h3 class="box-title">Posts:</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            @include('admin.posts.partials.search')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            &nbsp;
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('id', 'ID'); ?>
                                        </th>
                                        <th>Image</th>
                                        <th>
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('title', 'Title'); ?>
                                        </th>
                                        <th>
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('short_description', 'Short Description'); ?>
                                        </th>
                                        <!-- <th>
                                            Start Date
                                        </th>
                                        <th>
                                            End Date
                                        </th> -->
                                        <th>Display Order</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!$posts->isEmpty())
                                        @foreach($posts as $post)
                                            <tr>
                                                <td>{{$post->getKey()}}</td>
                                                <td><img src="{{ asset($post->present()->smallImage) }}" alt="{{ $post->getTitle() }}" height="75px"></td>
                                                <td>{{str_limit($post->getTitle(), 50)}}</td>
                                                <td>{{str_limit($post->getShortDescription(), 50)}}</td>
                                                <!-- <td>{{$post->getStartDate()}}</td>
                                                <td>{{$post->getEndDate()}}</td> -->
                                                <td>{{$post->getDisplayOrder()}}</td>
                                                <td>{!! $post->present()->statusIcon !!}</td>
                                                <td>
                                                    <a href="{{ route('admin.posts.view', $post->getKey()) }}">View</a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.posts.edit', $post->getKey()) }}">Edit</a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.posts.delete', $post->getKey()) }}" onclick="return confirm('Do you want to delete Post?')
">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" style="text-align: center;">
                                                No Posts found.
                                            </td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                    {{ $posts->appends(\Request::all())->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
