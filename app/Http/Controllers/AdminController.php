<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

/**
 * Class AdminController
 * @package App\Http\Controllers
 * @author Ahmed Helal Ahmed
 */
class AdminController extends Controller
{
    /**
     * @param $page
     * @return Application|Factory|View
     */
    public function __invoke($page)
    {
        if (view()->exists($page)) {
            return view($page);
        }

        return view('404');
    }
}
