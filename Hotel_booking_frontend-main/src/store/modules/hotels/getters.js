export default {
  hotelid(state) {
    return state.hotelid;
  },
  amount(state) {
    return state.amount;
  },
  arival(state) {
    return state.arival;
  },
  departure(state) {
    return state.departure;
  },
  message(state) {
    return state.message;
  },
  numberofroomtype1(state) {
    return state.numberofroomtype1;
  },
  numberofroomtype2(state) {
    return state.numberofroomtype2;
  },
  numberofroomtype3(state) {
    return state.numberofroomtype3;
  },
  user_id(state) {
    return state.user_id;
  },

  hasHotels(state) {
    return state.hotels && state.hotels.length > 0;
  },
  isCoach(_, getters, _2, rootGetters) {
    const hotels = getters.hotels;
    const userId = rootGetters.userId;
    return hotels.some(hotel => hotel.id === userId);
  }
};