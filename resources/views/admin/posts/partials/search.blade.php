{!! Form::open(['route' => ['admin.posts.index'], 'class' => 'form-inline', 'method' => 'get', 'id' => 'contractSearch']) !!}
    <div class="row">
    	<div class="col-xs-12">
		    <div class="form-group">
		        {!! Form::text('title', \Request::get('title'), ['class' => 'form-control', 'placeholder' => 'Title']) !!}
		    </div>
		    <!-- <div class="form-group">
		        <div class="input-daterange input-group">
		            <input type="text" class="form-control" name="start_date" placeholder="Start Date" value="{{\Request::get('start_date')}}" />
		            <span class="input-group-addon">to</span>
		            <input type="text" class="form-control" name="end_date" placeholder="End Date" value="{{\Request::get('end_date')}}" />
		        </div>
		    </div> -->
			&nbsp;
		    <button type="submit" class="btn btn-primary">Search</button>
		    &nbsp;
		    <button type="reset" class="btn btn-default">Reset</button>
		</div>
    </div>
{!! Form::close() !!}