<?php

// app/Article.php
namespace App;

use App\Contracts\ArticleInterface;

class Article implements ArticleInterface
{
  protected $title;
  protected $description;
  protected $url;
  protected $author;

  public function __construct($title, $description, $author, $url)
  {
    $this->title = $title;
    $this->description = $description;
    $this->author = $author;
    $this->url = $url;
  }

  public function getTitle()
  {
    return $this->title;
  }
  
  public function getDescription()
  {
    return $this->description;
  }

  public function getUrl()
  {
    return $this->url;
  }

  public function getAuthor()
  {
    return $this->author;
  }
}