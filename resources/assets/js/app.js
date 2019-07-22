new Vue({
	el: '#movements_crud',
	created: function() {
		this.getMovements();
	},
	data: {
		movements: [],
		newRode:'',
		newMovement:'',
		newDescription:''
	},
	methods: {
		getMovements: function() {
			var urlGMovements = 'cashs'; 
			axios.get(urlGMovements).then(response => {
				this.movements = response.data
			});
		},
		createMovements: function() {
			var urlCMovements = 'cashs';
			axios.post(urlCMovements, {
				movement : this.newMovement,
				description : this.newDescription,
				rode : this.newRode,
			}).then(response => {
				this.getMovements();
				this.newMovement = '';
				this.newDescription = '';
				this.newRode = '';
				toastr.success('Creado correctamente');
			});
		},
		deleteMovement: function(movements){
			var urlDMovements = 'cashs/'+movements.id;
			axios.delete(urlDMovements).then(reponse => {
				this.getMovements();
				toastr.success('Eliminado correctamente');
			});
		}
	}
});
