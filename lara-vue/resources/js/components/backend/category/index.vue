<template>
	<div class="container mt-3">

	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">
	                	Category 
				        <router-link :to="{ path: '/categories/create' }" class="btn btn-primary btn-sm float-right">Add Category</router-link>
	                </div>

	                <div class="card-body">
                        <table class="table table-bordered">
                          <thead>                  
                            <tr>
                              <th>#</th>
                              <th>Name</th>
                              <th>Created Date</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="(category, index) in categories">
                              <td> {{ index+1 }} </td>
                              <td>{{ category.name }}</td>
                              <td>{{ category.created_at | datetime }}</td>
                              <td>
                              	<button type="button" class="btn btn-primary btn-sm">Edit</button>
                                <button type="button" class="btn btn-danger btn-sm" @click="deleteCategory(category.id)">Delete</button>
                              </td>
                            </tr>
                            <tr v-if="(categories.length < 1)">
                              <td colspan="4" class="text-center"> No data found! </td>
                            </tr>
                          </tbody>
                        </table>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
</template>

<script>
    
    export default {
    	name: "CategoryIndex",
        mounted: function() {
          return this.$store.dispatch("PullCategories");
        },
        computed: {
        	categories(){
        		return this.$store.getters.ReturnCategories;
        	}
        },
        methods: {
          deleteCategory(id){
            axios.post('/categories/'+id,{_method:'DELETE'}).then(response=>{
              toastr.success('Data successfully deleted!');
              return this.$store.dispatch("PullCategories");
              console.log(response);
            });
          }
        }
    };
</script>
