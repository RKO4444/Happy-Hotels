<template>
  <div class="container">
    <section class="vh-100" style="background-color: #f4f5f7">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-lg-6 mb-4 mb-lg-0">
            <div class="card mb-3" style="border-radius: 0.5rem">
              <div class="row g-0">
                <div
                  class="col-md-4 gradient-custom text-center text-white"
                  style="
                    border-top-left-radius: 0.5rem;
                    border-bottom-left-radius: 0.5rem;
                  "
                >
                  <img
                    src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                    alt="Avatar"
                    class="img-fluid my-5"
                    style="width: 80px"
                  />
                  <h5>{{ val['name'] }}</h5>
                  <p>{{ val['email'] }}</p>
                </div>
                <div class="col-md-8">
                  <div class="card-body p-4">
                    <h6>Information</h6>
                    <hr class="mt-0 mb-4" />
                    <div class="row pt-1">
                      <div class="col-6 mb-3">
                        <h6>Name</h6>
                        <p class="text-muted">{{ val['name'] }}</p>
                      </div>
                      <div class="col-6 mb-3">
                        <h6>Email</h6>
                        <p class="text-muted">{{ val['email'] }}</p>
                      </div>
                      <div class="col-6 mb-3">
                        <h6>Phone Number</h6>
                        <p class="text-muted">{{ val['phonenumber'] }}</p>
                      </div>
                      <div class="col-6 mb-3">
                        <h6>Id Number</h6>
                        <p class="text-muted">{{ val['addharnumber'] }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- <div class=""> -->
            <h6>Booking Detail</h6>

            <div class="containerr" v-for="booking in val2"  v-bind:key="booking">
              <hr class="mt-0 mb-4" />
              <div class="row pt-1">
                <div class="col-6 mb-3">
                  <h6>Hotel Name</h6>
                  <p class="text-muted">{{ booking.name }}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Price</h6>
                  <p class="text-muted">{{ booking.price }} $</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Arrival Date</h6>
                  <p class="text-muted">{{ booking.arival }}</p>
                </div>
                <div class="col-6 mb-3">
                  <h6>Departure Date</h6>
                  <p class="text-muted">{{ booking.departure }}</p>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import axios from 'axios';
export default {
  components: {},
  data() {
    return {
      val: '',
      val2: '',
      userId: this.$store.getters.userId,
      cusId: '',
      activeFilters: {},
    };
  },
  async created() {
    if (this.userId == '') {
      this.$router.push('/');
    }
    var link = 'http://127.0.0.1:8000/api/customerbyid/' + this.userId;
    await axios.get(link).then((data) => {
      try {
        console.log(data);
        this.val = data['data']['0'];
        this.cusId = data['data']['0']['id'];
        // console.log(this.val);
      } catch (err) {
        alert('Error, please try again');
      }
    });
    var link1 = 'http://127.0.0.1:8000/api/bookingdetail/' + this.cusId;
   await axios.get(link1).then((data) => {
      try {
        console.log(data);
        this.val2 = data['data'];
        // console.log(this.val);
      } catch (err) {
        alert('Error, please try again');
      }
    });
  },
  computed: {},
  methods: {
    setFilters(updatedFilters) {
      this.activeFilters = updatedFilters;
    },
  },
};
</script>
<style scoped>
.gradient-custom {
  /* fallback for old browsers */
  background: #f6d365;
  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(
    to right bottom,
    rgba(246, 211, 101, 1),
    rgb(90, 83, 81)
  );
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(
    to right bottom,
    rgba(246, 211, 101, 1),
    rgb(101, 84, 79)
  );
}


</style>
