<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Articles;
use App\Article;

class NewsController extends Controller
{
  public function index(Request $request)
  {
    $query = $request->input('q', 'everything');
    $domains = $request->input('domains', '');
    $apiKey = env('NEWS_API_KEY');

    $response = Http::get('https://newsapi.org/v2/everything', [
      'q' => $query,
      'domains' => $domains,
      'apiKey' => $apiKey
    ]);

    if ($response->successful()) {
      $news = $response->json();
      $articles = new Articles();

      foreach ($news['articles'] as $newsItem) {
        $article = new Article(
          $newsItem['title'], 
          $newsItem['description'],
          $newsItem['author'],
          $newsItem['url']
        );
        $articles->add($article);
      }
      $articles = $articles->all();

      return view('newsapi', compact('articles'));
    } else {
      return view('error', ['message' => 'Failed to fetch news']);
    }
  }
}
