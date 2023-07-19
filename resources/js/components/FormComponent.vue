<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ text }}</div>
          <div class="card-body">
            <div>Genre : {{ form.gender_id }}</div>
            <div
              class="form-check form-check-inline"
              v-for="gender in genders"
            >
              <input
                type="radio"
                name="gender"
                class="form-check-input"
                :class="msg.genders ? 'is-invalid' : ''"
                :id="gender"
                v-model="form.gender_id"
                :value="gender.id"
              >
              <label :for="gender.id" class="form-check-label">{{ gender.name }}</label>
            </div>
            <p v-if="msg.gender" class="invalid-feedback">{{ msg.gender }}</p>
            <br>
            <label for="lastname">Nom : {{ form.lastname }}</label>
            <input
              type="text"
              id="lastname"
              class="form-control"
              :class="msg.lastname ? 'is-invalid' : ''"
              v-model="form.lastname"
            >
            <div v-if="msg.lastname" class="invalid-feedback">{{ msg.lastname }}</div>

            <label for="name">Prénom :{{ form.name }}</label>
            <input
              type="text"
              id="name"
              class="form-control"
              :class="msg.name ? 'is-invalid' : ''"
              v-model="form.name"
            >
            <p v-if="msg.name" class="invalid-feedback">{{ msg.name }}</p>

            <label for="email">Email :{{ form.email }}</label>
            <input
              type="text"
              id="email"
              class="form-control"
              :class="msg.email ? 'is-invalid' : ''"
              v-model="form.email"
            >
            <p v-if="msg.email" class="invalid-feedback">{{ msg.email }}</p>

            <label for="password">Mot de passe :</label>
            <input
              type="text"
              id="password"
              class="form-control"
              :class="msg.password ? 'is-invalid' : ''"
              v-model="form.password"
            >
            <p v-if="msg.password" class="invalid-feedback">{{ msg.password }}</p>

            <div class="dropdown-center">
              <label for="country">Pays :{{ form.country_id }}</label>
              <select
                id="country"              
                v-model="form.country_id"
                class="form-select"
                :class="msg.country ? 'is-invalid' : ''"
                aria-label="Default select example"
              >
                <option disabled value="">Choisissez un pays</option>
                <option
                  v-for="country in countries"
                  :key="country"
                  :value="country.id"
                  class="dropdown-item"
                >
                  {{ country.name }}
                </option>
              </select>
            </div>
            <p v-if="msg.country" class="invalid-feedback">{{ msg.country }}</p>

            <label for="city">Ville :{{ form.city }}</label>
            <input
              type="text"
              id="city"
              class="form-control"
              :class="msg.city ? 'is-invalid' : ''"
              v-model="form.city"
            >
            <p v-if="msg.city" class="invalid-feedback">{{ msg.city }}</p>

            <label for="postal">Code postal :{{ form.postal }}</label>
            <input
              type="text"
              id="postal"
              class="form-control"
              :class="msg.postal ? 'is-invalid' : ''"
              v-model="form.postal"
            >
            <p v-if="msg.postal" class="invalid-feedback">{{ msg.postal }}</p>

            <label for="adress">Adresse :{{ form.adress }}</label>
            <input
              type="text"
              id="adress"
              class="form-control"
              :class="msg.address ? 'is-invalid' : ''"
              v-model="form.adress"
            >
            <p v-if="msg.address" class="invalid-feedback">{{ msg.address }}</p>

            <label for="number">Numéro de téléphone :{{ form.number }}</label>
            <input
              type="text"
              id="number"
              class="form-control"
              :class="msg.number ? 'is-invalid' : ''"
              v-model="form.number"
            >
            <p v-if="msg.number" class="invalid-feedback">{{ msg.number }}</p>

            <label for="job">Emploi :{{ form.job }}</label>
            <input
              type="text"
              id="job"
              class="form-control"
              :class="msg.job ? 'is-invalid' : ''"
              v-model="form.job"
            >
            <p v-if="msg.job" class="invalid-feedback">{{ msg.job }}</p>

            
            <div>Loisirs :{{ form.hobby_id }}</div>
            
            <div class="form-check form-check-inline" v-for="hobby in hobbies">
              <input type="checkbox" name="hobby" class="form-check-input" :class="msg.hobbies ? 'is-invalid' : ''" :id="hobby" v-model="form.hobby_id" :value="hobby.id">
              <label :for="hobby.id" class="form-check-label">{{ hobby.name }}</label>
            </div>
            
            <p v-if="msg.hobbies" class="invalid-feedback">{{ msg.hobbies }}</p>
            <br>

            <button @click="validateForm" class="btn btn-primary">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>

    <br><br>

    <table v-if="isFormSubmitted" class="table table-bordered">
      <thead>
        <tr>
          <th>Genre</th>
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Pays</th>
          <th>Ville</th>
          <th>Code postal</th>
          <th>Adresse</th>
          <th>Numéro de téléphone</th>
          <th>Emploi</th>
          <th>Loisirs</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ form.gender_id }}</td>
          <td>{{ form.lastname }}</td>
          <td>{{ form.name }}</td>
          <td>{{ form.email }}</td>
          <td>{{ form.country_id }}</td>
          <td>{{ form.city }}</td>
          <td>{{ form.postal }}</td>
          <td>{{ form.adress }}</td>
          <td>{{ form.number }}</td>
          <td>{{ form.job }}</td>
          <td>{{ form.hobby_id.join(', ') }}</td>
        </tr>
      </tbody>
    </table>

    <button @click.prevent="deleteForm" v-if="isFormSubmitted" class="btn btn-primary">Terminer</button>

    <br><br>
  </div>
</template>

