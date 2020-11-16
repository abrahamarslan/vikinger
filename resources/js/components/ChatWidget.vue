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
                                        <p class="user-avatar-badge-text">6</p>
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

                            <!-- USER STATUS TIMESTAMP -->
                            <p class="user-status-timestamp floaty">2 hours ago</p>
                            <!-- /USER STATUS TIMESTAMP -->
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
                            <div class="user-avatar small no-outline online">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <img class="hexagon-image-30-32" :src="currentUser.thumbnail"></img>
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
                                    <p class="user-avatar-badge-text">16</p>
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
                <div class="chat-widget-conversation" data-simplebar>
                    <!-- CHAT WIDGET SPEAKER -->
                    <div class="chat-widget-speaker left">
                        <!-- CHAT WIDGET SPEAKER AVATAR -->
                        <div class="chat-widget-speaker-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar tiny no-border">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-24-26" :data-src="currentUser.thumbnail"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /CHAT WIDGET SPEAKER AVATAR -->

                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                        <p class="chat-widget-speaker-message">Hi Marina! It's been a long time!</p>
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                        <p class="chat-widget-speaker-timestamp">Yesterday at 8:36PM</p>
                        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                    </div>
                    <!-- /CHAT WIDGET SPEAKER -->

                    <!-- CHAT WIDGET SPEAKER -->
                    <div class="chat-widget-speaker right">
                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                        <p class="chat-widget-speaker-message">Hey Nick!</p>
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                        <p class="chat-widget-speaker-message">You're right, it's been a really long time! I think the last time we saw was at Neko's party</p>
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                        <!-- CHAT WIDGET SPEAKER TIMESTAMP -->
                        <p class="chat-widget-speaker-timestamp">10:05AM</p>
                        <!-- /CHAT WIDGET SPEAKER TIMESTAMP -->
                    </div>
                    <!-- /CHAT WIDGET SPEAKER -->f

                    <!-- CHAT WIDGET SPEAKER -->
                    <div class="chat-widget-speaker left">
                        <!-- CHAT WIDGET SPEAKER AVATAR -->
                        <div class="chat-widget-speaker-avatar">
                            <!-- USER AVATAR -->
                            <div class="user-avatar tiny no-border">
                                <!-- USER AVATAR CONTENT -->
                                <div class="user-avatar-content">
                                    <!-- HEXAGON -->
                                    <div class="hexagon-image-24-26" :data-src="currentUser.thumbnail"></div>
                                    <!-- /HEXAGON -->
                                </div>
                                <!-- /USER AVATAR CONTENT -->
                            </div>
                            <!-- /USER AVATAR -->
                        </div>
                        <!-- /CHAT WIDGET SPEAKER AVATAR -->

                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                        <p class="chat-widget-speaker-message">Yeah! I remember now! The stream launch party</p>
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                        <p class="chat-widget-speaker-message">That reminds me that I wanted to ask you something</p>
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->

                        <!-- CHAT WIDGET SPEAKER MESSAGE -->
                        <p class="chat-widget-speaker-message">Can you stream the new game?</p>
                        <!-- /CHAT WIDGET SPEAKER MESSAGE -->
                    </div>
                    <!-- /CHAT WIDGET SPEAKER -->
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
            messages: []
        };
    },
    methods: {
        clearData() {
          this.chatMessage = '';
        },
        postChat() {
            if(this.chatMessage!=='') {
                let data = {
                    'message': this.chatMessage,
                    'from_id': this.user.id,
                    'to_id': this.currentUserId
                };
                ChatService.postChat(data)
                    .then(response => {
                        console.log('Success');
                        console.log(response);
                    }).catch(error => {
                    console.log('Error');
                    console.log(error);
                });
            }

        },
        selectChat(member) {
            console.log('Selected Member', member);
            this.currentUser = member;
            this.currentUserId = this.currentUser.id;
        },

    },
    computed: {
      canSend() {
          return (this.chatMessage.length>0 && this.chatMessage!== '');
      }
    },
    mounted() {
        this.currentUser = this.members[0];
        this.currentUserId = this.currentUser.id;
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
