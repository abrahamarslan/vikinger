<script>
import ChatService from "../ChatService";
import Paginate from 'vuejs-paginate';
var Vue = require('vue');
var vueScrollTo = require('vue-scrollto');
Vue.use(vueScrollTo);
Vue.component('paginate', Paginate);
export default {
    name: "Thread",
    props: {
        user: Object,
        post: Object,
        freplies: Object
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
        resetComment() {
            this.commentMessage = '';
        },
        resetData() {
          this.commentMessage = '';
          this.parentCommentID = -1;
        },
        selectParent(comment) {
            console.log(comment);
          this.resetData();
          this.parentCommentID = comment.id;
          this.$scrollTo('#replyElement');
        },
        postComment() {
            if(this.commentMessage!=='') {
                let data = {
                    'is_reply': 1,
                    'is_reply_id': this.parentCommentID,
                    'body': this.commentMessage,
                    'post_id': this.post.id,
                    'user_id': this.user.id
                };
                ChatService.postForumReply(data)
                    .then(response => {
                        alert('Posted');
                        this.resetData();
                        location.reload();
                    }).catch(error => {
                    alert('Error in fetching data');
                    console.log(error);
                });
            }
        },
         postReport(post, type) {
            if(this.commentMessage!=='') {
                let data = {
                    'post_id': post.id,
                    'post_type': type                    
                };
                ChatService.postForumReport(data)
                    .then(response => {
                        alert('Reported');
                        this.resetData();
                    }).catch(error => {
                    alert('Error in fetching data');
                    console.log(error);
                });
            }
        },
        getComments() {
            
        }
    },
    computed: {
        canSend() {
            return (this.commentMessage.length>0 && this.commentMessage!== '');
        }
    },
    mounted() {
        console.log(this.freplies);

    }
}
</script>

<style scoped>
.hexagon-image-30-32 {
    max-width: 100% !important;
}
.post-comment .user-avatar {
    top: 15px !important;
}
.post-comment-form .user-avatar {
    top: 15px !important;
}
.user-avatar.no-outline.small .user-avatar-content {
    top: 0 !important;
}
</style>
