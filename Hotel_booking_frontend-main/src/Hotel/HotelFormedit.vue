<template>
  <div>
    <section class="container">
      <header>Registration Form for hotel info</header>
      <form class="form" @submit.prevent="onClick">

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input
              type="text"
              placeholder="Enter phone number"
              required
              v-model.trim="hotel.number"
            />
          </div>
        </div>
        
        <div>
          <div class="column-check">
            <div class="gender-box">
              <h3>Available</h3>
              <div class="gender-option">
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-yes"
                    name="avail1"
                    value="1"
                    v-model.trim="hotel.avail"
                  />
                  <label for="check-wifi-yes">YES</label>
                </div>
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-no"
                    name="avail1"
                    value="0"
                    v-model.trim="hotel.avail"
                  />
                  <label for="check-wifi-no">NO</label>
                </div>
              </div>
            </div>
            </div>
             <div class="column-check">
              <div class="gender-box">
              <h3>wifi</h3>
              <div class="gender-option">
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-yes"
                    name="wifi"
                    value="1"
                    v-model.trim="hotel.wifi"
                  />
                  <label for="check-wifi-yes">YES</label>
                </div>
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-no"
                    name="wifi"
                    value="0"
                    v-model.trim="hotel.wifi"
                  />
                  <label for="check-wifi-no">NO</label>
                </div>
              </div>
            </div>
          </div>
        </div>
          <div class="input-box address">
               <div class="column">
            <input
              type="number"
              placeholder="Total Room"
              required
              v-model.trim="hotel.totalroom"
            />

            <input
              type="text"
              placeholder="Image Link"
              required
              v-model.trim="hotel.imglink"
            />
          </div>
          </div>
        
        <div class="input-box address">
          <label>Address</label>
          <input
            type="text"
            placeholder="Enter street address"
            required
            v-model.trim="hotel.address"
          />
          <div class="column">
            <input
              type="text"
              placeholder="pincode"
              required
              v-model.trim="hotel.pincode"
            />

            <input
              type="text"
              placeholder="District"
              required
              v-model.trim="hotel.district"
            />
          </div>
         
