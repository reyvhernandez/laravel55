<?php

namespace App\Http\Middleware;

use Closure;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        \Menu::make('MainMenu', function($menu){

            $menu->add('Dashboard', '#')
                ->prepend('<i class="fa fa-dashboard"></i><span>')
                ->append('</span><span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>')
                ->divide();
            $menu->dashboard->add('Dashboard v1', '#')
                ->prepend('<i class="fa fa-circle-o"></i>');
            $menu->dashboard->add('Dashboard v2', '#')
                ->prepend('<i class="fa fa-circle-o"></i>');

            $menu->add('Users', route('users.index'))
                ->prepend('<i class="fa fa-users"></i><span>');
        });

        return $next($request);
    }
}
