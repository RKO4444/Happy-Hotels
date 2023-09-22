<template>
  <div>
    <section class="home" id="home">
      <div class="container" id="infos">
        <h1>Happy Hotels</h1>
        <p>Discover the place for your leisure time</p>
      </div>
    </section>
    <section class="blog top" id="blog">
      <div class="container">
        <div class="heading">
          <h5>OUR Website</h5>
          <h3>New and Fancy Hotels</h3>
        </div>

        <div class="content grid mtop">
          <div class="box" v-for="hotel in val"  v-bind:key="hotel">
           
            <div class="img">
              <img :src="hotel.hotelimage">
              <span>Welcome</span>
            </div>
            <div class="text">
               <h3> Name: {{ hotel.name }} </h3>
              <h3> contact number: {{ hotel.phonenumber }} </h3>
              <h3> Email: {{ hotel.email }} </h3>
              
              <h3>District:{{hotel.district}} , Pin:{{hotel.location}}</h3>
              <p> address:{{hotel.address}} </p>
             <button type="button" @click="show(hotel)">view hotel</button>
            </div>

          </div>

        </div>
         <div class="flex items-center justify-center p-2">
               <v-pagination
      v-model= "page"
      :pages= "pageCount"
      :range-size="1"
      active-color="#DCEDFF"
      @update:modelValue= "getPosts()"
    />
            </div>

      </div>
    </section>

  <section class="wrapper">
      <div class="container">
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="heading">
              <h5>THE CITY VIEW</h5>
              <h3>A charming view of the city</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p> Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="item">
            <div class="heading">
              <h5>THE CITY VIEW</h5>
              <h3>A charming view of the city</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p> Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="item">
            <div class="heading">
              <h5>THE CITY VIEW</h5>
              <h3>A charming view of the city</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
              dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p> Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
              sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="room wrapper2 top" id="room">
      <div class="container">
        <div class="heading">
          <h5>OUR ROOMS</h5>
          <h2>Fascinating rooms & suites </h2>
        </div>
        <div class="content flex mtop">
          <div class="left grid2">
            <div class="box">
              <i class="fas fa-desktop"></i>
              <p>Free Cost</p>
              <h3>No booking fee</h3>
            </div>
            <div class="box">
              <i class="fas fa-dollar-sign"></i>
              <p>Free Cost</p>
              <h3>Best rate guarantee</h3>
            </div>
            <div class="box">
              <i class="fab fa-resolving"></i>
              <p>Free Cost</p>
              <h3>Reservations 24/7</h3>
            </div>
            <div class="box">
              <i class="fal fa-alarm-clock"></i>
              <p>Free Cost</p>
              <h3>High-speed Wi-Fi</h3>
            </div>
            <div class="box">
              <i class="fas fa-mug-hot"></i>
              <p>Free Cost</p>
              <h3>Free breakfast</h3>
            </div>
            <div class="box">
              <i class="fas fa-user-tie"></i>
              <p>Free Cost</p>
              <h3>One person free</h3>
            </div>
          </div>
          <div class="right">
            <img src="../img/r.jpg" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="timer about wrapper">
      <div class="background"> </div>
      <div class="container">
        <div class="heading">
          <h5>LAST MINUTE!</h5>
          <h2> <span>Incredible!</span> Are you coming today</h2>
        </div>

        <div id="time" class="flex1 mtop"> </div>
      </div>
    </section>
    <section class="area top">
      <div class="container">
        <div class="heading">
          <h5>RESTAURANT</h5>
          <h3>The area we cover under ecorik</h3>
        </div>

        <div class="content flex mtop">
          <div class="left">
            <img src="../img/aera.jpg" alt="">
          </div>
          <div class="right">
            <ul>
              <li>Restaurant </li>
              <li>Swimming pool </li>
              <li>Conference room</li>
            </ul>

            <p>Welcome to our hotel website! Our hotel offers a luxurious dining experience at our restaurant, where our
              talented chefs prepare exquisite dishes using only the freshest and finest ingredients. Whether you are in
              the mood for a hearty meal or something lighter, our menu has something for everyone.</p>
            <p>In addition to our exceptional dining, we also have a beautiful swimming pool on site for our guests to
              enjoy. Surrounded by lush greenery and comfortable loungers, our pool is the perfect place to unwind and
              soak up some sun. Whether you want to swim laps or just relax with a good book, our pool is the perfect
              place to do it.</p>

          </div>
        </div>
      </div>
    </section>
    <!-- <section class="customer top" id="testimonials">
      <div class="container">
        <div class="heading">
          <h5>TESTIMONIALS </h5>
          <h3>What customers say </h3>
        </div>

        <div class="owl-carousel owl-theme mtop">
          <div class="item">
            <div class="rate">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h3>Excellent Swimming</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="admin flex">
              <div class="img">
                <img src="../img/c1.jpg" alt="">
              </div>
              <div class="text">
                <h3>Ayman Jensi</h3>
                <span>Manager</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="rate">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h3>Excellent Swimming</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="admin flex">
              <div class="img">
                <img src="../img/c2.jpg" alt="">
              </div>
              <div class="text">
                <h3>Ayman Jensi</h3>
                <span>Manager</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="rate">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <h3>Excellent Swimming</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
              aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <div class="admin flex">
              <div class="img">
                <img src="../img/c3.jpg" alt="">
              </div>
              <div class="text">
                <h3>Ayman Jensi</h3>
                <span>Manager</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->


    <section class="about" id="about">
      <div class="container">
        <div class="heading">
          <h5>EXPLORE</h5>
          <h2>We are cool to give you pleasure
          </h2>
        </div>

        <div class="content flex  top">
          <div class="left">
            <h3>As much as comfort want to get from us everything
            </h3>
            <p>Welcome to our luxurious hotel, where indulgence meets comfort and relaxation is at its finest.

              Experience the ultimate escape from your daily routine and immerse yourself in the tranquil ambiance of our
              hotel.

              Our hotel offers a seamless blend of contemporary design and exceptional service, ensuring that your stay is
              a memorable one.

            </p>
            <p> Let us cater to your every need and create a personalized experience that exceeds your expectations.

              Escape to a world of unparalleled comfort and sophistication, where every detail has been carefully curated
              to provide the ultimate luxury experience.</p>
            <!-- <button class="flex1">
              <span>Check Availability</span>
              <i class="fas fa-arrow-circle-right"></i>
            </button> -->
          </div>
          <div class="right">
            <img src="../img/a.png" alt="">
          </div>
        </div>
      </div>
    </section>

    <section class="gallary top" id="gallary">
      <div class="owl-carousel owl-theme">
        <div class="item">
          <img src="../img/g1.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g2.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g3.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g4.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g5.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g1.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g2.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
        <div class="item">
          <img src="../img/g3.jpg" alt="">
          <div class="overlay">
            <i class="fab fa-instagram"></i>
          </div>
        </div>
      </div>

    </section>



    <footer>

      <div class="container flex1">

        <div><a href=""><i class="fab fa-facebook-f">Facebook</i></a></div>
        <div><a href=""><i class="fab fa-twitter">twitter</i></a></div>
        <div> <a href=""> <i class="fab fa-instagram">instagram</i></a></div>
        <div><a href=""><i class="fab fa-youtube">youtube</i></a></div>


      </div>



    </footer>


  </div>

    
  </template>
  <script>
   //console.log("sdfgh");
  import axios from "axios";
  import VPagination from "@hennge/vue3-pagination";
  import "@hennge/vue3-pagination/dist/vue3-pagination.css";
  export default{
       components: {
        VPagination
       },
         data(){
          return {
             val:'',
             link:'',
             current:'',
             t:'',
             prev: true,
             next: true,
             page: 1,
             posts: null,
             res:'',
             pageCount: null,
             hotelid:''
          };
       },
        methods:{
          show(hotel){
             this.$store.commit('sethotelid',{ hotelid:hotel.hotelid});
              this.$router.push('/hotel/'+ hotel.hotelid);
           },
    getPosts()
   {

    axios.get('http://127.0.0.1:8000/api/hotellist?page='+ this.page )
    .then(( res ) => {
             try {
    
                    this.pageCount= res["data"]["page_count"]
                     this.posts= res["data"]["paginate"]["data"]
                     this.val=res["data"]["paginate"]["data"]
                    
                    
                      console.log(res);
                     
    }
                 catch(err){
                      console.error(err)
                  }
   })
   }
       },
       created() {
        console.log("sdfgh");
         this.getPosts();
          console.log("sdfgh");
       },
        onMounted(){
        this.getPosts();
       },




      



  };
  </script>

  <style scoped>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap');
  .pagination{
          margin-bottom: 0;
      }

  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }

  html,
  body {
    font-family: 'Poppins', sans-serif;
    scroll-behavior: smooth;
  }
  .container[data-v-7ba5bd90] {
      display: grid;
      max-width: 1300px;
      height: 100vh !important;
      grid-template-columns: 0.8fr 1fr 1fr 1fr;
      grid-template-rows: 0.2fr 3fr;
      grid-template-areas:
          'sidebar nav nav nav'
          'sidebar main main main';
      /* grid-gap: 0.2rem; */
  }
  .container {
    max-width: 90%;
    margin: auto;
  }

  li {
    list-style: none;
  }

  a {
    text-decoration: none;
    transition: 0.5s;
  }

  .flex {
    display: flex;
  }

  .flex1 {
    display: flex;
    justify-content: space-between;
  }

  /*-------------head--------- */
  .head {
    height: 10vh;
    line-height: 10vh;
  }

  .head i {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    line-height: 30px;
    background: #FAF3E7;
    text-align: center;
    color: #CC8C18;
  }

  .head img {
    margin-top: 10px;
  }

  /*-------------head--------- */
  /*-------------header--------- */
  header {
    background: #CC8C18;
    padding: 15px 0 15px 0;
    color: white;
  }

  .navbar {
    display: flex;
    align-items: center;
  }

  .hamburger {
    display: none;
  }

  .bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    transition: all 0.5s ease-in-out;
    background: white;
  }

  .nav-menu {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  header ul {
    padding: 0 20px 0 0;
  }

  header li {
    margin-right: 30px;
  }

  header ul li a {
    font-size: 15px;
    color: white;
    text-transform: uppercase;
    font-weight: 500;
    transition: 0.5s;
  }

  header ul li a:hover {
    color: #000;
  }

  header .head_contact {
    position: relative;
  }

  header .head_contact i {
    position: absolute;
    top: -29px;
    left: -70%;
    width: 80px;
    height: 80px;
    line-height: 80px;
    text-align: center;
    background: white;
    color: #CC8C18;
    border-radius: 50%;
    transform: rotate(-45deg);
    border: 5px solid #ECE3D2;
    font-size: 30px;
  }

  header .sticky_logo {
    display: none;
  }

  header.sticky .sticky_logo {
    display: block;
    width: 50px;
    height: 50px;
    margin-top: -10px;
  }

  header.sticky {
    z-index: 9999;
    position: fixed;
    width: 100%;
    background: #313538;
    transition: 0.5s;
    height: 12vh;
    transition: 0.5s;
    top: 0;
    padding: 30px 0 0 0;
  }

  header.sticky ul li a {
    color: white;
  }

  @media only screen and (max-width:768px) {


    .header .head_contact,
    .logo {
      display: none;
    }


    header.sticky {
      height: 8vh;
    }

    header.sticky .nav-menu {
      background: #313538;
    }

    .navbar {
      height: 5vh;
      justify-content: space-between;
    }

    .nav-menu {
      position: fixed;
      left: -100%;
      top: 11rem;
      flex-direction: column;
      background: #CC8C18;
      width: 100%;
      border-radius: 10px;
      text-align: center;
      transition: 0.3s;
      z-index: 99;
    }

    header.sticky .nav-menu {
      top: 5rem;
    }

    header ul li a {
      color: white;
    }

    .nav-menu.active {
      left: 0;
    }

    header li {
      margin: 2.5rem 0;
    }

    .hamburger {
      display: block;
      cursor: pointer;
    }

    .hamburger.active .bar:nth-child(2) {
      opacity: 0;
    }

    .hamburger.active .bar:nth-child(1) {
      transform: translateY(8px) rotate(45deg);
    }

    .hamburger.active .bar:nth-child(3) {
      transform: translateY(-8px) rotate(-45deg);
    }
  }


  .grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    grid-gap: 30px;
  }

  .home {
    background-image: url("../img/home.png");
    height: 100vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    text-align: center;
  }

  .home h1 {
    font-family: 'Great Vibes', cursive;
    font-size: 150px;
    color: white;
    padding-top: 20%;
  }

  .home p {
    color: white;
    font-weight: bold;
  }

  .home .content {
    text-align: left;
    color: black;
    margin-top: 7%;
  }

  .home .box {
    background: white;
    padding: 35px;
  }

  .home input {
    margin-top: 10px;
  }

  input {
    border: none;
    outline: none;
  }

  button {
    background: #CC8C18;
    color: white;
    padding: 10px 20px;
    outline: none;
    border: none;
    border-radius: 30px;
  }

  button i {
    margin-left: 20px;
    font-size: 25px;
  }

  button span {
    margin-top: 5px;
  }


  .top {
    margin-top: 80px;
  }

  .mtop {
    margin-top: 40px;
  }

  .heading {
    text-align: center;
  }

  .heading h5 {
    font-weight: 400;
    letter-spacing: 5px;
    color: #CC8C18;
    padding-top: 20px;
  }

  .heading h2 {
    color: #24416B;
    font-size: 45px;
    font-family: serif;
    font-weight: bold;
    margin: 10px 0 20px 0;
  }

  .left, .right {
    width: 50%;
  }

  h3 {
    font-size: 35px;
    font-family: serif;
    color: #24416B;
    margin-bottom: 20px;
  }

  .about .left {
    padding: 20px;
  }

  p {
    line-height: 30px;
    color: #a4a4a4;
    margin-bottom: 20px;
    font-size: 15px;
  }

  .about {
    position: relative;
    padding-bottom: 70px;
  }

  .about .right {
    position: relative;
  }

  .about .right::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    background: #CC8C18;
    width: 92%;
    height: 61vh;
    z-index: -1;
    margin: 50px;
  }

  .about::after {
    content: '';
    position: absolute;
    top: -5%;
    left: 0;
    background-image: url("../img/line1.png");
    background-size: cover;
    background-repeat: no-repeat;
    height: 50px;
    width: 100%;
  }

  .about::before {
    content: '';
    position: absolute;
    bottom: -5%;
    left: 0;
    background-image: url("../img/line2.png");
    background-size: cover;
    background-repeat: no-repeat;
    height: 50px;
    width: 100%;
  }


  .wrapper {
    background-image: url("../img/w.jpg");
    height: 80vh;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }

  .wrapper .container {
    max-width: 50%;
    margin: auto;
  }

  .wrapper .item {
    background: white;
    padding: 50px;
    margin-top: 15%;
    border: 30px solid #F3F3F3;
    border-bottom: none;
  }

  .wrapper .heading {
    text-align: left;
  }

  .owl-nav .owl-next,
  .owl-nav .owl-prev {
    height: 47px;
    position: absolute;
    top: 60%;
    width: 26px;
    cursor: pointer;
    background: none !important;
  }

  .owl-nav .owl-prev {
    left: 0;
  }

  .owl-nav .owl-next {
    right: 53px;
  }

  .owl-nav .owl-next i,
  .owl-nav .owl-prev i {
    background: white;
    padding: 7px;
    border-radius: 50%;
    color: #CC8C18;
    box-shadow: 2px 2px 5px 3px rgba(0, 0, 0, 0.05);
    transition: 0.5s;
  }

  .owl-nav .owl-next i:hover,
  .owl-nav .owl-prev i:hover {
    background: #CC8C18;
    color: white;
  }


  .wrapper2 {
    position: relative;
    text-align: center;
  }

  .wrapper2 .grid {
    grid-template-columns: repeat(4, 1fr);
  }

  .wrapper2 .box {
    box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
    padding: 20px;
    transition: 0.5s;
  }

  .wrapper2 i {
    margin: 10px 0 15px 0;
    color: #CC8C18;
    font-size: 30px;
  }

  .wrapper2 h3 {
    font-size: 20px;
  }

  .wrapper2 span {
    padding: 10px;
    background: #F5E8D1;
    color: #CC8C18;
    border-radius: 50%;
  }

  .wrapper2 .box:hover {
    background: #CC8C18;
    cursor: pointer;
  }

  .wrapper2 .box:hover span {
    background: #fff;
  }

  .wrapper2 .box:hover p,
  .wrapper2 .box:hover h3,
  .wrapper2 .box:hover i {
    color: white;
  }

  .wrapper2::after {
    content: '';
    position: absolute;
    top: -22%;
    left: 0;
    background-image: url("../img/line1.png");
    background-size: cover;
    background-repeat: no-repeat;
    height: 75px;
    width: 100%;
    z-index: 2;
  }


  .room {
    margin-bottom: 50px;
    position: relative;
  }

  .room.wrapper2::after {
    display: none;
    top: 105%;
    background-image: url("../img/line2.png");
  }

  .grid2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 30px;
  }

  .room img {
    width: 100%;
    height: 100%;
    margin-left: 20px;
  }

  .room h3 {
    margin: 0;
    padding: 0;
  }


  .timer {
    position: relative;
    text-align: center;
    padding-top: 12%;
  }

  .background::after {
    position: absolute;
    content: '';
    top: 0;
    left: 0;
    content: '';
    background: rgba(0, 0, 0, 0.5);
    height: 100%;
    width: 100%;
  }

  .timer.wrapper {
    background-image: url("../img/w2.jpg");
  }

  .timer.about::after {
    z-index: 1;
    top: 0%;
    background-image: url("../img/line2.png");
  }

  .timer.about::before {
    z-index: 1;
    bottom: 0%;
    background-image: url("../img/line1.png");
  }

  .timer h2,
  .timer h5 {
    color: white;
    text-align: center;
  }

  .timer .container {
    position: relative;
  }

  .timer h2 span {
    font-family: 'Great Vibes', cursive;
  }

  .clock span {
    color: white;
    font-size: 50px;
    line-height: 50px;
  }

  .clock p {
    color: white;
    font-size: 18px;
    letter-spacing: 3px;
  }

  .offer img {
    width: 100%;
    height: 100%;
  }

  .offer .right {
    padding: 20px;
    margin: 20px;
    box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
  }

  .offer .content h4 {
    font-size: 20px;
    color: #627795;
    font-family: serif;
  }

  .offer .rate i {
    font-size: 13px;
    color: #CC8C18;
    margin: 10px 10px 20px 0;
  }

  .offer .content h5 {
    color: #627795;
    margin-bottom: 10px;
  }

  .offer .box {
    transition: 0.5s;
  }

  .offer .box:hover {
    transform: translateY(-10px);
  }


  .area img {
    margin: 0px 0 20px -125px;
  }

  .area ul li {
    display: inline-block;
    font-weight: 500;
    color: #5c646e;
    margin-right: 20px;
    margin-bottom: 20px;
  }

  .area .left {
    position: relative;
  }

  .area .left::after {
    position: absolute;
    top: 0;
    left: 0;
    content: '';
    width: 85%;
    height: 92%;
    margin: 30px;
    background: #CC8C18;
    z-index: -1;
  }


  .offer2 .heading {
    padding-top: 10%;
    text-align: center;
  }

  .offer2 .heading h3 {
    color: white;
  }

  .offer2.wrapper {
    background-image: url("../img/w3.jpg");
    height: 90vh;
    background-attachment: scroll;
  }

  .offer2.timer {
    padding-top: 0%;
  }

  .offer2.wrapper .container {
    max-width: 85%;
    margin: auto;
  }

  .offer2 .box {
    background: white;
    padding: 30px;
    text-align: left;
    transition: 0.5s;
  }

  .offer2 .box:hover {
    transform: translateY(-10px);
    cursor: pointer;
  }

  .offer2 .box h5 {
    color: #CC8C18;
    text-align: left;
    font-weight: 400;
    list-style: 5px;
    word-spacing: 10px;
  }

  .offer2 .box h3 {
    font-size: 20px;
    margin: 10px 0 10px 0;
  }

  .offer2 label {
    color: #CC8C18;
  }

  .offer2 .grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .offer2 .flex i {
    margin: 0 20px 20px 0;
    font-weight: 400;
    color: #5c646e;
  }

  .customer .mtop {
    padding: 30px;
    max-width: 60%;
    margin: auto;
    text-align: center;
    box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
  }

  .customer i {
    color: #CC8C18;
    font-size: 13px;
  }

  .customer .item h3 {
    font-size: 20px;
  }

  .customer img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
  }

  .customer .admin {
    justify-content: center;
  }

  .customer .admin h3 {
    margin: 0;
  }

  .customer .text {
    margin: 10px;
  }

  .customer span {
    opacity: 0.7;
  }


  .gallary .item {
    position: relative;
    cursor: pointer;
  }

  .gallary .overlay i {
    position: absolute;
    top: 40%;
    left: 40%;
    z-index: 1;
    opacity: 0;
    font-size: 50px;
    color: white;
  }

  .gallary .overlay {
    position: absolute;
    content: '';
    background: rgba(204, 140, 24, 0.73);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .gallary .item:hover .overlay,
  .gallary .item:hover i {
    opacity: 1;
    transition: 0.5s;
    cursor: pointer;
  }

  .blog .grid {
    grid-template-columns: repeat(3, 1fr);
  }

  .blog .box {
    box-shadow: 0 0 20px 3px rgb(0 0 0 / 5%);
    transition: 0.5s;
  }

  .blog .box:hover {
    transform: translateY(-10px);
    cursor: pointer;
  }

  .blog .text {
    padding: 20px;
  }

  .blog img {
    width: 100%;
    height: 100%;
    position: relative;
  }

  .blog .img {
    position: relative;
    overflow: hidden;
  }

  .blog span {
    position: absolute;
    top: -3%;
    left: -12%;
    z-index: 1;
    color: white;
    background: #CC8C18;
    padding: 20px 50px;
    transform: rotate(-45deg);
    font-size: 14px;
  }

  .blog .box h3 {
    font-size: 20px;
  }

  .blog .box i {
    margin-right: 10px;
    color: #CC8C18;
  }

  .blog .box i label {
    color: black;
  }

  .blog .box h3 {
    margin: 15px 0;
  }

  .blog a {
    color: #CC8C18;
    font-size: 15px;
  }


  .map iframe {
    width: 100%;
  }


  footer {
    background: black;
    color: white;
    padding: 30px;
  }

  .subscribe {
    text-align: center;
    max-width: 50%;
    margin: auto;
  }

  .subscribe input {
    width: 100%;
    border-radius: 50px;
    margin-right: 30px;
    padding: 10px;
  }

  footer .grid {
    grid-template-columns: repeat(4, 1fr);
  }

  footer .content h2 {
    margin-bottom: 20px;
    font-size: 23px;
  }

  footer li {
    margin-bottom: 15px;
    opacity: 0.5;
  }

  footer li i {
    font-size: 13px;
    margin-right: 10px;
  }

  footer .content h3 {
    font-size: 20px;
    color: white;
    margin: 0;
  }

  footer .content .icon i {
    font-size: 25px;
    margin-right: 20px;
  }

  footer .social i {
    padding: 10px;
    background: grey;
    margin-right: 10px;
    border-radius: 50%;
  }

  footer .content {
    padding-top: 60px;
    padding-bottom: 50px;
    border-top: 2px solid rgba(255, 255, 255, 0.2);
  }


  @media only screen and (max-width:768px) {

    footer .grid,
    .blog .grid,
    .offer2 .grid,
    .wrapper2 .content,
    .grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .home h1 {
      font-size: 100px;
    }

    .home {
      height: 80vh;
    }

    .home .grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-template-rows: repeat(2, auto);
      grid-gap: 15px;
    }

    .home .box:nth-last-child(1) {
      grid-column-start: 1;
      grid-column-end: 3;
      grid-row-start: 3;
      grid-row-end: 3;
    }


    .left, .right {
      width: 100%;
    }

    .area .content,
    .room .content,
    .about .content {
      flex-direction: column;
    }

    .wrapper2::after,
    .area .left::after,
    .timer.about::before,
    .timer.about::after,
    .about .right::after,
    .about::before,
    .about::after {
      display: none;
    }

    
    .wrapper .container {
      max-width: 80%;
      margin: auto;
    }


    .room img {
      margin: 0;
      margin-top: 50px;
    }


    .timer.wrapper {
      height: 50vh;
    }


    .offer .box {
      flex-direction: column;
    }

    .offer .right {
      margin: 0px;
    }


    .area img {
      margin: 0px;
      width: 100%;
    }

    .offer2.wrapper {
      height: 100vh;
    }

    .customer .mtop {
      max-width: 100%;
    }

    .subscribe {
      max-width: 100%;
    }

  }

  @media only screen and (max-width:512px) {
    .header.sticky {
      height: 10vh;
    }

    .header.sticky .sticky_logo {
      width: auto;
      height: auto;
    }

    .header.sticky .nav-menu {
      top: 4rem;
    }

    .nav-menu {
      top: 12rem;
    }

    .head {
      height: 20vh;
      line-height: auto;
      text-align: center;
    }

    .head .container {
      flex-direction: column;
    }

    .home h1 {
      font-size: 70px;
    }

    .grid2,
    footer .grid,
    .blog .grid,
    .offer2 .grid,
    .wrapper2 .content,
    .grid {
      grid-template-columns: repeat(1, 1fr);
    }

    .home {
      height: 140vh;
    }

    .home .grid {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
      grid-template-rows: repeat(1, auto);
      grid-gap: 15px;
    }

    .home .box:nth-last-child(1) {
      grid-column-start: 1;
      grid-column-end: 1;
      grid-row-start: 5;
      grid-row-end: 5;
    }

    img {
      width: 100%;
      height: 100%;
    }

    .wrapper .container {
      max-width: 90%;
    }

    .wrapper {
      height: 100vh;
    }

    .wrapper .item {
      padding: 20px;
      border: 0 solid #F3F3F3;
    }

    .offer2.wrapper {
      height: 170vh;
    }
  }


  </style>