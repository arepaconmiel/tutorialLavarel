

@extends('layout')

@section('content')
    <h1>Create a note</h1>

    @include('partials/errors')
    
    <form action="{{ url('notes') }}" method="POST" role="form">
        {{ csrf_field() }}
    	<div class="form-group">
    		<input type="text" class="form-control" name="note" id="noteid" placeholder="Note" value="{{old('note')}}">
    	</div>
    
    	
    
    	<button type="submit" class="btn btn-primary">Create note</button>
    </form>
    
@endsection