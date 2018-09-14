

new Vue({
	el: '#app',
	data : {
		keeps: [],
		newKeep: '',
		errors: ''
	},
	created: function(){
		this.getKepps();
	},
	methods: {
		getKepps: function(){
			var url = 'tasks';
			axios.get(url).then(response => {
				this.keeps = response.data
			});
		},
		editKeep: function(id){
			alert('Editar: '+id);
		},
		deleteKeep: function(id){
			var url = 'tasks/' + id;
			axios.delete(url).then( response => {
				this.getKepps();
			});
		},
		saveKeep: function(){
			var url = 'tasks';
			axios.post(url, { 
				keep: this.newKeep
			}).then( response => {
				this.getKeeps();
				this.newKeep = '';
				$('.modal').modal('close');
			});
		}
	}
});

