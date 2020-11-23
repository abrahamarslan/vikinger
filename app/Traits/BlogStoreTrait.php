<?php


namespace App\Traits;


use App\Blog;
use App\Http\Requests\blog\BlogStoreRequest;

trait BlogStoreTrait
{
    use ImageUploadTrait;
    public function save(BlogStoreRequest $request, $create = false, $record = null) {
        try {
            $image = null;
            $seoImage = null;
            if($create) {
                $item                           =   Blog::create($request->except(['image','seo_image']));
            } else {
                $record->update($request->except(['image','seo_image']));
                $item                           =   $record;
            }
            // Upload an image if there has been an upload
            if($request->hasFile('image')) {
                $image                              =   $this->uploadOne(
                    $request,
                    public_path() .  \Config::get('global.blog.upload_folder_path_original'),
                    public_path() . \Config::get('global.blog.upload_folder_path_resized'),
                    \Config::get('global.image_resize.category_imageX'),
                    \Config::get('global.image_resize.category_imageY'),
                    'image'
                );
                //Update the record with image
                $item->image                    =   ($image==null ? ($create ? 'default.png' : $item->image) : $image);
                $item->thumbnail                =   ($image==null ? ($create ? 'default.png' : $item->image) : $image);
            }
            if($request->hasFile('seo_image')) {
                $seoImage                            =   $this->uploadOne(
                    $request,
                    public_path() .  \Config::get('global.blog.upload_folder_seo_path_original'),
                    public_path() . \Config::get('global.blog.upload_folder_seo_path_resized'),
                    \Config::get('global.image_resize.category_imageX'),
                    \Config::get('global.image_resize.category_imageY'),
                    'seo_image'
                );
                $item->seo_image                =   ($seoImage==null ? ($create ? 'default.png' : $item->seo_image) : $seoImage);
            }
            $item->save();
            return $item;
        } catch (\Exception $e) {
            return null;
        }
    }
}
