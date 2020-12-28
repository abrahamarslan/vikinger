@extends('_layouts.layout')
@section('title', 'Blog Posts')
<!-- Include stylesheet -->
@section('content')
<div class="content-grid">
    <!-- SECTION BANNER -->
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{!! asset('theme/img/banner/groups-icon.png') !!}" alt="marketplace-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Latest Blogs</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Find out what's new!</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
            <!-- SECTION PRETITLE -->
        @if(isset($category))
            <p class="section-pretitle">{!! $category->title !!}</p>
        @else
            <p class="section-pretitle">Blogs</p>
        @endif
            <!-- /SECTION PRETITLE -->
            <!-- SECTION TITLE -->
            <h2 class="section-title">Recent Blogs</h2>
            <!-- /SECTION TITLE -->
        </div>
        <!-- /SECTION HEADER INFO -->
    </div>

    <!-- SECTION -->
    <section class="section">
        <!-- SECTION FILTERS BAR -->
        <div class="section-filters-bar v2">
            <!-- FORM -->
        {!! Form::open(['route' => 'blog.filtered', 'method' => 'POST', 'class' => 'form', 'novalidate' => 'novalidate', 'enctype' => 'multipart/form-data', 'id' => 'postForm' ]) !!}
        {!! Form::token() !!}
                <!-- FORM ITEM -->
                <div class="form-item split medium">
                    <!-- FORM SELECT -->
                    <div class="form-select full-width-item">
                        <label for="post-filter-category">Filter Term</label>
                        <input type="text" id="post-filter-category" name="post_filter_category" />
                    </div>
                    <input type="hidden" value="{!! $blogUser->id !!}" name="user_id" />
                    <!-- /FORM SELECT -->               

                    <!-- BUTTON -->
                    <button class="button primary">Filter Posts</button>
                    <!-- /BUTTON -->
                </div>
                <!-- /FORM ITEM -->
            {!! Form::close() !!}
            <!-- /FORM -->
        </div>
        <!-- /SECTION FILTERS BAR -->

        <!-- GRID -->
        <div class="grid grid-4-4-4 centered">
            @if(count($blogs) > 0)
            @foreach($blogs as $blog)
                <!-- POST PREVIEW -->
                <div class="post-preview">
                    <!-- POST PREVIEW IMAGE -->
                    <figure class="post-preview-image liquid" style="background: url('{!! (\GeneralHelper::getSEOImage($blog) == null ? asset(\Config::get('global.blog.upload_folder_path_original') . 'default.png') : \GeneralHelper::getSEOImage($blog)) !!}') center center / cover no-repeat">
                    </figure>
                    <!-- /POST PREVIEW IMAGE -->

                    <!-- POST PREVIEW INFO -->
                    <div class="post-preview-info fixed-height">
                        <!-- POST PREVIEW INFO TOP -->
                        <div class="post-preview-info-top">
                            <!-- POST PREVIEW TIMESTAMP -->
                            <p class="post-preview-timestamp">{!! date('d M, Y', strtotime($blog->created_at)) !!}
                                @if($user->id == $blog->user_id)
                                    <a href="{!! route('blog.destroy', ['blog' => $blog->id]) !!}"><span class="float-right text-danger fa fa-2x fa-trash"></span></a>
                                @endif
                            </p>
                            <!-- /POST PREVIEW TIMESTAMP -->

                            <!-- POST PREVIEW TITLE -->
                            <p class="post-preview-title">{!! GeneralHelper::string_truncate_old($blog->title, 50) !!}
                            </p>
                            <!-- /POST PREVIEW TITLE -->
                        </div>
                        <!-- /POST PREVIEW INFO TOP -->

                        <!-- POST PREVIEW INFO BOTTOM -->
                        <div class="post-preview-info-bottom">
                            <!-- POST PREVIEW TEXT -->
                            <p class="post-preview-text">{!! GeneralHelper::string_truncate_old(GeneralHelper::getSEODescription($blog), 150) !!}</p>
                            <!-- /POST PREVIEW TEXT -->

                            <!-- POST PREVIEW LINK -->
                            <a class="post-preview-link" href="{!!route('blog.getBlog', ['username' => $blog->user()->first()->username, 'slug' => $blog->slug]) !!}">Read more...</a>
                            <!-- /POST PREVIEW LINK -->
                        </div>
                        <!-- /POST PREVIEW INFO BOTTOM -->
                    </div>
                    <!-- /POST PREVIEW INFO -->

                   @include('_partials.content_actions')
                </div>
                <!-- /POST PREVIEW -->
            @endforeach
            @else
                <div class="text-center">
                    <h2>Sorry, no posts found!</h2>
                </div>
            @endif
        </div>
        <!-- /GRID -->
    </section>
    <!-- /SECTION --> <!-- /SECTION HEADER -->
</div>

@stop
@section('after_scripts')

@stop
