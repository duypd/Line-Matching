<?php
/*
|--------------------------------------------------------------------------
| Application Helper
|--------------------------------------------------------------------------
| Write function helper for application
|
*/

if (! function_exists('blueprint_resolver')) {
    /**
     * Custom blueprint
     *
     * @return \Illuminate\Database\Schema\Builder
     */
    function blueprint_resolver() {
        $schema = DB::connection()->getSchemaBuilder();

        $schema->blueprintResolver(function($table, $callback) {
            return new App\Helper\CustomBlueprint($table, $callback);
        });

        return $schema;
    }
}

if (! function_exists('transfer_url_images')) {
    /**
     * Transfer url image for client.
     *
     * @param array $images
     * @return mixed
     */
    function transfer_url_images(array $images) {
        if (! empty($images)) {
            foreach ($images as $i => &$image) {

                $image['origin'] = asset($image['origin']);
                $image['thumb'] = asset($image['thumb']);
            }
        }

        return $images;
    }
}

if (! function_exists('transfer_url_images_lists')) {
    /**
     * Transfer url image for client.
     *
     * @param array $images
     * @return mixed
     */
    function transfer_url_images_lists(array $images) {

        if (! empty($images)) {
            foreach ($images as $i => &$image) {
                $image['origin'] = asset($image['origin']);
                $image['thumb'] = asset($image['thumb']);
            }
        }
        return $images;
    }
}

if (!function_exists('delete_file_of_model')) {
    /**
     * Delete file
     * @param $images
     */
    function delete_file_of_model($images) {
        if (! empty($images)) {

            foreach ($images as $image) {
                if(! empty($image['origin']) && \File::exists($image['origin'])) {
                    \File::delete($image['origin']);
                }

                if(! empty($image['thumb']) && \File::exists($image['thumb'])) {
                    \File::delete($image['thumb']);
                }
            }
        }
    }
}

if (! function_exists('relation_get_user_info')) {
    /**
     * Get user info.
     *
     * @param array $attributes
     * @return array
     */
    function relation_get_user_info(array $attributes) {
        return ['user' => function($q) use($attributes){
            $q->select(implode(',', $attributes));
        }];
    }
}