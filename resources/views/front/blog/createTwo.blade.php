@extends('_layouts.layout')
@section('title', 'Create Blog Post')
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
            <div class="section-banner-text right">
                <button class="btn btn-block btn-outline-secondary">Publish</button>
            </div>
        </div>
        <!-- /SECTION HEADER -->

        <!-- GRID -->
        <div class="grid grid-12 small-space">
            <div class="form-row">
                <input type="text" class="form-row form-input-outline" placeholder="Title" />
            </div>
           <div class="editor-container" id="postBody">

           </div>
        </div>
        <!-- /GRID -->
    </div>
@stop
@section('after_content')

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
    <script>
        /**
         * To initialize the Editor, create a new instance with configuration object
         * @see docs/installation.md for mode details
         */
        var editor = new EditorJS({
            /**
             * Enable/Disable the read only mode
             */
            readOnly: false,

            /**
             * Wrapper of Editor
             */
            holder: 'postBody',

            /**
             * Common Inline Toolbar settings
             * - if true (or not specified), the order from 'tool' property will be used
             * - if an array of tool names, this order will be used
             */
            // inlineToolbar: ['link', 'marker', 'bold', 'italic'],
            // inlineToolbar: true,

            /**
             * Tools list
             */
            tools: {
                /**
                 * Each Tool is a Plugin. Pass them via 'class' option with necessary settings {@link docs/tools.md}
                 */
                header: {
                    class: Header,
                    inlineToolbar: ['marker', 'link'],
                    config: {
                        placeholder: 'Header'
                    },
                    shortcut: 'CMD+SHIFT+H'
                },

                /**
                 * Or pass class directly without any configuration
                 */
                image :{
                  class: ImageTool,
                  config: {

                  },
                inlineToolbar: true
                },

                list: {
                    class: List,
                    inlineToolbar: true,
                    shortcut: 'CMD+SHIFT+L'
                },


                marker: {
                    class:  Marker,
                    shortcut: 'CMD+SHIFT+M'
                },

                code: {
                    class:  CodeTool,
                    shortcut: 'CMD+SHIFT+C'
                },

                delimiter: Delimiter,

                inlineCode: {
                    class: InlineCode,
                    shortcut: 'CMD+SHIFT+C'
                },

                linkTool: LinkTool,

                embed: Embed,

            },

            /**
             * This Tool will be used as default
             */
            // defaultBlock: 'paragraph',

            /**
             * Initial Editor data
             */
            data: {
                blocks: [
                ]
            },
            onReady: function(){
                saveButton.click();
            },
            onChange: function() {
                console.log('something changed');
            }
        });

        /**
         * Saving button
         */
        const saveButton = document.getElementById('saveButton');

        /**
         * Toggle read-only button
         */
        const toggleReadOnlyButton = document.getElementById('toggleReadOnlyButton');
        const readOnlyIndicator = document.getElementById('readonly-state');

        /**
         * Saving example
         */
        saveButton.addEventListener('click', function () {
            editor.save()
                .then((savedData) => {
                    cPreview.show(savedData, document.getElementById("output"));
                })
                .catch((error) => {
                    console.error('Saving error', error);
                });
        });

        /**
         * Toggle read-only example
         */
        toggleReadOnlyButton.addEventListener('click', async () => {
            const readOnlyState = await editor.readOnly.toggle();

            readOnlyIndicator.textContent = readOnlyState ? 'On' : 'Off';
        });
    </script>
@stop
