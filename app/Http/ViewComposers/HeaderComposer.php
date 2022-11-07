<?php
namespace App\Http\ViewComposers;

use App\Models\Category;
use Illuminate\Contracts\View\View;

class HeaderComposer
{

/**
 * @Route("Route", name="RouteName")
 */
public function compose(View $view)
{
     $view->with('categories', Category::where('is_online',1)->get());
}

}