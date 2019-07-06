new Vue({
	el: '#movement_crud',
	created: function(){
		this.getMovements();
	},
	data: {
		

	},
	computed: {
		

	},
	methods: {
		getMovements: function() {
			axios.get(urlMovements).then(response => {
				this.lists = response.data
			});
		}
	}	
})