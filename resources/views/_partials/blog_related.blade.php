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
        @foreach($relatedPosts as $post)
            @if($post->id != $blog->id)
            <!-- POST PREVIEW -->
            <div class="post-preview">
                <!-- POST PREVIEW IMAGE -->
                <figure class="post-preview-image liquid" style="background: url('{!! asset(\Config::get('global.blog.upload_folder_path_original') . $post->image) !!}') center center / cover no-repeat">
                </figure>
                <!-- /POST PREVIEW IMAGE -->

                <!-- POST PREVIEW INFO -->
                <div class="post-preview-info fixed-height related-posts">
                    <!-- POST PREVIEW INFO TOP -->
                    <div class="post-preview-info-top">
                        <!-- POST PREVIEW TIMESTAMP -->
                        <p class="post-preview-timestamp">{!! date('d M, Y', strtotime($post->created_at)) !!}</p>
                        <!-- /POST PREVIEW TIMESTAMP -->

                        <!-- POST PREVIEW TITLE -->
                        <p class="post-preview-title">{!! GeneralHelper::string_truncate_old($post->title, 50) !!}</p>
                        <!-- /POST PREVIEW TITLE -->
                    </div>
                    <!-- /POST PREVIEW INFO TOP -->

                    <!-- POST PREVIEW INFO BOTTOM -->
                    <div class="post-preview-info-bottom">
                        <!-- POST PREVIEW TEXT -->
                        <p class="post-preview-text">{!! GeneralHelper::string_truncate_old($post->seo_description, 150) !!}</p>
                        <!-- /POST PREVIEW TEXT -->

                        <!-- POST PREVIEW LINK -->
                        <a class="post-preview-link" href="{!! route('blog.getBlog', ['username' => $post->user()->first()->username, 'slug' => $post->slug]) !!}">Read more...</a>
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
            @endif
        @endforeach
    </div>
    <!-- /GRID -->
</div>
<!-- /CONTENT GRID -->
