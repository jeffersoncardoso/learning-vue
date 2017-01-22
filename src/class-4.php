<html>
	<head>
		<title>Learning Vue.js</title>
		<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	</head>
	<body>
		<div id="container">
			<ul>
				<li @click="removeName(name)" v-for="name in names" v-text="name"></li>
			</ul>
			<input type="text" placeholder="Digite o nome" v-model="newName">
			<button @click="addName">Adicionar</button>
		</div>

		<script>
			new Vue({
				el: "#container",
				data: {
					newName: "",
					names: ['Jefferson','Douglas', 'Alisson', 'Mauricio']
				},
				methods: {
			 		addName : function(){ 
			 			this.names.push(this.newName); 
			 			this.newName = "";
			 		},
			 		removeName : function(name){
		 				var index = this.names.indexOf(name);
		 				this.names.splice(index,1);
			 		}
				}
			})
		</script>

	</body>
</html>