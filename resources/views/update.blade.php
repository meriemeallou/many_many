<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Update Etudiant</h2>
    <form action="{{ route('update_etudiant_traitement') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{ $etudiant->id }}">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $etudiant->name }}" required>
        </div>
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" value="{{ $etudiant->surname }}"
                required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" id="age" name="age" value="{{ $etudiant->age }}" required>
        </div>
        <div class="form-group">
            <label for="note">Note</label>
            <input type="text" class="form-control" id="note" name="note"
                value="{{ $etudiant->modules->first()->pivot->note }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

</body>

</html>