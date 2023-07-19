<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/sass/app.scss')
    <title>Formulaire d'inscription</title>
</head>
<body>
    <section class="container mt-4 mb-4">
        <form action="{{ route('users.store') }}" method="post" class="row g-3">
            @csrf
            <div class="col-md-6">
            <label for="lastname" class="form-label">Nom :</label>
            <input type="text" id="lastname" name="lastname" class="form-control" required>
            @error('lastname')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-6">
            <label for="name" class="form-label">Prénom :</label>
            <input type="text" id="name" name="name" class="form-control" required>
            @error('name')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div  class="col-md-6 mt-5">
                <label for="gender">Genre :</label>
                <div class="form-check form-check-inline ms-3 me-5">
                    <input type="radio" id="gender-male" name="gender" value="Mr" class="form-check-input">
                    <label for="gender-male" class="form-check-label">Mr.</label>
                </div>

                <div class="form-check form-check-inline me-5">
                    <input type="radio" id="gender-female" name="gender" value="Mme" class="form-check-input">
                    <label for="gender-female" class="form-check-label">Mme.</label>
                </div>

                <div class="form-check form-check-inline me-5">
                    <input type="radio" id="gender-nobinary" name="gender" value="Non binaire" class="form-check-input">
                    <label for="gender-nobinary" class="form-check-label">Non binaire</label>
                </div>

                <div class="form-check form-check-inline me-5">
                    <input type="radio" id="gender-girafe" name="gender" value="Girafe" class="form-check-input">
                    <label for="gender-girafe" class="form-check-label">Girafe</label>
                </div>
                
                @error('gender')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-6">
            <label for="email" class="form-label">Email :</label>
            <input type="text" id="email" name="email" class="form-control" required>
            @error('email')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-12">
            <label for="password" class="form-label">Mot de passe :</label>
            <input type="text" id="password" name="password" class="form-control" required>
            @error('password')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-4 dropdown-center">
            <label for="country" class="form-label">Pays :</label>
            <select id="country" name="country" v-model="selected" class="form-select" aria-label="Default select example">
                <option disabled value="" class="dropdown-menu">Choissisez un pays</option>
                <option class="dropdown-item">France</option>
                <option class="dropdown-item">Espagne</option>
                <option class="dropdown-item">Portugal</option>
                <option class="dropdown-item">Angleterre</option>
                <option class="dropdown-item">Italie</option>
                <option class="dropdown-item">Allemagne</option>
                <option class="dropdown-item">Suisse</option>
                <option class="dropdown-item">Luxembourg</option>
                <option class="dropdown-item">Belgique</option>
                <option >Listenbourg</option>
            </select>
            @error('country')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-5">
            <label for="city" class="form-label">Ville :</label>
            <input type="text" id="city" name="city" class="form-control" required>
            @error('city')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-3">
            <label for="postal" class="form-label">Code postal :</label>
            <input type="text" id="postal" name="postal" class="form-control"required>
            @error('postal')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-12">
            <label for="adress" class="form-label">Adresse :</label>
            <input type="text" id="adress" name="adress" class="form-control" required>
            @error('adress')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-4">
            <label for="number" class="form-label">Numéro de téléphone :</label>
            <input type="text" id="number" name="number" class="form-control" required>
            @error('number')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-md-8">
            <label for="job" class="form-label">Emploi :</label>
            <input type="text" id="job" name="job" class="form-control"required>
            @error('job')
            <p>{{ $message }}</p>
            @enderror
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary me-4">Modifier</button>
                <a href="{{ route('users') }}">Annuler</a>
            </div>
        </form>
    </section>
    @vite('resources/js/app.js')
</body>
</html>