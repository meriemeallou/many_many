<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD laravel </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Modifier un etudiant</h1>
    <hr>
    @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
    <ul>
        @foreach ($errors->all() as $error)
            <li class="alert alert-danger">{{$error}}</li>
        @endforeach
    </ul>

    <form action="/update/traitement" method="POST">
    @csrf
    @method('PUT')
    <input type="text" style="dispaly: none;" name="id" value="{{$etudiants->id}}" hidden>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{$etudiants->name}}">
  </div>
  <div class="mb-3">
    <label for="surname" class="form-label">Surname</label>
    <input type="text" class="form-control" id="surname" name="surname" value="{{$etudiants->surname}}">
  </div>
  <div class="mb-3">
    <label for="age" class="form-label">Age</label>
    <input type="text" class="form-control" id="age" name="age" value="{{$etudiants->age}}">
  </div>
  @foreach ($modules as $module) 
  <div class="mb-3">
    <label for="note" class="form-label">{{$module->name}}</label>
    <input type="text" class="form-control" id="note" name="note" value="{{$module->pivot->note}}">
  @endforeach
  <button type="submit" class="btn btn-primary">Modifier un etudiant</button>
  <a href="/" class="btn btn-primary">Liste des etudiants</a>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>