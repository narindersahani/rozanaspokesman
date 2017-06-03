@extends('layouts.admin', ['pageTitle' => trans('page_titles.categories')])

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
                    <h3 class="box-title">Categories:</h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-xs-12">
                            @include('admin.categories.partials.search')
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
                                        <th>
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('location', 'Location'); ?>
                                        </th>
                                        <th>
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('name', 'name'); ?>
                                        </th>
                                        <th>
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('display_order', 'Display Order'); ?>
                                        </th>
                                        <th style="text-align: center;">
                                            <?php echo App\Traits\SortableTrait::link_to_sorting_action('status', 'Status'); ?>
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(!$categories->isEmpty())
                                        @foreach($categories as $category)
                                            <tr>
                                                <td>{{$category->getKey()}}</td>
                                                <td>{{$category->present()->location}}</td>
                                                <td>{{$category->getName()}}</td>
                                                <td>{{$category->getDisplayOrder()}}</td>
                                                <td style="text-align: center;">{!! $category->present()->statusIcon() !!}</td>
                                                <td>
                                                    <a href="{{ route('admin.categories.edit', $category->getKey()) }}">Edit</a>
                                                    &nbsp;
                                                    <a href="{{ route('admin.categories.delete', $category->getKey()) }}" onclick="return confirm('Do you want to delete Category?')
">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="8" style="text-align: center;">
                                                No Category found.
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
                    {{ $categories->appends(\Request::all())->links() }}
                </div>
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
