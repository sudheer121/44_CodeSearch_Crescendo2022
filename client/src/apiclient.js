import axios from 'axios';
import {userMaps, setUserData} from "./helpers";

export const apiClient = axios.create({
  baseURL: 'http://localhost:8000',
  withCredentials: true,
});

export const loginClient = (email, password) => {
  const data = userMaps[email];
  if(!data) {
    return {
      error: 'Invalid username or password'
    }
  }
  const obj = {
    email: email,
    // password: password,
    role: data.role,
    name: data.name
  };
  setUserData(obj);
  return obj;

  //
  // let res = await apiClient.get('/sanctum/csrf-cookie');
  // console.log(res.data);
  // return await res.data;
}
//
// module.exports = {
//   apiClient,
//   loginClient
// };
