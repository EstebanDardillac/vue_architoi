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
        <input type="text" id="lastname" name="lastname" class="form-control">
        @error('lastname')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-6">
        <label for="name" class="form-label">Prénom :</label>
        <input type="text" id="name" name="name" class="form-control">
        @error('name')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-6 mt-5">
            <label for="gender_id">Genre :</label>
            @foreach($gender as $g)
                <div class="form-check form-check-inline ms-3 me-3">
                    <input type="radio" id="gender_{{ $g->id }}" name="gender_id" value="{{ $g->id }}" class="form-check-input">
                    <label for="gender_{{ $g->id }}" class="form-check-label">{{ $g->name }}</label>
                </div>
            @endforeach
            
            @error('gender')
                <p>{{ $message }}</p>
            @enderror
        </div>


        <div class="col-md-6">
        <label for="email" class="form-label">Email :</label>
        <input type="text" id="email" name="email" class="form-control">
        @error('email')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-12">
        <label for="password" class="form-label">Mot de passe :</label>
        <input type="text" id="password" name="password" class="form-control">
        @error('password')
        <p>{{ $message }}</p>
        @enderror
        </div>

        

        <div class="col-md-4 dropdown-center">
            <label for="country_id" class="form-label">Pays :</label>
            <select id="country" name="country_id" v-model="selected" class="form-select" aria-label="Default select example">
                <option disabled value="" class="dropdown-item">Choissisez un pays</option>
                <option value="" class="dropdown-item">--</option>
                @foreach ($country as $c)
                    <option value="{{ $c->id }}" class="dropdown-item">{{ $c->name }}</option>
                @endforeach
            </select>
            @error('country')
            <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="col-md-5">
        <label for="city" class="form-label">Ville :</label>
        <input type="text" id="city" name="city" class="form-control">
        @error('city')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-3">
        <label for="postal" class="form-label">Code postal :</label>
        <input type="text" id="postal" name="postal" class="form-control">
        @error('postal')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-12">
        <label for="adress" class="form-label">Adresse :</label>
        <input type="text" id="adress" name="adress" class="form-control">
        @error('adress')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-4">
        <label for="number" class="form-label">Numéro de téléphone :</label>
        <input type="text" id="number" name="number" class="form-control">
        @error('number')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-8">
        <label for="job" class="form-label">Emploi :</label>
        <input type="text" id="job" name="job" class="form-control">
        @error('job')
        <p>{{ $message }}</p>
        @enderror
        </div>

        <div class="col-md-12 mt-5">
            <label>Loisirs :</label>
            @foreach($hobby as $h)
                <div class="form-check form-check-inline ms-3 me-3">
                    <input type="checkbox" id="hobby_{{ $h->id }}" name="hobby_id[]" value="{{ $h->id }}" class="form-check-input">
                    <label for="hobby_{{ $h->id }}" class="form-check-label">{{ $h->name }}</label>
                </div>
            @endforeach

            @error('hobby')
                <p>{{ $message }}</p>
            @enderror
        </div>



        <div class="col-12">
            <button type="submit" class="btn btn-primary  me-4">Enregistrer</button>
            <a href="{{ route('users') }}">Annuler</a>
        </div>
    </form>
    </section>
    
    @vite('resources/js/app.js')
</body>
</html>
