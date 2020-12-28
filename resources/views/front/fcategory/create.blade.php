@extends('_layouts.layout')
@section('title', 'Create Forum Category')

@section('content')
<div class="content-grid">

    <!-- SECTION BANNER -->
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{!! asset('theme/img/banner/groups-icon.png') !!}" alt="marketplace-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Add Forum Category</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Add a new forum category</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- SECTION HEADER -->
    <div class="section-header">
        <!-- SECTION HEADER INFO -->
        <div class="section-header-info">
            <!-- SECTION PRETITLE -->
            <p class="section-pretitle">Forum Categories</p>
            <!-- /SECTION PRETITLE -->

            <!-- SECTION TITLE -->
            <h2 class="section-title">Add Forum Category</h2>
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
                <p class="widget-box-title">Category Details</p>
                <!-- /WIDGET BOX TITLE -->

                <!-- WIDGET BOX CONTENT -->
                <div class="widget-box-content">
                    <!-- FORM -->
                    {!! Form::open(['route' => 'forum.category.store', 'method' => 'POST', 'class' => 'form', 'novalidate' => 'novalidate', 'enctype' => 'multipart/form-data' ]) !!}
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
\                                </div>
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
                                    <label for="category-parent">Parent Category</label>
                                    {!! Form::select('parent_category_id', $categories, null, ['class' => '', 'required' => 'true', 'placeholder' => 'Select a parent category' ]) !!}
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
                            <div class="form-input small medium-textarea">
                                {!! Form::textarea('description', null, ['class' => '', 'required' => 'true', 'placeholder' => 'Description' ]) !!}
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
                                {!! Form::select('status', ['True' => 'Enabled', 'False' => 'Disabled'], null, ['class' => '', 'required' => 'true', 'placeholder' => 'Select status' ]) !!}
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
                        <p id="uploadBlogImage" class="text-sticker"><span class="highlighted fa fa-upload"></span></p>
                        <!-- /TEXT STICKER -->
                        <p class="product-preview-title text-center">Forum Image</p>
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
                        <p id="uploadBlogSEOImage" class="text-sticker"><span class="highlighted fa fa-upload"></span></p>
                        <!-- /TEXT STICKER -->
                        <p class="product-preview-title text-center">SEO Image</p>
                        <p class="product-preview-category digital blog-category text-center">JPG | PNG | JPEG | <2M</p>
                    </div>
                    <!-- /IMAGE PREVIEW INFO -->
                </div>
                <!-- /IMAGE PREVIEW -->
            </div>
            <!-- /SIDEBAR BOX -->
        </div>
        <!-- /GRID COLUMN -->
    </div>
    <!-- /GRID -->
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
