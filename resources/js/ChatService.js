import { HTTP } from './axios';

export default {
    getCountries() {
        return new Promise((resolve, reject) => {
            let url = "chats";
            HTTP.get(url)
                .then((response) => {
                    if(response.data.success) {
                        resolve(response.data.data);
                    } else {
                        reject(response.data.message);
                    }
                })
        }).catch(err => {

            console.log('Error in fetching data');
        })
    },

    /*
    Post a new chat (from) user (to) user
     */

    postChat(data) {
        const headers = {
            'Content-Type': 'application/json'
        };
        return new Promise((resolve, reject) => {
            let url = '/chat/post-chat';
            HTTP.post(url, data, {headers})
                .then((response) => {
                    console.log(response);
                })
        }).catch(err => {
            console.log(err);
            console.log('Error in getting data');
        })
    },

    /*
    Get conversation with a user
     */
    getUserChats(data) {
        const headers = {
            'Content-Type': 'application/json'
        };
        return new Promise((resolve, reject) => {
            let url = "get-chats";
            HTTP.post(url, data, {headers})
                .then((response) => {
                    console.log(response);
                    if(response.data.success) {
                        resolve(response.data.data);
                    } else {
                        reject(response.data.message);
                    }
                })
        }).catch(err => {
            console.log(err);
            console.log('Error in getting data');
        })
    },
}
