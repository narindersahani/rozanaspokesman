<div class="box-body">
    <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Title</label>
        <div class="col-sm-10">
            {{ Form::text('title', \Request::old('title'), ['class' => 'form-control', 'id' => 'inputTitle', 'placeholder' => 'Title']) }}
            @if($errors->has('title'))
                <label class="error">{{ $errors->first('title') }}</label>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Select Category</label>
        <div class="col-sm-10">
            <div class="form-group multiple_box">
                <?php
                    $defaultCategories = [];
                    if(isset($video)) {
                        $defaultCategories = $video->categories->pluck('id')->all();
                    }
                ?>
                {{ Form::select('categories', $categories, $defaultCategories, ['class' => 'form-control select2', 'multiple' => true, 'data-placeholder' => 'Select Category', 'name'=>'categories[]']) }}
                @if($errors->has('categories'))
                    <label class="error">{{ $errors->first('categories') }}</label>
                @endif
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputShortDescription" class="col-sm-2 control-label">Short Description</label>

        <div class="col-sm-10">
            {{ Form::textarea('short_description', \Request::old('short_description'), ['class' => 'form-control', 'id' => 'inputShortDescription', 'placeholder' => 'Short Description']) }}

            @if($errors->has('short_description'))
                <label class="error">{{ $errors->first('short_description') }}</label>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="postDescription" class="col-sm-2 control-label">Description</label>

        <div class="col-sm-10">
            {{ Form::textarea('description', \Request::old('description'), ['class' => 'form-control', 'id' => 'postDescription', 'placeholder' => 'Description']) }}
        </div>
    </div>
    <div class="form-group">
        <label for="inputDisplayOrder" class="col-sm-2 control-label">Display Order</label>

        <div class="col-sm-10">
            {{ Form::text('display_order', \Request::old('display_order'), ['class' => 'form-control', 'id' => 'inputDisplayOrder', 'placeholder' => 'Display Order']) }}
        </div>
    </div>
    <!-- <div class="form-group">
        <label for="inputStartDate" class="col-sm-2 control-label">Start Date</label>
        <div class="col-sm-10">
            <div class='input-group date' id='startDate'>
                {{ Form::text('start_date', \Request::old('start_date'), ['class' => 'form-control', 'placeholder' => 'Start Date']) }}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            @if($errors->has('start_date'))
                <label class="error">{{ $errors->first('start_date') }}</label>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputEndDate" class="col-sm-2 control-label">End Date</label>
        <div class="col-sm-10">
            <div class='input-group date' id='EndDate'>
                {{ Form::text('end_date', \Request::old('end_date'), ['class' => 'form-control', 'placeholder' => 'Date']) }}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            @if($errors->has('end_date'))
                <label class="error">{{ $errors->first('end_date') }}</label>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="inputEventDate" class="col-sm-2 control-label">Event Date</label>
        <div class="col-sm-10">
            <div class='input-group date' id='eventDate'>
                {{ Form::text('event_date', \Request::old('event_date'), ['class' => 'form-control', 'placeholder' => 'Date']) }}
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
            @if($errors->has('event_date'))
                <label class="error">{{ $errors->first('event_date') }}</label>
            @endif
        </div>
    </div> -->
    <div class="form-group">
        <label for="inputImage" class="col-sm-2 control-label">YouTube Video Url</label>

        <div class="col-sm-10">
            {{ Form::text('url', \Request::old('end_date'), ['class' => 'form-control', 'placeholder' => 'YouTube Video Url']) }}
            @if($errors->has('url'))
                <label class="error">{{ $errors->first('url') }}</label>
            @endif
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('status', \Request::old('status'), null) }} Status
                </label>
            </div>
        </div>
    </div>
</div>

<!-- /.box-body -->
<div class="box-footer">
    <div class="row">
        <div class="col-lg-4">
            &nbsp;
        </div>
        <div class="col-lg-4">
            <button type="submit" class="btn btn-info">Submit</button>
            <a href="{{ route('admin.videos.index') }}" class="btn btn-default" >Cancel</a>
        </div>
        <div class="col-lg-4">
            &nbsp;
        </div>
    </div>
</div>
<!-- /.box-footer -->

@section('script')
    <script type="text/javascript">
        <?php 
            $startDate = isset($post) ? $post->getStartDate('m/d/Y') : null;
            $endDate = isset($post) ? $post->getEndDate('m/d/Y') : null;
            $eventDate = isset($post) ? $post->getEventDate('m/d/Y') : null;
        ?>
        var startDate = "<?php echo $startDate; ?>";
        var endDate = "<?php echo $endDate; ?>";
        var eventDate = "<?php echo $eventDate; ?>";

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('postDescription');

            $('#startDate').datetimepicker({
                format: 'YYYY-MM-DD'
            }).on('dp.show', function() {
                $(this).data("DateTimePicker").date(moment(startDate));
            });
            $('#EndDate').datetimepicker({
                format: 'YYYY-MM-DD',
                useCurrent: false //Important! See issue #1075
            }).on('dp.show', function() {
                $(this).data("DateTimePicker").date(moment(endDate));
            });
            $("#startDate").on("dp.change", function (e) {
                console.log(e.date);
                $('#EndDate').data("DateTimePicker").minDate(e.date);
            });
            $("#EndDate").on("dp.change", function (e) {
                $('#startDate').data("DateTimePicker").maxDate(e.date);
            });

            $('#eventDate').datetimepicker({
                format: 'YYYY-MM-DD'
            }).on('dp.show', function() {
                $(this).data("DateTimePicker").date(moment(eventDate));
            });
        });
    </script>
@endSection