@extends('_layouts.layout')
@section('title', 'Blog Categories')
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
        <img class="section-banner-icon" src="{!! asset('theme/img/banner/groups-icon.png') !!}" alt="marketplace-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Blog Categories</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Category List</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Blog Categories</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Blog Category List</h2>
            <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid centered">
        @foreach($categories->chunk(2) as $categoryItems)
        <div class="row">
            @foreach($categoryItems as $category)
            <!-- PRODUCT PREVIEW -->
            <div class="col-md-6">
                <div class="card card-01 height-fix" style="background: url('{!! asset(\Config::get('global.category.upload_folder_path_original') . $category->image) !!}') center center / cover no-repeat">
                    <div class="card-img-overlay">
                        <h4 class="card-title text-white"><strong>{!! $category->title !!}</strong></h4>
                        <p class="card-text text-white">{!! $category->description !!}</p>
                    </div>
                </div>
            </div>
            <!-- /PRODUCT PREVIEW -->
            @endforeach
        </div>
        @endforeach
    </div>
    <!-- /GRID -->
    </div>

@stop
@section('after_content')
    <!-- POPUP VIDEO -->
    <div class="popup-video">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-video-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- IFRAME WRAP -->
        <div class="iframe-wrap">
            <iframe src="https://www.youtube.com/embed/6ErE27RNLDQ?start=200" allowfullscreen></iframe>
        </div>
        <!-- /IFRAME WRAP -->
    </div>
    <!-- /POPUP VIDEO -->

    <!-- POPUP PICTURE -->
    <div class="popup-picture">
        <!-- POPUP CLOSE BUTTON -->
        <div class="popup-close-button popup-picture-trigger">
            <!-- POPUP CLOSE BUTTON ICON -->
            <svg class="popup-close-button-icon icon-cross">
                <use xlink:href="#svg-cross"></use>
            </svg>
            <!-- /POPUP CLOSE BUTTON ICON -->
        </div>
        <!-- /POPUP CLOSE BUTTON -->

        <!-- WIDGET BOX -->
        <div class="widget-box no-padding">
            <!-- WIDGET BOX SCROLLABLE -->
            <div class="widget-box-scrollable" data-simplebar>
                <!-- WIDGET BOX SETTINGS -->
                <div class="widget-box-settings">
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
                            <p class="simple-dropdown-link">Edit Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Delete Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Make it Featured</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Post</p>
                            <!-- /SIMPLE DROPDOWN LINK -->

                            <!-- SIMPLE DROPDOWN LINK -->
                            <p class="simple-dropdown-link">Report Author</p>
                            <!-- /SIMPLE DROPDOWN LINK -->
                        </div>
                        <!-- /SIMPLE DROPDOWN -->
                    </div>
                    <!-- /POST SETTINGS WRAP -->
                </div>
                <!-- /WIDGET BOX SETTINGS -->

                <!-- WIDGET BOX STATUS -->
                <div class="widget-box-status">
                    <!-- WIDGET BOX STATUS CONTENT -->
                    <div class="widget-box-status-content">
                        <!-- USER STATUS -->
                        <div class="user-status">
                            <!-- USER STATUS AVATAR -->
                            <a class="user-status-avatar" href="profile-timeline.html">
                                <!-- USER AVATAR -->
                                <div class="user-avatar small no-outline">
                                    <!-- USER AVATAR CONTENT -->
                                    <div class="user-avatar-content">
                                        <!-- HEXAGON -->
                                        <div class="hexagon-image-30-32" data-src="{!! asset('theme/img/avatar/01.jpg') !!}"></div>
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
                            <p class="user-status-title medium"><a class="bold" href="profile-timeline.html">Marina Valentine</a></p>
                            <!-- /USER STATUS TITLE -->

                            <!-- USER STATUS TEXT -->
                            <p class="user-status-text small">29 minutes ago</p>
                            <!-- /USER STATUS TEXT -->
                        </div>
                        <!-- /USER STATUS -->

                        <!-- WIDGET BOX STATUS TEXT -->
                        <p class="widget-box-status-text">Here's a sneak peek of the official box cover art for <a href="#">Machine Wasteland II</a>! Remember that I'll be having a stream showing a preview tommorrow at 9PM PCT!</p>
                        <!-- /WIDGET BOX STATUS TEXT -->

                        <!-- TAG LIST -->
                        <div class="tag-list">
                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Cover</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Preview</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Art</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Machine</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Wasteland</a>
                            <!-- /TAG ITEM -->
                        </div>
                        <!-- /TAG LIST -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LIST -->
                                    <div class="meta-line-list reaction-item-list">
                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/love.png') !!}" alt="reaction-love">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/love.png') !!}" alt="reaction-love"> <span class="bold">Love</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Destroy Dex</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">The Green Goo</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Bearded Wonder</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Sandra Strange</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Matt Parker</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">James Murdock</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><span class="bold">and 14 more...</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/wow.png') !!}" alt="reaction-wow">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/wow.png') !!}" alt="reaction-wow"> <span class="bold">Wow</span></p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->

                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text">Jett Spiegel</p>
                                                <!-- /SIMPLE DROPDOWN TEXT -->
                                            </div>
                                            <!-- /SIMPLE DROPDOWN -->
                                        </div>
                                        <!-- /REACTION ITEM -->

                                        <!-- REACTION ITEM -->
                                        <div class="reaction-item">
                                            <!-- REACTION IMAGE -->
                                            <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/like.png') !!}" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/like.png') !!}" alt="reaction-like"> <span class="bold">Like</span></p>
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
                                    <p class="meta-line-text">24</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->

                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link">13 Comments</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TEXT -->
                                    <p class="meta-line-text">0 Shares</p>
                                    <!-- /META LINE TEXT -->
                                </div>
                                <!-- /META LINE -->
                            </div>
                            <!-- /CONTENT ACTION -->
                        </div>
                        <!-- /CONTENT ACTIONS -->
                    </div>
                    <!-- /WIDGET BOX STATUS CONTENT -->
                </div>
                <!-- /WIDGET BOX STATUS -->

                <!-- POST OPTIONS -->
                <div class="post-options">
                    <!-- POST OPTION WRAP -->
                    <div class="post-option-wrap">
                        <!-- POST OPTION -->
                        <div class="post-option no-text reaction-options-dropdown-trigger">
                            <!-- POST OPTION ICON -->
                            <svg class="post-option-icon icon-thumbs-up">
                                <use xlink:href="#svg-thumbs-up"></use>
                            </svg>
                            <!-- /POST OPTION ICON -->
                        </div>
                        <!-- /POST OPTION -->

                        @include('_partials.reaction')
                    </div>
                    <!-- /POST OPTION WRAP -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text active">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-comment">
                            <use xlink:href="#svg-comment"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->

                    <!-- POST OPTION -->
                    <div class="post-option no-text">
                        <!-- POST OPTION ICON -->
                        <svg class="post-option-icon icon-share">
                            <use xlink:href="#svg-share"></use>
                        </svg>
                        <!-- /POST OPTION ICON -->
                    </div>
                    <!-- /POST OPTION -->
                </div>
                <!-- /POST OPTIONS -->

                <!-- POST COMMENT LIST -->
                <div class="post-comment-list">
                    <!-- POST COMMENT -->
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{!! asset('theme/img/avatar/05.jpg') !!}"></div>
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
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Neko Bebop</a>It's always a pleasure to do this streams with you! If we have at least half the fun than last time it will be an incredible success!</p>
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
                                            <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/happy.png') !!}" alt="reaction-happy">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/happy.png') !!}" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                                            <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/like.png') !!}" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/like.png') !!}" alt="reaction-like"> <span class="bold">Like</span></p>
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

                                    @include('_partials.reaction')
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">15 min ago</p>
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
                    <div class="post-comment unread reply-2">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{!! asset('theme/img/avatar/03.jpg') !!}"></div>
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
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Nick Grissom</a>I wouldn't miss it for anything!! Love both streams!</p>
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
                                            <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/like.png') !!}" alt="reaction-like">
                                            <!-- /REACTION IMAGE -->

                                            <!-- SIMPLE DROPDOWN -->
                                            <div class="simple-dropdown padded reaction-item-dropdown">
                                                <!-- SIMPLE DROPDOWN TEXT -->
                                                <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/like.png') !!}" alt="reaction-like"> <span class="bold">Like</span></p>
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

                                    @include('_partials.reaction')
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">2 min ago</p>
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
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{!! asset('theme/img/avatar/02.jpg') !!}"></div>
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
                                <p class="user-avatar-badge-text">19</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Destroy Dex</a>YEAHHH!! <a href="profile-timeline.html">@MarinaValentine</a> I really enjoyed your last stream and it also was really funny! Can't wait!</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    @include('_partials.reaction')
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">27 min ago</p>
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
                    <div class="post-comment">
                        <!-- USER AVATAR -->
                        <a class="user-avatar small no-outline" href="profile-timeline.html">
                            <!-- USER AVATAR CONTENT -->
                            <div class="user-avatar-content">
                                <!-- HEXAGON -->
                                <div class="hexagon-image-30-32" data-src="{!! asset('theme/img/avatar/07.jpg') !!}"></div>
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
                                <p class="user-avatar-badge-text">26</p>
                                <!-- /USER AVATAR BADGE TEXT -->
                            </div>
                            <!-- /USER AVATAR BADGE -->
                        </a>
                        <!-- /USER AVATAR -->

                        <!-- POST COMMENT TEXT -->
                        <p class="post-comment-text"><a class="post-comment-text-author" href="profile-timeline.html">Sarah Diamond</a>That sounds awesome Marina! And also thanks a lot for the art sneak peek! I went to the GameCon last week and had a great time playing the game's open demo.</p>
                        <!-- /POST COMMENT TEXT -->

                        <!-- CONTENT ACTIONS -->
                        <div class="content-actions">
                            <!-- CONTENT ACTION -->
                            <div class="content-action">
                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light reaction-options-small-dropdown-trigger">React!</p>
                                    <!-- /META LINE LINK -->

                                    @include('_partials.reaction')
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE LINK -->
                                    <p class="meta-line-link light">Reply</p>
                                    <!-- /META LINE LINK -->
                                </div>
                                <!-- /META LINE -->

                                <!-- META LINE -->
                                <div class="meta-line">
                                    <!-- META LINE TIMESTAMP -->
                                    <p class="meta-line-timestamp">39 min ago</p>
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

                    <!-- POST COMMENT HEADING -->
                    <p class="post-comment-heading">Load More Comments <span class="highlighted">9+</span></p>
                    <!-- /POST COMMENT HEADING -->
                </div>
                <!-- /POST COMMENT LIST -->
            </div>
            <!-- /WIDGET BOX SCROLLABLE -->

            <!-- POST COMMENT FORM -->
            <div class="post-comment-form bordered-top">
                <!-- USER AVATAR -->
                <div class="user-avatar small no-outline">
                    <!-- USER AVATAR CONTENT -->
                    <div class="user-avatar-content">
                        <!-- HEXAGON -->
                        <div class="hexagon-image-30-32" data-src="{!! asset('theme/img/avatar/01.jpg') !!}"></div>
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

                <!-- FORM -->
                <form class="form">
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="popup-post-reply">Your Reply</label>
                                <input type="text" id="popup-post-reply" name="popup_post_reply">
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
        <!-- /WIDGET BOX -->

        <!-- POPUP PICTURE IMAGE WRAP -->
        <div class="popup-picture-image-wrap">
            <!-- POPUP PICTURE IMAGE -->
            <figure class="popup-picture-image">
                <img src="{!! asset('theme/img/cover/04.jpg') !!}" alt="cover-04">
            </figure>
            <!-- /POPUP PICTURE IMAGE -->
        </div>
        <!-- /POPUP PICTURE IMAGE WRAP -->
    </div>
    <!-- /POPUP PICTURE -->
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
