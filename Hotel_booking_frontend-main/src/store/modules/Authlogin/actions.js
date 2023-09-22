let timer;
import axios from "axios";
export default {

 async  tryautologin()
  {
   // console.log(this.getters.student.api_token);
    await    axios
    .post("http://127.0.0.1:8000/api/tokenvalidate", this.getters.student)
    .then(({ data }) => {
      try {
         const role= data['users']['0']['role_id'];
          const api_token= data['users']['0']['api_token'];
          const user_id= data['users']['0']['id'];
      //         console.log(this.api_token);
      //         console.log(this.role);
             //  this.$emit('postcreated');
                if (role === '3' ) {
          // alert("Login Successfully as Custome");
       //   this.$router.push('/hotel');
         }
       else if (role === '1' ) {
          //  alert("Login Successfully as Admin");
       //   this.$router.push('/admin');
        }
        else if (role === '2' ) {
         //  alert("Login Successfully as Hotel");
       //   this.$router.push('/yourhotel`');
        }
         
      //  else if (check === true) {
      //     alert("Login Successfully");
      //     this.$router.push('/');
        
      //   }
       
         else {
        // alert("Login failed");
        }
       this.dispatch('set',{ tokenId: api_token, userId: user_id,roleId: role}); 
          this.commit('setapp',{ tokenId: api_token, userId: user_id,roleId: role}); 
         this.commit('loginhogya');
      
      } 
      catch (err) {
      alert("Error, please try again");
    
      }

        
    });


  },
  set(context,payload)
  {

  localStorage.setItem('token', payload.tokenId);
  localStorage.setItem('userId', payload.userId);
  localStorage.setItem('roleId', payload.roleId);

  },


    
  logout(context) {
    localStorage.removeItem('token');
    localStorage.removeItem('userId');
    localStorage.removeItem('roleId');
    localStorage.removeItem('tokenExpiration');
   
    clearTimeout(timer);

    context.commit('setUser', {
      token: null,
      userId: null
    });
  },
  autoLogout(context) {
    context.dispatch('logout');
    context.commit('setAutoLogout');
  }
};
