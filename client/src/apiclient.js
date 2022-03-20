import axios from 'axios';
import {userMaps, setUserData, baseRoute, getUserData} from "./helpers";

export const apiClient = axios.create({
  baseURL: baseRoute,
  // withCredentials: true,
});

export const getPets = async () => {
  let res = await apiClient.get('/pets');
  return res.data;
};

export const getOrgPets = async () => {
  const email = getUserData().email;
  let res = await apiClient.get(`/pets/org/${email}`);
  return res.data;
}

export const getPet = async (id) => {
  let res = await apiClient.get(`/pets/${id}`);
  return res.data;
};

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
