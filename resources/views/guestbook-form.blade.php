<form v-on="submit: submitPost">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="name">Name</label>
		<input v-model="newPost.name" class="form-control" type="text" name="name">
		<span class="text-danger" v-if="errors.name">@{{ errors.name }}</span>
	</div>

	<div class="form-group">
		<label for="email">Email</label>
		<input v-model="newPost.email" class="form-control" type="email" name="email">
<span class="text-danger" v-if="errors.email">@{{ errors.email }}</span>
	</div>

	<div class="form-group">
		<label for="comment">Comment</label>
		<textarea  v-model="newPost.comment" class="form-control" type="text" name="comment"></textarea>
		<span class="text-danger" v-if="errors.comment">@{{ errors.comment }}</span>
	</div>

	<button class="btn btn-default">Post</button>
</form>
