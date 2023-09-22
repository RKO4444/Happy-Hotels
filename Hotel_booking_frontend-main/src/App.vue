<template>
    <div class="container" style="display:flex">
      <the-header></the-header>
      <main>
        <div class="main__container">
          <div>
            <router-view> </router-view>
          </div>
        </div>
      </main>
    </div>
</template>
<script>
import axios from 'axios';
import TheHeader from './components/layout/TheHeader.vue';
export default {
 
  components: {
    TheHeader,
  },
  data() {
    return {
      role: '',
      mail: '',
      userName: '',
      result: {},
      student: {
        api_token: localStorage.token,
        role_id: localStorage.role_id,
      },
    };
  },
 
  created() {
    if (localStorage.token != 'NULL') {
      console.log(localStorage.userId);
      console.log(localStorage.userId);
      axios
        .post('http://127.0.0.1:8000/api/tokenvalidate', this.student)
        .then(({ data }) => {
          try {
            this.role = data;
            this.mail = this.student.email;
            this.role = data['users']['0']['role_id'];
             this.userName= data['users']['0']['name'];
            this.api_token = data['users']['0']['api_token'];
            this.user_id = data['users']['0']['id'];
            console.log(this.api_token);
            console.log(this.role);
            this.$emit('postcreated');
            console.log(this.userName);
            this.$store.commit('loginhogya');
            this.$store.dispatch('set', {
              tokenId: this.api_token,
              userId: this.user_id,
              roleId: this.role,
            });
            this.$store.commit('setapp', {
              tokenId: this.api_token,
              userId: this.user_id,
              roleId: this.role,
            });
             this.$store.commit('setName',{userName: this.userName});
            this.$store.commit('loginhogya');
          } catch (err) {
            alert('Error, please try again');
          }
        });
    }
  },
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
  flex-direction: column;
  /* display: grid;
  max-width: 1300px; */
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
    /* margin: -48px; */
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
@media (min-width: 1200px){

.container{
  max-width: 100% !important;
}
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
</style>