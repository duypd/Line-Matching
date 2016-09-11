<?php
namespace App\Helper;

use Illuminate\Database\Schema\Blueprint;

class CustomBlueprint extends Blueprint
{
    /**
     * Add the proper columns for a polymorphic table.
     *
     * @param  string  $name
     * @param  string|null  $indexName
     * @return void
     */
    public function morphs($name, $indexName = null)
    {
        $this->unsignedBigInteger("{$name}_id");

        $this->string("{$name}_type");

        $this->index(["{$name}_id", "{$name}_type"], $indexName);
    }
}