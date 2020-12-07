import axios from "axios";
export const HTTP = axios.create({
    //prod
    //baseURL: `http://172.105.56.201/v1-api/`,
    //dev
    baseURL: `http://vik.com/v1-api/`,
});
