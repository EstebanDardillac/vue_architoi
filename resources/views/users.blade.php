<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/sass/app.scss')
    <title>Liste des utilisateurs</title>
</head>
<body>
  <form action="{{ route('search') }}" method="get">
    <input type="text" id="search" name="search" placeholder="Rechercher">
    <button type="submit">🔎</button>
    <a href="{{ route('users') }}">Annuler</a>
  </form>
  <section class="container">
    <table class="table table-hover">    
        <tr>
          <th scope="col">#</th>
          <th scope="col">Genre</th>
          <th scope="col">Prénom</th>
          <th scope="col">Nom</th>
          <th scope="col">Email</th>
          <th scope="col">Adresse</th>
          <th scope="col">Pays</th>
          <th scope="col">Ville</th>
          <th scope="col">Numéro de téléphone</th>
          <th scope="col">Emploi</th>
          <th scope="col">Loisirs</th>
          <th scope="col">Modifier</th>
          <th>Effacer</th>
        </tr>
        @forelse ($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td>{{$user->gender->name}}</td>
          <td>{{$user->name}}</td>
          <td>{{$user->lastname}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->adress}}</td>
          <td>{{$user->country->name}}</td>
          <td>{{$user->city}}</td>
          <td>{{$user->number}}</td>
          <td>{{$user->job}}</td>
          <td>
            @foreach ($user->hobbies as $hobby)
              {{$hobby->name}},
            @endforeach
          </td>
          <td><a href="{{ route('users.edit', $user) }}">Modifier</a></td>
          <td>
            <form action="{{ route('users.destroy', $user) }}" method="post">
              @csrf
              @method('delete')
              <div class="col-12">
                <button class="btn btn-primary">Effacer</button>  
              </div>
            </form>
          </td>
        </tr>

      @empty
        <tr>
          <td colspan="2">Il n'y a pas d'utilisateurs inscrit pour le moment</td>
        </tr>
      @endforelse
      </table>
  </section>
  <div class="col-12 ms-5">
    <a href="{{ route('form') }}" class="btn btn-primary">Ajouter</a>
  </div>
    @vite('resources/js/app.js')
</body>
</html>
