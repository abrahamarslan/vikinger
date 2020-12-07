@extends('_layouts.layout')
@section('title', 'Blog Posts')
@section('after_styles')
    <!-- Include stylesheet -->
    <link rel="stylesheet" href="{!! asset('css/blog.css') !!}">
@endsection

@section('content')
    <!-- CONTENT GRID -->
    <div class="content-grid full">
        <!-- POST OPEN -->
        <article class="post-open">
            <!-- POST OPEN COVER -->
            <figure class="post-open-cover liquid" style="background: url('{!! $image !!}') center center / cover no-repeat">

            </figure>
            <!-- /POST OPEN COVER -->

            <!-- POST OPEN BODY -->
            <div class="post-open-body">
                <!-- POST OPEN HEADING -->
                <div class="post-open-heading">
                    <!-- POST OPEN TIMESTAMP -->
                    <p class="post-open-timestamp"><span class="highlighted">{!! date('d M, Y', strtotime($blog->created_at)) !!}</span></p>
                    <!-- /POST OPEN TIMESTAMP -->
                    <!-- POST OPEN TITLE -->
                    <h2 class="post-open-title">{!! $blog->title !!}</h2>
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
                                <div class="hexagon-image-30-32" data-src="{!! $blog->user()->first()->thumbnail !!}"></div>
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

                        </div>
                        <!-- /USER AVATAR -->

                        <!-- POST OPEN SIDEBAR TITLE -->
                        <p class="post-open-sidebar-title">Share!</p>
                        <!-- /POST OPEN SIDEBAR TITLE -->

                        <!-- SOCIAL LINKS -->
                        <div class="social-links vertical">
                            <!-- SOCIAL LINK -->
                            <a target="_blank" class="social-link void facebook" href="https://www.facebook.com/sharer/sharer.php?u={!! route('blog.getBlog', ['username' => $blog->user()->first()->username, 'slug' => $blog->slug]) !!}">
                                <!-- ICON FACEBOOK -->
                                <svg class="icon-facebook">
                                    <use xlink:href="#svg-facebook"></use>
                                </svg>
                                <!-- /ICON FACEBOOK -->
                            </a>
                            <!-- /SOCIAL LINK -->

                            <!-- SOCIAL LINK -->
                            <a target="_blank" class="social-link void twitter" href="https://twitter.com/intent/tweet?url={!! route('blog.getBlog', ['username' => $blog->user()->first()->username, 'slug' => $blog->slug])!!}">
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
                        <div id="post-content">

                        </div>
                        <!-- TAG LIST -->
                        @if($blog->tags !== null)
                            <div class="tag-list">
                                @foreach(explode(',', $blog->tags) as $tag)
                                <!-- TAG ITEM -->
                                <a class="tag-item secondary" href="#">{!! $tag !!}</a>
                                <!-- /TAG ITEM -->
                                @endforeach
                            </div>
                        @endif
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
    @if(isset($relatedPosts))
        @if($relatedPosts != null)
            @include('_partials.blog_related')
        @endif
    @endif
@stop
@section('after_scripts')
<script type="text/javascript">
    (function () {
        var json = {!! json_encode($blog->body) !!};
        var html = '';
        json.forEach(function (block) {
           switch (block.type) {
               case 'header':
                   html += `<h${block.data.level}>${block.data.text}</h${block.data.level}>`;
                   break;
               case 'paragraph':
                   html += `<p class="pad">${block.data.text}</p>`;
                   break;
               case 'delimiter':
                   html += '<hr />';
                   break;
               case 'image':
                   if(block.data.url) {
                       html += `<div class="text-center"><img loading="lazy" class="img-fluid pad" src="${block.data.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em></div>`;
                   } else {
                       html += `<div class="text-center"><img loading="lazy" class="img-fluid pad" src="${block.data.file.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em></div>`;
                   }

                   break;
               case 'search':
                   html += `<div class="text-center"><img loading="lazy" class="img-fluid pad" src="${block.data.url}" title="${block.data.caption}" /><br /><em>${block.data.caption}</em></div>`;
                   break;
               case 'list':
                   html += '<ul>';
                   html += `<a target="_blank" href="${block.data.link}"> <li class="link">${block.data.link}</li></a>`;
                   /*
                   block.data.items.forEach(function(li) {
                       html += `<li>${li}</li>`;
                   });
                   */
                   html += '</ul>';
                   break;
               default:
                   console.log('Unknown block type', block.type);
                   console.log(block);
                   break;
           }
        });
        document.getElementById('post-content').innerHTML = html;
    })();
</script>
@stop
