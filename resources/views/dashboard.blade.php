@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<div class="col-md-8 col-md-offset-2">
	<div class="location-form">

	    <form id="location-form" action="/location" method="post">
	        <div class="form-group field-locationform-location required has-error">
                <label class="control-label" for="locationform-location">Location</label>
                <select id="locationform-location" class="form-control" name="LocationForm[location]">
                    <option value="">Select...</option>
                    <option value="1">USA</option>
                </select>

                <div class="help-block">Location cannot be blank.</div>
            </div>
	        <div class="form-group">
	        <button type="submit" class="btn btn-success">Go</button>	    
            </div>

	    </form>
	</div>
</div>
</div>

</div>
@endsection