<script>
export default {
  data() {
    return {
      text: "Formulaire d'inscription",
      form: {
        gender_id: "",
        lastname: "",
        name: "",
        email: "",
        password: "",
        country_id: "",
        city: "",
        postal: "",
        adress: "",
        number: "",
        job: "",
        hobby_id: [],
      },
      msg: {
        gender: "",
        lastname: "",
        name: "",
        email: "",
        password: "",
        country: "",
        city: "",
        postal: "",
        address: "",
        number: "",
        job: "",
        hobbies: "",
      },
      genders: [],
      countries: [],
      hobbies: [],
      isFormSubmitted: false,
    };
  },
  mounted() {
    console.log("Component mounted.");
    this.fetchCountries();
    this.fetchHobbies();
    this.fetchGenders();
  },
  watch: {
    "form.gender_id": function (value) {
      this.validateGender(value);
    },
    "form.name": function (value) {
      this.validateName(value);
    },
    "form.lastname": function (value) {
      this.validateLastName(value);
    },
    "form.email": function (value) {
      this.validateEmail(value);
    },
    "form.password": function (value) {
      this.validatePassword(value);
    },
    "form.country_id": function (value) {
      this.validateCountry(value);
    },
    "form.city": function (value) {
      this.validateCity(value);
    },
    "form.postal": function (value) {
      this.validatePostal(value);
    },
    "form.adress": function (value) {
      this.validateAddress(value);
    },
    "form.number": function (value) {
      this.validateNumber(value);
    },
    "form.job": function (value) {
      this.validateJob(value);
    },
    "form.hobby_id": function (value) {
      this.validateHobbies(value);
    },
  },
  methods: {
    fetchCountries() {
      axios
        .get("api/countries/index")
        .then((response) => {
          this.countries = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    fetchGenders() {
      axios
        .get("api/genders/index")
        .then((response) => {
          this.genders = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    fetchHobbies() {
      axios
        .get("api/hobbies/index")
        .then((response) => {
          this.hobbies = response.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
    deleteForm() {
      this.isFormSubmitted = false;
      this.form = {
        gender_id: "",
        lastname: "",
        name: "",
        email: "",
        password: "",
        country_id: "",
        city: "",
        postal: "",
        adress: "",
        number: "",
        job: "",
        hobby_id: [],
      };
    },
    validateGender(value) {
      if (_.isEmpty(value)) {
        this.msg.gender = "Veuillez sélectionner un genre";
      } else {
        this.msg.gender = "";
      }
    },
    validateName(value) {
      if (_.isEmpty(value)) {
        this.msg.name = "Veuillez renseigner ce champ";
      } else {
        this.msg.name = "";
      }
    },
    validateLastName(value) {
      if (_.isEmpty(value)) {
        this.msg.lastname = "Veuillez renseigner ce champ";
      } else {
        this.msg.lastname = "";
      }
    },
    validateEmail(value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (_.isEmpty(value)) {
        this.msg.email = "Veuillez renseigner ce champ";
      } else if (!emailRegex.test(value)) {
        this.msg.email = "Veuillez entrer une adresse e-mail valide";
      } else {
        this.msg.email = "";
      }
    },
    validatePassword(value) {
      if (_.isEmpty(value)) {
        this.msg.password = "Veuillez renseigner ce champ";
      } else {
        this.msg.password = "";
      }
    },
    validateCountry(value) {
      if (value == '') {
        this.msg.country = "Veuillez Sélectionner un pays";
      } else {
        this.msg.country = "";
      }
    },
    validateCity(value) {
      if (_.isEmpty(value)) {
        this.msg.city = "Veuillez renseigner ce champ";
      } else {
        this.msg.city = "";
      }
    },
    validatePostal(value) {
      if (_.isEmpty(value)) {
        this.msg.postal = "Veuillez renseigner ce champ";
      } else {
        this.msg.postal = "";
      }
    },
    validateAddress(value) {
      if (_.isEmpty(value)) {
        this.msg.address = "Veuillez renseigner ce champ";
      } else {
        this.msg.address = "";
      }
    },
    validateNumber(value) {
      if (_.isEmpty(value)) {
        this.msg.number = "Veuillez renseigner ce champ";
      } else if (!/^\d+$/.test(value)) {
        this.msg.number = "Veuillez entrer uniquement des chiffres";
      } else {
        this.msg.number = "";
      }
    },
    validateJob(value) {
      if (_.isEmpty(value)) {
        this.msg.job = "Veuillez renseigner ce champ";
      } else {
        this.msg.job = "";
      }
    },
    validateHobbies(value) {
      if (_.isEmpty(value)) {
        this.msg.hobbies = "Veuillez sélectionner un ou plusieurs loisirs";
      } else {
        this.msg.hobbies = "";
      }
    },
    validateForm() {
      if (
          !this.validateGender(this.form.gender_id) &&
          !this.validateLastName(this.form.lastname) &&
          !this.validateName(this.form.name) &&
          !this.validateEmail(this.form.email) &&
          !this.validatePassword(this.form.password) &&
          !this.validateCountry(this.form.country_id) &&
          !this.validateCity(this.form.city) &&
          !this.validatePostal(this.form.postal) &&
          !this.validateAddress(this.form.adress) &&
          !this.validateJob(this.form.job) &&
          !this.validateNumber(this.form.number) &&
          !this.validateHobbies(this.form.hobby_id)
          ){
            this.isFormSubmitted = true;
            this.text = 'Inscription enregistrée !';
            console.log(this.form);
            axios.post('api/form/store',
            this.form,
            )
            .then(res => {              
              console.log(res);
              window.location.href = 'users';
            })
            .catch(error => {
              console.log(error.response.data.message);
            });


        }      
    },
  },
};
</script>
