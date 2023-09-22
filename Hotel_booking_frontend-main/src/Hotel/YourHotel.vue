<template>
    <div>
        <div class="d-flex" id="wrapper">
            <!-- Page Content -->
            <div id="page-content-wrapper">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                    <div class="d-flex align-items-center">
                        <!-- <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i> -->
                        <h2 class="fs-2 m-0">Hotel Dashboard for {{val['name']}}</h2>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">{{ val['numberofavailroom'] }}</h3>
                                    <p class="fs-5">Rooms</p>
                                </div>
                                <i
                                    class="fas fa-duotone fa-hotel fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2" v-if="wifi">Yes</h3>
                                    <h3 class="fs-2" v-else>No</h3>
                                    <p class="fs-5">WiFi</p>
                                </div>
                                <i class="fas fa-duotone fa-wifi primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">{{ this.count }}</h3>
                                    <p class="fs-5">Bookings</p>
                                </div>
                                <i class="fas fa-solid fa-check fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">Click Icon</h3>
                                    <p class="fs-5">Edit Details</p>
                                </div>
                                <i @click="callcomponent()"
                  class="fas fa-regular fa-pen primary-text border rounded-full secondary-bg p-3"
                ></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row my-5">
                        <h3 class="fs-4 mb-3">Bookings</h3>
                        <div class="col">
                            <table class="table bg-white rounded shadow-sm  table-hover">
                                <thead>
                                    <tr>
                                        
                                        <th scope="col">Customer name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Arrival</th>
                                        <th scope="col">Departure</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="booking in val2" v-bind:key="booking.id">

                                        <td>{{ booking.name}}</td>
                                        <td>{{ booking.price }}</td>
                                        <td>{{ booking.arival }}</td>
                                        <td>{{ booking.departure }}</td>
                                       
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
</template>
<script>
import axios from 'axios'
export default {
    data() {
        return {
            id: this.$store.getters.userId,
            hotelid: "",
            val:'',
             val2: '',
            wifi:'',
       count:''
            
        };
    },
   async created() { 
     var link = 'http://127.0.0.1:8000/api/hotelbyid/' + this.id;
    await axios.get(link).then((data) => {
      try {
        console.log(data);
        this.val = data['data']['0'];
        this.wifi=data['data']['0']['wifi']
        this.hotelid= data['data']['0']['id'];
         console.log(this.val);
      } catch (err) {
        alert('Error, please try again');
      }
    });
     var link1 = 'http://127.0.0.1:8000/api/bookingdetailhotel/' + this.hotelid;
   await axios.get(link1).then((data) => {
      try {
        console.log(data);
        this.val2 = data['data'];
        this.count= this.val2.length;
      } catch (err) {
        alert('Error, please try again');
      }
    });

       
        
    },
  
    methods: {
      
        callcomponent(){
      this.$router.push('/yourhotel/'+this.hotelid+'/edit');
    }
       
    }
}
</script>
<style scoped>
:root {
    --main-bg-color: #009D63;
    --main-text-color: #009D63;
    --second-text-color: #BBBEC5;
    --second-bg-color: #C1EFDE;
}
.primary-text {
    color: var(--main-text-color);
}
.second-text {
    color: var(--second-text-color);
}
.primary-bg {
    background-color: var(--main-bg-color);
}
.secondary-bg {
    background-color: var(--second-bg-color);
}
.btn-warning {
    margin-right: 20px;
}
.rounded-full {
    border-radius: 100%;
}
#wrapper {
    overflow-x: hidden;
    height: 670px;
    /* background-image: linear-gradient(to right,
            #BAF3D7,
            #C2F5DE,
            #CBF7E4,
            #D4F8EA,
            #DDFAEF); */
            /* background-color: black;; */
            background: linear-gradient(123.5deg, rgb(244, 219, 251) 29.3%, rgb(255, 214, 214) 67.1%);
}
#sidebar-wrapper {
    min-height: 100vh;
    margin-left: -15rem;
    -webkit-transition: margin 0.25s ease-out;
    -moz-transition: margin 0.25s ease-out;
    -o-transition: margin 0.25s ease-out;
    transition: margin 0.25s ease-out;
}
#sidebar-wrapper .sidebar-heading {
    padding: 0.875rem 1.25rem;
    font-size: 1.2rem;
}
#sidebar-wrapper .list-group {
    width: 15rem;
}
#page-content-wrapper {
    min-width: 100vw;
}
#wrapper.toggled #sidebar-wrapper {
    margin-left: 0;
}
#menu-toggle {
    cursor: pointer;
}
.list-group-item {
    border: none;
    padding: 20px 30px;
}
.list-group-item.active {
    background-color: transparent;
    color: var(--main-text-color);
    font-weight: bold;
    border: none;
}
@media (min-width: 768px) {
    #sidebar-wrapper {
        margin-left: 0;
    }
    #page-content-wrapper {
        min-width: 0;
        width: 100%;
    }
    #wrapper.toggled #sidebar-wrapper {
        margin-left: -15rem;
    }
}
</style>