<template>
	<div class="container mt-3">

	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">
	                	Edit Category
	                	{{this.$route.params.id}}
				        <router-link :to="{ path: '/categories' }" class="btn btn-primary btn-sm float-right"> Back </router-link>
	                </div>

	                <div class="card-body">
	                	<form @submit.prevent="store" @keydown="form.onKeydown($event)">
	                	    <div class="form-group">
	                	      <label>Category Name</label>
	                	      <input v-model="form.name" type="text"
	                	        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
	                	      <has-error :form="form" field="name"></has-error>
	                	    </div>

	                	    <button :disabled="form.busy" type="submit" class="btn btn-primary">update</button>
	                	  </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
    export default {
    	name: "CategoryEdit",
        data: function() {
            return {
              // Create a new form instance
              form: new Form({
                name: '',
              })
            }
		},
		mounted(){
			this.getCatetogy();
		},
		methods: {
			store () {
				let thisForm = this;
		      	// Submit the form via a POST request
		      	this.form.put('/categories/'+this.$route.params.id)
		        .then((data) => { 
			       	this.getCatetogy()
			        toastr.success('Data successfully update');
		        }).catch((error) => {
			        toastr.error(error);
		        })
		    },
		    getCatetogy(){
		    	let this_ = this;
		    	axios.get('/categories/'+this.$route.params.id+'/edit').then(response => {
		    		// console.log(response);
		    		this_.form.fill(response.data.category);
		    	});
		    }
		},
		
    };
</script>
