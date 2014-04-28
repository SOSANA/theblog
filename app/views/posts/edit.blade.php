@extends('layouts.admin')

@section('content')

<div class="col-md-12">
	{{ Form::model($post, array('method' => 'patch', 'route' => array('posts.update', $post->id))) }}
	@if($errors->any())
		<div class="alert alert-danger">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			{{ implode('', $errors->all('<li class="error">:message</li>')) }}
		</div>
	@endif
	<div class="control-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', Input::old('title'), array('class' => 'form-control', 'placeholder' => 'Please insert your title here...')) }}
	</div>
	<br>
	<div class="control-group">
		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', Input::old('body'), array('class' => 'ckeditor')) }}
	</div>
	<hr>
	<strong>Custom SEO Properties </strong><em>(These Items Are Optional)</em><br><br>
	<div class="control-group">
		{{ Form::label('m_desc', 'Meta Description') }}
		{{ Form::text('m_desc', Input::old('m_desc'), array('class' => 'form-control', 'placeholder' => 'Option Description.')) }}
	</div>
	<br>
	<div class="control-group">
		{{ Form::label('m_keyw', 'keywords') }}
		{{ Form::text('m_keyw', Input::old('m_keyw'), array('class' => 'form-control', 'placeholder' => 'Keywords')) }}
	</div>
	<br>
		{{ Form::submit('Update', array('class' => 'btn btn-success')) }}
		{{ link_to_route('posts.index', 'Cancel', null, array('class' => 'btn btn-warning')) }}
		{{ Form::close() }}
	
</div>

@stop