<template>
    <div>
        <div class="container">
            <a  href="#" aria-label="close"  @click.prevent="$router.back()" >X</a>

            <div class="row">
                <div class="col-md-12 mb-5">
                    <h2>{{ service.title }}</h2>
                    <hr>
                    <p> {{ service.description }} </p>
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
            service: {}
        }
    },
    async created () {
        try {
            const id = this.$route.params.id
            const response = await axios.get('../api/services/' + id)
            console.log(response)
            this.service = response.data.data

            this.isLoading = false
        } catch (e) {
            console.log(e);
        }
    }
}
</script>