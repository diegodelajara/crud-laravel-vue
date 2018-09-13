new Vue({
	el: '#app',
	data : {
		keeps: []
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
		deleteKeep: function(id){
			alert(id);
		},
		editKeep: function(id){
			alert('Editar: '+id);
		}
	}
})
