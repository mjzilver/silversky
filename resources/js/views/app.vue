<template>
    <div>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top" id="mainheader">
            <div class="container"> 
                <router-link  class="navbar-brand icon" :to="{ name: 'home' }">
                    <img src="images/logo.png" width="50" height="50" alt="" >
                    <span id="logotext">ilverSky</span>
                </router-link>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navheader" aria-controls="navheader" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navheader">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <router-link  class="nav-link" :to="{ name: 'services' }">
                                Diensten
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  class="nav-link" :to="{ name: 'portfolio' }">
                                Portfolio
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  class="nav-link" :to="{ name: 'about' }">
                                Over Ons
                            </router-link>
                        </li>
                        <li class="nav-item">
                            <router-link  class="nav-link" :to="{ name: 'contact' }">
                                Contact
                            </router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav id="socialnav">
			<ul>
				<li id="facebookicon"><a href="#"><i class="fab fa-facebook-f"></i><span>Facebook</span></a></li>
				<li id="linkedinicon"><a href="#"><i class="fab fa-linkedin-in"></i><span>Linkedin</span></a></li>
				<!-- <li id="githubicon"><a href="#"><i class="fab fa-github"></i><span>Github</span></a></li> -->
				<li id="whatsappicon"><a href="#"><i class="fab fa-whatsapp"></i><span>Whatsapp</span></a></li>
				<li id="mailicon"><a href="mailto:jari.zilverentant@gmail.com"><i class="fas fa-envelope-square"></i><span>Email</span></a></li>
			</ul>
        </nav>
   
        <div>  
            <transition-page>                
                <router-view>

                </router-view>
            </transition-page>       
        </div>
    </div>
</template>
<script>
import TransitionPage from './TransitionPage.vue';
export default {
    name: 'App',
    components: {
        TransitionPage,
    },
}
</script>