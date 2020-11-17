<template>
    <div>
        <!-- CHAT WIDGET -->
        <aside id="chat-widget-messages" class="chat-widget closed sidebar right">
            <!-- CHAT WIDGET MESSAGES -->
            <div class="chat-widget-messages" data-simplebar>
                <!-- CHAT WIDGET MESSAGE -->
                <div class="chat-widget-message" v-for="(member, i) in members" :key="i" :class="member.id === currentUserId ? 'active' : ''" @click="selectChat(member)">
                    <!-- USER STATUS -->
                    <div class="user-status">
                        <!-- USER STATUS AVATAR -->
                        <div class="user-status-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar small no-outline" :class="member.online_status==='Online' ? 'online' : 'offline'">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-30-32" :data-src="member.thumbnail"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->

                                <!-- USER AVATAR PROGRESS -->
                                <div class="user-avatar-progress">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-progress-40-44"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS -->

                                <!-- USER AVATAR PROGRESS BORDER -->
                                <div class="user-avatar-progress-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-border-40-44"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR PROGRESS BORDER -->

                                <!-- USER AVATAR BADGE -->
                                <div class="user-avatar-badge">
                                    <!-- USER AVATAR BADGE BORDER -->
                                    <div class="user-avatar-badge-border">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-22-24"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE BORDER -->

                                    <!-- USER AVATAR BADGE CONTENT -->
                                    <div class="user-avatar-badge-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-dark-16-18"></div>
                                        <!-- /HEXAGON -->
                                    </div>
                                    <!-- /USER AVATAR BADGE CONTENT -->

                                    <!-- USER AVATAR BADGE TEXT -->
                                    <p class="user-avatar-badge-text" :id="'unread-' + member.id">0</p>
                                    <!-- /USER AVATAR BADGE TEXT -->
                                </div>
                                <!-- /USER AVATAR BADGE -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /USER STATUS AVATAR -->

                        <!-- USER STATUS TITLE -->
                        <p class="user-status-title"><span class="bold">{{ member.name }}</span></p>
                        <!-- /USER STATUS TITLE -->

                        <!-- USER STATUS TEXT -->
                        <p class="user-status-text small">{{ member.status }}</p>
                        <!-- /USER STATUS TEXT -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET MESSAGE -->
            </div>
            <!-- /CHAT WIDGET MESSAGES -->

            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form">
                <!-- INTERACTIVE INPUT -->
                <div class="interactive-input small">
                    <input type="text" id="chat-widget-search" name="chat_widget_search" placeholder="Search Messages...">
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap">
                        <!-- INTERACTIVE INPUT ICON -->
                        <svg class="interactive-input-icon icon-magnifying-glass">
                            <use xlink:href="#svg-magnifying-glass"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->

                    <!-- INTERACTIVE INPUT ACTION -->
                    <div class="interactive-input-action">
                        <!-- INTERACTIVE INPUT ACTION ICON -->
                        <svg class="interactive-input-action-icon icon-cross-thin">
                            <use xlink:href="#svg-cross-thin"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ACTION ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ACTION -->
                </div>
                <!-- /INTERACTIVE INPUT -->
            </form>
            <!-- /CHAT WIDGET FORM -->

            <!-- CHAT WIDGET BUTTON -->
            <div class="chat-widget-button">
                <!-- CHAT WIDGET BUTTON ICON -->
                <div class="chat-widget-button-icon">
                    <!-- BURGER ICON -->
                    <div class="burger-icon">
                        <!-- BURGER ICON BAR -->
                        <div class="burger-icon-bar"></div>
                        <!-- /BURGER ICON BAR -->

                        <!-- BURGER ICON BAR -->
                        <div class="burger-icon-bar"></div>
                        <!-- /BURGER ICON BAR -->

                        <!-- BURGER ICON BAR -->
                        <div class="burger-icon-bar"></div>
                        <!-- /BURGER ICON BAR -->
                    </div>
                    <!-- /BURGER ICON -->
                </div>
                <!-- /CHAT WIDGET BUTTON ICON -->

                <!-- CHAT WIDGET BUTTON TEXT -->
                <p class="chat-widget-button-text">Messages / Chat</p>
                <!-- /CHAT WIDGET BUTTON TEXT -->
            </div>
            <!-- /CHAT WIDGET BUTTON -->
        </aside>
        <!-- /CHAT WIDGET -->



        <!-- CHAT WIDGET -->
        <aside id="chat-widget-message" class="chat-widget chat-widget-overlay hidden sidebar right" v-if="currentUser">
            <!-- CHAT WIDGET HEADER -->
            <div class="chat-widget-header">
                <!-- CHAT WIDGET CLOSE BUTTON -->
                <div class="chat-widget-close-button">
                    <!-- CHAT WIDGET CLOSE BUTTON ICON -->
                    <svg class="chat-widget-close-button-icon icon-back-arrow">
                        <use xlink:href="#svg-back-arrow"></use>
                    </svg>
                    <!-- CHAT WIDGET CLOSE BUTTON ICON -->
                </div>
                <!-- /CHAT WIDGET CLOSE BUTTON -->

                <!-- USER STATUS -->
                <div class="user-status">
                    <!-- USER STATUS AVATAR -->
                    <div class="user-status-avatar">
                        <!-- USER AVATAR -->
                        <div class="user-avatar small no-outline" :class="currentUser.online_status==='Online' ? 'online' : 'offline'">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <img class="hexagon-image-30-32" :src="currentUser.thumbnail" />
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->

                            <!-- USER AVATAR PROGRESS -->
                            <div class="user-avatar-progress">
                                <!-- HEXAGON -->
                                <div class="hexagon-progress-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS -->

                            <!-- USER AVATAR PROGRESS BORDER -->
                            <div class="user-avatar-progress-border">
                                <!-- HEXAGON -->
                                <div class="hexagon-border-40-44"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR PROGRESS BORDER -->

                            <!-- USER AVATAR BADGE -->
                            <div class="user-avatar-badge">
                                <!-- USER AVATAR BADGE BORDER -->
                                <div class="user-avatar-badge-border">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-22-24"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE BORDER -->

                                <!-- USER AVATAR BADGE CONTENT -->
                                <div class="user-avatar-badge-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-dark-16-18"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR BADGE CONTENT -->

                                <!-- USER AVATAR BADGE TEXT -->
                                <p class="user-avatar-badge-text">0</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /USER STATUS AVATAR -->

                    <!-- USER STATUS TITLE -->
                    <p class="user-status-title"><span class="bold">{{ currentUser.name }}</span></p>
                    <!-- /USER STATUS TITLE -->

                    <!-- USER STATUS TAG -->
                    <p class="user-status-tag online" :class="currentUser.online_status==='Online' ? 'online' : 'offline'">{{ currentUser.online_status }}</p>
                    <!-- /USER STATUS TAG -->
                </div>
                <!-- /USER STATUS -->
            </div>
            <!-- /CHAT WIDGET HEADER -->

            <!-- CHAT WIDGET CONVERSATION -->
            <div class="chat-widget-conversation" data-simplebar v-chat-scroll="{smooth: true}">
                <!-- CHAT WIDGET SPEAKER -->
                <div class="chat-widget-speaker" v-for="(message,i) in messages" :key="i" :class="message.from_id === user.id ? 'right' : 'left'">
                    <!-- CHAT WIDGET SPEAKER AVATAR -->
                    <div class="chat-widget-speaker-avatar" v-if="message.from_id === currentUser.id">
                        <!-- USER AVATAR -->
                        <div class="user-avatar tiny no-border">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-24-26" :data-src="message.from_id === user.id ? user.thumbnail : currentUser.thumbnail"></div>
                                <!-- /HEXAGON -->
                            </div>
                            <!-- /USER AVATAR CONTENT -->
                        </div>
                        <!-- /USER AVATAR -->
                    </div>
                    <!-- /CHAT WIDGET SPEAKER AVATAR -->

                    <!-- CHAT WIDGET SPEAKER MESSAGE -->
                    <p class="chat-widget-speaker-message">{{ message.message }}</p>
                    <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                    <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                    <p class="chat-widget-speaker-timestamp">{{ message.created_at | moment("from") }}</p>
                    <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                </div>
                <!-- /CHAT WIDGET SPEAKER -->
            </div>
            <!-- /CHAT WIDGET CONVERSATION -->

            <!-- CHAT WIDGET FORM -->
            <form class="chat-widget-form" @submit.prevent="postChat">
                <!-- INTERACTIVE INPUT -->
                <div class="interactive-input small">
                    <input v-model="chatMessage" type="text" id="chat-widget-message-text" name="chat_widget_message_text" placeholder="Write a message...">
                    <!-- INTERACTIVE INPUT ICON WRAP -->
                    <div class="interactive-input-icon-wrap">
                        <!-- INTERACTIVE INPUT ICON -->
                        <svg class="interactive-input-icon icon-send-message">
                            <use xlink:href="#svg-send-message"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ICON WRAP -->

                    <!-- INTERACTIVE INPUT ACTION -->
                    <div class="interactive-input-action">
                        <!-- INTERACTIVE INPUT ACTION ICON -->
                        <svg class="interactive-input-action-icon icon-cross-thin">
                            <use xlink:href="#svg-cross-thin"></use>
                        </svg>
                        <!-- /INTERACTIVE INPUT ACTION ICON -->
                    </div>
                    <!-- /INTERACTIVE INPUT ACTION -->
                </div>
                <!-- /INTERACTIVE INPUT -->
            </form>
            <!-- /CHAT WIDGET FORM -->
        </aside>
        <!-- /CHAT WIDGET -->
    </div>


