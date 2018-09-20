

new Vue({
	el: '#app',
	data : {
		keeps: [],
		newKeep: '',
		errors: ''
	},
	created: function(){
		this.getKeeps();
	},
	methods: {
		getKeeps: function(){
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
				this.getKeeps();
			});
		},
		saveKeep: function(e){
			var url = 'tasks';
			// var fd = new FormData()
			// fd.append('image', this.selectedFile, this.selectedFile.name)
			axios.post(url, { 
				keep: this.newKeep
			}).then( response => {
				this.getKeeps();
				this.newKeep = '';
				$('.modal').modal('hide');
			});
		}
	}
});

