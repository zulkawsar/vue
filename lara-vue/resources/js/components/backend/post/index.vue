<template>
	<div class="container mt-3">

	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">
	                	Posts 
				        <router-link :to="{ path: '/posts/create' }" class="btn btn-primary float-right">Create Post</router-link>
	                </div>

	                <div class="card-body">
                        <table class="table table-bordered">
                          <thead>                  
                            <tr>
                              <th>#</th>
                              <th>Category</th>
                              <th>Title</th>
                              <th>Content</th>
                              <th>Author</th>
                              <th>Created Date</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr v-for="(post, index) in posts">
                              <td> {{ index+1 }} </td>
                              <td>{{ post.category.name }}</td>
                              <td>{{ post.name }}</td>
                              <td>{{ post.content }}</td>
                              <td>{{ post.user.name }}</td>
                              <td>{{ post.created_at | datetime }}</td>
                              <td width="120">
                              	<router-link :to="`/posts/${ post.id }/edit`" class="btn btn-primary btn-sm">Edit</router-link>
                                <button type="button" class="btn btn-danger btn-sm" @click="deleteCategory(post.id)">Delete</button>
                              </td>
                            </tr>
                            <tr v-if="(posts.length < 1)">
                              <td colspan="4" class="text-center"> No data found! </td>
                            </tr>

                            <!-- $this->db->where("c.private",1);
        $this->db->where("uoapp.status",1);
        $this->db->or_where("c.private",0); -->
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
    	name: "PostIndex",
        mounted: function() {
          return this.$store.dispatch("PullPosts");
        },
        computed: {
        	posts(){
        		return this.$store.getters.ReturnPosts;
        	}
        },
        methods: {
          deletePost(id){
            axios.post('/posts/'+id,{_method:'DELETE'}).then(response=>{
              toastr.success('Data successfully deleted!');
              return this.$store.dispatch("PullPosts");
            });
          }
        }
    };
</script>
