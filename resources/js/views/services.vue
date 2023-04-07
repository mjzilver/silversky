<template>
    <div>
        <header class="bg-primary py-3 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">Onze diensten</h1>
                        <p class="text-white-50">                            
                            Dit zijn een paar van onze voornaamste diensten. Er is natuurlijk nog meer mogelijk, stuur ons gerust een email als u twijfelt.
                            Klik hieronder om naar het gewenste kopje te scrollen.
                        </p>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary" >
                <div class="container"> 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navheader" aria-controls="navheader" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navheader">
                        <ul class="navbar-nav ">
                            <template v-for="service in services">
                                <li class="nav-item"  v-bind:key="service.id">
                                    <a class="nav-link"  :href="'#' + service.linker">
                                        <button class="btn btn-sm btn-secondary" type="button">
                                            {{ service.title }}
                                        </button>
                                    </a>
                                </li>
                            </template>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <template v-for="service in services">
            <section v-bind:key="service.id" v-bind:class="service.linker" v-bind:id="service.linker">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <h2>{{ service.title }}</h2>
                            <hr>
                            <p> {{ service.description }} </p>
                        </div>
                    </div>
                </div>
            </section>
        </template>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
        return {
            isLoading: true,
            services: {}
        }
    },
    async created () {
        try {
            const response = await axios.get('api/services')
            this.services = response.data.data
            this.isLoading = false
        } catch (e) {
            console.log(e);
        }
    } 
}
</script>
