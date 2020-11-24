<template>
    <!-- POST COMMENT LIST -->
    <div id="comments" class="post-comment-list">
        <div class="comment-single" v-for="(comment, i) in comments" :key="comment.id">
            <!-- POST COMMENT -->
            <div class="post-comment" v-if="comment.parent_comment_id === -1">
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="#">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <img class="hexagon-image-30-32" :src="comment.user.thumbnail" />
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
                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text"><a class="post-comment-text-author" href="#">{{ comment.user.name }}</a>{{comment.body}}</p>
                <!-- /POST COMMENT TEXT -->

                <!-- CONTENT ACTIONS -->
                <div class="content-actions">
                    <!-- CONTENT ACTION -->
                    <div class="content-action">
                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list reaction-item-list small">
                                <!-- REACTION ITEM -->
                                <div class="reaction-item">
                                    <!-- REACTION IMAGE -->
                                    <img class="reaction-image reaction-item-dropdown-trigger" :src="assets('/img/reaction/happy.png')" alt="reaction-happy">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" :src="assets('/img/reaction/happy.png')" alt="reaction-happy"> <span class="bold">Happy</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Marcus Jhonson</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->

                                <!-- REACTION ITEM -->
                                <div class="reaction-item">
                                    <!-- REACTION IMAGE -->
                                    <img class="reaction-image reaction-item-dropdown-trigger" :src="assets('/img/reaction/like.png')" alt="reaction-like">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" :src="assets('/img/reaction/like.png')" alt="reaction-like"> <span class="bold">Like</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Neko Bebop</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Nick Grissom</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Sarah Diamond</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">4</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LINK -->
                            <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                            <!-- /META LINE LINK -->

                            <!-- REACTION OPTIONS -->
                            <div class="reaction-options small reaction-options-small-dropdown">
                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Like">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/like.png')" alt="reaction-like">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Love">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/love.png')" alt="reaction-love">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/dislike.png')" alt="reaction-dislike">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/happy.png')" alt="reaction-happy">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/funny.png')" alt="reaction-funny">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/wow.png')" alt="reaction-wow">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/angry.png')" alt="reaction-angry">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/sad.png')" alt="reaction-sad">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->
                            </div>
                            <!-- /REACTION OPTIONS -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LINK -->
                            <p class="meta-line-link light" @click="selectParent(comment)">Reply</p>
                            <!-- /META LINE LINK -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE TIMESTAMP -->
                            <p class="meta-line-timestamp">{{ comment.created_at | moment("from") }}</p>
                            <!-- /META LINE TIMESTAMP -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line settings">
                            <!-- POST SETTINGS WRAP -->
                            <div class="post-settings-wrap">
                                <!-- POST SETTINGS -->
                                <div class="post-settings post-settings-dropdown-trigger">
                                    <!-- POST SETTINGS ICON -->
                                    <svg class="post-settings-icon icon-more-dots">
                                        <use xlink:href="#svg-more-dots"></use>
                                    </svg>
                                    <!-- /POST SETTINGS ICON -->
                                </div>
                                <!-- /POST SETTINGS -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown post-settings-dropdown">
                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link">Report Post</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /POST SETTINGS WRAP -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /CONTENT ACTION -->
                </div>
                <!-- /CONTENT ACTIONS -->
            </div>
            <!-- /POST COMMENT -->

            <!-- POST COMMENT -->
            <div class="post-comment unread reply-2" :replies="comment.replies" v-if="comment.replies" v-for="(reply, j) in comment.replies" :key="reply.id">
                <div class="reply-comment">

                </div>
                <!-- USER AVATAR -->
                <a class="user-avatar small no-outline" href="#">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" :data-src="reply.user.thumbnail"></div>
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

                </a>
                <!-- /USER AVATAR -->

                <!-- POST COMMENT TEXT -->
                <p class="post-comment-text"><a class="post-comment-text-author" href="#">{{ reply.user.name }}</a>{{reply.body}}</p>
                <!-- /POST COMMENT TEXT -->

                <!-- CONTENT ACTIONS -->
                <div class="content-actions">
                    <!-- CONTENT ACTION -->
                    <div class="content-action">
                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LIST -->
                            <div class="meta-line-list reaction-item-list small">
                                <!-- REACTION ITEM -->
                                <div class="reaction-item">
                                    <!-- REACTION IMAGE -->
                                    <img class="reaction-image reaction-item-dropdown-trigger" :src="assets('/img/reaction/like.png')" alt="reaction-like">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" :src="assets('/img/reaction/like.png')" alt="reaction-like"> <span class="bold">Like</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Neko Bebop</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->
                            </div>
                            <!-- /META LINE LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">1</p>
                            <!-- /META LINE TEXT -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE LINK -->
                            <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                            <!-- /META LINE LINK -->

                            <!-- REACTION OPTIONS -->
                            <div class="reaction-options small reaction-options-small-dropdown">
                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Like">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/like.png')" alt="reaction-like">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Love">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/love.png')" alt="reaction-love">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Dislike">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/dislike.png')" alt="reaction-dislike">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Happy">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/happy.png')" alt="reaction-happy">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Funny">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/funny.png')" alt="reaction-funny">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Wow">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/wow.png')" alt="reaction-wow">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Angry">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/angry.png')" alt="reaction-angry">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->

                                <!-- REACTION OPTION -->
                                <div class="reaction-option text-tooltip-tft" data-title="Sad">
                                    <!-- REACTION OPTION IMAGE -->
                                    <img class="reaction-option-image" :src="assets('/img/reaction/sad.png')" alt="reaction-sad">
                                    <!-- /REACTION OPTION IMAGE -->
                                </div>
                                <!-- /REACTION OPTION -->
                            </div>
                            <!-- /REACTION OPTIONS -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line">
                            <!-- META LINE TIMESTAMP -->
                            <p class="meta-line-timestamp">{{ reply.created_at | moment("from") }}</p>
                            <!-- /META LINE TIMESTAMP -->
                        </div>
                        <!-- /META LINE -->

                        <!-- META LINE -->
                        <div class="meta-line settings">
                            <!-- POST SETTINGS WRAP -->
                            <div class="post-settings-wrap">
                                <!-- POST SETTINGS -->
                                <div class="post-settings post-settings-dropdown-trigger">
                                    <!-- POST SETTINGS ICON -->
                                    <svg class="post-settings-icon icon-more-dots">
                                        <use xlink:href="#svg-more-dots"></use>
                                    </svg>
                                    <!-- /POST SETTINGS ICON -->
                                </div>
                                <!-- /POST SETTINGS -->

                                <!-- SIMPLE DROPDOWN -->
                                <div class="simple-dropdown post-settings-dropdown">
                                    <!-- SIMPLE DROPDOWN LINK -->
                                    <p class="simple-dropdown-link">Report Post</p>
                                    <!-- /SIMPLE DROPDOWN LINK -->
                                </div>
                                <!-- /SIMPLE DROPDOWN -->
                            </div>
                            <!-- /POST SETTINGS WRAP -->
                        </div>
                        <!-- /META LINE -->
                    </div>
                    <!-- /CONTENT ACTION -->
                </div>
                <!-- /CONTENT ACTIONS -->
            </div>
            <!-- /POST COMMENT -->
        </div>

        <!-- POST COMMENT FORM -->
        <div class="post-comment-form">
            <!-- USER AVATAR -->
            <div class="user-avatar small no-outline">
                <!-- USER AVATAR CONTENT -->
                <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <img class="hexagon-image-30-32" :src="user.thumbnail" />
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
            </div>
            <!-- /USER AVATAR -->

            <!-- FORM -->
            <form class="form" @submit.prevent="postComment">
                <!-- FORM ROW -->
                <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item" id="replyElement">
                        <!-- FORM INPUT -->
                        <div class="form-input small">
                            <label for="post-reply">Your Reply</label>
                            <input v-model="commentMessage" type="text" id="post-reply" name="post_reply">
                        </div>
                        <!-- /FORM INPUT -->
                    </div>
                    <!-- /FORM ITEM -->
                </div>
                <!-- /FORM ROW -->
            </form>
            <!-- /FORM -->
        </div>
        <!-- /POST COMMENT FORM -->
    </div>
    <!-- /POST COMMENT LIST -->
