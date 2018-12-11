@extends('layouts.app')
@section('content')
<div class="container">
{!! Form::open(['url' => '/product/storeStyle', 'method' => 'POST']) !!}
<div class="form-group">
{{Form::label('name', 'Name')}}
{{Form::text('name', '', ['class' => 'form-control'])}}
</div>
{{Form::submit('Submit',['class' => 'btn btn-default'])}}
{!! Form::close() !!}
</div>
@endsection