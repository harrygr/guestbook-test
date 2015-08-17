<form v-on="submit: submitPost">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="name">Name</label>
			<input v-model="newPost.name" class="form-control" type="text" name="name">
	</div>

	<div class="form-group">
		<label for="email">Email</label>
			<input v-model="newPost.email" class="form-control" type="email" name="email">

	</div>

		<div class="form-group">
		<label for="comment">Comment</label>
			<textarea  v-model="newPost.comment" class="form-control" type="text" name="comment"></textarea>
	</div>

	<button class="btn btn-default">Post</button>
</form>
