@extends('_layouts.layout')
@section('title', $topic->title)
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
        <p class="section-banner-title">{!! $topic->title !!}</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">{!! $topic->description !!}</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

   
    <!-- SECTION HEADER -->
    <div class="section-header">
      <!-- SECTION HEADER INFO -->
      <div class="section-header-info">
        <!-- SECTION PRETITLE -->
        <p class="section-pretitle">Welcome to</p>
        <!-- /SECTION PRETITLE -->
  
        <!-- SECTION TITLE -->
        <h2 class="section-title">Animation Watchtower</h2>
        <!-- /SECTION TITLE -->
      </div>
      <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- SECTION FILTERS BAR -->
    <div class="section-filters-bar v7">
      <!-- SECTION FILTERS BAR ACTIONS -->
      <div class="section-filters-bar-actions">
        <!-- SECTION FILTERS BAR INFO -->
        <div class="section-filters-bar-info">
          <!-- SECTION FILTERS BAR TITLE -->
          <p class="section-filters-bar-title"><a href="forums.html">Forums</a><span class="separator"></span><a href="forums-category.html">Animation Watchtower</a></p>
          <!-- /SECTION FILTERS BAR TITLE -->
  
          <!-- SECTION FILTERS BAR TEXT -->
          <div class="section-filters-bar-text small-space">
            Last post by
            <!-- USER AVATAR -->
            <a class="user-avatar micro no-stats" href="profile-timeline.html">
              <!-- USER AVATAR BORDER -->
              <div class="user-avatar-border">
                <!-- HEXAGON -->
                <div class="hexagon-22-24"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR BORDER -->
          
              <!-- USER AVATAR CONTENT -->
              <div class="user-avatar-content">
                <!-- HEXAGON -->
                <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER AVATAR -->
            <a class="bold" href="profile-timeline.html">Nick Grissom</a>
            2 minutes ago
          </div>
          <!-- /SECTION FILTERS BAR TEXT -->
        </div>
        <!-- /SECTION FILTERS BAR INFO -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
  
      <!-- SECTION FILTERS BAR ACTIONS -->
      <div class="section-filters-bar-actions">
        <!-- FORM -->
        {!! Form::open(['route' => 'forum.post.filtered', 'method' => 'POST', 'novalidate' => 'novalidate' ]) !!}
          {!! Form::token() !!}
          <input type="hidden" name="topic_id" value="{!! $topic->id !!}" />
          <!-- FORM ITEM -->
          <div class="form-item split">
            <!-- FORM INPUT -->
            <div class="form-input small">
              <label for="forum-search">Search Forums</label>
              <input type="text" id="forum-search" name="post_filter_term">
            </div>
            <!-- /FORM INPUT -->
  
            <!-- BUTTON -->
            <button class="button primary">
              <!-- ICON MAGNIFYING GLASS -->
              <svg class="icon-magnifying-glass">
                <use xlink:href="#svg-magnifying-glass"></use>
              </svg>
              <!-- /ICON MAGNIFYING GLASS -->
            </button>
            <!-- /BUTTON -->
          </div>
          <!-- /FORM ITEM -->
          {!! Form::close() !!}
        <!-- /FORM -->
  
        <!-- BUTTON -->
        <p class="button secondary">+ Create Discussion</p>
        <!-- /BUTTON -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
    </div>
    <!-- /SECTION FILTERS BAR -->

    <!-- TABLE -->
    <div class="table table-forum-category">
      <!-- TABLE HEADER -->
      <div class="table-header">
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Category</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded-medium">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Topics</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded-medium">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Posts</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column padded-big-left">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Recent Topics</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
      </div>
      <!-- /TABLE HEADER -->
  
      <!-- TABLE BODY -->
      <div class="table-body">
        <!-- TABLE ROW -->
        <div class="table-row big">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- FORUM CATEGORY -->
            <div class="forum-category">
              <!-- FORUM CATEGORY IMAGE -->
              <a href="forums-category.html">
                <img class="forum-category-image" src="img/forum/category/07.png" alt="category-07">
              </a>
              <!-- /FORUM CATEGORY IMAGE -->
  
              <!-- FORUM CATEGORY INFO -->
              <div class="forum-category-info">
                <!-- FORUM CATEGORY TITLE -->
                <p class="forum-category-title"><a href="forums-category.html">Comics</a></p>
                <!-- /FORUM CATEGORY TITLE -->
  
                <!-- FORUM CATEGORY TEXT -->
                <p class="forum-category-text">A place for the community to talk and chat about whatever they want!</p>
                <!-- /FORUM CATEGORY TEXT -->
              </div>
              <!-- /FORUM CATEGORY INFO -->
            </div>
            <!-- /FORUM CATEGORY -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">44</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">236</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- TABLE LINK -->
            <a class="table-link" href="forums-discussion.html">Bebop Publishing will release a limited edition of "Justice"</a>
            <!-- /TABLE LINK -->
  
            <!-- TABLE LINK -->
            <a class="table-link" href="forums-discussion.html">This is the first image of the new "Multiverse" movie!</a>
            <!-- /TABLE LINK -->
  
            <!-- TABLE LINK -->
            <a class="table-link" href="forums-discussion.html">What actor do you think should play the new Captain?</a>
            <!-- /TABLE LINK -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->
  
        <!-- TABLE ROW -->
        <div class="table-row big">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- FORUM CATEGORY -->
            <div class="forum-category">
              <!-- FORUM CATEGORY IMAGE -->
              <a href="forums-category.html">
                <img class="forum-category-image" src="img/forum/category/08.png" alt="category-08">
              </a>
              <!-- /FORUM CATEGORY IMAGE -->
  
              <!-- FORUM CATEGORY INFO -->
              <div class="forum-category-info">
                <!-- FORUM CATEGORY TITLE -->
                <p class="forum-category-title"><a href="forums-category.html">Anime &amp; Manga</a></p>
                <!-- /FORUM CATEGORY TITLE -->
  
                <!-- FORUM CATEGORY TEXT -->
                <p class="forum-category-text">Everything about the gaming world! News, reviews, upcoming games and more!</p>
                <!-- /FORUM CATEGORY TEXT -->
              </div>
              <!-- /FORUM CATEGORY INFO -->
            </div>
            <!-- /FORUM CATEGORY -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">23</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">109</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- TABLE LINK -->
            <a class="table-link" href="forums-discussion.html">Come and discuss that new "Power X" transformation</a>
            <!-- /TABLE LINK -->
  
            <!-- TABLE LINK -->
            <a class="table-link" href="forums-discussion.html">Hunter's manga chapter 526 will release in December</a>
            <!-- /TABLE LINK -->
  
            <!-- TABLE LINK -->
            <a class="table-link" href="forums-discussion.html">A new animation studio will take over after this month</a>
            <!-- /TABLE LINK -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->
      </div>
      <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->
  
    <!-- TABLE -->
    <div class="table table-forum-discussion">
      <!-- TABLE HEADER -->
      <div class="table-header">
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Discussion</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded-medium">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Voices</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded-medium">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Replies</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column padded-big-left">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Activity</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
      </div>
      <!-- /TABLE HEADER -->
  
      <!-- TABLE BODY -->
      <div class="table-body">
        <!-- TABLE ROW -->
        <div class="table-row mid">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview pinned">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">Let's discuss the current state of the Comics Cinematic Universe</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- PAGE ITEMS -->
              <div class="page-items">
                <!-- PAGE ITEM -->
                <a class="page-item" href="forums-discussion.html">01</a>
                <!-- /PAGE ITEM -->
  
                <!-- PAGE ITEM -->
                <a class="page-item" href="forums-discussion.html">02</a>
                <!-- /PAGE ITEM -->
  
                <!-- PAGE ITEM -->
                <a class="page-item" href="forums-discussion.html">03</a>
                <!-- /PAGE ITEM -->
  
                <!-- PAGE ITEM -->
                <p class="page-item void">...</p>
                <!-- /PAGE ITEM -->
  
                <!-- PAGE ITEM -->
                <a class="page-item" href="forums-discussion.html">44</a>
                <!-- /PAGE ITEM -->
  
                <!-- PAGE ITEM -->
                <a class="page-item" href="forums-discussion.html">45</a>
                <!-- /PAGE ITEM -->
  
                <!-- PAGE ITEM -->
                <a class="page-item" href="forums-discussion.html">46</a>
                <!-- /PAGE ITEM -->
              </div>
              <!-- /PAGE ITEMS -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/07.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Sarah Diamond</a> 2 months ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">398</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">941</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                    <p class="user-avatar-badge-text">12</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">1 hour, 36 minutes ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->
  
        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">Bebop Publishing will release a limited edition of "Justice"</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Bearded Wonder</a> 5 hours ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">19</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">24</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/03.jpg"></div>
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
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">2 minutes ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->

        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">Come and discuss that new "Power X" transformation</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/13.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Crimson Thunder</a> 1 hour ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">8</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">11</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/01.jpg"></div>
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
                    <p class="user-avatar-badge-text">24</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">31 minutes ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->

        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">This is the first image of the new "Multiverse" movie!</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/03.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Nick Grissom</a> 14 hours ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">26</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">33</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/04.jpg"></div>
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
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Bearded Wonder</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">1 hour, 7 minutes ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->

        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">What actor do you think should play the new Captain?</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/05.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Neko Bebop</a> 6 days ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">17</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">20</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
                    <p class="user-avatar-badge-text">12</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Neko Bebop</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">5 hours, 9 minutes ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->

        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">Hunter's manga chapter 526 will release in December</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/08.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Damian Greyson</a> 2 weeks ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">39</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">47</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/10.jpg"></div>
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
                    <p class="user-avatar-badge-text">5</p>
                    <!-- /USER AVATAR BADGE TEXT -->
                  </div>
                  <!-- /USER AVATAR BADGE -->
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">The Green Goo</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">1 day, 8 hours ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->

        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">A new animation studio will take over after this month</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/04.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">Bearded Wonder</a> 2 weeks ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">22</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">29</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/05.jpg"></div>
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
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Nick Grissom</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">6 days, 12 hours ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->

        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="forums-discussion.html">Season 4 of "Fireman" is officially confirmed by the creators!</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="profile-timeline.html">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="img/avatar/10.jpg"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">The Green Goo</a> 5 months ago</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
              </div>
              <!-- /DISCUSSION PREVIEW META -->
            </div>
            <!-- /DISCUSSION PREVIEW -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">7</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">13</p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="profile-timeline.html">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="img/avatar/02.jpg"></div>
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
                </div>
                <!-- /USER AVATAR -->
              </a>
              <!-- /USER STATUS AVATAR -->
          
              <!-- USER STATUS TITLE -->
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">Destroy Dex</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">1 week, 3 days ago</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->
      </div>
      <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->
  
    <!-- SECTION PAGER BAR -->
    <div class="section-pager-bar">
      <!-- SECTION PAGER -->
      <div class="section-pager">
        <!-- SECTION PAGER ITEM -->
        <div class="section-pager-item active">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text">01</p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        <!-- /SECTION PAGER ITEM -->
  
        <!-- SECTION PAGER ITEM -->
        <div class="section-pager-item">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text">02</p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        <!-- /SECTION PAGER ITEM -->
  
        <!-- SECTION PAGER ITEM -->
        <div class="section-pager-item">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text">03</p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        <!-- /SECTION PAGER ITEM -->
  
        <!-- SECTION PAGER ITEM -->
        <div class="section-pager-item">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text">04</p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        <!-- /SECTION PAGER ITEM -->
  
        <!-- SECTION PAGER ITEM -->
        <div class="section-pager-item">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text">05</p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        <!-- /SECTION PAGER ITEM -->
  
        <!-- SECTION PAGER ITEM -->
        <div class="section-pager-item">
          <!-- SECTION PAGER ITEM TEXT -->
          <p class="section-pager-item-text">06</p>
          <!-- /SECTION PAGER ITEM TEXT -->
        </div>
        <!-- /SECTION PAGER ITEM -->
      </div>
      <!-- /SECTION PAGER -->
  
      <!-- SECTION PAGER CONTROLS -->
      <div class="section-pager-controls">
        <!-- SLIDER CONTROL -->
        <div class="slider-control left disabled">
          <!-- SLIDER CONTROL ICON -->
          <svg class="slider-control-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /SLIDER CONTROL ICON -->
        </div>
        <!-- /SLIDER CONTROL -->
  
        <!-- SLIDER CONTROL -->
        <div class="slider-control right">
          <!-- SLIDER CONTROL ICON -->
          <svg class="slider-control-icon icon-small-arrow">
            <use xlink:href="#svg-small-arrow"></use>
          </svg>
          <!-- /SLIDER CONTROL ICON -->
        </div>
        <!-- /SLIDER CONTROL -->
      </div>
      <!-- /SECTION PAGER CONTROLS -->
    </div>
    <!-- /SECTION PAGER BAR -->
   
    </div>

