<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
  <thead>
    <tr>
      <th>Module</th>
      <th>Etudiant Name</th>
      <th>Etudiant Surname</th>
      <th>Etudiant Age</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($modules as $module) 
    @foreach ($module->etudiants as $etudiant)
    <tr>
      <td>{{$module->name}}</td>
      <td>{{$etudiant->name}}</td>
      <td>{{$etudiant->surname}}</td>
      <td>{{$etudiant->age}}</td>
    </tr>
    @endforeach
    @endforeach
  </tbody>
</table>
<a href="/">Back</a>
</body>
</html>