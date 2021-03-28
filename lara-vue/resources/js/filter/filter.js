import moment from 'moment';
import Vue from 'vue';

Vue.filter('datetime', (a) =>{
	return moment(a).format('MM/DD/YYYY hh:mm A');
});