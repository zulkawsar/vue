import home from '../components/backend/home';

//category
import CategoryIndex from '../components/backend/category/index';
import CategoryCreate from '../components/backend/category/create';
import CategoryEdit from '../components/backend/category/edit';

//Post
import PostIndex from '../components/backend/post/index';
import PostCreate from '../components/backend/post/create';
// import PostEdit from '../components/backend/Post/edit';


// routes
export const routes = [
	{ path:'/home', component: home},
	{ path:'/categories', component: CategoryIndex},
	{ path:'/categories/create', component: CategoryCreate},
	{ path:'/categories/:id/edit', component: CategoryEdit},
	{ path:'/posts', component: PostIndex},
	{ path:'/posts/create', component: PostCreate},
	// { path:'/posts/:id/edit', component: PostEdit},
];