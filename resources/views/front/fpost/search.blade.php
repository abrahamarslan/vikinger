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

   
   <div class="row">
    <hr/>
   </div>

    <!-- SECTION FILTERS BAR -->
    <div class="section-filters-bar v7">
      <!-- SECTION FILTERS BAR ACTIONS -->
      <div class="section-filters-bar-actions">
        <!-- SECTION FILTERS BAR INFO -->
        <div class="section-filters-bar-info">
          <!-- SECTION FILTERS BAR TITLE -->
          <p class="section-filters-bar-title">
          <a href="{!! route('forum.category.index') !!}">Forums</a><span class="separator"></span>
          <a href="{!! route('forum.topic.index', $topic->category()->first()->id ) !!}">{!! $topic->category()->first()->title !!}</a><span class="separator"></span>
          <a href="{!! route('forum.post.index', $topic->id) !!}">{!! $topic->title !!}</a>
          </p>
          <!-- /SECTION FILTERS BAR TITLE -->  
          <!-- SECTION FILTERS BAR TEXT -->         
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
            <button type="submit" class="button primary">
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
        <a href="{!! route('forum.post.create', $topic->id) !!}" class="button secondary">+ Create Discussion</a>
        <!-- /BUTTON -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
    </div>
    <!-- /SECTION FILTERS BAR -->
    
  
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
        @foreach($discussions as $record)
        <!-- TABLE ROW -->
        <div class="table-row medium">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- DISCUSSION PREVIEW -->
            <div class="discussion-preview">
              <!-- DISCUSSION PREVIEW TITLE -->
              <a class="discussion-preview-title" href="{!! route('forum.post.getDiscussion', ['topic' => $topic->id,'slug' => $record->slug]) !!}">{!! $record->title !!}</a>
              <!-- /DISCUSSION PREVIEW TITLE -->
  
              <!-- DISCUSSION PREVIEW META -->
              <div class="discussion-preview-meta">
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text">Started by</p>
                <!-- /DISCUSSION PREVIEW META TEXT -->
  
                <!-- USER AVATAR -->
                <a class="user-avatar micro no-border" href="{!! route('blog.index', $record->admin()->first()->id) !!}">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-18-20" data-src="{!! $record->admin()->first()->thumbnail !!}"></div>
                    <!-- /HEXAGON -->
                  </div>
                  <!-- /USER AVATAR CONTENT -->
                </a>
                <!-- /USER AVATAR -->
  
                <!-- DISCUSSION PREVIEW META TEXT -->
                <p class="discussion-preview-meta-text"><a href="profile-timeline.html">{!! $record->admin()->first()->first_name . ' ' . $record->admin()->first()->last_name !!}</a> 5 hours ago</p>
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
            <p class="table-title">
              {!! $record->replies()->select('freplies.user_id')->distinct()->get()->count() !!}
            </p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">
              {!! $record->replies()->count() !!}
            </p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->

          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">

            <?php 
              $lastReply = $record->replies()->orderBy('created_at','DESC')->first();            
            ?>
            @if(isset($lastReply))
            <!-- USER STATUS -->
            <div class="user-status">
              <!-- USER STATUS AVATAR -->
              <a class="user-status-avatar" href="{!! route('blog.index', $lastReply->user()->first()->id) !!}">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                  <!-- USER AVATAR CONTENT -->
                  <div class="user-avatar-content">
                    <!-- HEXAGON -->
                    <div class="hexagon-image-30-32" data-src="{!! $lastReply->user()->first()->thumbnail !!}}"></div>
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
              <p class="user-status-title"><a class="bold" href="profile-timeline.html">{!! $lastReply->user()->first()->name !!}</a></p>
              <!-- /USER STATUS TITLE -->
          
              <!-- USER STATUS TEXT -->
              <p class="user-status-text small">on on {!! date('d M, yy', strtotime($lastReply->created_at)) !!}</p>
              <!-- /USER STATUS TEXT -->
            </div>
            <!-- /USER STATUS -->
            @else
              <p class="user-status-title">No recent activity.</p>
            @endif
          </div>
          <!-- /TABLE COLUMN -->
        </div>
        <!-- /TABLE ROW -->
        @endforeach
      </div>
      <!-- /TABLE BODY -->
    </div>
    <!-- /TABLE -->
   
   
    </div>

@stop
@section('after_content')
  
@stop
@section('after_scripts')
  
@stop
