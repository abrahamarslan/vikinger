@extends('_layouts.layout')
@section('title', 'Create Blog Post')
<!-- Include stylesheet -->
<script src="https://cdn.jsdelivr.net/npm/@editorjs/editorjs@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/list@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/header@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/paragraph@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/underline@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/embed@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/simple-image@latest"></script>
<script src="https://cdn.jsdelivr.net/npm/@editorjs/delimiter@latest"></script>

@section('content')
<div class="content-grid">

    <!-- SECTION BANNER -->
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{!! asset('theme/img/banner/groups-icon.png') !!}" alt="marketplace-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Add Blog Post</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Add a new blog Post</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Blogs</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Add Blog</h2>
            <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
    </div>
    <!-- /SECTION HEADER -->

    <!-- GRID -->
    <div class="grid grid-8-4 small-space">
        <!-- GRID COLUMN -->
        <div class="grid-column">
            <!-- WIDGET BOX -->
            <div class="widget-box">
                <!-- WIDGET BOX TITLE -->
                <p class="widget-box-title">Blog Details</p>
                <!-- /WIDGET BOX TITLE -->

                <!-- WIDGET BOX CONTENT -->
                <div class="widget-box-content">
                    <!-- FORM -->
                    {!! Form::open(['route' => 'blog.store', 'method' => 'POST', 'class' => 'form', 'novalidate' => 'novalidate', 'enctype' => 'multipart/form-data', 'id' => 'postForm' ]) !!}
                    {!! Form::token() !!}
                    <div class="form-row split hidden-row">
                        <div class="form-item">
                            <input type="file" name="image" id="blogSEOImage" />
                        </div>
                        <div class="form-item">
                            <input type="file" name="seo_image" id="blogImage" />
                        </div>
                    </div>
                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="title">Title</label>
                                {!! Form::text('title', null, ['class' => '', 'required' => 'true', 'placeholder' => 'Title' ]) !!}
                             </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->



                    <!-- FORM ROW -->
                    <div class="form-row split">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="slug">Slug</label>
                                {!! Form::text('slug', null, ['class' => '', 'required' => 'true', 'placeholder' => 'Slug' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->

                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM SELECT -->
                            <div class="form-select">
                                <label for="category-parent">Category</label>
                            {!! Form::select('category_id', $categories, null, ['class' => '', 'required' => 'true', 'placeholder' => 'Select a parent category' ]) !!}
                            <!-- FORM SELECT ICON -->
                                <svg class="form-select-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /FORM SELECT ICON -->
                            </div>
                            <!-- /FORM SELECT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small medium-textarea" id="editor">
                            </div>
                            <div id="postBody">

                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item top-m-20">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="seo-title">Tags</label>
                                {!! Form::text('tags', null, ['class' => '', 'placeholder' => 'Tags' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="seo-title">SEO Title</label>
                                {!! Form::text('seo_title', null, ['class' => '', 'placeholder' => 'SEO Title' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="seo-description">SEO Description</label>
                                {!! Form::text('seo_description', null, ['class' => '', 'placeholder' => 'SEO Description' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row split">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="category-canonical-url">Canonical URL</label>
                                {!! Form::text('seo_canonical_url', null, ['class' => '', 'placeholder' => 'SEO Canonical URL' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->

                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="category-seo-site">SEO Site</label>
                                {!! Form::text('seo_site', null, ['class' => '', 'placeholder' => 'SEO Site' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row split">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="category-seo-type">SEO Type</label>
                                {!! Form::text('seo_type', null, ['class' => '', 'placeholder' => 'SEO Type' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->

                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="category-seo-locale">SEO Locale</label>
                                {!! Form::text('seo_locale', null, ['class' => '', 'placeholder' => 'SEO Locale' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <!-- FORM ROW -->
                    <div class="form-row split">
                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM INPUT -->
                            <div class="form-input small">
                                <label for="category-seo-seperator">SEO Seperator</label>
                                {!! Form::text('seo_separator', null, ['class' => '', 'placeholder' => 'SEO Operator' ]) !!}
                            </div>
                            <!-- /FORM INPUT -->
                        </div>
                        <!-- /FORM ITEM -->

                        <!-- FORM ITEM -->
                        <div class="form-item">
                            <!-- FORM SELECT -->
                            <div class="form-select">
                                <label for="category-status">Status</label>
                            {!! Form::select('status', ['1' => 'Enabled', '0' => 'Disabled'], null, ['class' => '', 'required' => 'true', 'placeholder' => 'Select status' ]) !!}
                            <!-- FORM SELECT ICON -->
                                <svg class="form-select-icon icon-small-arrow">
                                    <use xlink:href="#svg-small-arrow"></use>
                                </svg>
                                <!-- /FORM SELECT ICON -->
                            </div>
                            <!-- /FORM SELECT -->
                        </div>
                        <!-- /FORM ITEM -->
                    </div>
                    <!-- /FORM ROW -->

                    <div class="form-row">
                        <div class="form-item">
                            <!-- BUTTON -->
                            <button type="submit" class="button primary">Save</button>
                            <!-- /BUTTON -->
                        </div>
                    </div>
                    <input type="hidden" name="post_status" class="hidden-row" value="published" id="postStatus" />
                {!! Form::close() !!}
                <!-- /FORM -->
                </div>
                <!-- WIDGET BOX CONTENT -->
            </div>
            <!-- /WIDGET BOX -->
        </div>
        <!-- /GRID COLUMN -->

        <!-- GRID COLUMN -->
        <div class="grid-column">
            <!-- SIDEBAR BOX -->
            <div class="sidebar-box">
                <!-- IMAGE PREVIEW -->
                <div class="product-preview">
                    <a href="#">
                        <figure class="product-preview-image liquid" id="previewBlogImage">
                            <img src="https://via.placeholder.com/284/180" />
                        </figure>
                    </a>
                    <!-- IMAGE PREVIEW INFO -->
                    <div class="product-preview-info">
                        <!-- TEXT STICKER -->
                        <p id="uploadBlogImage" class="text-sticker"><span class="highlighted fa fa-upload top-m-5"></span></p>
                        <!-- /TEXT STICKER -->
                        <p class="product-preview-title text-center">Blog Image</p>
                        <p class="product-preview-category digital blog-category text-center">JPG | PNG | JPEG | <2M</p>
                    </div>
                    <!-- /IMAGE PREVIEW INFO -->
                </div>
                <!-- /IMAGE PREVIEW -->
                <div class="image-spaced"></div>
                <!-- IMAGE PREVIEW -->
                <div class="product-preview">
                    <a href="#">
                        <figure class="product-preview-image liquid" id="previewBlogSEOImage">
                            <img src="https://via.placeholder.com/284/180" />
                        </figure>
                    </a>
                    <!-- IMAGE PREVIEW INFO -->
                    <div class="product-preview-info">
                        <!-- TEXT STICKER -->
                        <p id="uploadBlogSEOImage" class="text-sticker"><span class="highlighted fa fa-upload top-m-5"></span></p>
                        <!-- /TEXT STICKER -->
                        <p class="product-preview-title text-center">SEO Image</p>
                        <p class="product-preview-category digital blog-category text-center">JPG | PNG | JPEG | <2M</p>
                    </div>
                    <!-- /IMAGE PREVIEW INFO -->
                </div>
                <!-- /IMAGE PREVIEW -->

                <!-- SIDEBAR BOX TITLE -->
                <p class="sidebar-box-title">Post Status</p>
                <!-- /SIDEBAR BOX TITLE -->

                <!-- SIDEBAR BOX ITEMS -->
                <div class="sidebar-box-items">
                    <!-- FORM -->
                    <form class="form">
                        <!-- CHECKBOX WRAP -->
                        <div class="checkbox-wrap">
                            <input type="radio" id="post_status_published" name="post_status" value="published" onclick="postStatus(this)" checked>
                            <!-- CHECKBOX BOX -->
                            <div class="checkbox-box round"></div>
                            <!-- /CHECKBOX BOX -->
                            <label class="accordion-trigger-linked" for="post_status_published">Published</label>

                        </div>
                        <!-- /CHECKBOX WRAP -->
                        <!-- CHECKBOX WRAP -->
                        <div class="checkbox-wrap">
                            <input type="radio" id="post_status_draft" name="post_status" value="draft" onclick="postStatus(this)">
                            <!-- CHECKBOX BOX -->
                            <div class="checkbox-box round"></div>
                            <!-- /CHECKBOX BOX -->
                            <label class="accordion-trigger-linked" for="post_status_draft">Draft</label>

                        </div>
                        <!-- /CHECKBOX WRAP -->
                    </form>
                    <!-- /FORM -->
                </div>
                <!-- /SIDEBAR BOX ITEMS -->
            </div>
            <!-- /SIDEBAR BOX -->
        </div>
        <!-- /GRID COLUMN -->
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
    <!-- Include the Quill library -->
    <script type="text/javascript">
        var uploadBlogButton = document.getElementById('uploadBlogImage');
        var uploadSEOButton = document.getElementById('uploadBlogSEOImage');
        var blogImageElement = document.getElementById('blogImage');
        var previewBlogImageElement = document.getElementById('previewBlogImage');
        var previewBlogSEOImageElement = document.getElementById('previewBlogSEOImage');
        var blogSEOImageElement = document.getElementById('blogSEOImage');
        var postStatusElement = document.getElementById('postStatus');
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

        /*
            Handle post status change
             */
        var defaultPostStatus = 'published';
        function postStatus(element) {
            postStatusElement.value = element.value;
        }

    </script>
    <script type="text/javascript">
        const editor = new EditorJS({
            /**
             * Id of Element that should contain Editor instance
             */
            holder: 'postBody',
            tools: {
                header: {
                    class: Header,
                    inlineToolbar: ['link']
                },
                paragraph: {
                    class: Paragraph,
                    inlineToolbar: true
                },
                list: {
                    class: List,
                    inlineToolbar: true
                },
                underline: Underline,
                embed: {
                    class: Embed,
                    inlineToolbar: true
                },
                image: {
                    class: SimpleImage,
                    inlineToolbar: true,
                    config: {
                        placeholder: 'Paste image URL'
                    }
                },
                delimiter: Delimiter,
            },
        });
    </script>
@stop
