export default {
	state: {
	    categories: [], 
	},
	getters: {
	  ReturnCategories (state) {
	    return state.categories;
	  }
	},
	actions: {
		PullCategories(data){
			axios.get('/categories/show').then((response) => {
				data.commit("categories", response.data.categories);
			}).catch((error) => {
				data.commit("categories", response.status);
			});
		}
	},
	mutations: {
		categories(state, data){
			state.categories = data;
		}
	},
}