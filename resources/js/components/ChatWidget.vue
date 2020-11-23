<template>
    <!-- GRID COLUMN -->
    <div class="account-hub-content">
        <!-- SECTION HEADER -->
        <div class="section-header">
            <!-- SECTION HEADER INFO -->
            <div class="section-header-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">My Profile</p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Messages</h2>
                <!-- /SECTION TITLE -->
            </div>
            <!-- /SECTION HEADER INFO -->

            <!-- SECTION HEADER ACTIONS -->
            <div class="section-header-actions">
                <!-- SECTION HEADER ACTION -->
                <p class="section-header-action">Mark all as Read</p>
                <!-- /SECTION HEADER ACTION -->

                <!-- SECTION HEADER ACTION -->
                <p class="section-header-action">Settings</p>
                <!-- /SECTION HEADER ACTION -->
            </div>
            <!-- /SECTION HEADER ACTIONS -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- CHAT WIDGET WRAP -->
        <div class="chat-widget-wrap">
            <!-- CHAT WIDGET -->
            <div class="chat-widget static">
                <!-- CHAT WIDGET MESSAGES -->
                <div class="chat-widget-messages" data-simplebar>
                    <!-- CHAT WIDGET MESSAGE -->
                    <div class="chat-widget-message" v-for="(member, i) in members" :key="i" :class="member.id === currentUserId ? 'active' : ''" @click="selectChat(member)">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <div class="user-status-avatar">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
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
                            <p class="user-status-text">{{ member.status }}</p>
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
                        <input type="text" id="chat-widget-search-2" name="chat_widget_search_2" placeholder="Search Messages...">
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
            </div>
            <!-- /CHAT WIDGET -->

            <!-- CHAT WIDGET -->
            <div class="chat-widget" v-if="currentUser">
                <!-- CHAT WIDGET HEADER -->
                <div class="chat-widget-header">
                    <!-- CHAT WIDGET SETTINGS -->
                    <div class="chat-widget-settings">
                        <!-- POST SETTINGS WRAP -->
                        <div class="post-settings-wrap">
                            <!-- POST SETTINGS -->
                            <div class="post-settings widget-box-post-settings-dropdown-trigger">
                                <!-- POST SETTINGS ICON -->
                                <svg class="post-settings-icon icon-more-dots">
                                    <use xlink:href="#svg-more-dots"></use>
                                </svg>
                                <!-- /POST SETTINGS ICON -->
                            </div>
                            <!-- /POST SETTINGS -->

                            <!-- SIMPLE DROPDOWN -->
                            <div class="simple-dropdown widget-box-post-settings-dropdown">
                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Report</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Block</p>
                                <!-- /SIMPLE DROPDOWN LINK -->

                                <!-- SIMPLE DROPDOWN LINK -->
                                <p class="simple-dropdown-link">Mute</p>
                                <!-- /SIMPLE DROPDOWN LINK -->
                            </div>
                            <!-- /SIMPLE DROPDOWN -->
                        </div>
                        <!-- /POST SETTINGS WRAP -->
                    </div>
                    <!-- CHAT WIDGET SETTINGS -->

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
                        <p v-if="currentUser" class="user-status-title"><span class="bold">{{ currentUser.name }}</span></p>
                        <!-- /USER STATUS TITLE -->
                        <!-- USER STATUS TAG -->
                        <p v-if="currentUser" class="user-status-tag" :class="currentUser.online_status==='Online' ? 'online' : 'offline'">{{ currentUser.online_status }}</p>
                        <!-- /USER STATUS TAG -->
                    </div>
                    <!-- /USER STATUS -->
                </div>
                <!-- /CHAT WIDGET HEADER -->

                <!-- CHAT WIDGET CONVERSATION -->
                <div class="chat-widget-conversation" data-simplebar v-chat-scroll="{smooth: true}">
                    <transition-group name="conversation" tag="p">
                    <!-- CHAT WIDGET SPEAKER -->
                    <div class="chat-widget-speaker" v-for="(message,i) in messages" :key="message.id" :class="message.from_id === user.id ? 'right' : 'left'" v-if="(message.from_id !== user.id) || (message.from_id === user.id && message.deleted_by_me === 'False')">
                        <!-- CHAT WIDGET SPEAKER AVATAR -->
                        <div class="chat-widget-speaker-avatar">
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
                        <div class="message" :class="message.from_id === user.id ? 'from_me' : ''">
                            <span class="delete-message fa fa-trash" @click="softDelete(message)"></span>
                            <p class="chat-widget-speaker-message">{{ message.message }}</p>
                        </div>
                        
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                        <p class="chat-widget-speaker-timestamp">{{ message.created_at | moment("from") }}</p>
                        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                    </div>
                    <!-- /CHAT WIDGET SPEAKER -->
                    </transition-group>
                </div>
                <!-- /CHAT WIDGET CONVERSATION -->

                <!-- CHAT WIDGET FORM -->
                <form class="chat-widget-form" @submit.prevent="postChat">
                    <!-- FORM ROW -->
                    <div class="form-row split">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- INTERACTIVE INPUT -->
                            <div class="interactive-input small">
                                <input v-model="chatMessage" type="text" id="chat-widget-message-text-2" name="chat_widget_message_text_2" placeholder="Write a message...">
                                <!-- INTERACTIVE INPUT ICON WRAP -->
                                <div class="interactive-input-icon-wrap actionable">
                                    <!-- TOOLTIP WRAP -->
                                    <div class="tooltip-wrap text-tooltip-tft" data-title="Send Photo">
                                        <!-- INTERACTIVE INPUT ICON -->
                                        <svg class="interactive-input-icon icon-camera">
                                            <use xlink:href="#svg-camera"></use>
                                        </svg>
                                        <!-- /INTERACTIVE INPUT ICON -->
                                    </div>
                                    <!-- /TOOLTIP WRAP -->
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
                        </div>
                        <!-- /FORM ITEM -->

                        <!-- FORM ITEM -->
                        <div class="form-item auto-width">
                            <!-- BUTTON -->
                            <button class="button primary padded" :disabled="!canSend">
                                <!-- BUTTON ICON -->
                                <svg class="button-icon no-space icon-send-message">
                                    <use xlink:href="#svg-send-message"></use>
                                </svg>
                                <!-- /BUTTON ICON -->
                            </button>
                            <!-- /BUTTON -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->
                </form>
                <!-- /CHAT WIDGET FORM -->
            </div>
            <!-- /CHAT WIDGET -->
        </div>
        <!-- /CHAT WIDGET WRAP -->
    </div>
    <!-- /GRID COLUMN -->
