import mutations from './mutations.js';
import actions from './actions.js';
import getters from './getters.js';

export default {
 
  state() {
    return {
      hotelid:'',
      amount:'',
      arival : "",
      departure: "",
      message: "",
      numberofroomtype1: "",
      numberofroomtype2: "",
      numberofroomtype3: "",
      user_id:localStorage.userId,

    };
  },
  mutations,
  actions,
  getters
};
