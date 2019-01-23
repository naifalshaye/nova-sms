<?php

namespace Naif\NovaSms;

use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class NovaSms extends Tool
{
    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('nova-sms', __DIR__.'/../dist/js/tool.js');
        Nova::style('nova-sms', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the view that renders the navigation links for the tool.
     *
     * @return \Illuminate\View\View
     */
    public function renderNavigation()
    {
        return view('nova-sms::navigation');
    }
}
