new Vue({
	el: '#movements_crud',
	created: function() {
		this.getMovements();
	},
	data: {
		movements: [],
		newRode:'',
		newMovement:'',
		newDescription:'',
		errors: []
	},
	methods: {
		getMovements: function() {
			var urlMovements = 'cashs'; 
			axios.get(urlMovements).then(response => {
				this.movements = response.data
			});
		},
		deleteMovement: function(movements){
			var url = 'cashs/'+movements.id;
			axios.delete(url).then(reponse => {
				this.getMovements();
				toastr.success('Eliminado correctamente');
			});
		}
	}
});
