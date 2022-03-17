<?php

namespace Joy\VoyagerBreadContact\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'contacts');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'contacts',
                'display_name_singular' => __('joy-voyager-bread-contact::seeders.data_types.contact.singular'),
                'display_name_plural'   => __('joy-voyager-bread-contact::seeders.data_types.contact.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadContact\\Models\\Contact',
                // 'policy_name'           => 'Joy\\VoyagerBreadContact\\Policies\\ContactPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadContact\\Http\\Controllers\\VoyagerBreadContactController',
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
