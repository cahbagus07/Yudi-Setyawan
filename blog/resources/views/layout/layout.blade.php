<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type ="text/CSS" href="http://localhost/blog/public/bootstrap/css/bootstrap.css">
</head>
<body class="page-header text-center">
	<header class="list-group-item-success">
		@include('layout.header')
	</header>
	<ul class="list-group">
		@section('sidebar')
				<li class="list-group-item-success" >HTML</li>
				<li class="list-group-item-warning">CSS</li>
				<li class="list-group-item-success">JS</li>
		@show
	</ul>

	<div class ="list-group-item-warning">
		@yield('content')
	</div>
</body>
</html>