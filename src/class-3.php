<html>
	<head>
		<title>Learning Vue.js</title>
		<script src="https://unpkg.com/vue@2.1.10/dist/vue.js"></script>
	</head>
	<body>
		<div id="container">
			<ul>
				<li v-for="name in names" v-text="name"></li>
			</ul>
		</div>

		<script>
			new Vue({
				el: "#container",
				data: {
					names: ['Jefferson','Douglas', 'Alisson', 'Mauricio']
				}
			})
		</script>

	</body>
</html>