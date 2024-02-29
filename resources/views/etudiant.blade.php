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
      <th>Etudiant</th>
      <th>Front-end</th>
      <th>Back-end</th>
      <th>Approche Agile</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($etudiants as $etudiant) 
    @foreach ($etudiant->modules as $module)
    <tr>
      <td>{{$etudiant->name}}</td>
      <td>{{$module->pivot->note}}</td>
      <td>{{$module->pivot->note}}</td>
      <td>{{$module->pivot->note}}</td>
    </tr>
    @endforeach
    @endforeach
  </tbody>
</table>
<a href="/">Back</a>
</body>
</html>