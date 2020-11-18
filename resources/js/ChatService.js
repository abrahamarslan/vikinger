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

    updateUnreadChats(userID, reset = false) {
        let currentUnreadChats = parseInt(document.getElementById('unread-'+userID).innerText);
        if(isNaN(currentUnreadChats)) {
            currentUnreadChats = 0;
        }
        if(!reset) {
            currentUnreadChats += 1;
        } else {
            currentUnreadChats = 0;
        }
        document.getElementById('unread-'+userID).innerHTML = currentUnreadChats;
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
                let url = '/chat/online/' + user.id
                HTTP.post(url);
            })
            .leaving((user) => {
                let url = '/chat/offline/' + user.id
                HTTP.post(url);
            });
    },

    softDelete(messageID) {
        const headers = {
            'Content-Type': 'application/json'
        };
        return new Promise((resolve, reject) => {
            let url = '/chat/destroy/'+messageID;
            HTTP.post(url)
                .then((response) => {
                    if(response.data.code===200) {
                        resolve(response.data);
                    } else {
                        reject(response.data.message);
                    }
                })
        }).catch(err => {
            console.log(err);
            console.log('Error in getting data');
        })
    }
}
