<?php

namespace App\Contracts;
use App\Article;

interface ArticlesInterface
{
  public function add(Article $article);
}