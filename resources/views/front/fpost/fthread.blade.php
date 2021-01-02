@extends('_layouts.layout')
@section('title', $post->title)
<style type="text/css">
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
                    <p class="forum-post-action light" onclick="postReport({!! $post->id !!}, 'post')">Report</p>
                    <p class="forum-post-action" onclick="selectParent({!! $post->id !!}, {!! $post->id !!}, {!! $user->id !!}, 'post')">Reply</p>
                    <p class="forum-post-action light" onclick="selectBookmark({!! $post->id !!}, {!! $post->id !!}, {!! $user->id !!}, 'post')">
                      <i class="fa fa-bookmark" aria-hidden="true"></i>
                    </p>
                    <p class="forum-post-action light" onclick="getShareLink({!! $post->id !!}, {!! $post->id !!}, {!! $user->id !!}, 'post')">
                      <i class="fa fa-share-alt" aria-hidden="true"></i>
                    </p>
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
                    
                    <p class="forum-post-user-title"><a href="{!! route('blog.index', $post->user()->first()->id) !!}">{!! $post->user()->first()->name !!}</a></p>
                    <!-- /FORUM POST USER TITLE -->
            
                    <!-- FORUM POST USER TITLE -->
                    <p class="forum-post-user-text"><a href="{!! route('blog.index', $post->user()->first()->id) !!}">{!! '@' . $post->user()->first()->username !!}</a></p>
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
                      @foreach($post->body as $element)
                        <?php 
                          if($element['type'] == 'paragraph') {
                        ?>
                            <p class="forum-post-paragraph"> <?php echo (isset($element['data']['text']) ? $element['data']['text'] : '' ); ?></p>
                          <?php 
                          } 
                          if($element['type'] == 'delimiter') {
                            ?>
                                <hr />
                              <?php 
                          }
                          if($element['type'] == 'image') {
                            ?>
                                <?php 
                                  if(isset($element['data']['url'])) {

                                ?>
                                    <div class="text-center">
                                      <img loading="lazy" class="forum-post-image img-fluid pad" src="<?php echo $element['data']['url']; ?>" title="<?php echo (isset($element['data']['caption']) ? $element['data']['caption'] : 'Image'); ?>" />
                                      <br /><em><?php echo (isset($element['data']['caption']) ? $element['data']['caption'] : 'Image'); ?></em>
                                    </div>
                                <?php 

                                  } else {
                                ?>
                                  <div class="text-center">
                                    <img loading="lazy" class="forum-post-image img-fluid pad" src="<?php echo (isset($element['data']['file']['url']) ? $element['data']['file']['url'] : asset('theme/img/default.png')); ?>" title="<?php echo (isset($element['data']['caption']) ? $element['data']['caption'] : 'Image'); ?>" />
                                    <br /><em><?php echo (isset($element['data']['caption']) ? $element['data']['caption'] : 'Image'); ?></em></div>
                                <?php
                                  }
                                ?>                                
                              <?php 
                          }
                          if($element['type'] == 'search') {
                            ?>
                                <?php 
                                  if(isset($element['data']['url'])) {

                                ?>
                                    <div class="text-center">
                                      <img loading="lazy" class="forum-post-image img-fluid pad" src="<?php echo $element['data']['url']; ?>" title="<?php echo (isset($element['data']['caption']) ? $element['data']['caption'] : 'Image'); ?>" />
                                      <br /><em><?php echo (isset($element['data']['caption']) ? $element['data']['caption'] : 'Image'); ?></em>
                                    </div>
                                <?php 
                                  }
                                ?>
                            <?php 
                          }      
                          
                          if($element['type'] == 'list') {
                            ?>
                                <ul>
                                  <?php 
                                    if(isset($element['data']['items'])) {
                                        foreach($element['data']['items'] as $l) {
                                          ?>
                                            <li><?php echo $l; ?></li>
                                          <?php
                                        }
                                    }
                                  ?>
                                </ul>
                              <?php 
                          }
                          ?>

                      @endforeach
                    </div>
                    <!-- /FORUM POST PARAGRAPH -->       
                  
                  </div>
                  <!-- /FORUM POST INFO -->
                </div>
                <!-- /FORUM POST CONTENT -->
              </div>
              <!-- /FORUM POST -->





              

              <!-- FORUM POST -->
                  @if(count($replies) > 0)
                          @foreach($replies as $reply)
                        <div class="forum-post">
                              <!-- FORUM POST META -->
                              <div class="forum-post-meta">
                                <!-- FORUM POST TIMESTAMP -->
                                <p class="forum-post-timestamp">{!! date('d M, Y', strtotime($reply->created_at)) !!}</p>
                                <!-- /FORUM POST TIMESTAMP -->
                          
                                <!-- FORUM POST ACTIONS -->
                                <div class="forum-post-actions">
                                  <!-- FORUM POST ACTION -->
                                  <p class="forum-post-action light" onclick="postReport({!! $reply->id !!}, 'reply')">Report</p>
                                  <!-- /FORUM POST ACTION -->
                          
                                  <!-- FORUM POST ACTION -->
                                  <p class="forum-post-action" onclick="selectParent({!! $reply->id !!}, {!! $post->id !!}, {!! $user->id !!}, 'reply')">Reply</p>
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
                                  <a class="user-avatar no-outline" href="{!! route('blog.index', $reply->user()->first()->id) !!}">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                      <!-- HEXAGON -->
                                      <div class="hexagon-image-68-74" data-src="{!! $reply->user()->first()->thumbnail !!}"></div>
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
                                  <a class="user-avatar small no-outline" href="{!! route('blog.index', $reply->user()->first()->id) !!}">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                      <!-- HEXAGON -->
                                      <div class="hexagon-image-30-32" data-src="{!! $reply->user()->first()->thumbnail !!}"></div>
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
                                  <p class="forum-post-user-title"><a href="{!! route('blog.index', $reply->user()->first()->id) !!}">{!! $reply->user()->first()->name !!}</a></p>
                                  <!-- /FORUM POST USER TITLE -->
                          
                                  <!-- FORUM POST USER TITLE -->
                                  <p class="forum-post-user-text"><a href="{!! route('blog.index', $reply->user()->first()->id) !!}">{!! '@' . $reply->user()->first()->username !!}</a></p>
                                  <!-- /FORUM POST USER TITLE -->
                          
                                  <!-- FORUM POST USER TAG -->
                                  <p class="forum-post-user-tag">Participant</p>
                                  <!-- /FORUM POST USER TAG -->
                                </div>
                                <!-- /FORUM POST USER -->
                          
                                <!-- FORUM POST INFO -->
                                <div class="forum-post-info">
                                  <!-- FORUM POST PARAGRAPH -->
                                    <p class="forum-post-paragraph">
                                    {!! $reply->body !!}
                                    </p>
                                  <!-- /FORUM POST PARAGRAPH -->
                                </div>
                                <!-- /FORUM POST INFO -->
                              </div>
                              <!-- /FORUM POST CONTENT -->
                          </div>
                          @endforeach
                  @endif
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
                        <textarea id="forum-post-text" name="forum-post-text" placeholder="Share your thoughts"></textarea>                    
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
                    <p class="button void" id="resetCommentElement">Discard</p>
                    <!-- /BUTTON -->
          
                    <!-- BUTTON -->
                    <p class="button secondary" id="postReplyElement">Post Reply</p>
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
   @include('_modals.success');
      

