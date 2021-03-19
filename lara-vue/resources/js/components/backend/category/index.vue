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
	                    I'm an example component.
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
            console.log('Component mounted.')
        }
    };
</script>
