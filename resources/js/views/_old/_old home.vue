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
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top frontpage-card">
                        <img src="images/website.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Website op maat maken</h4>
                        <p class="card-text">Wij maken een website naar uw wensen die goed bij uw bedrijf past. Zo gemaakt dat u het zelf gemakkelijk kan bijhouden.</p>
                    </div>
                    <div class="card-footer">
                        <router-link  class="btn btn-primary" :to="{ name: 'services', hash: '#website' }">Lees meer!</router-link>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top frontpage-card">
                        <img src="images/cogs.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Website optimalisatie</h4>
                        <p class="card-text">Wij optimaliseren delen van jullie al bestaande website zodat gemakkelijker te navigeren is voor klanten.</p>
                    </div>
                    <div class="card-footer">
                        <router-link  class="btn btn-primary" :to="{ name: 'services', hash: '#optimal' }">Lees meer!</router-link>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top frontpage-card">
                        <img src="images/plugin.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Plugin maken</h4>
                        <p class="card-text">Wij bouwen een plugin op maat die helemaal bij uw website past. Deze is dan uniek voor</p>
                    </div>
                    <div class="card-footer">
                        <router-link  class="btn btn-primary" :to="{ name: 'services', hash: '#plugin' }">Lees meer!</router-link>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top frontpage-card">
                        <img src="images/mobile.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Mobiele versie maken</h4>
                        <p class="card-text">Wij maken een mobiele versie of app van jullie al bestaande website zodat klanten ook via de mobiel gemakkelijk uw site kan bezoeken.</p>
                    </div>
                    <div class="card-footer">
                        <router-link  class="btn btn-primary" :to="{ name: 'services', hash: '#mobile' }">Lees meer!</router-link>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top frontpage-card">
                        <img src="images/style.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Thematiseren</h4>
                        <p class="card-text">Wij geven uw website een nieuw likje verf zodat het goed bij uw bedrijf en haar bedrijfskleuren past.</p>
                    </div>
                    <div class="card-footer">
                        <router-link  class="btn btn-primary" :to="{ name: 'services', hash: '#style' }">Lees meer!</router-link>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-5">
                <div class="card h-100">
                    <div class="card-img-top frontpage-card">
                        <img src="images/other.svg" alt="">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">En meer!</h4>
                        <p class="card-text">Als wat u zoek er niet tussen staat, stuur een mailtje dan kijken wij of het mogelijk is.</p>
                    </div>
                    <div class="card-footer">
                        <router-link  class="btn btn-primary" :to="{ name: 'services', hash: '#other'}">Lees meer!</router-link>
                    </div>
                </div>
            </div>
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
