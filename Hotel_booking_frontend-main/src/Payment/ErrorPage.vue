<template>
      <div>
    <div class="" id="">
      <div class="">
        <div class="imgbox">
          <img src="../img/cancel.png" alt="" class="img">
        </div>
        <div class="title">
          <h3>Sorry :(</h3>
        </div>
        <p class="para">Something went wrong. Please try again!</p>
        <button href="#" class="button" id="s_button" @click="redirecttohome">OKAY</button>
      </div>
    </div>
      </div>
</template>
<script>
export default{
methods: {
      redirecttohome(){
            this.$router.push('/');
      }
}
}
</script>
<style scoped>
body{
    font-family: Poppins;
    min-height: 100vh;
    background:  #80CAF3;
}
.trigger_popup{
    cursor: pointer;
    font-size: 20px;
    text-decoration: none;
    font-weight: bold;
    color: white;
    padding: 20px;
}
#success_trigger{
    background: #32BA7C;
    position: fixed;
    top:20%;
    left:20%;
}
#error_trigger{
    background: #FF3636;
    position: fixed;
    top:20%;
    left:60%;
}
#success{
    display: none;
    position: fixed;
    top:20%;
    left:10%
}
#error{
    display: none;
    position: fixed;
    top:20%;
    left:55%;
}
.popup-content{
   /* display: block; */
    width: 326px;
    height: 408px;
    background: white;
    box-shadow: 4px 4px 70px 10px rgb(0 0 0/11%);
    border-radius: 25px;
}
.imgbox{
    text-align: center;
}
.img{
    width: 112px;
    margin-top: 40px;
}
.title{
    font-weight: 500;
    font-size: 24px;
   letter-spacing: 0.05em;
   text-align: center;
   margin: auto;
}
#success .title{
   color: #32BA7C;
}
#error .title{
    color: #FF3636;
}
.para{
    font-weight: 500;
    width: 80%;
    font-size: 18px;
    line-height: 30px;
    letter-spacing: 0.05em;
    text-align: center;
    margin: auto;
}
.button{
    width: 50%;
    display: block;
    margin: 20px auto;
    border-radius: 25px;
    padding: 10px;
    text-decoration: none;
    color: white;
    text-align: center;
    letter-spacing: 0.05em;
}
#s_button{
    background: #32BA7C;
}
#e_button{
    background: #FF3636;
}
</style>