<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="w-50 h-100 mx-auto d-flex align-items-center justify-content-center">

    <form class="row g-3 needs-validation" action="/ecole/create" method="POST">
        @method("POST")
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Nom de Ecole</label>
            <input type="text" class="form-control" id="validationCustom01" name="nom" placeholder="entrer votre nom" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Addresse de Ecole</label>
            <input type="text" class="form-control" id="validationCustom02" name="adresse" placeholder="entrer votre addresse" required>
        </div>
        <div>
            <button class="btn btn-primary text-center" type="submit">Valider</button>
        </div>

        @if (session()->has("message"))
            <div>
                {{session()->get('message')}}
            </div>
        @endif

        @empty($ecoles)
        @else
            <table class="table">
                <caption>Liste des Ecoles</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Addresse</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ecoles as $ecole)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$ecole->nom}}</td>
                            <td>{{$ecole->adresse}}</td>
                            <td><a href="/ecole/delete/{{$ecole->id}}" class="btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endempty


    </form>

</div>


</body>
</html>