</template>

<script>
import ChatService from "../ChatService";
var Vue = require('vue');
var vueScrollTo = require('vue-scrollto');
Vue.use(vueScrollTo);
export default {
    name: "Comments",
    props: {
        blog: Object,
        user: Object,
    },
    data() {
        return {
            replingTo: null,
            parentCommentID: -1,
            comments: Array,
            commentMessage: ''
        };
    },
    methods: {
        resetData() {
          this.commentMessage = '';
          this.parentCommentID = -1;
        },
        selectParent(comment) {
          this.resetData();
          this.parentCommentID = comment.id;
          this.$scrollTo('#replyElement');
        },
        postComment() {
            if(this.commentMessage!=='') {
                let data = {
                    'blog_id': this.blog.id,
                    'comment': this.commentMessage,
                    'parent_comment_id': this.parentCommentID,
                    'user_id': this.user.id
                };
                console.log('Sending data', data);
                ChatService.postComment(data)
                    .then(response => {
                        console.info('Posted data');
                        console.log(response);
                        this.resetData();
                    }).catch(error => {
                    alert('Error in fetching data');
                    console.log(error);
                });
            }
        },
        getComments() {
            ChatService.getBlogComments({'blog_id': this.blog.id})
                .then(response => {
                    console.info('Got data');
                    console.log(response);
                    this.comments = response.data;
                }).catch(error => {
                alert('Error in fetching data');
                console.log(error);
            });
        }
    },
    computed: {
        canSend() {
            return (this.commentMessage.length>0 && this.commentMessage!== '');
        }
    },
    mounted() {
        this.getComments();
    }
}
</script>

<style scoped>
.hexagon-image-30-32 {
    max-width: 100% !important;
}
</style>
