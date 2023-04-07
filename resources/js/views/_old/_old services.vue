<template>
    <div>
        <header class="bg-primary py-3 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">Onze diensten</h1>
                        <p>
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
                            <li class="nav-item">
                                <a class="nav-link" href="#website">
                                    <button class="btn btn-sm btn-secondary" type="button">
                                        Website laten maken 
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#optimal">
                                    <button class="btn btn-sm btn-secondary" type="button">
                                        Website optimaliseren
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#plugin">
                                    <button class="btn btn-sm btn-secondary" type="button">
                                        Plugin maken
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#mobile">
                                    <button class="btn btn-sm btn-secondary" type="button">
                                        Mobiele versie maken
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#style">
                                    <button class="btn btn-sm btn-secondary" type="button">
                                        Website thematiseren
                                    </button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#other">
                                    <button class="btn btn-sm btn-secondary" type="button">
                                        En meer!
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section class="page-section website" id="website">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Website laten maken</h2>
                        <hr>
                        <p> 
                            Wij maken uw website op maat precies zoals u het wil hebben.
                            Hiervoor gebruiken we Wordpress tenzij u specifiek een ander framework wilt gebruiken.
                            Met Wordpress garanderen we dat uw website gemakkelijk aan de passen blijft voor u.
                            Wordpress heeft veel thema's en plugins; hiermee kunnen we uw website helemaal stylen en uniek maken zonder dat het project veel kost.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section optimal" id="optimal">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Website optimaliseren</h2>
                        <hr>
                        <p> 
                            Wij optimaliseren uw website helemaal zodat het modern oogt en gemakkelijk te gebruiken is voor u en uw klanten.
                            Ook kan het uw website makkelijker te vinden maken in zoekmachines zoals Google en Bing.
                            Websites die tijden niet bijgehouden worden raken snel verouderd, daarom is het belangrijk om uw website regelmatig bij te houden en te moderniseren.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section plugin" id="plugin">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Plugin maken</h2>
                        <hr>
                        <p> 
                            Wilt u iets speciaals voor uw website maar kunt u geen goed passende plugin vinden ervoor?
                            Wij kunnen een plugin maken voor u die compleet in uw algehele website past en helemaal voor u op maat gemaakt is.
                            Dit betekent dat de plugin helemaal voor uw systeem gemaakt is en dus precies past met uw eigen stijl.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section mobile" id="mobile">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Mobiele versie maken</h2>
                        <hr>
                        <p> 
                            Wij maken een mobiele versie van uw website of zelfs een appje voor uw website.
                            Met een thema kunnen we zorgen dat uw website er op een mobiel er netjes uitziet en compleet past.
                            Mobiele websites zijn tegenwoordig enorm belangrijk veel mensen bekijken uw website op hun mobieltje en als dat niet goed werkt zullen ze wellicht snel wegklikken.
                            Daarom vinden wij het belangrijk om een goede mobiele versie te maken van websites. 
                            Ook als u een website bij ons laat maken zit daar al een mobiele versie bij.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section style" id="style">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Website thematiseren</h2>
                        <hr>
                        <p> 
                            Als uw website een nieuwe likje verf nodig heeft kunnen wij dat voor u doen.
                            
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-section other" id="other">
        <div class="container">
                <div class="row">
                    <div class="col-md-12 mb-5">
                        <h2>Staat wat u wilt er niet tussen?</h2>
                        <hr>
                        <p> 
                            Wij maken een website naar uw wensen
                        </p>
                    </div>
                </div>
            </div>
        </section>
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
