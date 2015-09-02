<!--- F Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('f_name', 'F Name:') !!}
    {!! Form::text('f_name', null, ['class' => 'form-control']) !!}
</div>

<!--- S Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('s_name', 'S Name:') !!}
    {!! Form::text('s_name', null, ['class' => 'form-control']) !!}
</div>

<!--- F Lastname Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('f_lastname', 'F Lastname:') !!}
    {!! Form::text('f_lastname', null, ['class' => 'form-control']) !!}
</div>

<!--- S Lastname Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('s_lastname', 'S Lastname:') !!}
    {!! Form::text('s_lastname', null, ['class' => 'form-control']) !!}
</div>

<!--- Ci Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('CI', 'Ci:') !!}
    {!! Form::text('CI', null, ['class' => 'form-control']) !!}
</div>

<!--- Username Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!--- Active Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('active', 'Active:') !!}
    {!! Form::text('active', null, ['class' => 'form-control']) !!}
</div>

<!--- Contract Date Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('contract_date', 'Contract Date:') !!}
    {!! Form::text('contract_date', null, ['class' => 'form-control']) !!}
</div>

<!--- Role Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role', null, ['class' => 'form-control']) !!}
</div>

<!--- Phone Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!--- Email Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!--- School Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('school_name', 'School name:') !!}
    {!! Form::text('school_name', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
