import axios from "axios";
export const HTTP = axios.create({
    baseURL: `http://vik.com/v1-api/`,
});
