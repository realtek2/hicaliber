<template>
    <div class="container">
        <div class="row mb-3 mt-3">
            <div class="col-12">
                <form class="d-flex justify-content-around">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Name</label>
                            <input  type="text" v-model="name" placeholder="Enter name" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Price</label>
                            <input  type="text" v-model="price" placeholder="Enter price" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bedrooms</label>
                            <input  type="text" v-model="bedrooms" placeholder="Enter bedroom" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Bathrooms</label>
                            <input  type="text" v-model="bathrooms" placeholder="Enter bathroom" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Storeys</label>
                            <input  type="text" v-model="storeys" placeholder="Enter storey" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label>Garages</label>
                            <input  type="text" v-model="garages" placeholder="Garages" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="submit">
                            <button type="submit" @click.prevent="fetch" class="btn btn-primary" :disabled="busy">
                                <i v-if="busy" class="fa fa-spin fa-spinner"></i>
                                Filter!
                            </button>
                        </div>

                        <div class="submit">
                            <button type="submit" @click.prevent="reset" class="btn btn-default"  :disabled="busy">
                                Reset!
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
         <div class="row">
            <div class="col-12">
                <div class="row">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Bedrooms</th>
                            <th>Bathrooms</th>
                            <th>Storeys</th>
                            <th>Garages</th>
                        </tr>
                        <tbody v-if="!datas.length">
                            <tr>
                                <td valign="top" colspan="6"><h4>No results</h4></td>
                            </tr>
                        </tbody>
                        <tr v-for="data in datas" v-bind:key="data">
                            <td>{{ data.name }}</td>
                            <td>{{ data.price }}</td>
                            <td>{{ data.bedrooms }}</td>
                            <td>{{ data.bathrooms }}</td>
                            <td>{{ data.storeys }}</td>
                            <td>{{ data.garages }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                name: null,
                price: null,
                bedrooms: null,
                bathrooms: null,
                storeys: null,
                garages: null,
                datas: [],
                busy: false,
            };
        },

        methods: {
            reset() {
                this.name = null;
                this.price = null;
                this.bedrooms = null;
                this.bathrooms = null;
                this.storeys = null;
                this.garages = null;
                this.fetch();
            },

            fetch() {
                this.busy = true;
                axios.get('/api/csv_data', {
                    params: {
                        name: this.name,
                        price: this.price,
                        bedrooms: this.bedrooms,
                        bathrooms: this.bathrooms,
                        storeys: this.storeys,
                        garages: this.garages,
                    }
                })
                    .then(response => {
                        this.datas = response.data;
                        this.busy = false;
                    })
            }
        },
        mounted() {
            this.fetch();
        }
    }
</script>
