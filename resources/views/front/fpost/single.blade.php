@extends('_layouts.layout')
@section('title', $post->title)
<style type="text/css">
    <!-- Projelerimiz Anasayfa -->
    .card{box-shadow:2px 2px 20px rgba(0,0,0,0.3); border:none; margin-bottom:30px;}
    .card-01 .badge-box{position:absolute; top:-20px; left:50%; width:100px; height:100px;margin-left:-50px; text-align:center;}
    .card-01 .badge-box i{background:#DFC717; color:#fff; border-radius:50%;  width:50px; height:50px; line-height:50px; text-align:center; font-size:20px;}
    .card-01.height-fix{height:300px; overflow:hidden;}
    .card-01.height-fix .card-img-top{width:auto!important;}

    .card-01.height-fix .card-img-overlay{top:unset; color:#fff;
        background: -moz-linear-gradient(top, rgba(26,96,111,0) 0%, rgba(26,96,111,0) 1%, rgba(24,87,104,0.91) 31%, rgba(21,65,89,0.91) 100%); /* FF3.6-15 */
        background: -webkit-linear-gradient(top, rgba(26,96,111,0) 0%,rgba(26,96,111,0) 1%,rgba(24,87,104,0.91) 31%,rgba(21,65,89,0.91) 100%); /* Chrome10-25,Safari5.1-6 */
        background: linear-gradient(to bottom, rgba(26,96,111,0) 0%,rgba(26,96,111,0) 1%,rgba(24,87,104,0.91) 31%,rgba(21,65,89,0.91) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#001a606f', endColorstr='#e8154159',GradientType=0 );
    }
    <!-- Projelerimiz Anasayfa -->

</style>
@section('content')

    <div class="content-grid">

    <!-- SECTION BANNER -->
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{!! asset('theme/img/banner/forums-icon.png') !!}" alt="forums-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">{!! $topic->title !!} | Discussions</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">{!! $topic->description !!}</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

   
   <div class="row">
    <hr/>
   </div>

   <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Forum Discussion</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title pinned">{!! $post->title !!}</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->
    <thread inline-template :user='@json($user)' :postID='{!! $post->id !!}}'>
      <div>
        <div class="section-filters-bar v7">
          <div class="section-filters-bar-actions">
            <div class="section-filters-bar-info">
              <p class="section-filters-bar-title">
              <a href="{!! route('forum.category.index') !!}">Forums</a><span class="separator"></span>
              <a href="{!! route('forum.topic.index', $topic->category()->first()->id ) !!}">{!! $topic->category()->first()->title !!}</a><span class="separator"></span>
              <a href="{!! route('forum.post.index', $topic->id) !!}">{!! $topic->title !!}</a>
                <span class="separator"></span>
                <a href="#">{!! $post->title !!}</a>
              </p>
                @if(isset($last_reply))
                <div class="section-filters-bar-text small-space">
                Last post by
                <a class="user-avatar micro no-stats" href="{!! route('blog.index', $last_reply->user()->first()->id) !!}">
                  <div class="user-avatar-border">
                    <div class="hexagon-22-24"></div>
                  </div>
                  <div class="user-avatar-content">
                    <div class="hexagon-image-18-20" data-src="{!! $last_reply->user()->first()->thumbnail !!}"></div>
                  </div>
                </a>
                <a class="bold" href="{!! route('blog.index', $last_reply->user()->first()->id) !!}">{!! $last_reply->user()->first()->name !!}</a>
                {!! date('d M, yy', strtotime($last_reply->created_at)) !!}
                @endif
              </div>
            </div>
        </div>

        <div class="grid grid-9-3">
          <div class="forum-content">
            <div class="forum-post-header">
              <p class="forum-post-header-title">Author</p>      
              <p class="forum-post-header-title">Post</p>
            </div>
      
            <div class="forum-post-list">
              <div class="forum-post">
                <div class="forum-post-meta">
                  <p class="forum-post-timestamp">{!! date('d M, Y', strtotime($post->created_at)) !!}</p>
                    <div class="forum-post-actions">
                    <p class="forum-post-action light" @click="postReport(post, 'post')">Report</p>
                    <p class="forum-post-action" @click="selectParent(post)">Reply</p>
                  </div>
                </div>
            
                <div class="forum-post-content">
                  <div class="forum-post-user">
                    <a class="user-avatar no-outline" href="{!! route('blog.index', $post->user()->first()->id) !!}">
                      <div class="user-avatar-content">
                        <div class="hexagon-image-68-74" data-src="{!! $post->user()->first()->thumbnail !!}"></div>
                      </div>
                  
                      <div class="user-avatar-progress">
                        <div class="hexagon-progress-84-92"></div>
                      </div>
                  
                      <div class="user-avatar-progress-border">
                        <div class="hexagon-border-84-92"></div>
                      </div>
                  
                      <div class="user-avatar-badge">
                        <div class="user-avatar-badge-border">
                          <div class="hexagon-28-32"></div>
                        </div>
                  
                        <div class="user-avatar-badge-content">
                          <div class="hexagon-dark-22-24"></div>
                        </div>
                  
                        <p class="user-avatar-badge-text">26</p>
                      </div>
                    </a>
            
                    <a class="user-avatar small no-outline" href="{!! route('blog.index', $post->user()->first()->id) !!}">
                      <div class="user-avatar-content">
                        <div class="hexagon-image-30-32" data-src="{!! $post->user()->first()->thumbnail !!}"></div>
                      </div>
                  
                      <div class="user-avatar-progress">
                        <div class="hexagon-progress-40-44"></div>
                      </div>
                  
                      <div class="user-avatar-progress-border">
                        <div class="hexagon-border-40-44"></div>
                      </div>
                  
                      <div class="user-avatar-badge">
                        <div class="user-avatar-badge-border">
                          <div class="hexagon-22-24"></div>
                        </div>
                  
                        <div class="user-avatar-badge-content">
                          <div class="hexagon-dark-16-18"></div>
                        </div>
                  
                        <p class="user-avatar-badge-text">26</p>
                      </div>
                    </a>
                    
                    <p class="forum-post-user-title"><a href="profile-timeline.html">{!! $post->user()->first()->name !!}</a></p>
                    <!-- /FORUM POST USER TITLE -->
            
                    <!-- FORUM POST USER TITLE -->
                    <p class="forum-post-user-text"><a href="profile-timeline.html">{!! '@' . $post->user()->first()->username !!}</a></p>
                    <!-- /FORUM POST USER TITLE -->
            
                    <!-- FORUM POST USER TAG -->
                    <p class="forum-post-user-tag organizer">Organizer</p>
                    <!-- /FORUM POST USER TAG -->
                  </div>
                  <!-- /FORUM POST USER -->
            
                  <!-- FORUM POST INFO -->
                  <div class="forum-post-info">
                    <!-- FORUM POST PARAGRAPH -->
                    <div id="post-content">

                    </div>
                    <!-- /FORUM POST PARAGRAPH -->       
                  
                  </div>
                  <!-- /FORUM POST INFO -->
                </div>
                <!-- /FORUM POST CONTENT -->
              </div>
              <!-- /FORUM POST -->





              

              <!-- FORUM POST -->
              <div class="forum-post" v-for="(reply, i) in freplies.data" :key="reply.id">
                <!-- FORUM POST META -->
                <div class="forum-post-meta">
                  <!-- FORUM POST TIMESTAMP -->
                  <p class="forum-post-timestamp">@{{reply.created_at | moment("from")}}</p>
                  <!-- /FORUM POST TIMESTAMP -->
            
                  <!-- FORUM POST ACTIONS -->
                  <div class="forum-post-actions">
                    <!-- FORUM POST ACTION -->
                    <p class="forum-post-action light" @click="postReport(reply, 'reply')">Report</p>
                    <!-- /FORUM POST ACTION -->
            
                    <!-- FORUM POST ACTION -->
                    <p class="forum-post-action" @click="selectParent(reply)">Reply</p>
                    <!-- /FORUM POST ACTION -->
                  </div>
                  <!-- /FORUM POST ACTIONS -->
                </div>
                <!-- /FORUM POST META -->
            
                <!-- FORUM POST CONTENT -->
                <div class="forum-post-content">
                  <!-- FORUM POST USER -->
                  <div class="forum-post-user">
                    <!-- USER AVATAR -->
                    <a class="user-avatar no-outline" href="profile-timeline.html">
                      <!-- USER AVATAR CONTENT -->
                      <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-68-74" :data-src="reply.user.thumbnail"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR CONTENT -->
                  
                      <!-- USER AVATAR PROGRESS -->
                      <div class="user-avatar-progress">
                        <!-- HEXAGON -->
                        <div class="hexagon-progress-84-92"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS -->
                  
                      <!-- USER AVATAR PROGRESS BORDER -->
                      <div class="user-avatar-progress-border">
                        <!-- HEXAGON -->
                        <div class="hexagon-border-84-92"></div>
                        <!-- /HEXAGON -->
                      </div>
                      <!-- /USER AVATAR PROGRESS BORDER -->
                  
                      <!-- USER AVATAR BADGE -->
                      <div class="user-avatar-badge">
                        <!-- USER AVATAR BADGE BORDER -->
                        <div class="user-avatar-badge-border">
                          <!-- HEXAGON -->
                          <div class="hexagon-28-32"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE BORDER -->
                  
                        <!-- USER AVATAR BADGE CONTENT -->
                        <div class="user-avatar-badge-content">
                          <!-- HEXAGON -->
                          <div class="hexagon-dark-22-24"></div>
                          <!-- /HEXAGON -->
                        </div>
                        <!-- /USER AVATAR BADGE CONTENT -->
                  
                        <!-- USER AVATAR BADGE TEXT -->
                        <p class="user-avatar-badge-text">13</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->
          
                    <!-- USER AVATAR -->
                    <a class="user-avatar small no-outline" href="profile-timeline.html">
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
                        <p class="user-avatar-badge-text">13</p>
                        <!-- /USER AVATAR BADGE TEXT -->
                      </div>
                      <!-- /USER AVATAR BADGE -->
                    </a>
                    <!-- /USER AVATAR -->
                    
                    <!-- FORUM POST USER TITLE -->
                    <p class="forum-post-user-title"><a href="profile-timeline.html">@{{reply.user.name}}</a></p>
                    <!-- /FORUM POST USER TITLE -->
            
                    <!-- FORUM POST USER TITLE -->
                    <p class="forum-post-user-text"><a href="profile-timeline.html">@{{'@' + reply.user.username}}</a></p>
                    <!-- /FORUM POST USER TITLE -->
            
                    <!-- FORUM POST USER TAG -->
                    <p class="forum-post-user-tag">Participant</p>
                    <!-- /FORUM POST USER TAG -->
                  </div>
                  <!-- /FORUM POST USER -->
            
                  <!-- FORUM POST INFO -->
                  <div class="forum-post-info">
                    <!-- FORUM POST PARAGRAPH -->
                    <p class="forum-post-paragraph" v-html="reply.body"></p>
                    <!-- /FORUM POST PARAGRAPH -->
                  </div>
                  <!-- /FORUM POST INFO -->
                </div>
                <!-- /FORUM POST CONTENT -->
              </div>
              <!-- /FORUM POST -->
            </div>
            <!-- /FORUM POST LIST -->

          {!! $replies->links() !!}
          






            <!-- QUICK POST -->
            <div class="quick-post medium">
              <!-- QUICK POST HEADER -->
              <div class="quick-post-header">
                <!-- QUICK POST HEADER TITLE -->
                <p class="quick-post-header-title">Leave a Reply</p>
                <!-- /QUICK POST HEADER TITLE -->
              </div>
              <!-- /QUICK POST HEADER -->
          
              <!-- QUICK POST BODY -->
              <div class="quick-post-body" id="replyElement">
                <!-- FORM -->
                <form class="form">
                  <!-- FORM ROW -->
                  <div class="form-row">
                    <!-- FORM ITEM -->
                    <div class="form-item">
                      <!-- FORM TEXTAREA -->
                      <div class="form-textarea">
                        <textarea v-model="commentMessage" id="forum-post-text" name="forum-post-text" placeholder="Share your thoughts"></textarea>                    
                      </div>
                      <!-- /FORM TEXTAREA -->
                    </div>
                    <!-- /FORM ITEM -->
                  </div>
                  <!-- /FORM ROW -->
                </form>
                <!-- /FORM -->
              </div>
              <!-- /QUICK POST BODY -->
          
              <!-- QUICK POST FOOTER -->
              <div class="quick-post-footer">
                <!-- QUICK POST FOOTER ACTIONS -->
                <div class="quick-post-footer-actions">
                
                </div>
                <!-- /QUICK POST FOOTER ACTIONS -->
          
                  <!-- QUICK POST FOOTER ACTIONS -->
                  <div class="quick-post-footer-actions">
                    <!-- BUTTON -->
                    <p class="button void" @click.prevent="resetComment">Discard</p>
                    <!-- /BUTTON -->
          
                    <!-- BUTTON -->
                    <p class="button secondary" @click.prevent="postComment">Post Reply</p>
                    <!-- /BUTTON -->
                  </div>
                  <!-- /QUICK POST FOOTER ACTIONS -->
              </div>
              <!-- /QUICK POST FOOTER -->
            </div>
            <!-- /QUICK POST -->
          </div>
          <!-- /FORUM CONTENT -->

          <!-- FORUM SIDEBAR -->
          <div class="forum-sidebar grid-column">
            <!-- STATS DECORATION -->
            <div class="stats-decoration secondary">
              <!-- STATS DECORATION ICON WRAP -->
              <div class="stats-decoration-icon-wrap">
                <!-- STATS DECORATION ICON -->
                <svg class="stats-decoration-icon icon-thumbs-up">
                  <use xlink:href="#svg-thumbs-up"></use>
                </svg>
                <!-- /STATS DECORATION ICON -->
              </div>
              <!-- /STATS DECORATION ICON WRAP -->

              <!-- STATS DECORATION TITLE -->
              <p class="stats-decoration-title">{!! (isset($voices) ? $voices : 0) !!}</p>
              <!-- /STATS DECORATION TITLE -->

              <!-- STATS DECORATION TEXT -->
              <p class="stats-decoration-text">Voices</p>
              <!-- /STATS DECORATION TEXT -->
            </div>
            <!-- /STATS DECORATION -->

            <!-- STATS DECORATION -->
            <div class="stats-decoration primary">
              <!-- STATS DECORATION ICON WRAP -->
              <div class="stats-decoration-icon-wrap">
                <!-- STATS DECORATION ICON -->
                <svg class="stats-decoration-icon icon-members">
                  <use xlink:href="#svg-members"></use>
                </svg>
                <!-- /STATS DECORATION ICON -->
              </div>
              <!-- /STATS DECORATION ICON WRAP -->

              <!-- STATS DECORATION TITLE -->
              <p class="stats-decoration-title">{!! (isset($allReplies) ? $allReplies : 0) !!}</p>
              <!-- /STATS DECORATION TITLE -->

              <!-- STATS DECORATION TEXT -->
              <p class="stats-decoration-text">Replies</p>
              <!-- /STATS DECORATION TEXT -->
            </div>
            <!-- /STATS DECORATION -->
          </div>
          <!-- /FORUM SIDEBAR -->
        </div>
    <!-- /GRID -->
      </div>
   
    </thread>
   
    </div>

@stop
@section('after_content')
  
@stop
@section('after_scripts')
<script type="text/javascript">
    (function () {
        var json = {!! json_encode($post->body) !!};
        var html = '';
        json.forEach(function (block) {
           switch (block.type) {
               case 'header':
                   html += `<h${block.data.level}>${block.data.text}</h${block.data.level}>`;
                   break;
               case 'paragraph':
                   html += `<p class="forum-post-paragraph">${block.data.text}</p>`;
                   break;
               case 'delimiter':
                   html += '<hr />';
                   break;
               case 'image':
                   if(block.data.url) {
                       html += `<div class="text-center"><img loading="lazy" class="forum-post-image img-fluid pad" src="${block.data.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em></div>`;
                   } else {
                       html += `<div class="text-center"><img loading="lazy" class="forum-post-image img-fluid pad" src="${block.data.file.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em></div>`;
                   }

                   break;
               case 'search':
                   html += `<div class="text-center"><img loading="lazy" class="forum-post-image img-fluid pad" src="${block.data.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em></div>`;
                   break;
               case 'list':
                   html += '<ul>';
                   html += `<a target="_blank" href="${block.data.link}"> <li class="link">${block.data.link}</li></a>`;
                   /*
                   block.data.items.forEach(function(li) {
                       html += `<li>${li}</li>`;
                   });
                   */
                   html += '</ul>';
                   break;
               default:
                   console.log('Unknown block type', block.type);
                   console.log(block);
                   break;
           }
        });
        document.getElementById('post-content').innerHTML = html;
    })();
</script>
@stop