@stop
@section('after_content')
  
@stop
@section('after_scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

    <script type="text/javascript">
    window.baseURL= "{!! url('/v1-api/') !!}";

    var replyingTo = '{!! $post->id !!}';
    var reportingID = -1;
    var postID = '{!! $post->id !!}';
    var postType = 'post';
    var userID = '{!! $user->id !!}';
    var data = {};
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    //Define a scroll animation function
    $.fn.scrollTo = function (speed) {
        if (typeof(speed) === 'undefined')
            speed = 1000;

        $('html, body').animate({
            scrollTop: parseInt($(this).offset().top)
        }, speed);
    }

    // Global configuration of data
    $(document).ready(function() {
        $('#resetCommentElement').on('click', function() {
            resetComment();
            MicroModal.init();
        });
    });

    // Reset Comment
    function resetComment() {      
      $('#forum-post-text').val("");
    }

    // Post reply
    function postReply() {
      replyBody = $('#forum-post-text').val();
      var url = window.baseURL + '/' + 'forum/post-reply';
      if(replyBody !== '' && replyBody !== null && replyingTo !== -1) {
          
        $.post(url,  
          { 
            is_reply: 1,
            is_reply_id: replyingTo,
            body: $('#forum-post-text').val(), 
            post_id: postID,
            user_id: userID,
            post_type: postType
          }, 
          function(data, status, xhr) {   
              console.log(data);
              console.log(status);
              console.log(xhr);            
          })
          .done(function() { 
            alert('Request done!'); 
          })
          .fail(function(jqxhr, settings, ex) { 
            console.log(ex);            
          });
      } else {
        alert('Please enter some data!');
      }
    }

    function selectParent(replyTo, post_id, user_id, type) {
      replyingTo = replyTo;
      postID = post_id;
      userID = user_id;  
      postType = type;  
      $('#replyElement').scrollTo();
    }

    function postReport(id, type) {    
      var url = window.baseURL + '/' + 'forum/post-report';
      $.post(url,  
        { post_id: id, post_type: type }, 
        function(data, status, xhr) {   
            console.log(data);
            console.log(status);
            console.log(xhr);            
        })
        .done(function() { 
          MicroModal.show('modal-success'); // [1]
        })
        .fail(function(jqxhr, settings, ex) { 
          console.log(ex);            
        });
    }
    </script>
@stop
