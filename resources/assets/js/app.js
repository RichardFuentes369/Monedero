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
		offset: 3,
		pagination: {
            'total':0,
            'current_page':0,
            'per_page':0,
            'last_page':0,
            'from':0,
            'to':0
		},
	},
	computed: {
		isActived: function() {
			return this.pagination.current_page;
		},
		pagesNumber: function() {
			if(!this.pagination.to){
				return [];
			}

			var from = this.pagination.current_page - this.offset; 
			if(from < 1){
				from = 1;
			}

			var to = from + (this.offset * 2); 
			if(to >= this.pagination.last_page){
				to = this.pagination.last_page;
			}

			var pagesArray = [];
			while(from <= to){
				pagesArray.push(from);
				from++;
			}
			return pagesArray;
		}
	},
	methods: {
		getMovements: function(page) {
			var urlGMovements = 'cashs?page='+page; 
			axios.get(urlGMovements).then(response => {
				this.movements = response.data.movements.data,
				this.pagination = response.data.pagination
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
		},
		changePage: function(page) {
			this.pagination.current_page = page;
			this.getMovements(page);
		}
	}
});
