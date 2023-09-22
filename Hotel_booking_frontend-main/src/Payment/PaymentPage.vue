<template>
 
   <div class="container">
    <form   @submit.prevent="onClick">
        <div class="row">
            <div class="col">
                <h3 class="title">billing address</h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" placeholder="john deo" v-model.trim="detail.name" required>
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="example@example.com" v-model.trim="detail.email" required>
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="room - street - locality" v-model.trim="detail.address" required>
                </div>
                <div class="inputBox" required>
                    <span>city :</span>
                    <input type="text" placeholder="mumbai" v-model.trim="detail.city" >
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>state :</span>
                        <input type="text" placeholder="india" required v-model.trim="detail.state">
                    </div>
                    <div class="inputBox">
                        <span>zip code :</span>
                        <input type="text" placeholder="123 456" required v-model.trim="detail.zip">
                    </div>
                </div>
            </div>
            <div class="col">
                <h3 class="title">payment of amount : ${{amount}}</h3>
                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="../img/pp.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" required v-model.trim="detail.name_on_card">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="4242424242424242" required v-model.trim="detail.cardNumber">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="number" placeholder="2" required v-model.trim="detail.month">
                </div>
                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2023" required v-model.trim="detail.year">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="number" placeholder="312" required v-model.trim="detail.cvv">
                    </div>
                </div>
            </div>
        </div>
        <button class="submit-btn">proceed to pay ${{amount}}</button>
      
    </form>
</div>


  
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      detail: {
      hotelid: this.$store.getters.hotelid,
      userId: localStorage.userId,
        email: "",
         name:"",
        address:"",
        city:"",
        amount: this.$store.getters.amount,
        state:"",
        zip:" ",
        name_on_card:"",
        cardNumber:"",
        month:"",
        year:"",
        cvv:"",
        bol:false
      },
      amount:this.$store.getters.amount/100,
    };
  },
  methods: {
    

    async onClick() {
    
     await  axios
        .post("http://127.0.0.1:8000/api/payment", this.detail)
        .then(( data ) => {
          try {
             console.log(data);
                if(data["data"]["status"]=== true)
                {
                  this.bol=true;
                }
                else{
                  this.bol=false;
                }
           
          }
           catch (err) {
             this.bol=false;
           
          }
        });
    
       if(this.bol===true)
       {
       this.$router.push('/hotel/room/success');
       }
       else{
          this.$router.push('/hotel/room/error');
       }
     },
  },
};
</script>
<style  scoped>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0;
  box-sizing: border-box;
  outline: none; border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}
.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  background: linear-gradient(90deg, #e7c015 60%, #e7c015 40.1%);
}
.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}
.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}
.container form .row .col{
  flex:1 1 250px;
}
.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}
.container form .row .col .inputBox{
  margin:15px 0;
}
.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}
.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}
.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}
.container form .row .col .flex{
  display: flex;
  gap:15px;
}
.container form .row .col .flex .inputBox{
  margin-top: 5px;
}
.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}
.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #27AE60;
  color:#fff;
  margin-top: 5px;
  cursor: pointer;
}
.container form .submit-btn:hover{
  background: #2ECC71;
}

</style>