@extends('_layouts.layout')
@section('title', 'Forums')
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
        <p class="section-banner-title">Forums</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Talk about anything! Gaming, music, comics and more!</p>
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
          <p class="section-filters-bar-title"><a href="{!! route('forum.category.index') !!}">Forums</a></p>
          <!-- /SECTION FILTERS BAR TITLE -->
          @if(isset($lastCategory))
          <!-- SECTION FILTERS BAR TEXT -->
          <p class="section-filters-bar-text">
          Last category added <a class="highlighted" href="{!! route('forum.topic.index', $lastCategory->id) !!}">{!! (isset($lastCategory) ? $lastCategory->title : '') !!}</a> on {!! date('d M, yy', strtotime($lastCategory->created_at)) !!}
          </p>
          @endif
          <!-- /SECTION FILTERS BAR TEXT -->
        </div>
        <!-- /SECTION FILTERS BAR INFO -->
      </div>
      <!-- /SECTION FILTERS BAR ACTIONS -->
  
      <!-- SECTION FILTERS BAR ACTIONS -->
      <div class="section-filters-bar-actions">
        <!-- FORM -->
        {!! Form::open(['route' => 'forum.category.filtered', 'method' => 'POST', 'novalidate' => 'novalidate' ]) !!}
          {!! Form::token() !!}
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
      @foreach($categories as $category)
        <!-- TABLE ROW -->
        <div class="table-row big">
          <!-- TABLE COLUMN -->
          <div class="table-column">
            <!-- FORUM CATEGORY -->
            <div class="forum-category">
              <!-- FORUM CATEGORY IMAGE -->
              <a href="{!! route('forum.topic.index', $category->id) !!}">
                <img class="forum-category-image fcategory-icon" src="{!! asset(\Config::get('global.fcategory.upload_folder_path_original') . $category->image) !!}" alt="{!! $category->title !!}">
              </a>
              <!-- /FORUM CATEGORY IMAGE -->
  
              <!-- FORUM CATEGORY INFO -->
              <div class="forum-category-info">
                <!-- FORUM CATEGORY TITLE -->
                <p class="forum-category-title"><a href="{!! route('forum.topic.index', $category->id) !!}">{!! $category->title !!}</a></p>
                <!-- /FORUM CATEGORY TITLE -->
  
                <!-- FORUM CATEGORY TEXT -->
                <p class="forum-category-text">{!! $category->description !!}</p>
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
              {!! $category->topics()->get()->count() !!}
            </p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column centered padded-medium">
            <!-- TABLE TITLE -->
            <p class="table-title">
              <?php 
                $totalPosts = 0;
                foreach($category->topics()->get() as $t) {
                  $tPosts = $t->discussions()->get()->count();
                  $totalPosts += $tPosts;
                }
              ?>
              <?php echo $totalPosts; ?>
            </p>
            <!-- /TABLE TITLE -->
          </div>
          <!-- /TABLE COLUMN -->
  
          <!-- TABLE COLUMN -->
          <div class="table-column padded-big-left">
            <?php 
                if($category->topics()->get()->count() > 0) {
                  foreach($category->topics()->take(2)->get() as $t) {
                    ?>
                    <!-- TABLE LINK -->
                      <a class="table-link" href="{!! route('forum.topic.index', $t->id) !!}">{!! $t->title !!}</a>
                    <!-- /TABLE LINK -->
                    <?php         
                  }
                } else {
                  ?>
                  <!-- TABLE LINK -->
                      <a class="table-link" href="#">No topics posted</a>
                    <!-- /TABLE LINK -->
                  <?php
                }
                
            ?>
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
