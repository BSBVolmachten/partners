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

    public function onRun() {
        $partners = $this->Getpartners();
        if ($partners->isNotEmpty()) {
           $this->page['partners'] = $partners;
        } else {
            $this->page['partners'] = false;
        }
    }

    public function Getpartners()
    {
        return Partner::orderBy('sort_order', 'ASC')->get();
    }
}