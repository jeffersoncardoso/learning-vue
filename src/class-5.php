<html>
	<head>
		<title>Learning Vue.js</title>
		<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
		<style type="text/css">
			.row:before,
			.row:after {
			    content: " ";
			    display: table;
			}
			.row:after {
			    clear: both;
			}

			.col-4{
				float:left;
				width:30%;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<div class="row">
				<div class="col-4">
					<label>Servidores Disponíveis</label>
					<ul>
						<li v-for="civilServant in removedCivilServantsFilter" @click="addCivilServant(civilServant)">
							{{ civilServant.name }}
						</li>
					</ul>	
				</div>

				<div class="col-4">
					<label>Servidores Vinculados</label>
					<ul>
						<li v-for="civilServant in addedCivilServantsFilter" @click="removeCivilServant(civilServant)">
							{{ civilServant.name }}
						</li>
					</ul>
				</div>
			</div>
			
		</div>

		<script>
			new Vue({
				el: "#container",
				data: {
					civilServants: [
						{ name: "Jefferson Cardoso" , registryId: "101015" 	, isAdded: false },
						{ name: "Alisson Vieira"    , registryId: "101432" 	, isAdded: false },
						{ name: "Douglas Carlos"    , registryId: "75158" 	, isAdded: false },
						{ name: "Gabriel Correa"    , registryId: "53010" 	, isAdded: false },
						{ name: "Gustavo Koch"      , registryId: "101215" 	, isAdded: false }
					]
				},
				methods: {
					addCivilServant: function(civilServant){
						index = this.civilServants.indexOf(civilServant);
						this.civilServants[index].isAdded = true;
					},
					removeCivilServant: function(civilServant){
						index = this.civilServants.indexOf(civilServant);
						this.civilServants[index].isAdded = false;
					}
				},
				computed: {
					addedCivilServantsFilter: function(){
						return this.civilServants.filter(function(civilServant){
							return civilServant.isAdded;
						});
					},
					removedCivilServantsFilter: function(){
						return this.civilServants.filter(function(civilServant){
							return !civilServant.isAdded;
						});	
					}
				}
			})
		</script>

	</body>
</html>