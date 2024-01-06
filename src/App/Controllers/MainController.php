<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

use App\Config;
use App\Config\Paths;

class MainController
{
  private TemplateEngine $view;

  public function __construct()
  {
    $this->view = new TemplateEngine(Paths::VIEW);
  }
  public function page(string $path, array $data = [])
  {
    echo $this->view->render($path, $data);
  }
}
