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
  <h2>Prikaz magacina</h2>
      
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Naziv</th>
        <th>Adresa</th>
        <th>Broj telefona</th>


        
      </tr>
      @foreach ($magacin as $m)
        <tr>
          <th>{{ $m->id }}</th>
          <th>{{ $m->naziv }}</th>
          <th>{{ $m->lokacija }}</th>
          <th>{{ $m->broj_telefona }}</th>
          <th><button onclick="window.location='/magacin/{{ $m->id }}/edit'" type="button" class="btn btn-primary">Izmeni magacin</button><th>
          <th><form method="POST" action="/magacin/{{ $m->id }}">
        @method('DELETE')
        @csrf
        <div class="field">
        <div class="control">

        <button type="submit" class="btn btn-primary">Obrisi magacin</button>
        </div>
        </div>
        </form><th>
                  

                </tr>
              @endforeach
       
    </thead>
  </table>
  <button onclick="window.location='/magacin/create'" type="button" class="btn btn-primary">Dodaj novi magacin</button>
</div>

</body>
</html>