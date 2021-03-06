<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body ng-app="gbgtech">
    <!-- Scripts -->
        <script src="/js/vendor.js"></script>
        <script src="/js/app.js"></script>
        <script src="/templates.js"></script>
		<div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
			</div>
		</div>
		<div ng-controller="GbgTechController">
			<div ng-include="'/js/partials/events.html'"></div>
		</div>
	</body>
</html>
