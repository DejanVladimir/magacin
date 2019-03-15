<!DOCTYPE html>
<html lang="en">
<head>
<title>Bootstrap Example</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<h2>Izmenite magacin</h2>
<form method="POST" action="/magacin/{{ $magacin->id }}" style="margin-bottom: 1em;">
@method('PATCH')
@csrf
{{ csrf_field() }}
<div class="form-group">
<label for="naziv">Naziv:</label>
<input type="text" class="form-control"  placeholder="Izmenite naziv" name="naziv" value="{{ $magacin->naziv }}">
</div>

<div class="form-group">
<label for="lokacija">Lokacija:</label>
<input type="text" class="form-control"  placeholder="Izmenite lokaciju" name="lokacija" value="{{ $magacin->lokacija }}">
</div>

<div class="form-group">
<label for="broj_telefona">Broj telefona:</label>
<input type="number" class="form-control"  placeholder="Izmenite broj telefona" name="broj_telefona" value="{{ $magacin->broj_telefona }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>






</body>
</html>