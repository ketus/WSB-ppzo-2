<?php

namespace App\Contracts;

interface ArticleInterface
{
  public function getTitle();
  public function getDescription();
  public function getUrl();
  public function getAuthor();
}