<?php
namespace Bsbvolmachten\Partners\components;

use Cms\Classes\ComponentBase;
use Bsbvolmachten\Partners\Models\Partners as Partner;

class Partners extends ComponentBase {

    public function componentDetails()
    {
        return [
            'name' => 'Partners',
            'description' => 'Geeft partners weer op de pagina.'
        ];
    }

    public function partners()
    {
        $partners = Partner::orderBy('sort_order', 'ASC')->get();

        if($partners->isEmpty()) {
            return false;
        } else {
            return $partners;
        }
    }
}