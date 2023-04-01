<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body style="size:1040px;height:960px;background:url(https://pbs.twimg.com/media/EaTkSowX0AIr-Me.jpg) no-repeat; background-size: cover">
<div class="container" style="margin: top 20px;">
    <div class="row">
        <div class="col-md-12">
            <h1>TCR leering toevoegen</h1>
            <!-- Als je de leerling kon toevoegen krijg je hier te zien dat het een success was -->
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            @endif
               <!-- de form om de info van de leerling in de database te gooien -->
            <form method="post" action="{{url('opslaan')}}">
                @csrf
                 <!-- Input voor de studenten nummer -->
                <div class="m3">
                    <label for="student_nummer">Studenten Nummer</label>
                    <input type="text" class="form-control" name="student_nummer" placeholder="(012308534)" value="{{old('student_nummer')}}">
                    @error('student_nummer')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                      <!-- Als je een vakje leeg laat krijg je een error -->
                    @enderror
                </div>
                <!-- Input voor de Klas -->
                <div class="m3">
                    <label for="Klas">Klas</label>
                    <input type="text" class="form-control" name="Klas" placeholder="(PALVSOD2C)"value="{{old('Klas')}}">
                    @error('Klas')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    <!-- Als je een vakje leeg laat krijg je een error -->
                    @enderror
                </div>
                <!-- Input voor naam -->
                <div class="m3">
                    <label for="naam">Naam</label>
                    <input type="text" class="form-control" name="naam" placeholder="(John Doe)"value="{{old('naam')}}">
                    @error('naam')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    <!-- Als je een vakje leeg laat krijg je een error -->
                    @enderror
                </div>
                <!-- Input voor het adres -->
                <div class="m3">
                    <label for="adres">Adres</label>
                    <input type="text" class="form-control" name="adres" placeholder="(rotterdam/3432al)"value="{{old('adres')}}">
                    @error('adres')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    <!-- Als je een vakje leeg laat krijg je een error -->
                    @enderror
                </div>
                <div class="m3">
                    <!-- Input voor de email -->
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="(2340523@student.zadkine.nl)"value="{{old('email')}}">
                    @error('email')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    <!-- Als je een vakje leeg laat krijg je een error -->
                    @enderror
                </div>
                <div class="m3">
                    <!-- Input voor een telefoon nummer -->
                    <label for="telefoon">Telefoon Nummer</label>
                    <input type="text" class="form-control" name="telefoon" placeholder="(064234623423)" value="{{old('telefoon')}}">
                    @error('telefoon')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    <!-- Als je een vakje leeg laat krijg je een error -->
                    @enderror
                </div> 
                <br>
                <button type="submit" class="btn btn-success">Opslaan</button>
                <a href="{{url('read')}}" class="btn btn-success">Terug</a>
            </form>

        </div>
    </div>
  </div>  

</body>
</html>