@stop
@section('after_content')
  
@stop
@section('after_scripts')
    <script type="text/javascript">
        var uploadBlogButton = document.getElementById('uploadBlogImage');
        var uploadSEOButton = document.getElementById('uploadBlogSEOImage');
        var blogImageElement = document.getElementById('blogImage');
        var previewBlogImageElement = document.getElementById('previewBlogImage');
        var previewBlogSEOImageElement = document.getElementById('previewBlogSEOImage');
        var blogSEOImageElement = document.getElementById('blogSEOImage');
        var currentElement = '';
        (function () {
            /**
             * Upload image button
             */
            uploadBlogButton.onclick = function () {
                currentElement = 'blog';
                blogImageElement.click();
                return false;
            };

            /**
             * Upload SEO Image button
             */
            uploadSEOButton.onclick = function () {
                currentElement = 'seo';
                blogSEOImageElement.click();
                return false;
            };

            /**
             * Handle change of blog image upload
             */
            blogImageElement.onchange = function (e) {
                var files = e.target.files;
                if(files.length<1) {
                    alert('Select a file of type PNG, JPG, JPEG');
                    return;
                }
                var file = files[0];
                var reader = new FileReader();
                reader.onload = onFileLoaded;
                reader.readAsDataURL(file);
            };

            /**
             * Handle change of blog image upload
             */
            blogSEOImageElement.onchange = function (e) {
                var files = e.target.files;
                if(files.length<1) {
                    alert('Select a file of type PNG, JPG, JPEG');
                    return;
                }
                var file = files[0];
                var reader = new FileReader();
                reader.onload = onFileLoaded;
                reader.readAsDataURL(file);
            };
        })();
        function onFileLoaded(e) {
            if(currentElement !== '' && currentElement === 'blog') {
                previewBlogImageElement.style.background = 'url('+e.target.result+') center center / cover no-repeat';
            } else if(currentElement !== '' && currentElement == 'seo') {
                previewBlogSEOImageElement.style.background = 'url('+e.target.result+') center center / cover no-repeat';
            }

        }
    </script>
@stop
