<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" integrity="sha256-/PJBs6QWvXijOFIX04kZpLb6ZtSQckdOIavLWKKOgXU=" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <header>
      <div class="nav-bar">
        <img class="logo" src="img/download.png" alt="spotify">
        <div class="search">
          <form class="" action="index-js.php" method="GET">
            <input type="text" name="artist" value="">
            <button type="submit" name="button">Cerca</button>
          </form>

        </div>
      </div>

    </header>
    <div class="wrap-cd">

    </div>
    <!-- template -->
    <script id="entry-template" type="text/x-handlebars-template">

      <div class="cd">
        <img src="{{poster}}" alt="">
        <h2>{{title}} </h2>
        <h4>{{author}}</h4>
        <h6>{{year}}</h6>
      </div>
    </script>
    <!-- //template -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
  </html>
