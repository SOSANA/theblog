@extends('layouts.single')

{{-- left off at 16:00 updating post.blade --}}
@section('content')

<div class="col-lg-12">
<hr>
<h1>{{ $post->title }}</h1>
<p class="lead">By {{ ucwords($post->user->username) }}</p>
<hr>
<p><span class="glyphicon glyphicon-time"></span>Posted {{ $date }}</p>
<hr>
<p class="lead">{{ $post->body }}</p>
<hr>
{{ HTML::link('/', 'Go Back');}}

</div>

@stop