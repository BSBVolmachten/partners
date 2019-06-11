<?php
namespace Bsbvolmachten\Partners\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Partners\Models\Partners;

class Partner extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Partners',
            'description' => 'Geeft partners weer op de pagina.'
        ];
    }

    public function partners()
    {
        return Partners::orderBy('sort_order', 'ASC')->get();
    }
}