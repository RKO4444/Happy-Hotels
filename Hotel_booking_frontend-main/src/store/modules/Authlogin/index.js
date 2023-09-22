import mutations from './mutations.js';
import actions from './actions.js';
import getters from './getters.js';

export default {
  state() {
    return {
      userId: localStorage.userId,
      tokenId: null,
      roleId: null,
      userName: null,
      didAutoLogout: false,
      isauth: false,
      student: {
        api_token : localStorage.token,
        role_id: localStorage.role_id,
      },
    };
  },
  mutations,
  actions,
  getters
};