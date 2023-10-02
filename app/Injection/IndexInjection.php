<?php

namespace App\Injection;

use App\Models\Menu;


class IndexInjection
{

    public function getMenuTop()
    {
        
        return Menu::where('parent_id',null)
               ->where('status', 1)
               ->orderBy('ordre')
               ->get();
    }

}