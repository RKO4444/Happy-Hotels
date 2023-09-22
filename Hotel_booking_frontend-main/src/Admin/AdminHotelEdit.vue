<template>
    <div>
    <section class="container">
          <header>Edit Form for hotel info</header>
          <form  class="form" @submit.prevent="onClick">
            <div class="input-box">
              <label>Hotel Name</label>
              <input type="text" placeholder="Enter full hotel name" required v-model.trim="hotel.name" />
            </div>
            <div class="input-box">
              <label>Email Address</label>
              <input type="text" placeholder="Enter email address" required v-model.trim="hotel.email" />
            </div>
            <div class="column">
              <div class="input-box">
                <label>Phone Number</label>
                <input type="text" placeholder="Enter phone number" required v-model.trim="hotel.number"/>
              </div>
            </div>
            <div class="column-check">
            <div class="gender-box ">
              <h3>WIFI</h3>
              <div class="gender-option">
                <div class="gender">
                  <input type="radio" id="check-wifi-yes" name="wifi" value=1 v-model.trim="hotel.wifi"  />
                  <label for="check-wifi-yes">YES</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-wifi-no" name="wifi" value=0 v-model.trim="hotel.wifi"  />
                  <label for="check-wifi-no">NO</label>
                </div>
              </div>
            </div>
             <div class="gender-box">
              <h3>Hotel Available</h3>
              <div class="gender-option">
                <div class="gender">
                  Hotel Available
                  <input type="radio" id="check-hotelaval-yes" name="aval" value=1 v-model.trim="hotel.available"  />
                  <label for="check-hotelaval-yes">YES</label>
                </div>
                <div class="gender">
                  <input type="radio" id="check-hotelaval-no" name="aval" value=0 v-model.trim="hotel.available" />
                  <label for="check-hotelaval-no">NO</label>
                </div>
              </div>
            </div>
            </div>
            <div class="input-box address">
              <label>Address</label>
              <input type="text" placeholder="Enter street address" required  v-model.trim="hotel.address" />
              <div class="column">
                <input type="text" placeholder="Country" required v-model.trim="hotel.country"/>
                <input type="text" placeholder="District" required v-model.trim="hotel.district"/>
              </div>
                <input type="text" placeholder="Enter your city"  required v-model.trim="hotel.city"/>
              <div class="column">
                <input type="number" placeholder="Small Room Price" required v-model.trim="hotel.prices"/>
                <input type="number" placeholder="Large Room Price" required v-model.trim="hotel.pricel"/>
                <input type="number" placeholder="Delux Room Price" required v-model.trim="hotel.priced"/>
                 <input type="number" placeholder="total number available room" required v-model.trim="hotel.availroom"/>
              </div>
            </div>
            <button>Submit</button>
          </form>
        </section>
      </div>
    </template>
   
     <script>
      import axios from "axios";
      export default{
           
             data(){
              return {
                 hotel: {
        userId: localStorage.userId,
        email: "",
         name:"",
        number:"",
        wifi:"",
        available:"",
        address:" ",
        city:"",
        prices:"",
        pricel:"",
        priced:"",
        country:"",
        district:"",
        availroom:"",
      },
                  room1: 500,
                   room2: 1000,
                    room3: 1500,
                    total: 0,
                    count1:0,
                     count2:0,
                      count3:0,

                  val:"",
                  id: this.$store.getters.hotelid,
               hotelid: this.$store.getters.hotelid,
                  activeFilters: {
                      frontend:true,
                      backend:true,
                      career: true
                  }
              };
           },
         
            created(){
              if(this.hotelid=='')
              {
                  this.$router.push("/");
              }
               var link='http://127.0.0.1:8000/api/hotelbyid/'+ this.hotelid;
            axios
              .get(link)
              .then(( data ) => {
                try {
                this.val=data["data"]['0'];
                   console.log("amit");
                   console.log(this.val);
                   this.hotel.name=this.val['hotel_name']
                   this.hotel.email=this.val['email']
                   this.hotel.number=this.val['phonenumber']
                   this.hotel.wifi=this.val['wifi']
                   this.hotel.available=this.val['availability']
                   this.hotel.address=this.val['hotel_name']
                   this.hotel.city=this.val['hotel_name']
                   this.hotel.prices=this.val['hotel_name']
                   this.hotel.pricel=this.val['hotel_name']
                   this.hotel.priced=this.val['hotel_name']
                   this.hotel.country=this.val['hotel_name']
                   this.hotel.district=this.val['hotel_name']
                   this.hotel.availroom=this.val['availroom']

                }
                 catch (err) {
                  alert("Error, please try again");
                }
              });
          },
           
      }
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
        margin-left: 134px;
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