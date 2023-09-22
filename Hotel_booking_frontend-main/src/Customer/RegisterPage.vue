<template>
  <div>
    <div class="container">
      <div class="img">
        <img src="../img/bg.svg" />
      </div>
      <div class="login-content">
        <form autocomplete="off" @submit.prevent="onCreatePost">
          <img src="../img/avatar1.svg" />
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <input
                type="text"
                class="input"
                placeholder="Name"
                v-model="title"
                autocomplete="false"
              />
            </div>
          </div>
          
          <div class="input-div one">
            <div class="i">
              <i class="fa-regular fa-mobile fa-lg"></i>
            </div>
            <div class="div">
              <input
                type="text"
                class="input"
                placeholder="Mobile Number"
                v-model="phone"
                autocomplete="false"
              />
            </div>
          </div>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-user"></i>
            </div>
            <div class="div">
              <input
                type="text"
                class="input"
                placeholder="Address"
                v-model="address"
                autocomplete="false"
              />
            </div>
          </div>
          <div class="input-div one">
            <div class="i">
              <i class="fa-solid fa-id-card fa-lg"></i>
            </div>
            <div class="div">
              <input
                type="text"
                class="input"
                placeholder="ID Number"
                v-model="idnumber"
                autocomplete="false"
              />
            </div>
          </div><div class="input-div one">
            <div class="i">
               <i class="fas fa-envelope-square"></i>
           
            </div>
            <div class="div">
              <input
                type="email"
                class="input"
                placeholder="Email"
                v-model="email"
                autocomplete="false"
              />
            </div>
          </div>
          <div class="input-div one">
            <div class="i">
              <i class="fas fa-lock"></i>
            </div>
            <div class="div">
              <input
                type="password"
                class="input"
                id="password"
                name="password"
                placeholder="Password"
                v-model="password"
                autocomplete="false"
              />
            </div>
          </div>
          <div class="mt-3">
            <button type="submit" class="btn btn-primary">Create acount</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>
<script>
import axios from 'axios';
export default {
  data() {
    return {
      title: '',
      password: '',
      email: '',
      idnumber:'',
      phone:'',
      address:'',
      role_id: '3',
      isSuccess: false,
      user_id: ''
    };
  },
  methods: {
    onCreatePost() {
      axios
        .post(`http://127.0.0.1:8000/api/register`, {
          name: this.title,
          email: this.email,
          password: this.password,
          role_id: this.role_id,
        })
        .then((response) => {
          this.isSuccess = true;
          console.log(response);
          this.user_id=response["data"]["id"];
           console.log( this.user_id);

            axios
        .post(`http://127.0.0.1:8000/api/customer`,{
          location: this.address,
          phonenumber: this.phone,
          addharnumber: this.idnumber,
          user_id:this.user_id,

             
        })
          this.$router.push('/login');
          this.$emit('postcreated');
        });
    },
  },
};
</script>
<style scoped>
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  font-family: 'Poppins', sans-serif;
  overflow: hidden;
}
.wave {
  position: fixed;
  bottom: 0;
  left: 0;
  height: 100%;
  z-index: -1;
}
.container {
  width: 100vw;
  height: 100vh;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 7rem;
  padding: 0 2rem;
}
.img {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}
.login-content {
  display: flex;
  justify-content: flex-start;
  align-items: center;
  text-align: center;
}
.img img {
  width: 500px;
}
form {
  width: 360px;
}
.login-content img {
  height: 100px;
}
.login-content h2 {
  margin: 15px 0;
  color: #333;
  text-transform: uppercase;
  font-size: 2.9rem;
}
.login-content .input-div {
  position: relative;
  display: grid;
  grid-template-columns: 7% 93%;
  margin: 25px 0;
  padding: 5px 0;
  border-bottom: 2px solid #D9D9D9;
}
.login-content .input-div.one {
  margin-top: 0;
}
.i {
  color: #D9D9D9;
  display: flex;
  justify-content: center;
  align-items: center;
}
.i i {
  transition: 0.3s;
}
.input-div > div {
  position: relative;
  height: 45px;
}
.input-div > div > h5 {
  position: absolute;
  left: 10px;
  top: 50%;
  transform: translateY(-50%);
  color: #999;
  font-size: 18px;
  transition: 0.3s;
}
.input-div:before,
.input-div:after {
  content: '';
  position: absolute;
  bottom: -2px;
  width: 0%;
  height: 2px;
  background-color: #38D39F;
  transition: 0.4s;
}
.input-div:before {
  right: 50%;
}
.input-div:after {
  left: 50%;
}
.input-div.focus:before,
.input-div.focus:after {
  width: 50%;
}
.input-div.focus > div > h5 {
  top: -5px;
  font-size: 15px;
}
.input-div.focus > .i > i {
  color: #38D39F;
}
.input-div > div > input {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  background: none;
  padding: 0.5rem 0.7rem;
  font-size: 1.2rem;
  color: #555;
  font-family: 'poppins', sans-serif;
}
.input-div.pass {
  margin-bottom: 4px;
}
a {
  display: block;
  text-align: right;
  text-decoration: none;
  color: #999;
  font-size: 0.9rem;
  transition: 0.3s;
}
a:hover {
  color: #38D39F;
}
.btn {
  display: block;
  width: 100%;
  height: 50px;
  border-radius: 25px;
  outline: none;
  border: none;
  background-image: linear-gradient(to right, #32BE8F, #38D39F, #32BE8F);
  background-size: 200%;
  font-size: 1.2rem;
  color: #fff;
  font-family: 'Poppins', sans-serif;
  text-transform: uppercase;
  margin: 1rem 0;
  cursor: pointer;
  transition: 0.5s;
}
.btn:hover {
  background-position: right;
}
@media screen and (max-width: 1050px) {
  .container {
    grid-gap: 5rem;
  }
}
@media screen and (max-width: 1000px) {
  form {
    width: 290px;
  }
  .login-content h2 {
    font-size: 2.4rem;
    margin: 8px 0;
  }
  .img img {
    width: 400px;
  }
}
@media screen and (max-width: 900px) {
  .container {
    grid-template-columns: 1fr;
  }
  .img {
    display: none;
  }
  .wave {
    display: none;
  }
  .login-content {
    justify-content: center;
  }
}
</style>