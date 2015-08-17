var Vue = require('vue');
Vue.use(require('vue-resource'));

Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

var vm = new Vue({
	el: '#guestbook',

	data: {
		newPost: {

			name: '',
			email: '',
			comment: ''
		},
		posts:[],
		errors: {}

	},

	ready: function()
	{
		this.fetchPosts();
	},

	methods: {
		fetchPosts: function()
		{
			this.$http.get('api/posts', function(response)
			{
				this.posts = response;
			});
		},

		submitPost: function(e)
		{
			e.preventDefault();

			this.errors = {};

			this.$http.post('/api/posts', this.newPost).success(function(data, status, request)
				{
					this.newPost = { name: '', email: '', comment: '' };
				}).error(function(data, status, request)
				{
					console.log("there was an error!");
					console.log(data);
					this.errors = data;
				});

			this.fetchPosts();

		}
	}
});
