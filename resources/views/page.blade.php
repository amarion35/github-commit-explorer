<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <script src="js/search.js"></script>
    <link rel="stylesheet" href="/css/style.css"/>
  </head>
  <body>
    <div class='ui one column centered grid'>
      <div class='row'>
        <div class='wide column'>
          @include('Common/Header')
        </div>
      </div>
      <div class='row pageContent'>
        <div class='wide column'>
          <h1 class='ui center aligned header'>{{$title}}</h1>
          @yield('content')
        </div>
      </div>
    </div>
  </body>
  <footer id="footer">
    Alexis Marion 2017 
    <a href="mailto:alexis.marion@centrale-marseille.fr">Contact mail</a>
  </footer>
</html>