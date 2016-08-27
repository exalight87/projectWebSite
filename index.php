<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    
    <?php //require 'inc/header.php'; 

     /* require 'class/Database.php';
      $db = new Database('root','','sport');
      $password = password_hash("test", PASSWORD_BCRYPT);
      $db->query('UPDATE connex SET pwd = ? WHERE login = ?', ["$password", "test"]);*/

    ?>
    <!--

    <div id="fondYT" class="show-for-medium">
      <div class="row">
        <div class="medium-12 columns">
          <div class="orbit" role="region" aria-label="images favorites" data-orbit>
            <ul class="orbit-container">
              <button class="orbit-previous"><span class="show-for-sr">images précédente</span>&#9664;&#xFE0E;</button>
              <button class="orbit-next"><span class="show-for-sr">image suivante</span>&#9654;&#xFE0E;</button>
              <li class="is-active orbit-slide">
                <img class="orbit-image" src="pictures/01.jpg" alt="Space">
                <figcaption class="orbit-caption">Sport</figcaption>
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="pictures/02.jpg" alt="Space">
                <figcaption class="orbit-caption">Sport</figcaption>
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="pictures/03.jpg" alt="Space">
                <figcaption class="orbit-caption">Sport</figcaption>
              </li>
              <li class="orbit-slide">
                <img class="orbit-image" src="pictures/04.jpg" alt="Space">
                <figcaption class="orbit-caption">Sport</figcaption>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div id="content">
      <div class="row">
        <div class="medium-12 text-center columns">
        <div class="row">
          <div class="medium-4 columns">
            <div class="icone_div">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 18">
                <path d="M20 16.78c.002-1.8.003-2.812 0-4.027-.001-.417.284-.638.567-.638.246 0 .49.168.538.52.19 1.412.411 2.816.547 3.146.042.099.113.141.185.141.123 0 .244-.123.206-.284-.255-1.069-.493-2.519-.607-3.334 1.904 1.854 2.314 2.005 2.192 3.548-.089 1.129-.52 2.508.373 4.255l-2.563.893c-.062-.314-.138-.637-.226-.933-.515-1.721-1.214-1.752-1.212-3.287zm-16.567-4.665c-.246 0-.49.168-.538.52-.19 1.412-.411 2.816-.547 3.146-.042.099-.113.141-.185.141-.123 0-.244-.123-.206-.284.255-1.069.493-2.519.607-3.334-1.904 1.854-2.314 2.005-2.192 3.548.09 1.128.521 2.507-.372 4.254l2.562.894c.062-.314.138-.637.226-.933.515-1.721 1.214-1.752 1.212-3.287-.002-1.8-.003-2.812 0-4.027.001-.418-.285-.638-.567-.638zm1.567.642zm14.001 2.637c-2.354.194-4.35.62-6.001 1.245v-9.876l.057-.036c1.311-.816 3.343-1.361 5.943-1.603v7.633c-.002-.459.165-.881.469-1.186.377-.378.947-.562 1.531-.391v-8.18c-3.438.105-6.796.658-9 2.03-2.204-1.372-5.562-1.925-9-2.03v8.18c.583-.17 1.153.012 1.531.391.304.305.471.726.469 1.184v-7.631c2.6.242 4.632.788 5.943 1.604l.057.035v9.876c-1.651-.626-3.645-1.052-6-1.246v1.385c0 .234-.021.431-.046.622 2.249.193 4.372.615 6.046 1.381.638.292 1.362.291 2 0 1.675-.766 3.798-1.188 6.046-1.381-.025-.191-.046-.386-.046-.621l.001-1.385zm-12.001-2.426c1.088.299 2.122.64 3 .968v1.064c-.823-.345-1.879-.705-3-1.015v-1.017zm0-1.014c1.121.31 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968v1.017zm0-5.09v1.017c1.121.311 2.177.67 3 1.015v-1.064c-.878-.328-1.912-.669-3-.968zm0 3.058c1.121.31 2.177.67 3 1.015v-1.063c-.878-.328-1.912-.669-3-.968v1.016zm10 4.063c-1.121.31-2.177.67-3 1.015v-1.064c.878-.328 1.912-.669 3-.968v1.017zm0-3.048c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017zm-3-3.105v1.064c.823-.345 1.879-.705 3-1.015v-1.017c-1.088.299-2.122.64-3 .968zm3 1.074c-1.088.299-2.122.64-3 .968v1.064c.823-.345 1.879-.705 3-1.015v-1.017z"/>
              </svg>
            </div>
            <p>Vos menu ?<br>faites les en un clin d'oeil. Choisissez parmis une grande gamme d'aliments afin d'élaborer vos menus quotidients.</p>
          </div>
          <div class="medium-4 columns">
            <div class="icone_div">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M13 17h4v1h-4v-1zm0-1h4v-1h-4v1zm9-14v22h-20v-22h3c1.23 0 2.181-1.084 3-2h8c.82.916 1.771 2 3 2h3zm-11 1c0 .552.448 1 1 1 .553 0 1-.448 1-1s-.447-1-1-1c-.552 0-1 .448-1 1zm9 1h-4l-2 2h-3.897l-2.103-2h-4v18h16v-18zm-7 9h4v-1h-4v1zm0-2h4v-1h-4v1zm-6.5.077l.386-.355c.449.218.735.383 1.241.745.952-1.081 1.58-1.627 2.748-2.355l.125.288c-.963.841-1.669 1.777-2.686 3.6-.626-.738-1.044-1.208-1.814-1.923zm.098 5l.386-.355c.449.218.735.383 1.241.745.952-1.081 1.58-1.627 2.748-2.355l.125.289c-.963.841-1.669 1.777-2.686 3.6-.627-.739-1.045-1.209-1.814-1.924z"/>
              </svg>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium voluptas corrupti quo omnis enim rem alias culpa quam modi deleniti, repudiandae ut exercitationem quae, similique totam doloremque? Officiis, ex ad?</p>
          </div>
          <div class="medium-4 columns">
            <div class="icone_div">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 3.055l-6 1.221 1.716 1.708-5.351 5.358-3.001-3.002-7.336 7.242 1.41 1.418 5.922-5.834 2.991 2.993 6.781-6.762 1.667 1.66 1.201-6.002zm-16.69 6.477l-3.282-3.239 1.41-1.418 3.298 3.249-1.426 1.408zm15.49 3.287l1.2 6.001-6-1.221 1.716-1.708-2.13-2.133 1.411-1.408 2.136 2.129 1.667-1.66zm1.2 8.181v2h-24v-22h2v20h22z"/>
              </svg>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo laudantium porro nostrum iusto, error tempore vero sed, quia autem ipsam quibusdam illo eligendi ad beatae cum repellat, delectus veritatis tempora!</p>
          </div>
        </div>
        </div>
      </div>
      <div class="row">
        <div class="medium-12 columns">
          <p>test</p>
        </div>
      </div>
    </div>
    <footer>
      <div class="row">
        <div class="medium-3 medium-offset-9 text-right columns">SPORT</div>
      </div>
    </footer>
    -->
    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
