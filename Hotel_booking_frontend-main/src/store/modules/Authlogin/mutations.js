export default {
    setUser(state, payload) {
      state.token = payload.token;
      state.userId = payload.userId;
      state.didAutoLogout = false;
    },
    setName(state,payload)
    {
      state.userName = payload.userName;
    },
    setAutoLogout(state) {
      state.didAutoLogout = true;
    },
     loginhogya(state)
     {
        state.isauth= true;
     },
     setapp(state,payload)
     {
         state.tokenId= payload.tokenId;
         state.userId= payload.userId;
         state.roleId= payload.roleId;
     },
     logout1(state)
     {
        state.isauth= false;
        state.tokenId= "";
         state.userId= "";
         state.roleId= "";
     },
    
  };