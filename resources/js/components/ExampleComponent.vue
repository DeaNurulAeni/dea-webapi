<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test API</div>

                    <div v-if="loading === false" class="card-body">
                       contoh hasil pemanggilan endpoint api

                       <p>Response:</p>
                       <table class="table">
                           <thead class="thead-dark">
                               <tr>
                                   <th>Nama</th>
                                   <th>JK</th>
                                   <th>Dibuat Pada</th>
                               </tr>
                           </thead>

                           <tbody>
                            <!-- php: foreach(item as data) -->
                               <tr v-for="item in data":key="item.id">
                                   <td>{{ item.nama }}</td>
                                   <td>{{ item.jk }}</td>
                                   <td>{{ item.created_at }}</td>
                               </tr>
                           </tbody>
                       </table>

                       {{ error }}
                    </div>

                    <div v-else class="card-body">Loading........</div>
                </div>
            </div>
        </div>


        
             <vue-progress-bar></vue-progress-bar>
    </div>
</template>

<script>
    export default {
        data() {
                return {
                    data: [],
                    error: null,
                    loading: false
                }
        },
        mounted() {
            this.getData()
        },

        methods: {
            getData() {
                this.$Progress.start()
                this.loading = true
                axios.get('/testapi')//1
                .then((res) => {//2
                    //
                    this.data = res.data.data
                    this.loading = false
                    this.$Progress.finish()
                })
                .catch((error) => {//3
                    //
                    this.error = error.message
                    this.loading = false
                    this.$Progress.fail()
                })

            }
        }
    }
</script>
