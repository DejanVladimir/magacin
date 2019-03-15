<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  <h2>Dodaj novi magacin</h2>
  


  <form method="POST" action="/magacin">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="naziv">Naziv:</label>
      <input type="text" class="form-control " name="naziv" required value={{ old('naziv')}}>
    </div>
    <div class="form-group">
      <label for="adresa">Adresa:</label>
      <input type="text" class="form-control " name="lokacija" required value={{ old('lokacija')}}>
    </div>
     <div class="form-group">
      <label for="broj_telefona">Broj:</label>
      <input type="number" class="form-control " name="broj_telefona" required value={{ old('broj_telefona')}}>
    </div>

    <button type="submit" class="btn btn-primary">Dodaj magacin</button>
</div>
 
  @if ($errors-> any())
  <div class="notification is-danger">

    <ul>

     

      @foreach ($errors->all() as $error)

      <li>{{ $error }}</li>

      @endforeach


    </ul>





  </div>


@endif


  </form>





</body>
</html>