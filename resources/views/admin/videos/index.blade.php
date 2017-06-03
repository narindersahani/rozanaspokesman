@extends('layouts.admin', ['pageTitle' => trans('page_titles.videos')])

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Videos
        <!-- <small>Control panel</small> -->
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <i class="fa fa-dashboard"></i> Dashboard
            </a>
        </li>
        <li class="active">Videos</li>
    </ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Videos:</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            @include('admin.videos.partials.search')
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
                                    @if(!$videos->isEmpty())
                                        @foreach($videos as $video)
                                            <tr>
                                                <td>{{$video->getKey()}}</td>
                                                <td><img src="{{ asset($video->present()->smallImage) }}" alt="{{ $video->getTitle() }}" height="75px"></td>
                                                <td>{{str_limit($video->getTitle(), 50)}}</td>
                                                <td>{{str_limit($video->getShortDescription(), 50)}}</td>
                                                <!-- <td>{{$video->getStartDate()}}</td>
                                                <td>{{$video->getEndDate()}}</td> -->
                                                <td>{{$video->getDisplayOrder()}}</td>
                                                <td>{!! $video->present()->statusIcon !!}</td>
                                                <td>
                                                    <a href="{{ route('admin.videos.view', $video->getKey()) }}">View</a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.videos.edit', $video->getKey()) }}">Edit</a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.videos.delete', $video->getKey()) }}" onclick="return confirm('Do you want to delete Video?')
">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" style="text-align: center;">
                                                No Video found.
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
                    {{ $videos->appends(\Request::all())->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
