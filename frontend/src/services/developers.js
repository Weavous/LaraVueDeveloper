import { http } from "./http.js";

export default {
  index: () => { return http.get(`/developers`); }
};