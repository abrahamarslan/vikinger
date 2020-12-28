@extends('_layouts.layout')
@section('title', 'Topics')
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
        <p class="section-banner-title">{!! $category->title !!} | Topics</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">{!! $category->description !!}</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION FILTERS BAR -->
    <div class="section-filters-bar v7">
      <!-- SECTION FILTERS BAR ACTIONS -->
      <div class="section-filters-bar-actions">
        <!-- SECTION FILTERS BAR INFO -->
        <div class="section-filters-bar-info">
          <!-- SECTION FILTERS BAR TITLE -->
          <p class="section-filters-bar-title">
          <a href="{!! route('forum.category.index') !!}">Forums</a>
            <span class="separator"></span>
          <a href="forums-category.html">{!! $category->title !!}</a>
          </p>
          <!-- /SECTION FILTERS BAR TITLE -->
          <?php 
            $lastTopic = $category->topics()->orderBy('created_at','DESC')->first();            
          ?>          
          @if(isset($lastTopic))
          <!-- SECTION FILTERS BAR TEXT -->
          <div class="section-filters-bar-text small-space">
            Last topic added by
            <!-- USER AVATAR -->
            <a class="user-avatar micro no-stats" href="{!! route('blog.index', $lastTopic->admin()->first()->id) !!}">
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
                <div class="hexagon-image-18-20" data-src="{!! $lastTopic->admin()->first()->thumbnail !!}"></div>
                <!-- /HEXAGON -->
              </div>
              <!-- /USER AVATAR CONTENT -->
            </a>
            <!-- /USER AVATAR -->
            <a class="bold" href="{!! route('blog.index', $lastTopic->admin()->first()->id) !!}">{!! $lastTopic->admin()->first()->name !!}</a>
            on {!! date('d M, yy', strtotime($lastTopic->created_at)) !!}
          </div>
          <!-- /SECTION FILTERS BAR TEXT -->
          @endif
        </div>
        <!-- /SECTION FILTERS BAR INFO -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
  
      <!-- SECTION FILTERS BAR ACTIONS -->
      <div class="section-filters-bar-actions">
        <!-- FORM -->
        {!! Form::open(['route' => 'forum.topic.filtered', 'method' => 'POST', 'novalidate' => 'novalidate' ]) !!}
          {!! Form::token() !!}
          <input type="hidden" name="category_id" value="{!! $category->id !!}" />
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
        <a href="{!! route('forum.topic.create') !!}" class="button secondary">+ Create Topic</a>
        <!-- /BUTTON -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
    </div>
    <!-- /SECTION FILTERS BAR -->
   <div class="row">
    <hr/>
   </div>

    <!-- TABLE -->
    <div class="table table-forum-category">
      <!-- TABLE HEADER -->
      <div class="table-header">
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Topic</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
  
        <!-- TABLE HEADER COLUMN -->
        <div class="table-header-column centered padded-medium">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Discussions</p>
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
        <div class="table-header-column padded-big-left">
          <!-- TABLE HEADER TITLE -->
          <p class="table-header-title">Recent Discussion</p>
          <!-- /TABLE HEADER TITLE -->
        </div>
        <!-- /TABLE HEADER COLUMN -->
      </div>
      <!-- /TABLE HEADER -->
  
      <!-- TABLE BODY -->
      <div class="table-body">
      @foreach($topics as $record)
        <!-- TABLE ROW -->
        <div class="table-row big">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- FORUM CATEGORY -->
            <div class="forum-category">
              <!-- FORUM CATEGORY IMAGE -->
              <a href="{!! route('forum.post.index', $record->id) !!}">
                <img class="forum-category-image fcategory-icon" src="{!! asset(\Config::get('global.ftopic.upload_folder_path_original') . $record->image) !!}" alt="{!! $record->title !!}">
              </a>
              <!-- /FORUM CATEGORY IMAGE -->
  
              <!-- FORUM CATEGORY INFO -->
              <div class="forum-category-info">
                <!-- FORUM CATEGORY TITLE -->
                <p class="forum-category-title"><a href="{!! route('forum.post.index', $record->id) !!}">{!! $record->title !!}</a></p>
                <!-- /FORUM CATEGORY TITLE -->
  
                <!-- FORUM CATEGORY TEXT -->
                <p class="forum-category-text">{!! $record->description !!}</p>
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
            <p class="table-title">
              {!! $record->discussions()->get()->count() !!}
            </p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">
              <?php 
                $totalVoices = 0;
                foreach($record->discussions()->get() as $t) {                                    
                  $uv = $t->replies()->select('freplies.user_id')->distinct()->get()->count(); 
                  $totalVoices += $uv;
                }
              ?>
              <?php echo $totalVoices; ?>
            </p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
          <?php 
                if($record->discussions()->get()->count() > 0) {
                  foreach($record->discussions()->orderBy('created_at','DESC')->take(1)->get() as $t) {
                    ?>
                    <!-- TABLE COLUMN -->
                      <div class="table-column padded-big-left">
                        <!-- TABLE LINK -->
                        <a class="table-link" href="{!! route('forum.post.getDiscussion', ['topic' => $record->id, 'slug' => $t->slug]) !!}">{!! $t->title !!}</a>
                        <!-- /TABLE LINK -->
                      </div>
                      <!-- /TABLE COLUMN -->
                    <?php         
                  }
                } else {
                  ?>
                  <!-- TABLE COLUMN -->
                  <div class="table-column padded-big-left">
                    <!-- TABLE LINK -->
                    <a class="table-link" href="#">No discussion has been posted.</a>
                    <!-- /TABLE LINK -->
                  </div>
                  <!-- /TABLE COLUMN -->
                  <?php
                }
                
            ?>
         
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
