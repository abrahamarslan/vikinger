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
                    if(response.data.code===200) {
                        resolve(response.data);
                    } else {
                        reject(response.data.data.message);
                    }
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
            let url = '/chat/get-chats';
            HTTP.post(url, data, {headers})
                .then((response) => {
                    if(response.data.code===200) {
                        resolve(response.data);
                    } else {
                        reject(response.data.data.message);
                    }
                })
        }).catch(err => {
            console.log(err);
            console.log('Error in getting data');
        })
    },

    /*
    Get online users
     */
    getOnlineUsers() {
        const headers = {
            'Content-Type': 'application/json'
        };
        Echo.join('online-now')
            .joining((user) => {
                console.log('Joined', user);
                let url = '/chat/online/' + user.id
                HTTP.post(url);
            })
            .leaving((user) => {
                console.log('Leaving', user);
                let url = '/chat/offline/' + user.id
                HTTP.post(url);
            })
            .listen('UserIsOnline', (e) => {
                console.log('Online', e);
            })
            .listen('UserIsOffline', (e) => {
                console.log('Offline',e);
            });
    }
}
