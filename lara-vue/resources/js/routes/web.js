import home from '../components/backend/home';

//category
import CategoryIndex from '../components/backend/category/index';
import CategoryCreate from '../components/backend/category/create';


// routes
export const routes = [
	{ path:'/home', component: home},
	{ path:'/categories/show', component: CategoryIndex},
	{ path:'/categories/create', component: CategoryCreate},
];