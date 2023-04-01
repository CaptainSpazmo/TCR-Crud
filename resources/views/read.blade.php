<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
    <!--Bootstrap gebruiktsd-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
  <div class="container" style="margin: top 20px;">
    <div class="row">
        <div class="col-md-12">
            <h1>TCR Studenten</h1>
               <!-- Knop om een nieuwe leerling toe te voegen -->
            <div>
              <a href="{{url('toevoegen')}}"><h3 class="btn btn-success">Leerling toevoegen</h3></a>
            </div>
             <!-- Succesmelding krijg je te zien als het succes vol de leering heeft toegevoegt -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            @endif
             <!-- Tabel met de studenteninformatie -->
            <table class="table">
              <thead><tr>
                <th>id</th>
                <th>studenten Nummer</th>
                <th>Klas</th>
                <th>Naam</th>
                <th>Adres</th>
                <th>Email</th>
                <th>Telefoon</th>
                <th>opties</th>
              </tr></thead>
              <tbody>
                @foreach ($data as $stu)
                  <tr>
                    <td>{{$stu->id}}</td>
                    <td>{{$stu->student_nummer}}</td>
                    <td>{{$stu->Klas}}</td>
                    <td>{{$stu->naam}}</td>
                    <td>{{$stu->adres}}</td>
                    <td>{{$stu->email}}</td>
                    <td>{{$stu->telefoon}}</td>
                     <!-- Knoppen voor het bijwerken en verwijderen van studenteninformatie -->
                    <td><a href="{{url('aanpassen/'.$stu->id)}}"><h3 class="btn btn-success">Update</h3></a> <a href="{{url('verwijderen/'.$stu->id)}}"><h3 class="btn btn-danger">Verwijderen</h3></a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>
  </div>  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</html>