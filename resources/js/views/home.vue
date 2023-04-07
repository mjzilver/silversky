<template>
  <div> 
     <header class="bg-primary py-3 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h1 class="display-4 text-white mt-5 mb-2">SilverSky Development</h1>
                    <p class="lead mb-5 text-white-50">
                        SilverSky is een nieuw full-stack software development eenmansbedrijf gebaseerd in de Bommelerwaard.
                        Wij willen u graag helpen uw nieuwe of al bestaande website de beste ervaring voor uw klanten te maken!
                    </p>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Wat kan SilverSky voor u doen?</h2>
                <hr>
            </div>



            <template v-for="service in services">
                <div v-bind:key="service.id" class="col-md-4 mb-5">
                    <div class="servicepopup-container" :id="'popup-id-' + service.id"  @click="exitPopup(service.id)" style="display:none;">
                        <div class="servicepopup-content">
                            <div class="servicepopup-exit" @click="exitPopup(service.id)">
                                &times; 
                            </div>
                            <div class="servicepopup-div-container">
                                <div class="servicepopup-div" id="servicepopup-title">
                                    {{ service.title }}
                                </div>
                                <div class="servicepopup-div" id="servicepopup-text">
                                    {{ service.description }}
                                </div>
                                <div class="MailingListPopup-div"  id="MailingListPopup-button">
                                    <input class="btn btn-primary btn-lg text-white" type="submit" value="Terug"  @click="exitPopup(service.id)"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card h-100">
                        <div class="card-img-top frontpage-card">
                            <img :src="service.url" alt="" >
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">{{ service.title }}</h4>
                            <p class="card-text">{{ service.short_description }}</p>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary btn-lg text-white" @click="showPopup(service.id)">Lees meer &raquo;</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <div class="row">
            <div class="col-md-12 mb-5">
                <h2>Over SilverSky</h2>
                <hr>
                <p> 
                    Wij zijn begonnen met SilverSky in 2020 omdat wij merkten dat veel kleine en middelgrote bedrijven de marketing en klantvriendelijkheid van hun website niet benutten en soms compleet over het hoofd zien.
                    Zelfs voor een klein bedrijf is crucial om een goed werkende en modern ogende website te hebben in de hedendagse markt.
                    Wij denken dat veel kleine bedrijven bang zijn dat een website te duur of te lastig te onderhouden is maar wij willen met SilverSky laten zien dat het zelfs heel gemakkelijk en betaalbaar kan.
                </p>
                <p>
                    Wij zijn vooral actief op het gebied van <abbr title = "Content Management System">CMS</abbr>en zoals Wordpress.
                    Dit zorgt ervoor dat mijn klanten hun website zelf gemakkelijk kunnen aanpassen, updaten en bijhouden.
                    Wij hebben algehele websites gebouwd in Wordpress met moderne thema's en plugins, en ook custom plugins en widgets gemaakt die elke voor een klant zijn.
                </p>
                <a class="btn btn-primary btn-lg" href="#">Lees meer &raquo;</a>
            </div>
        </div>
    </div>
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
    },
    methods: {
        showPopup: function (id, event) {
            this.$nextTick(function() {
                var popupwindow = $('#popup-id-' + id)
                popupwindow.fadeIn(500);
            })
        },
        exitPopup: function (id, event) {
            this.$nextTick(function() {
                var popupwindow = $('#popup-id-' + id)
                popupwindow.fadeOut(500);
            })
        }
    }
}
</script>
<style lang="css" scoped>
.servicepopup-container {
	display: none;
	position: fixed;
	z-index: 1; 
	left: 0;
	top: 0;
	width: 100%; 
	height: 100%; 
    background-color: rgba(0,0,0,0.2); 
    backdrop-filter: blur(10px);
}

.servicepopup-content {
	color:black !important;
	margin: 10% auto; 
	padding: 20px;
	width: 55%; 
	min-height: 60%; 
	border-radius: 15px;
	overflow: hidden; 
	word-wrap: break-word;
    position: relative;
    background-color: silver;
	opacity: 0.95;
	display: flex;
}

.servicepopup-content:hover {
	opacity: 1;
}

.servicepopup-div-container {
	display: flex;
	flex-direction: column;
	background-color:rgba(254, 254, 254, 0.5);
	border-radius: 15px;
	padding: 0.5em 0.5em 0.5em 0.5em;
	margin: 0.5em 0.5em 0.5em 0.5em;

	width:100%;
}

.servicepopup-div {
	padding: 0.8vw;
	min-height: 2em;
}

#servicepopup-title {
	font-size:1.5em;
	font-weight: bold;
}

#servicepopup-text {
	flex: 6;
}

.servicepopup-exit {
	margin-top: -0.2em;
	margin-right: 0.4em;
	position: absolute;
	right:0;
	top:0;
	font-size: 4ch;
	z-index: 10;
}
</style>
