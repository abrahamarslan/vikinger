<template>
    <div class="fs-editor">
        <div class="form-row">
            <input type="text" class="form-row form-input-outline" placeholder="Title" v-model="title" />
        </div>
        <div class="editor-container" id="postBody">
        </div>
    </div>
</template>

<script>
import EditorJS from '@editorjs/editorjs'
import Header from '@editorjs/header'
import Marker from '@editorjs/marker'
import Delimiter from '@editorjs/delimiter'
import LinkTool from '@editorjs/link'
import ImageTool from '@editorjs/image'
import Embed from '@editorjs/embed'
import SimpleImage from 'simple-image-editorjs'
import List from '@editorjs/link'
import InlineCode from '@editorjs/inline-code'
import CodeTool from '@editorjs/code'
import InlineImage from 'editorjs-inline-image';
import Search from "../unsplash";
import ChatService from "../ChatService";

export default {
    name: "Editor",
    props: {
        user: Object,
    },
    data() {
        return {
            title: '',
            blobImages: [],
            postData: null
        }
    },
    methods: {

    },
    mounted() {
        const editor = new EditorJS({
            /**
             * Enable/Disable the read only mode
             */
            readOnly: false,
            logLevel: 'ERROR',

            /**
             * Wrapper of Editor
             */
            holder: 'postBody',

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

                search: {
                    class: Search,
                    inlineToolbar: true,
                    config: {
                        unsplash: {
                            appName: 'vik',
                            clientId: 'LNPQJRwFjg9TCawnva6cZ3xalq9c_5fHdPILzLVSOt0'
                        }
                    },
                },

                /**
                 * Or pass class directly without any configuration
                 */
                image :{
                    class: ImageTool,
                    inlineToolbar: true,
                    config: {
                        endpoints: {
                            byFile: window._route + '/v1-api/blog/post-image-file',
                            byUrl: window._route + '/v1-api/blog/post-image-url',
                        }
                    }
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

            },
            onChange: function() {

            }
        });

        /**
         * Saving button
         */
        const saveButton = document.getElementById('publishArticle');

        /**
         * Saving example
         */
        let that = this;
        saveButton.addEventListener('click', function () {
            editor.save()
                .then((savedData) => {
                    that.blobImages = document.querySelector('.cdx-simple-image__picture');
                    for(let i=0; i<that.blobImages; i++) {
                        let imgElement = that.blobImages[i].getElementByTagName('img')[0]
                    }
                    let data = {
                        title: that.title,
                        'body': savedData.blocks,
                        'user_id': that.user.id
                    };
                    ChatService.postBlog(data)
                        .then(response => {
                            location.reload();
                        }).catch(error => {
                        alert('Error in fetching data');
                        console.log(error);
                    });
                    //cPreview.show(savedData, document.getElementById("output"));
                    console.log(savedData);
                })
                .catch((error) => {
                    console.error('Saving error', error);
                });
        });
    }

}
</script>

<style scoped>
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
.codex-editor__redactor [contenteditable]:empty:after {
    content: none !important;
}
</style>
