<html>
<body>

	<h1>Caracteres enviados por parâmetro: {{$original}}<h1>
	<hr>

	@foreach($vetor as $elemento)
		<p>{{$elemento}}</p>
	@endforeach

</body>
</html>