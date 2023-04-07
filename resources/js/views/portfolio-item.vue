<template>
    <div> 
        <header class="bg-primary py-3 mb-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <h1 class="display-4 text-white mt-5 mb-2">{{portfolio.title}}</h1>
                        <p class="lead mb-5 text-white-50">
                            Gemaakt door SilverSky.         
                        </p>
                    </div>
                </div>
            </div>
        </header>
        
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 m-3 p-3 border bg-light text-dark rounded">
                <h2 class="text-center">Afbeeldingen van {{portfolio.title}}</h2>
                <div class="container col-sm-5 col-md-8"> 
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <template v-for="(img,index) in portfolio.images">
                            <li  :key="img.id" data-target="#carouselExampleIndicators" :data-slide-to="index" :class="{'active' : index == 0}"></li>
                        </template>
                    </ol>
                    <div class="carousel-inner slider-images">
                        <template v-for="(img,index) in portfolio.images">
                            <div :key="img.id" :class="{'carousel-item' : 1, 'active' : index == 0}">
                                <img class="d-block w-100 img-fluid img-responsive slider-img" :src="img.url" >
                            </div>
                        </template>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
                </div>
                <br>
                <div class="col-md-12">
                    <h2> Omschrijving </h2>
                    <hr>
                    <p>
                        {{portfolio.description}}
                    </p>
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
            portfolio: {}
        }
    },
    async created () {
        try {
            const id = this.$route.params.id
            const response = await axios.get('../api/portfolio/' + id)
            this.portfolio = response.data.data
            this.isLoading = false
        } catch (e) {
            console.log(e);
        }
    }
}
</script>
<style scoped>
.slider-img
{
    height: 25vw;
    width: auto !important;
}
</style>
