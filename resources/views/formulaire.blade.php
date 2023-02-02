<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <title>Formulaire D'Eleves</title>
</head>
<body>
<div class="w-50 h-100 mx-auto d-flex align-items-center justify-content-center">

    <form class="row g-3 needs-validation" action="/eleve/create" method="POST">
        @method("POST")
        @csrf
        <div class="col-md-6">
            <label for="validationCustom01" class="form-label">Nom</label>
            <input type="text" class="form-control" id="validationCustom01" name="nom" placeholder="entrer votre nom" required>
        </div>
        <div class="col-md-6">
            <label for="validationCustom02" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="validationCustom02" name="prenom" placeholder="entrer votre prenom" required>
        </div>


        <div class="col-md-6">
            <label for="validationCustom03" class="form-label">Matricule</label>
            <input type="text" class="form-control" id="validationCustom03" name="matricule" placeholder="entrer votre matricule" required>
        </div>



        <div>
            <button class="btn btn-primary text-center" type="submit">Enregistrer</button>
        </div>

        @if (session()->has("message"))
            <div>
                {{session()->get('message')}}
            </div>
        @endif

        @empty($eleves)
        @else
            <table class="table">
                <caption>Liste des Eleves</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">prenom</th>
                        <th scope="col">matricule</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eleves as $eleve)
                        <tr>
                            <th scope="row">{{$loop->index + 1}}</th>
                            <td>{{$eleve->nom}}</td>
                            <td>{{$eleve->prenom}}</td>
                            <td>{{$eleve->matricule}}</td>
                            <td><a href="/eleve/delete/{{$eleve->id}}" class="btn btn-danger">Supprimer</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endempty


    </form>

</div>






</body>
</html>
