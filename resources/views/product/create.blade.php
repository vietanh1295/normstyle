@extends('layouts.app')
@section('content')
<div class="container">
{!! Form::open(['action' => 'ProductsController@store', 'method' => 'POST']) !!}
<div class="form-group">
{{Form::label('name', 'Name')}}
{{Form::text('name', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('type', 'Type')}}
{{Form::select('type', $types,null,['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('style', 'Style')}}
{{Form::select('style', $styles,null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('material', 'Material')}}
{{Form::select('material',$materials,null,['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('price', 'Price')}}
{{Form::text('price', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('link', 'Link')}}
{{Form::text('link', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('img1', 'Image1')}}
{{Form::text('img1', '', ['class' => 'form-control'])}}
</div>
<div class="form-group">
{{Form::label('img2', 'Image2')}}
{{Form::text('img2', '', ['class' => 'form-control'])}}
</div>
{{Form::submit('Submit',['class' => 'btn btn-default'])}}
{!! Form::close() !!}
</div>
@endsection