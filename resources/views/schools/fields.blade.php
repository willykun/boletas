<!--- School Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('school_name', 'School Name:') !!}
    {!! Form::text('school_name', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
