<?php

namespace Joy\VoyagerBreadArticle\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'articles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'articles',
                'display_name_singular' => __('joy-voyager-bread-article::seeders.data_types.article.singular'),
                'display_name_plural'   => __('joy-voyager-bread-article::seeders.data_types.article.plural'),
                'icon'                  => 'voyager-bread voyager-bread-article voyager-news',
                'model_name'            => 'Joy\\VoyagerBreadArticle\\Models\\Article',
                // 'policy_name'           => 'Joy\\VoyagerBreadArticle\\Policies\\ArticlePolicy',
                // 'controller'            => 'Joy\\VoyagerBreadArticle\\Http\\Controllers\\VoyagerBreadArticleController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
