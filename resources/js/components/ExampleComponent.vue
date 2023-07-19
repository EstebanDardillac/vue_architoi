<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ text }}</div>

                    <div class="card-body">
                        I'm an example component.
                        <input type="text" v-model="form.name">
                        <h3>{{ form.name }}</h3>
                    </div>
                    <ol>
                        <li v-for="jour in joursSemaine">
                            {{ jour }}
                        </li>
                    </ol>
                    <button @click="showText" class="btn btn-primary">Click me!</button>
                    <div v-if="index == 1">
                        <h3>I'm an example of v-if</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                text:'Example component for vue',
                form:{
                    name:'',
                },
                joursSemaine: ['Lundi','Mardi','Mercredi','Jeudi', 'Vendrdedi','Samedi','Dimanche'],
                index:'',
            }
        },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
            showText(){
                console.log("Ca fonctionne");
                this.text = 'Architoi';
                this.index = 1;
            }
        }
    }
</script>
