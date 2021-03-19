<template>
	<div class="container mt-3">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">Home</div>

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
    	name: "home",
        mounted: function() {
            console.log('Component mounted.')
        }
    };
</script>