<br>
          <div>
            <h5>DELUX ROOM</h5>
            <div class="column">
              <input
                type="number"
                placeholder="Price"
                required
                v-model.trim="room.price1"
              />
              <input
                type="number"
                placeholder="Number of Room "
                required
                v-model.trim="room.number1"
              />
            </div>
            <div class="column">
              <input
                type="text"
                placeholder="Description"
                required
                v-model.trim="room.desc1"
              />
              <input
                type="text"
                placeholder="Image Link"
                required
                v-model.trim="room.img1"
              />
            </div>
          </div>
        </div>
        <div class="column-check">
            <div class="gender-box">
              <h3>available</h3>
              <div class="gender-option">
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-yes"
                    name="avail1"
                    value="1"
                    v-model.trim="room.avail1"
                  />
                  <label for="check-wifi-yes">YES</label>
                </div>
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-no"
                    name="avail1"
                    value="0"
                    v-model.trim="room.avail1"
                  />
                  <label for="check-wifi-no">NO</label>
                </div>
              </div>
            </div>
          </div>

          <div class="input-box address">
          <div>

            <h5>SMALL ROOM</h5>
            <div class="column">
              <input
                type="number"
                placeholder="Price"
                required
                v-model.trim="room.price2"
              />
              <input
                type="number"
                placeholder="Number of Room "
                required
                v-model.trim="room.number2"
              />
            </div>
            <div class="column">
              <input
                type="text"
                placeholder="Description"
                required
                v-model.trim="room.desc2"
              />
              <input
                type="text"
                placeholder="Image Link"
                required
                v-model.trim="room.img2"
              />
            </div>
          </div>
        </div>
        <div class="column-check">
            <div class="gender-box">
              <h3>available</h3>
              <div class="gender-option">
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-yes"
                    name="avail2"
                    value="1"
                    v-model.trim="room.avail2"
                  />
                  <label for="check-wifi-yes">YES</label>
                </div>
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-no"
                    name="avail2"
                    value="0"
                    v-model.trim="room.avail2"
                  />
                  <label for="check-wifi-no">NO</label>
                </div>
              </div>
            </div>
          </div>

          <div class="input-box address">
          <div>
            <h5>LARGE ROOM</h5>
            <div class="column">
              <input
                type="number"
                placeholder="Price"
                required
                v-model.trim="room.price3"
              />
              <input
                type="number"
                placeholder="Total Room "
                required
                v-model.trim="room.number3"
              />
            </div>
            <div class="column">
              <input
                type="text"
                placeholder="Description"
                required
                v-model.trim="room.desc3"
              />
              <input
                type="text"
                placeholder="Image Link"
                required
                v-model.trim="room.img3"
              />
            </div>
          </div>

        </div>
        <div class="column-check">
            <div class="gender-box">
              <h3>available</h3>
              <div class="gender-option">
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-yes"
                    name="avail3"
                    value="1"
                    v-model.trim="room.avail3"
                  />
                  <label for="check-wifi-yes">YES</label>
                </div>
                <div class="gender">
                  <input
                    type="radio"
                    id="check-wifi-no"
                    name="avail3"
                    value="0"
                    v-model.trim="room.avail3"
                  />
                  <label for="check-wifi-no">NO</label>
                </div>
              </div>
            </div>
          </div>
        <button>Update Details</button>
      </form>
    </section>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
    link:'',
     link1:'',
     hotelId:'',
     roomId1:'',
      roomId2:'',
       roomId3:'',
      hotel: {
        userId: localStorage.userId,
        email: "",
         name:"",
        number:"",
        wifi:"",
        avail:"",
        address:" ",
        pincode:"",
        district:"",
        totalroom:"",
        imglink: ""
      },
      room:{
          hotel_id:"",
             price1: "",
             number1: "",
             desc1: "",
             img1: "",
             avail1:"",
             price2: "",
             number2: "",
             desc2: "",
             img2: "",
             avail2:"",
             price3: "",
             number3: "",
             desc3: "",
             img3: "",
             avail3:"",
           


      }
    };
  },
  mounted()
  {   
    // console.log(this.$route.params.id);
    // console.log("this.$route.params.id");
  this.room.hotel_id=this.$route.params.id
   this.getHotelData(this.$route.params.id);
 

  },
  methods: {
    getHotelData(hotelId)
    {  
      this.hotelId=hotelId
     
      this.link='http://127.0.0.1:8000/api/hotel/'+ hotelId +'/edit';
       axios.get(this.link)
    .then( res  => {
           console.log(res);
        this.hotel.number=res["data"]["hotel"]['0']['phonenumber'],
         this.hotel.wifi=res["data"]["hotel"]['0']['wifi'],
         this.hotel.avail=res["data"]["hotel"]['0']['availability'],
         this.hotel.address=res["data"]["hotel"]['0']['address'],
         this.hotel.pincode=res["data"]["hotel"]['0']['location'],
         this.hotel.district=res["data"]["hotel"]['0']['district'],
         this.hotel.totalroom=res["data"]["hotel"]['0']['numberofavailroom'],
         this.hotel.imglink=res["data"]["hotel"]['0']['hotelimage'],
       
        this.room.price1=res["data"]["hotel"]['0']['price'] ,
        this.room.desc1=res["data"]["hotel"]['0']['facilities'] ,
        this.room.img1=res["data"]["hotel"]['0']['image'] ,
        this.room.avail1=res["data"]["hotel"]['0']['avail'] ,
        this.room.number1=res["data"]["hotel"]['0']['numberofroom'] ,

         this.room.price2=res["data"]["hotel"]['1']['price'] ,
        this.room.desc2=res["data"]["hotel"]['1']['facilities'] ,
        this.room.img2=res["data"]["hotel"]['1']['image'] ,
        this.room.avail2=res["data"]["hotel"]['1']['avail'],
        this.room.number2=res["data"]["hotel"]['1']['numberofroom'] ,

        this.room.price3=res["data"]["hotel"]['2']['price'] ,
        this.room.desc3=res["data"]["hotel"]['2']['facilities'] ,
        this.room.img3=res["data"]["hotel"]['2']['image'] ,
        this.room.avail3=res["data"]["hotel"]['2']['avail'] ,
        this.room.number3=res["data"]["hotel"]['2']['numberofroom'] 
           
          
   });

    },
  async onClick() {
    this.link1='http://127.0.0.1:8000/api/hotel/'+ this.hotelId +'/edit';
      await axios
        .put(this.link1, this.hotel)
        .then(( data ) => {
          try {
           
               this.roomId1= data['data']['room']['0']['id'];
               this.roomId2= data['data']['room']['1']['id'];
               this.roomId3= data['data']['room']['2']['id'];
             this.room.hotel_id=data["data"]["id"];
          
          }
           catch (err) {
            alert("Error, please try again");
          }
        });


       this.link1='http://127.0.0.1:8000/api/room/'+ this.roomId1 +'/edit';
        axios
        .put(this.link1, this.room)
        .then((  ) => {
          try {
             alert('Changes made successfully');
              this.$router.push('/yourhotel')
          }
           catch (err) {
            alert("Error, please try again");   
          }
        });
        
     },
     
  },
};
</script>
<style scoped>
/* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 20px;
  background: rgb(130, 106, 251);
}
.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #fff;
  padding: 19px;
 margin-left: 405px;
 margin-top: 20px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}
.form .column-check {
  display: flex;
  column-gap: 200px;
}
.form .gender-box {
  margin-top: 20px;
}
.gender-box h3 {
  color: #333;
  font-size: 1rem;
  font-weight: 400;
  margin-bottom: 8px;
}
.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}
.form .gender {
  column-gap: 5px;
}
.gender input {
  accent-color: rgb(130, 106, 251);
}
.form :where(.gender input, .gender label) {
  cursor: pointer;
}
.gender label {
  color: #707070;
}
.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: rgb(130, 106, 251);
}
.form button:hover {
  background: rgb(88, 56, 250);
}
/*Responsive*/
@media screen and (max-width: 500px) {
  .form .column {
    flex-wrap: wrap;
  }
  .form :where(.gender-option, .gender) {
    row-gap: 15px;
  }
}
</style>