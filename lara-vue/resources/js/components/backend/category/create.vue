<template>
	<div class="container mt-3">

	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">
	                	Create Category
				        <router-link :to="{ path: '/categories/show' }" class="btn btn-primary btn-sm float-right"> All Category</router-link>
	                </div>

	                <div class="card-body">
	                	<form @submit.prevent="store" @keydown="form.onKeydown($event)">
	                	    <div class="form-group">
	                	      <label>Category Name</label>
	                	      <input v-model="form.name" type="text"
	                	        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }">
	                	      <has-error :form="form" field="name"></has-error>
	                	    </div>

	                	    <button :disabled="form.busy" type="submit" class="btn btn-primary">Create</button>
	                	  </form>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
    export default {
    	name: "CategoryCreate",
        data: function() {
            return {
              // Create a new form instance
              form: new Form({
                name: '',
              })
            }
		},

		methods: {
			store () {
				let thisForm = this;
		      	// Submit the form via a POST request
		      	this.form.post('/categories/store')
		        .then((data) => { 
			        toastr.success('Data successfully save');
			        thisForm.form.reset();
		        }).catch((error) => {
			        toastr.error(error);

		        })
		    }
		},
		
    };
</script>
