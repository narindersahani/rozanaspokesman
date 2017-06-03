<div class="box-body">
    <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Select Category</label>
        <div class="col-sm-10">
            <div class="form-group multiple_box">
                <?php
                    $defaultLocations = null;
                    if(isset($category)) {
                        $defaultLocations = $category->getLocation();
                    }
                ?>
                {{ Form::select('location', $locations, $defaultLocations, ['class' => 'form-control select2', 'data-placeholder' => 'Select Location', 'name'=>'location']) }}
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputTitle" class="col-sm-2 control-label">Name</label>
        <div class="col-sm-10">
            {{ Form::text('name', \Request::old('name'), ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Name']) }}
        </div>
    </div>
<!--     <div class="form-group">
        <label for="categoryDescription" class="col-sm-2 control-label">Description</label>

        <div class="col-sm-10">
            {{ Form::textarea('description', \Request::old('description'), ['class' => 'form-control', 'id' => 'categoryDescription', 'placeholder' => 'Description']) }}
        </div>
    </div> -->
    <div class="form-group">
        <label for="inputDisplayOrder" class="col-sm-2 control-label">Display Order</label>

        <div class="col-sm-10">
            {{ Form::text('display_order', \Request::old('display_order'), ['class' => 'form-control', 'id' => 'inputDisplayOrder', 'placeholder' => 'Display Order']) }}
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
            <a href="{{ route('admin.categories.index') }}" class="btn btn-default" >Cancel</a>
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
        ?>
        var startDate = "<?php echo $startDate; ?>";

        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('categoryDescription');

            $('#startDate').datetimepicker({
                format: 'MM/DD/YYYY'
            }).on('dp.show', function() {
                $(this).data("DateTimePicker").date(moment(startDate));
            });
            $('#EndDate').datetimepicker({
                format: 'MM/DD/YYYY',
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
        });
    </script>
@endSection