<template>
    <div> 
        <header class="bg-primary py-3 mb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">Ons portfolio</h1>
                        <p class="lead mb-5 text-white-50">
                            Hier zetten we websites neer die we gemaakt hebbem of meegeholpen hebben aan het maken van.
                            Als u op 'lees meer' klikt gaan we in detail over wat we aan de website gedaan hebben en wat daaraan uniek is. 
                        </p>
                    </div>
                </div>
            </div>
        </header>

        <div class="container">
            <template v-for="portfolio in portfolios">
                <div class="row" :key="portfolio.id"> 
                    <div class="col-md-12">
                        <div class="row col-mb-5">
                            <div class="col-sm-3">
                                <img :src="portfolio.images.length > 0 ? portfolio.images[0].url : null + ''" class="img-responsive img-fluid img-thumbnail"  >
                            </div>
                            <div class="col-sm-8 d-flex flex-column">
                                <h3 class="title">{{ portfolio.title }}</h3>
                                <p class="flex-fill flex-grow-1">{{ portfolio.description }}</p>

                                <p class="text-muted">Website: <a :href="portfolio.url">{{ portfolio.url }} </a></p>
                                <div>
                                    <router-link  class="btn btn-primary" :to="{ name: 'portolio-item', params: { id: portfolio.id }}">Lees meer!</router-link>
                                </div>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </template>
        </div>
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
        return {
            isLoading: true,
            portfolios: {}
        }
    },
    async created () {
        try {
            const response = await axios.get('api/portfolio')
            this.portfolios = response.data.data
            this.isLoading = false
        } catch (e) {
            console.log(e);
        }
    }
}
</script>
