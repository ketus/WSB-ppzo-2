<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  <!-- Styles -->
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      width: 80%;
      margin: auto;
      overflow: hidden;
      padding: 20px;
    }

    .article {
      background: #fff;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .article h2 {
      margin-top: 0;
      color: #333;
    }

    .article p {
      margin: 10px 0;
    }

    .article a {
      color: #007bff;
      text-decoration: none;
    }

    .article a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body class="antialiased">
  <div class="container">
    <h1>News Search</h1>
    <form action="{{ url('/news') }}" method="GET">
      <input type="text" name="q" placeholder="Search news..." value="{{ request('q') }}">
      <input type="text" name="domains" placeholder="for example: yahoo.com" value="{{ request('domains') }}">
      <button type="submit">Search</button>
    </form>
    <BR>
    

    @foreach ($articles as $article)
    <div class="article">
      <h2>{{ $article->getTitle() }}</h2>
      <p>{{ $article->getDescription() }}</p>
      <a href="{{ $article->getUrl() }}">Article link</a>
      <p>Author: {{ $article->getAuthor() }}</p>
    </div>
    @endforeach
  </div>
</body>

</html>