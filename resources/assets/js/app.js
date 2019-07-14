new Vue({
	el: '#movements_crud',
	created: function() {
		this.getMovements();
	},
	data: {
		movements: [],
		newRode: '',
		newMovement: '',
		newDescription: ''
	},
	methods: {
		getMovements: function() {
			var urlCash = 'cashs';
			axios.get(urlCash).then(response => {
				this.movements = response.data
			});
		},
		deleteMovement: function(movements) {
			var url = 'cashs/' + movements.id;
			axios.delete(url).then(response => {
				this.getMovements();
			});
		},
		createMovement: function() {
			var url = 'cashs';
			axios.post(url, {
				rode: this.newRode,
				movement: this.newMovement,
				description: this.newDescription
			}).then(response => {
				this.getMovements();
				this.newRode='';
				this.newMovement='';
				this.newDescription='';
			});
		},
	}	
});

