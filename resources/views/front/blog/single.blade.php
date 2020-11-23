@extends('_layouts.layout')
@section('title', 'Blog Posts')
<!-- Include stylesheet -->
@section('content')

    <!-- CONTENT GRID -->
    <div class="content-grid full">
        <!-- POST OPEN -->
        <article class="post-open">
            <!-- POST OPEN COVER -->
            <figure class="post-open-cover liquid">
                <img src="{!! asset('theme/img/cover/19.jpg') !!}" alt="cover-19">
            </figure>
            <!-- /POST OPEN COVER -->

            <!-- POST OPEN BODY -->
            <div class="post-open-body">
                <!-- POST OPEN HEADING -->
                <div class="post-open-heading">
                    <!-- POST OPEN TIMESTAMP -->
                    <p class="post-open-timestamp"><span class="highlighted">2 days ago</span>5 mins read</p>
                    <!-- /POST OPEN TIMESTAMP -->

                    <!-- POST OPEN TITLE -->
                    <h2 class="post-open-title">Here's the how and why did I became a full time Gaming Streamer</h2>
                    <!-- /POST OPEN TITLE -->
                </div>
                <!-- /POST OPEN HEADING -->

                <!-- POST OPEN CONTENT -->
                <div class="post-open-content">
                    <!-- POST OPEN CONTENT SIDEBAR -->
                    <div class="post-open-content-sidebar">
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

                        <!-- POST OPEN SIDEBAR TITLE -->
                        <p class="post-open-sidebar-title">Share!</p>
                        <!-- /POST OPEN SIDEBAR TITLE -->

                        <!-- SOCIAL LINKS -->
                        <div class="social-links vertical">
                            <!-- SOCIAL LINK -->
                            <a class="social-link void facebook" href="#">
                                <!-- ICON FACEBOOK -->
                                <svg class="icon-facebook">
                                    <use xlink:href="#svg-facebook"></use>
                                </svg>
                                <!-- /ICON FACEBOOK -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a class="social-link void twitter" href="#">
                                <!-- ICON TWITTER -->
                                <svg class="icon-twitter">
                                    <use xlink:href="#svg-twitter"></use>
                                </svg>
                                <!-- /ICON TWITTER -->
                            </a>
                            <!-- /SOCIAL LINK -->
                        </div>
                        <!-- /SOCIAL LINKS -->
                    </div>
                    <!-- /POST OPEN CONTENT SIDEBAR -->

                    <!-- POST OPEN CONTENT BODY -->
                    <div class="post-open-content-body">
                        <!-- POST OPEN PARAGRAPH -->
                        <p class="post-open-paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <!-- /POST OPEN PARAGRAPH -->

                        <!-- POST OPEN PARAGRAPH -->
                        <p class="post-open-paragraph">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                        <!-- /POST OPEN PARAGRAPH -->

                        <!-- POST OPEN IMAGE -->
                        <figure class="post-open-image liquid">
                            <img src="{!! asset('theme/img/cover/06.jpg') !!}" alt="cover-06">
                        </figure>
                        <!-- /POST OPEN IMAGE -->

                        <!-- POST OPEN IMAGE INFO -->
                        <p class="post-open-image-caption">Elemental Witches is the first game with which I started streaming</p>
                        <!-- /POST OPEN IMAGE INFO -->

                        <!-- POST OPEN PARAGRAPH -->
                        <p class="post-open-paragraph">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas estias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                        <!-- /POST OPEN PARAGRAPH -->

                        <!-- TAG LIST -->
                        <div class="tag-list">
                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Streamer</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Gaming</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Job</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Life</a>
                            <!-- /TAG ITEM -->

                            <!-- TAG ITEM -->
                            <a class="tag-item secondary" href="newsfeed.html">Experience</a>
                            <!-- /TAG ITEM -->
                        </div>
                        <!-- /TAG LIST -->
                    </div>
                    <!-- /POST OPEN CONTENT BODY -->
                </div>
                <!-- /POST OPEN CONTENT -->

               @include('_partials.post_actions')

               @include('_partials.post_comments')
            </div>
            <!-- /POST OPEN BODY -->
        </article>
        <!-- /POST OPEN -->
    </div>
    <!-- /CONTENT GRID -->

    <!-- CONTENT GRID -->
    <div class="content-grid medium">
        <!-- SECTION HEADER -->
        <div class="section-header medium">
            <!-- SECTION HEADER INFO -->
            <div class="section-header-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">Browse Other</p>
                <!-- /SECTION PRETITLE -->

                <!-- SECTION TITLE -->
                <h2 class="section-title">Related Posts</h2>
                <!-- /SECTION TITLE -->
            </div>
            <!-- /SECTION HEADER INFO -->
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID -->
        <div class="grid grid-4-4 centered">
            <!-- POST PREVIEW -->
            <div class="post-preview">
                <!-- POST PREVIEW IMAGE -->
                <figure class="post-preview-image liquid">
                    <img src="{!! asset('theme/img/cover/10.jpg') !!}" alt="cover-10">
                </figure>
                <!-- /POST PREVIEW IMAGE -->

                <!-- POST PREVIEW INFO -->
                <div class="post-preview-info fixed-height">
                    <!-- POST PREVIEW INFO TOP -->
                    <div class="post-preview-info-top">
                        <!-- POST PREVIEW TIMESTAMP -->
                        <p class="post-preview-timestamp">3 weeks ago</p>
                        <!-- /POST PREVIEW TIMESTAMP -->

                        <!-- POST PREVIEW TITLE -->
                        <p class="post-preview-title">I spoke with the developers of RoBot SaMurai II at the 2019 GamingCon</p>
                        <!-- /POST PREVIEW TITLE -->
                    </div>
                    <!-- /POST PREVIEW INFO TOP -->

                    <!-- POST PREVIEW INFO BOTTOM -->
                    <div class="post-preview-info-bottom">
                        <!-- POST PREVIEW TEXT -->
                        <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                        <!-- /POST PREVIEW TEXT -->

                        <!-- POST PREVIEW LINK -->
                        <a class="post-preview-link" href="profile-post.html">Read more...</a>
                        <!-- /POST PREVIEW LINK -->
                    </div>
                    <!-- /POST PREVIEW INFO BOTTOM -->
                </div>
                <!-- /POST PREVIEW INFO -->

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
                                    <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/happy.png') !!}" alt="reaction-happy">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/happy.png') !!}" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                                    <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/love.png') !!}" alt="reaction-love">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/love.png') !!}" alt="reaction-love"> <span class="bold">Love</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jett Spiegel</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jane Rodgers</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->

                                <!-- REACTION ITEM -->
                                <div class="reaction-item">
                                    <!-- REACTION IMAGE -->
                                    <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/funny.png') !!}" alt="reaction-funny">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/funny.png') !!}" alt="reaction-funny"> <span class="bold">Funny</span></p>
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

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jett Spiegel</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Marcus Jhonson</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jane Rodgers</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><span class="bold">and 10 more...</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->
                            </div>
                            <!-- /REACTION ITEM LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">21</p>
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
                            <a class="meta-line-link" href="profile-post.html#comments">8 Comments</a>
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
            <!-- /POST PREVIEW -->

            <!-- POST PREVIEW -->
            <div class="post-preview">
                <!-- POST PREVIEW IMAGE -->
                <figure class="post-preview-image liquid">
                    <img src="{!! asset('theme/img/cover/20.jpg') !!}" alt="cover-20">
                </figure>
                <!-- /POST PREVIEW IMAGE -->

                <!-- POST PREVIEW INFO -->
                <div class="post-preview-info fixed-height">
                    <!-- POST PREVIEW INFO TOP -->
                    <div class="post-preview-info-top">
                        <!-- POST PREVIEW TIMESTAMP -->
                        <p class="post-preview-timestamp">4 weeks ago</p>
                        <!-- /POST PREVIEW TIMESTAMP -->

                        <!-- POST PREVIEW TITLE -->
                        <p class="post-preview-title">I will be at this month's StreamCon with NekoBebop</p>
                        <!-- /POST PREVIEW TITLE -->
                    </div>
                    <!-- /POST PREVIEW INFO TOP -->

                    <!-- POST PREVIEW INFO BOTTOM -->
                    <div class="post-preview-info-bottom">
                        <!-- POST PREVIEW TEXT -->
                        <p class="post-preview-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut...</p>
                        <!-- /POST PREVIEW TEXT -->

                        <!-- POST PREVIEW LINK -->
                        <a class="post-preview-link" href="profile-post.html">Read more...</a>
                        <!-- /POST PREVIEW LINK -->
                    </div>
                    <!-- /POST PREVIEW INFO BOTTOM -->
                </div>
                <!-- /POST PREVIEW INFO -->

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
                                    <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/happy.png') !!}" alt="reaction-happy">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/happy.png') !!}" alt="reaction-happy"> <span class="bold">Happy</span></p>
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
                                    <img class="reaction-image reaction-item-dropdown-trigger" src="{!! asset('theme/img/reaction/love.png') !!}" alt="reaction-love">
                                    <!-- /REACTION IMAGE -->

                                    <!-- SIMPLE DROPDOWN -->
                                    <div class="simple-dropdown padded reaction-item-dropdown">
                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text"><img class="reaction" src="{!! asset('theme/img/reaction/love.png') !!}" alt="reaction-love"> <span class="bold">Love</span></p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jett Spiegel</p>
                                        <!-- /SIMPLE DROPDOWN TEXT -->

                                        <!-- SIMPLE DROPDOWN TEXT -->
                                        <p class="simple-dropdown-text">Jane Rodgers</p>
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
                                    </div>
                                    <!-- /SIMPLE DROPDOWN -->
                                </div>
                                <!-- /REACTION ITEM -->
                            </div>
                            <!-- /REACTION ITEM LIST -->

                            <!-- META LINE TEXT -->
                            <p class="meta-line-text">8</p>
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
                            <a class="meta-line-link" href="profile-post.html#comments">2 Comments</a>
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
            <!-- /POST PREVIEW -->
        </div>
        <!-- /GRID -->
    </div>
    <!-- /CONTENT GRID -->

@stop
@section('after_scripts')

@stop
