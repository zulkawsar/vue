export default {
	state: {
	    posts: [], 
	    categories: [], 
	},
	getters: {
	  ReturnCategories (state) {
	    return state.categories;
	  },
	  ReturnPosts (state) {
	    return state.posts;
	  }
	},
	actions: {
		PullCategories(data){
			axios.get('/categories/get').then((response) => {
				data.commit("categories", response.data.categories);
			}).catch((error) => {
				data.commit("categories", response.status);
			});
		},
		PullPosts(data){
			axios.get('/posts').then((response) => {
				data.commit("posts", response.data.posts);
			}).catch((error) => {
				data.commit("posts", response.status);
			});
		},
	},
	mutations: {
		categories(state, data){
			state.categories = data;
		},
		posts(state, data){
			state.posts = data;
		}
	},
}