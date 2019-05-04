@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1>Forum Thread</h1>
				</div>
				<div class="panel-body">
					@foreach($threads as $thread)
					<article>
						<a href="{{$thread->path()}}">
							<h4>{{$thread->title}}</h4>
						</a>
						<div class="body">
							{{$thread->body}}
						</div>
					</article>
					<hr>
					@endforeach
				</div>
			</div>
		</div>
	</div>
@endsection