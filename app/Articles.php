<?php

namespace App;
use App\Contracts\ArticlesInterface;

class Articles implements ArticlesInterface
{
  protected $items = [];

  public function __construct(){}
  public function add($article) {
    $this->items[] = $article;
  }

  public function all() {
    return $this->items;
  }
}