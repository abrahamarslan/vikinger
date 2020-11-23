<?php

/**
 * Global Configuration file for the application
 *
 */

return array(

    'image_resize' => array(
        'category_imageX'                       => 1200,
        'category_imageY'                       => 800
    ),

    'category' => array(
        'default_avatar'                        => '/images/category/original/default.png',
        'upload_folder_path'                    => '/images/category/',
        'upload_folder_path_original'           => '/images/category/original/',
        'upload_folder_path_resized'            => '/images/category/resized/',
        'upload_folder_seo_path_original'       => '/images/category/original/',
        'upload_folder_seo_path_resized'        => '/images/category/resized/',
    ),

    'blog' => array(
        'default_avatar'                        => '/images/blog/original/default.png',
        'upload_folder_path'                    => '/images/blog/',
        'upload_folder_path_original'           => '/images/blog/original/',
        'upload_folder_path_resized'            => '/images/blog/resized/',
        'upload_folder_seo_path_original'       => '/images/blog/original/',
        'upload_folder_seo_path_resized'        => '/images/blog/resized/',
    ),

    'forum' => array(
        'default_avatar'                        => '/images/forum/original/default.png',
        'upload_folder_path'                    => '/images/forum/',
        'upload_folder_path_original'           => '/images/forum/original/',
        'upload_folder_path_resized'            => '/images/forum/resized/',
    ),

    'user' => array(
        'default_avatar'                        => '/images/user/original/default.png',
        'upload_folder_path'                    => '/images/user/',
        'upload_folder_path_original'           => '/images/user/original/',
        'upload_folder_path_resized'            => '/images/user/resized/',
    ),

);
