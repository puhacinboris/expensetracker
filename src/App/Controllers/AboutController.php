<?php

declare(strict_types=1);

namespace App\Controllers;


class AboutController extends MainController
{
  function about()
  {
    $bla = new MainController();
    $bla->page("/about.php", [
      'title' => 'About'
    ]);
  }
}
