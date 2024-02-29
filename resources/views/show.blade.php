<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">tag name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts->tags as $tag)
    <tr>
      <td>{{$tag->name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>