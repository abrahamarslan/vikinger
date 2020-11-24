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
                        <img class="hexagon-image-30-32" :src="reply.user.thumbnail" />
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
                            <!-- META LINE TIMESTAMP -->
                            <p class="meta-line-timestamp">{{ reply.created_at | moment("from") }}</p>
                            <!-- /META LINE TIMESTAMP -->
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
                ChatService.postComment(data)
                    .then(response => {
                        this.getComments();
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
