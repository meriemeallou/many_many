<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
@if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
    @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">Etudiant</th>
      <th scope="col">Front-end</th>
      <th scope="col">Back-end</th>
      <th scope="col">Approche agile</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($etudiants as $etudiant) 
    <tr>
      <td>
        {{$etudiant->name}}
      </td>
      @foreach ($etudiant->modules as $module)
      <td>
        {{$module->pivot->note}}
      </td>
      @endforeach
      <td>
      <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-outline-info">Update</a>
        <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-outline-danger">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/" class="btn btn-primary" role="button">Back</a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>