</template>

<script>
import ChatService from "../ChatService";
import VueChatScroll from 'vue-chat-scroll';
import _ from 'lodash';
Vue.use(VueChatScroll);
export default {
    name: "ChatWidget",
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
            var channel = window.Echo.private(`ccr-${this.currentUser.id}-${this.user.id}`)
                .listen('ChatCreated', (e) => {
                    that.isSubscribed = true;
                    //If the current window open is the fromID
                    if(e.message.from_id === that.currentUser.id) {
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
                   ChatService.updateUnreadChats(e.message.from_id);
               }
            });
        },
        softDelete(message) {
            ChatService.softDelete(message.id)
            .then(response => {
                        if(response.code === 200) {
                            this.messages.splice(this.messages.indexOf(message), 1);
                        } else {
                            alert('Some error occurred');
                        }                        
                    }).catch(error => {
                    alert('Error in fetching data');
                    console.log(error);
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
                window.Echo.leaveChannel(`ccr-${this.currentUser.id}-${this.user.id}`);
            }
        },
        selectChat(member) {
            if(member) {
                //Leave current chat subscription event
                this.leaveCurrentUser();
                this.currentUser = member;
                this.currentUserId = this.currentUser.id;
                this.getSyncedUserChats();
                //this.syncIncomingEvents();
                ChatService.getUserChats({'from_id': this.currentUser.id, 'to_id': this.user.id})
                    .then(response => {
                        this.messages = response.data.chats;
                        ChatService.updateUnreadChats(this.currentUser.id, true);
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
        this.syncIncomingEvents();
    }
}
</script>

<style scoped>
    button:disabled, button[disabled], button:disabled:hover, button[disabled]:hover {
        background-color: dimgrey;
        box-shadow: none;
        cursor: not-allowed;
    }
    .delete-message {
        font-size: smaller;
        color: #808080;
        margin-right: 10px;
        display: none;
    }

    .from_me:hover .delete-message {
        display: inline-block;
    }
    .conversation-leave-active {
        transition: all 1s;
    }
    .conversation-leave-to {
        opacity:0;
        transform: translateY(30px);
    }

    
</style>
