<html>
	<head>
		<title>Learning Vue.js</title>
		<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	</head>
	<body>
		<div id="container">
			<p v-bind:title="title">Put the mouse over here</p>
			
			<label>
				<input @click="disableButton"name="question" type="radio" value="Y">Sim 
				<input @click="disableButton"name="question" type="radio" value="N">Não 
				<input @click="enableButton"name="question" type="radio" value="O">Outro
			</label>

			<br><br>
			
			<button :disabled="isDisabled">{{ message }}</button>
		</div>

		<script>
			new Vue({
				el: "#container",
				data: {
					title : 'The title',
					isDisabled : false,
					message : "Is enabled",
				},
				methods: {
					disableButton : function(){
						this.isDisabled = true;
						this.message = "Is disabled";
					},
					enableButton : function(){
						this.isDisabled = false;
						this.message = "Is enabled";
					}
				}
			})
		</script>

	</body>
</html>