</template>

<script>
import ChatService from "../ChatService";
import VueChatScroll from 'vue-chat-scroll';
import _ from 'lodash';
Vue.use(VueChatScroll);
export default {
    name: "ChatBar",
    props: {
        user: Object,
        members: Array
    },
    data() {
        return {
            chatMessage: '',
            currentUser: null,
            currentUserId: 0,
            message: '',
            messages: [],
            isSubscribed: false
        };
    },
    methods: {
        clearData() {
            this.chatMessage = '';
        },

        getOnlineStatus() {
          let that = this;
          Echo.join('online-now')
              .listen('UserIsOnline', (e) => {
                  let indexOfMember = _.findIndex(that.members, (m) => {return m.id === e.user.id});
                  if(indexOfMember !== -1) {
                      that.$set(that.members[indexOfMember], 'online_status', 'Online');
                  }
                  if(that.currentUser.id === e.user.id) {
                      that.currentUser.online_status = 'Online';
                  }
              })
              .listen('UserIsOffline', (e) => {
                  let indexOfMember = _.findIndex(that.members, (m) => {return m.id === e.user.id});
                  if(indexOfMember !== -1) {
                      e.user.online_status = 'Offline';
                      that.$set(that.members[indexOfMember], 'online_status', 'Offline');
                  }
                  if(that.currentUser.id === e.user.id) {
                      that.currentUser.online_status = 'Offline';
                  }
              });
        },

        getSyncedUserChats() {
            let that = this;
            var channel = window.Echo.private(`ccr-bar-${this.currentUser.id}-${this.user.id}`)
                .listen('ChatCreatedBar', (e) => {
                    that.isSubscribed = true;
                    console.log('Event', e);
                    //If the current window open is the fromID
                    if(e.message.from_id === that.currentUser.id) {
                        let hasMessage = that.messages.filter(m => {
                            return m.id !== e.message.message.id;
                        });
                        that.messages = hasMessage;
                        that.messages.push(e.message.message);
                    } else {
                        let currentUnreadChats = parseInt(document.getElementById('unread-'+e.message.from_id)).innerText;
                        currentUnreadChats += 1;
                        document.getElementById('unread-'+e.message.from_id).innerHTML = currentUnreadChats;
                    }
                });
        },
        syncIncomingEvents() {
            let that = this;
            var syncedEvents = window.Echo.private(`cto-${this.user.id}`)
                .listen('MessageToUser', (e) => {
                    if(e.message.from_id === that.currentUser.id) {
                        // Already handled
                    }  else {
                        let currentUnreadChats = parseInt(document.getElementById('unread-'+e.message.from_id).innerText);
                        console.log(currentUnreadChats);
                        currentUnreadChats += 1;
                        document.getElementById('unread-'+e.message.from_id).innerHTML = currentUnreadChats;
                    }
                });
        },
        postChat() {
            if(this.chatMessage!=='') {
                let data = {
                    'message': this.chatMessage,
                    'from_id': this.user.id,
                    'to_id': this.currentUserId
                };
                console.log('Sending data', data);
                ChatService.postChat(data)
                    .then(response => {
                        this.messages.push(response.data);
                        this.clearData();
                    }).catch(error => {
                    alert('Error in fetching data');
                    console.log(error);
                });
            }

        },
        leaveAllSubscriptions() {
          window.Echo.leave(`cto-${this.user.id}`);
            window.Echo.leave(`online-now`);
        },
        leaveCurrentUser() {
            if(this.isSubscribed) {
                window.Echo.leave(`ccr-bar-${this.currentUser.id}-${this.user.id}`);
            }
        },
        selectChat(member) {
            if(member) {
                //Leave current chat subscription event
                this.leaveCurrentUser();
                this.currentUser = member;
                this.currentUserId = this.currentUser.id;
                this.getSyncedUserChats();
                ChatService.getUserChats({'from_id': this.currentUser.id, 'to_id': this.user.id})
                    .then(response => {
                        this.messages = response.data.chats;
                    }).catch(error => {
                    alert('Error in fetching data');
                    console.log(error);
                });
            }
        },

    },
    computed: {
        canSend() {
            return (this.chatMessage.length>0 && this.chatMessage!== '');
        }
    },
    mounted() {
        this.leaveAllSubscriptions();
        this.selectChat(this.members[0]);
        ChatService.getOnlineUsers();
        this.getOnlineStatus();
    }
}
</script>

<style scoped>
button:disabled, button[disabled], button:disabled:hover, button[disabled]:hover {
    background-color: dimgrey;
    box-shadow: none;
    cursor: not-allowed;
}
</style>
