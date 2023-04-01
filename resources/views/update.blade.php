<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body style="size:1040px;height:960px;background:url(https://pbs.twimg.com/media/EaTkSowX0AIr-Me.jpg) no-repeat; background-size: cover">
<div class="container" style="margin: top 20px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="red">TCR leering updaten</h1>
            <!-- dit checked of de vorige stap gelukt is of niet-->
            @if(Session::has('success'))
            <!--als het wel gelukt is dan krijg je hier een bericht te zien-->
            <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            @endif
            <!--dit is de form om de informatie uit het data base de kunne updaten-->
            <form method="post" action="{{url('update')}}">
                @csrf
                <!--dit heb ik er in gedaan omdat ik niet wil dat iemand met hun zweterige pootjes aan de data base id zit-->
                <div class="m3">
                    <input type="hidden" name="id" value="{{$data->id}}">
                    <label for="student_nummer">Studenten Nummer</label>
                    <input type="text" class="form-control" name="student_nummer" placeholder="(012308534)" value="{{$data->student_nummer}}">
                    <!--dit checked of alles wel is wel klopt anders validatie error-->
                    @error('student_nummer')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m3">
                    <label for="Klas">Klas</label>
                    <input type="text" class="form-control" name="Klas" placeholder="(PALVSOD2C)"value="{{$data->Klas}}">
                    <!--dit checked of alles wel is wel klopt anders validatie error-->
                    @error('Klas')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m3">
                    <label for="naam">Naam</label>
                    <input type="text" class="form-control" name="naam" placeholder="(John Doe)"value="{{$data->naam}}">
                    <!--dit checked of alles wel is wel klopt anders validatie error-->
                    @error('naam')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m3">
                    <label for="adres">Adres</label>
                    <input type="text" class="form-control" name="adres" placeholder="(rotterdam/3432al)"value="{{$data->adres}}">
                    <!--dit checked of alles wel is wel klopt anders validatie error-->
                    @error('adres')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="(2340523@student.zadkine.nl)"value="{{$data->email}}">
                    <!--dit checked of alles wel is wel klopt anders validatie error-->
                    @error('email')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="m3">
                    <label for="telefoon">Telefoon Nummer</label>
                    <input type="text" class="form-control" name="telefoon" placeholder="(064234623423)" value="{{$data->telefoon}}">
                    <!--dit checked of alles wel is wel klopt anders validatie error-->
                    @error('telefoon')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{$message}}
                    </div>
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