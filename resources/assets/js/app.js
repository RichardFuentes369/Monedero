new Vue({
	el: '#movements_crud',
	created: function() {
		this.getMovements();
	},
	data: {
		movements: [],
		newMovement: '',
		errors: [],
	},
	methods: {
		getMovements: function() {
			var urlMovement = 'cash';
			axios.get(urlMovement).then(response => {
				this.movements = response.data
			});
		},
		createCash: function() {
			var urlMovement = 'cash';
			axios.post(url, {
				movement: this.movement
			}).then(response => {
				this.getMovements();
				this.newMovement = '';
				this.errors = [];
				toastr.success('Nueva tarea creada con exito');
			});
		},
	}	
})