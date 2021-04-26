<!DOCTYPE html>
<html>
<head>
	<title>Baca Data</title>
</head>
<body>
 
<h1>Data Kota</h1>
 
<ul>
	@foreach($kota as $k)
		<li>{{ "Nama Kota : ". $k->nama . ' | Negara : ' . $k->negara->nama}}</li>
	@endforeach
</ul>
 
</body>
</html>