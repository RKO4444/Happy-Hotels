import{ createRouter , createWebHistory } from 'vue-router';
import HotelList from './Hotel/HotelList.vue';
import HotelForm from './Hotel/HotelForm.vue';
import RoomPage from './Hotel/RoomPage.vue';
import NotFound from './NotFound.vue';
import AuthLogin from './Login/AuthLogin.vue'
import RegisterPage from './Customer/RegisterPage.vue'
import AdminDashboard from './Admin/AdminDashboard.vue'
import YourHotel from "./Hotel/YourHotel.vue"
import ErrorPage from "./Payment/ErrorPage.vue"
import SuccessPage from "./Payment/SuccessPage.vue"
import ProfilePage from "./Customer/ProfilePage.vue"
import PaymentPage from "./Payment/PaymentPage.vue"
import BookingForm from "./Hotel/BookingForm.vue"
import AdminHotelEdit from "./Admin/AdminHotelEdit.vue"
import CreateHotel from "./Hotel/CreateHotel.vue"
import HotelFormedite from "./Hotel/HotelFormedit.vue"
import store from './store'
//meta:{ requiresUser : true }
const router = createRouter({
  history: createWebHistory(),
   routes: [
    {path:'/', redirect: '/hotel'},
    {path:'/logout', redirect: '/hotel'},
    {path: '/hotel',component: HotelList,meta:{ requiresAccess : true } },
    {path: '/register',component: HotelForm, meta:{ requiresAuth : true,requiresHotel: true }},
    {path: '/hotel/room/payment',component: PaymentPage  ,meta:{ requiresAuth : true,requiresUser: true,requiresDirect: true }},
    {path: '/hotel/room/error',component: ErrorPage  ,meta:{ requiresAuth : true ,requiresUser: true ,requiresDirect: true}},
    {path: '/hotel/room/success',component: SuccessPage  ,meta:{ requiresAuth : true,requiresUser: true,requiresDirect: true }}, 
    {path: '/hotel/:id',component: RoomPage,},
    {path: '/yourhotel/:id/edit',component: HotelFormedite, meta:{ requiresAuth : true,requiresHotel: true }},
    {path: '/yourhotel',component: YourHotel , meta:{ requiresAuth : true,requiresHotel: true }},//, meta:{ requiresAuth: true}},
    {path: '/admin',component: AdminDashboard , meta:{ requiresAuth : true , requiresAdmin: true} },//, meta:{ requireAuth : true} },
    {path: '/login', component: AuthLogin, meta:{ requiresUnAuth : true,}},//,meta:{ requireAuth : true}},
    {path: '/registerpage', component: RegisterPage , meta:{ requiresUnAuth : true,}},
    {path: '/admin/hotel', component: AdminHotelEdit  ,meta:{ requiresAuth : true ,requiresAdmin: true }},
    {path: '/user/profile', component: ProfilePage  ,meta:{ requiresAuth : true,requiresUser: true }},
    {path:'/bookingform', component: BookingForm  ,meta:{ requiresAuth : true ,requiresUser: true ,requiresDirect: true}},
    {path:'/payment', component: PaymentPage  ,meta:{ requiresAuth : true,requiresUser: true,requiresDirect: true}},
    {path: '/createhotel', component: CreateHotel  ,meta:{ requiresAuth : true,requiresAdmin: true }},
    {path: '/:notFound(.*)',component: NotFound },
   ]
});
router.beforeEach(function(to,_,next)
{
   if (localStorage.token != null ) {
      store.commit('loginhogya');
     }

   if(to.meta.requiresAuth  && !store.getters.isauth )//if notauthenticated and still user wants to go to any page
   {

       next('/hotel');
   }
   else if(to.meta.requiresUnAuth  && store.getters.isauth )//if authenticated and still user wants to go to login page
   {
       next('/hotel');
       
   }
   else if(to.meta.requiresAccess  && store.getters.isauth )//if authenticated and still user wants to go to login page
   {
      if(localStorage.roleId==2)
      {
         next('/yourhotel');
      }
       if(localStorage.roleId==1)
       {
         next('/admin');
       }
       else
       {
         next();
       }
       
   }
   else if(to.meta.requiresAdmin && localStorage.roleId!=1)
   {
      if(localStorage.roleId==2)
      next('/yourhotel');
      else{
         next('/hotel');
      }
    
   }
   else if(to.meta.requiresHotel && localStorage.roleId!=2)
   {
      if(localStorage.roleId==1)
      next('/admin');
      else{
         next('/hotel');
      }
   }
   else if(to.meta.requiresUser && localStorage.roleId!=3)
   {
      if(localStorage.roleId==1)
      next('/admin');
      else{
         next('/yourhotel');
      }
   }
   // else if(to.meta.requiresDirect && localStorage.roleId==3)
   // {
   //    return false
   // }



   else{
      next();
   }
  
}
);
export default router;