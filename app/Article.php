<?php

// app/Article.php
namespace App;
use App\Contracts\ArticleInterface;

class Article implements ArticleInterface
{
  protected $title;
  protected $description;

  public function __construct($title, $description)
  {
    $this->title = $title;
    $this->description = $description;
  }
public function getTitle() {
  return $this->title;
}
public function getDescription() {
  return $this->description; }
}