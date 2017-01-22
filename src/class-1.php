<html>
	<head>
		<title>Learning Vue.js</title>
		<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	</head>
	<body>
		<div id="container">

			<input type="text" id="input" v-model="message">
			<p> The value of input is: {{ message }} </p> 
		</div>
		<script>
			new Vue({
				el: "#container",
				data: {
					message: "Hello World"
				}
			})
		</script>

	</body>
</html>