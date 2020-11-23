@extends('_layouts.layout')
@section('title', 'Messages')

@section('content')
<div class="content-grid">
    <!-- SECTION BANNER -->
    <div class="section-banner">
        <!-- SECTION BANNER ICON -->
        <img class="section-banner-icon" src="{!! asset('theme/img/banner/accounthub-icon.png') !!}" alt="accounthub-icon">
        <!-- /SECTION BANNER ICON -->

        <!-- SECTION BANNER TITLE -->
        <p class="section-banner-title">Account Hub</p>
        <!-- /SECTION BANNER TITLE -->

        <!-- SECTION BANNER TEXT -->
        <p class="section-banner-text">Profile info, messages, settings and much more!</p>
        <!-- /SECTION BANNER TEXT -->
    </div>
    <!-- /SECTION BANNER -->

    <!-- GRID -->
    <div class="grid grid-3-9 medium-space">
        <!-- GRID COLUMN -->
        <div class="account-hub-sidebar">
            <!-- SIDEBAR BOX -->
            <div class="sidebar-box no-padding">
                <!-- SIDEBAR MENU -->
                <div class="sidebar-menu round-borders">
                    <!-- SIDEBAR MENU ITEM -->
                    <div class="sidebar-menu-item">
                        <!-- SIDEBAR MENU HEADER -->
                        <div class="sidebar-menu-header accordion-trigger-linked">
                            <!-- SIDEBAR MENU HEADER ICON -->
                            <svg class="sidebar-menu-header-icon icon-profile">
                                <use xlink:href="#svg-profile"></use>
                            </svg>
                            <!-- /SIDEBAR MENU HEADER ICON -->

                            <!-- SIDEBAR MENU HEADER CONTROL ICON -->
                            <div class="sidebar-menu-header-control-icon">
                                <!-- SIDEBAR MENU HEADER CONTROL ICON OPEN -->
                                <svg class="sidebar-menu-header-control-icon-open icon-minus-small">
                                    <use xlink:href="#svg-minus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON OPEN -->

                                <!-- SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                                <svg class="sidebar-menu-header-control-icon-closed icon-plus-small">
                                    <use xlink:href="#svg-plus-small"></use>
                                </svg>
                                <!-- /SIDEBAR MENU HEADER CONTROL ICON CLOSED -->
                            </div>
                            <!-- /SIDEBAR MENU HEADER CONTROL ICON -->

                            <!-- SIDEBAR MENU HEADER TITLE -->
                            <p class="sidebar-menu-header-title">My Profile</p>
                            <!-- /SIDEBAR MENU HEADER TITLE -->

                            <!-- SIDEBAR MENU HEADER TEXT -->
                            <p class="sidebar-menu-header-text">Change your avatar &amp; cover, accept friends, read messages and more!</p>
                            <!-- /SIDEBAR MENU HEADER TEXT -->
                        </div>
                        <!-- /SIDEBAR MENU HEADER -->

                        <!-- SIDEBAR MENU BODY -->
                        <div class="sidebar-menu-body accordion-content-linked accordion-open">
                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-info.html">Profile Info</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-social.html">Social &amp; Stream</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-notifications.html">Notifications</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link active" href="hub-profile-messages.html">Messages</a>
                            <!-- /SIDEBAR MENU LINK -->

                            <!-- SIDEBAR MENU LINK -->
                            <a class="sidebar-menu-link" href="hub-profile-requests.html">Friend Requests</a>
                            <!-- /SIDEBAR MENU LINK -->
                        </div>
                        <!-- /SIDEBAR MENU BODY -->
                    </div>
                    <!-- /SIDEBAR MENU ITEM -->
                </div>
                <!-- /SIDEBAR MENU -->
            </div>
            <!-- /SIDEBAR BOX -->
        </div>
        <!-- /GRID COLUMN -->

       <chat-widget :user='@json($user)' :members='@json($members)'></chat-widget>
    </div>
    <!-- /GRID -->
</div>
@stop
@section('after_content')
@stop
