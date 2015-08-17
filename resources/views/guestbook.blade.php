@extends('layouts.main')

@section('content')
<h1>Guestbook</h1>

<div id="guestbook">

	<p>Welcome to our page. Please feel free to leave a message</p>
	@include('guestbook-form')

<hr>
	<div id="posts">
	<h3>Previous Messages</h3>

		<div class="panel  panel-default" v-repeat="posts | orderBy created_at true">

			<div class="panel-heading">
				<h3 class="panel-title">@{{ name }} <@{{ email }}></h3>
			</div>
			<div class="panel-body">
				@{{ comment}}
			</div>
			<div class="panel-footer">@{{ created_at }}</div>

		</div>

	</div>
	<pre> @{{ $data | json }}</pre>
</div>


@stop