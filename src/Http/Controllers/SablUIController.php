<?php
namespace PipIWYG\SablUI\Controllers;

use Illuminate\Routing\Controller as Controller;

/**
 * SABL API Base Controller, managing data capture through standard CRUD, and handling API Requests and Response
 *
 * @package PipIWYG\SablUI\Controllers
 * @author Quintin Stoltz <qstoltz@gmail.com>
 */
class SablUIController
    extends Controller
{
    public function home()
    {
        dd("Hello");
    }
}
