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
		posts:[
		{
			name: 'JB',
			email: 'js@e.com',
			comment: 'Hello'
		}
		]

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

			


			this.$http.post('/api/posts', this.newPost, function(response)
			{
				


			});
			this.newPost = { name: '', email: '', comment: '' };
			this.fetchPosts();

		}
	}
});
