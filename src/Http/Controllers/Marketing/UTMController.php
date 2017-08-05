<?php

namespace Orchid\CMS\Http\Controllers\Marketing;

use Orchid\Http\Controllers\Controller;

class UTMController extends Controller
{
    /**
     * UTMController constructor.
     */
    public function __construct()
    {
        $this->checkPermission('dashboard.marketing.utm');
    }

    /**
     * @return string
     */
    public function index()
    {
        return view('cms::container.marketing.utm.generate');
    }
}
