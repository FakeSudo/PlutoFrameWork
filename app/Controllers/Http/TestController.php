<?php
namespace app\Controllers\Http;

use FakeSudo\Pluto\Web\View;

class TestController {
    public function show(){
        View::render('Home',['title' => 'Pluto', 'phpversion' => phpversion()]);
    }
}