{!! Form::open(['route' => ['admin.categories.index'], 'class' => 'form-inline', 'method' => 'get', 'id' => 'categoriesSearch']) !!}
    <div class="row">
    	<div class="col-xs-12">
		    <div class="form-group multiple_box">
                {{ Form::select('location', ['' => 'Select Location'] + $locations, Request::get('location'), ['class' => 'form-control select2', 'data-placeholder' => 'Select Location', 'name'=>'location']) }}
            </div>
		    &nbsp;
		    <div class="form-group">
		        {!! Form::text('name', \Request::get('name'), ['class' => 'form-control', 'placeholder' => 'Name']) !!}
		    </div>
			&nbsp;
		    <button type="submit" class="btn btn-primary">Search</button>
		    &nbsp;
		    <button type="reset" class="btn btn-default">Reset</button>
		</div>
    </div>
{!! Form::close() !!}