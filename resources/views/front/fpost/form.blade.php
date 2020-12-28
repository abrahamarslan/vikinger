@extends('_layouts.layout')
@section('title', 'Create Discussion')
<!-- Include stylesheet -->
<style type="text/css">
    .ce-block__content {
        width: 100% !important;
        max-width: 100% !important;
    }

    .ce-toolbar__content {
        width: 100% !important;
        max-width: 100% !important;
    }
    .ce-paragraph {
        width: 100% !important;
    }
    .cdx-block {
        width: 100% !important;
    }
    #postBody {
        font-size: 20px !important;
    }
    .form-input-outline {
        margin-top: 20px !important;
        background: transparent !important;
        border: none !important;
        font-size: 2rem !important;
        padding-bottom: 20px !important;
        outline: none !important;
        -webkit-box-shadow: none !important;
        -moz-box-shadow: none !important;
        cursor: default;
    }
    .form-input-outline::placeholder {
        font-size: 2rem !important;
    }
    .codex-editor__redactor [contenteditable]:empty:after {
        content: none !important;
    }
</style>
@section('content')
    <div class="content-grid">

        <!-- SECTION BANNER -->
        <div class="section-banner">
            <!-- SECTION BANNER ICON -->
            <img class="section-banner-icon" src="{!! asset('theme/img/banner/groups-icon.png') !!}" alt="marketplace-icon">
            <!-- /SECTION BANNER ICON -->

            <!-- SECTION BANNER TITLE -->
            <p class="section-banner-title">{!! $topic->title !!}</p>
            <!-- /SECTION BANNER TITLE -->

            <!-- SECTION BANNER TEXT -->
            <p class="section-banner-text">Add a discussion</p>
            <!-- /SECTION BANNER TEXT -->
        </div>
        <!-- /SECTION BANNER -->

        <!-- SECTION HEADER -->
        <div class="section-header">
            <!-- SECTION HEADER INFO -->
            <div class="section-header-info">
                <!-- SECTION PRETITLE -->
                <p class="section-pretitle">Discussions</p>
                <!-- /SECTION PRETITLE -->
                <!-- SECTION TITLE -->
                <h2 class="section-title">Add a new discussion</h2>
                <!-- /SECTION TITLE -->
            </div>
            <!-- /SECTION HEADER INFO -->
            <div class="section-banner-text right">
                <button class="btn btn-block btn-outline-secondary" id="publishArticle">Publish</button>
            </div>
        </div>
        <!-- /SECTION HEADER -->
        <!-- GRID -->
        <div class="grid grid-12 small-space">
            <discussion :user='@json($user)' :topic='@json($topic)'></discussion>
        </div>
        <!-- /GRID -->
    </div>
@stop
@section('after_content')

@stop
@section('after_scripts')

@stop
