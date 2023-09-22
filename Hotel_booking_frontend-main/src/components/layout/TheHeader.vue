<template>

      <nav class="na" style=" display: flex;
    width: 99vw;
    padding: 0;
    margin: 0;">
     <router-link to="/hotel" v-if="check()===true">All Hotels</router-link>
      <router-link to="/login" v-if="addone()===false">Login</router-link>
      <router-link to="/registerpage" v-if="addone()===false">Sign Up </router-link>
       <router-link to="/logout" @click="logoutapp" v-if="addone()===true" > Logout </router-link>
       <router-link to="/yourhotel"  v-if="hotel()===true" >Dashboard </router-link>

  <div style="position:absolute; right:0">
     <router-link to="/registerpage" v-if="addone()===false">user </router-link>
       <router-link to="/user/profile"  v-if="addone()===true" >  {{ this.$store.getters.userName}}  </router-link>

    <a href="" style="width:40px">
      <img src="https://png.pngtree.com/png-vector/20190223/ourmid/pngtree-profile-line-black-icon-png-image_691051.jpg" style="height:30px;width:30px;border-radius:50px"/>
    </a>


  </div>
	<div class="animation start-home"></div>
</nav>
</template>
<script>
export default {
  data(){
    return(
      {
         name: this.$store.getters.userName
      }
    )
  },
methods :{
    
 
    addone(){
       return this.$store.getters.isauth;
    },
    check()
    {

      if(localStorage.userId == 1 || localStorage.userId == 2)
          return false;
        else return true;
      
    },
    hotel()
    {

      if(localStorage.userId == 2)
          return true;
        else return false;
      
    },
    logoutapp()
    {
      
          this.$store.commit('logout1');
         this.$store.dispatch('logout');
         this.checklogin();
    }
}
};
</script>
<style scoped >
@import url('https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap');
/*  styling scrollbars  */
::-webkit-scrollbar {
  width: 5px;
  height: 6px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px #A5AAAD;
  border-radius: 10px;
}
::-webkit-scrollbar-thumb {
  background: #3EA175;
  border-radius: 10px;
}
::-webkit-scrollbar-thumb:hover {
  background: #A5AAAD;
}
* {
  margin: 0;
  padding: 0;
}
body {
  box-sizing: border-box;
  font-family: 'Lato', sans-serif;
}
.text-primary-p {
  color: #A5AAAD;
  font-size: 14px;
  font-weight: 700;
}
.na{
  position: sticky;
}
.font-bold {
  font-weight: 700;
}
.text-title {
  color: #2E4A66;
}
.text-lightblue {
  color: #469CAC;
}
.text-red {
  color: #CC3D38;
}
.text-yellow {
  color: #A98921;
}
.text-green {
  color: #3B9668;
}
.container {
  /* display: block; */
  max-width: 1300px;
  /* height: 100vh; */
  grid-template-columns: 0.8fr 1fr 1fr 1fr;
  grid-template-rows: 0.2fr 3fr;
  grid-template-areas:
    'sidebar nav nav nav'
    'sidebar main main main';
  /* grid-gap: 0.2rem; */
}
.container[data-v-7ba5bd90] {
    display: block !important;
    max-width: 1300px;
    /* height: 100vh; */
    /* grid-template-columns: 0.8fr 1fr 1fr 1fr;
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
        'sidebar nav nav nav'
        'sidebar main main main'; */
    /* grid-gap: 0.2rem; */
}
.navbar {
  background: #FFFFFF;
  grid-area: nav;
  height: 60px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 30px 0 30px;
  border-bottom: 1px solid lightgray;
}
.nav_icon {
  display: none;
}
.nav_icon > i {
  font-size: 26px;
  color: #A5AAAD;
}
.navbar__left > a {
  margin-right: 30px;
  text-decoration: none;
  color: #A5AAAD;
  font-size: 15px;
  font-weight: 700;
}
.navbar__left .active_link {
  color: #265ACC;
  border-bottom: 3px solid #265ACC;
  padding-bottom: 12px;
}
.navbar__right {
  display: flex;
  justify-content: center;
  align-items: center;
}
.navbar__right > a {
  margin-left: 20px;
  text-decoration: none;
}
.navbar__right > a > i {
  color: #A5AAAD;
  font-size: 16px;
  border-radius: 50px;
  background: #FFFFFF;
  box-shadow: 2px 2px 5px #D9D9D9, -2px -2px 5px #FFFFFF;
  padding: 7px;
}
main {
  background: #F3F4F6;
  grid-area: main;
  /* overflow-y: auto; */
  margin-bottom: -5300px;
}
main[data-v-7ba5bd90] {
    background: #F3F4F6;
    width: 100vw;
    grid-area: main;
    overflow-y: auto;
    margin-bottom: -48px;
}
.main__container {
  padding: 0px 0px;
}
.main__title {
  display: flex;
  align-items: center;
}
.main__title > img {
  max-height: 100px;
  object-fit: contain;
  margin-right: 20px;
}
.main__greeting > h1 {
  font-size: 24px;
  color: #2E4A66;
  margin-bottom: 5px;
}
.main__greeting > p {
  font-size: 14px;
  font-weight: 700;
  color: #A5AAAD;
}
.main__cards {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  gap: 30px;
  margin: 20px 0;
}
.card {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  height: 70px;
  padding: 25px;
  border-radius: 5px;
  background: #FFFFFF;
  box-shadow: 5px 5px 13px #EDEDED, -5px -5px 13px #FFFFFF;
}
.card_inner {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.card_inner > span {
  font-size: 25px;
}
.charts {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 30px;
  margin-top: 50px;
}
.charts__left {
  padding: 25px;
  border-radius: 5px;
  background: #FFFFFF;
  box-shadow: 5px 5px 13px #EDEDED, -5px -5px 13px #FFFFFF;
}
.charts_left_title {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.charts_left_title > div > h1 {
  font-size: 24px;
  color: #2E4A66;
  margin-bottom: 5px;
}
.charts_left_title > div > p {
  font-size: 14px;
  font-weight: 700;
  color: #A5AAAD;
}
.charts_left_title > i {
  color: #FFFFFF;
  font-size: 20px;
  background: #FFC100;
  border-radius: 200px 0px 200px 200px;
  -moz-border-radius: 200px 0px 200px 200px;
  -webkit-border-radius: 200px 0px 200px 200px;
  border: 0px solid #000000;
  padding: 15px;
}
.charts__right {
  padding: 25px;
  border-radius: 5px;
  background: #FFFFFF;
  box-shadow: 5px 5px 13px #EDEDED, -5px -5px 13px #FFFFFF;
}
.charts_right_title {
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.charts_right_title > div > h1 {
  font-size: 24px;
  color: #2E4A66;
  margin-bottom: 5px;
}
.charts_right_title > div > p {
  font-size: 14px;
  font-weight: 700;
  color: #A5AAAD;
}
.charts_right_title > i {
  color: #FFFFFF;
  font-size: 20px;
  background: #39447A;
  border-radius: 200px 0px 200px 200px;
  -moz-border-radius: 200px 0px 200px 200px;
  -webkit-border-radius: 200px 0px 200px 200px;
  border: 0px solid #000000;
  padding: 15px;
}
.charts_right_cards {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-top: 30px;
}
.card1 {
  background: #D1ECF1;
  color: #35A4BA;
  text-align: center;
  padding: 25px;
  border-radius: 5px;
  font-size: 14px;
}
.card2 {
  background: #D2F9EE;
  color: #38E1B0;
  text-align: center;
  padding: 25px;
  border-radius: 5px;
  font-size: 14px;
}
.card3 {
  background: #D6D8D9;
  color: #3A3E41;
  text-align: center;
  padding: 25px;
  border-radius: 5px;
  font-size: 14px;
}
.card4 {
  background: #FDDCDF;
  color: #F65A6F;
  text-align: center;
  padding: 25px;
  border-radius: 5px;
  font-size: 14px;
}
/*  SIDEBAR STARTS HERE  */
#sidebar {
  background: #020509;
  grid-area: sidebar;
  overflow-y: auto;
  padding: 71px;
    margin: -48px;
    margin-right: 5px;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
.sidebar__title {
  display: flex;
  justify-content: space-between;
  align-items: center;
  color: #F3F4F6;
  margin-bottom: 30px;
  /* color: #E85B6B; */
}
.sidebar__img {
  display: flex;
  align-items: center;
}
.sidebar__title > div > img {
  width: 75px;
  object-fit: contain;
}
.sidebar__title > div > h1 {
  font-size: 18px;
  display: inline;
}
.sidebar__title > i {
  font-size: 18px;
  display: none;
}
.sidebar__menu > h2 {
  color: #3EA175;
  font-size: 16px;
  margin-top: 15px;
  margin-bottom: 5px;
  padding: 0 10px;
  font-weight: 700;
}
.sidebar__link {
  color: #F3F4F6;
  padding: 10px;
  border-radius: 3px;
  margin-bottom: 5px;
}
.active_menu_link {
  background: rgba(62, 161, 117, 0.3);
  color: #3EA175;
}
.active_menu_link a {
  color: #3EA175 !important;
}
.sidebar__link > a {
  text-decoration: none;
  color: #A5AAAD;
  font-weight: 700;
}
.sidebar__link > i {
  margin-right: 10px;
  font-size: 18px;
}
.sidebar__logout {
  margin-top: 20px;
  padding: 10px;
  color: #E65061;
}
.sidebar__logout > a {
  text-decoration: none;
  color: #E65061;
  font-weight: 700;
  text-transform: uppercase;
}
.sidebar__logout > i {
  margin-right: 10px;
  font-size: 18px;
}
.sidebar_responsive {
  display: inline !important;
  z-index: 9999 !important;
  left: 0 !important;
  position: absolute;
}
@media only screen and (max-width: 978px) {
  .container {
    grid-template-columns: 1fr;
    max-width: 100%;
    /* grid-template-rows: 0.2fr 2.2fr; */
    grid-template-rows: 0.2fr 3fr;
    grid-template-areas:
      'nav'
      'main';
  }
  #sidebar {
    display: none;
  }
  .sidebar__title > i {
    display: inline;
  }
  .nav_icon {
    display: inline;
  }
}
@media only screen and (max-width: 855px) {
  .main__cards {
    grid-template-columns: 1fr;
    gap: 10px;
    margin-bottom: 0;
  }
  .charts {
    grid-template-columns: 1fr;
    margin-top: 30px;
  }
}
@media only screen and (max-width: 480px) {
  .navbar__left {
    display: none;
  }
}




nav {
	margin: 27px auto 0;

	position: relative;
	width: 590px;
	height: 50px;
	background-color: #34495e;
	border-radius: 0px;
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
	border-radius: 8px;
}
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 210px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}

body {
	font-size: 12px;
	font-family: sans-serif;
	background: #2c3e50;
}
h1 {
	text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 16px;
}

span {
    color: #2BD6B4;
}

</style>