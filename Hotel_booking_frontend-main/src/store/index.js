import {createStore} from 'vuex';
import hotelsModule from './modules/hotels/index.js'
import AuthloginModule from'./modules/Authlogin/index.js'

const store = createStore({
    modules:
    {
        hotels: hotelsModule,
         auth: AuthloginModule
    }
});

export default store;
