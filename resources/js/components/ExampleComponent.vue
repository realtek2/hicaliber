<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Example Component</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input  type="text" v-model="keywords" placeholder="Type and wait!" class="form-control">
                                        <ul v-if="results.length > 0">
                                            <li v-for="result in results" :key="result.id" v-text="result.name"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input  type="text" v-model="keywords" placeholder="Type and wait!" class="form-control">
                                        <ul v-if="results.length > 0">
                                            <li v-for="result in results" :key="result.id" v-text="result.price"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Bedrooms</label>
                                    <input  type="text" v-model="keywords" placeholder="Type and wait!" class="form-control">
                                        <ul v-if="results.length > 0">
                                            <li v-for="result in results" :key="result.id" v-text="result.bedrooms"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Bathrooms</label>
                                    <input  type="text" v-model="keywords" placeholder="Type and wait!" class="form-control">
                                        <ul v-if="results.length > 0">
                                            <li v-for="result in results" :key="result.id" v-text="result.bathrooms"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Storeys</label>
                                    <input  type="text" v-model="keywords" placeholder="Type and wait!" class="form-control">
                                        <ul v-if="results.length > 0">
                                            <li v-for="result in results" :key="result.id" v-text="result.storeys"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Garages</label>
                                    <input  type="text" v-model="keywords" placeholder="Type and wait!" class="form-control">
                                        <ul v-if="results.length > 0">
                                            <li v-for="result in results" :key="result.id" v-text="result.garages"></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
            
                </div>
            </div>
         
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                keywords: null,
                results: []
            };
        },
         watch: {
            keywords(after, before) {
                this.fetch();
            }
        },

        methods: {
            fetch() {
                axios.get('/api/csv_data', { params: { keywords: this.keywords } })
                    .then(response => this.results = response.data)
                    .catch(error => {});
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
