<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/jquery.jscrollpane.css">
  <link rel="stylesheet" href="css/app.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
</head>
<body id="page-<?php echo $page; ?>">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '838568812922429',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

<?php if ($page!= 'index' && $page!= 'index2') { ?>
<nav class="top-bar show-for-small-only" data-topbar role="navigation">
   <ul class="title-area">
    <li class="name">
      <h1><a href="#">Nailstyle</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
   <section class="top-bar-section">
    <ul class="menu" id="main-menu">
      <li><a href="#">My Feed</a></li>
      <li class="has-dropdown"><a href="#">Fresh Gallery</a>
        <ul class="dropdown">
          <li><a href="#">Sub Item</a>
          <li><a href="#">Sub Item</a>
        </ul>
      </li>
      <li><a href="">Articles</a></li>
      <li class="has-dropdown"><a href="#">Finders</a>
        <ul class="dropdown">
          <li><a href="#">Sub Item</a>
          <li><a href="#">Sub Item</a>
        </ul>
      </li>
      <li><a href="#">Inspiration</a></li>
      <li><a href="#">Brands</a></li>
      <li><a href="#">Trend Report</a></li>
      <li><a href="#">The Tops</a></li>
      <li><a href="#">Search</a></li>
    </ul>
  </section>
</nav>
<?php } ?>

<div class="container">
  
  <header>

  <?php if ($page!= 'index' && $page!= 'index2') { ?>
  <div class="row">
    <div class="medium-3 columns">
      <a id="logo" href="/"></a>
    </div>
    <div class="medium-3 medium-offset-6 columns">
      <div id="account">
        Logged in: <span class="user">Jr Quion</span>
        <div class="notifications">
          <a href="#">
            <i class="fa fa-envelope"></i>
            <span class="no">2</span>
          </a>
          <a href="#"><i class="fa fa-bell"></i></a>
          <div class="clearfix"></div>
          <div class="toggle">
            <i class="fa fa-caret-down"></i>
          </div>
        </div>
        <div id="notif-panel">
          <ul class="tabs" data-tab id="notif-panel-tabs">
            <li class="tab-title active" id="tab-messages"><a href="#panel-messages">
              <i class="fa fa-envelope"></i><br>
              Messages
            </a></li>
            <li class="tab-title" id="tab-notifications"><a href="#panel-notifications">
              <i class="fa fa-bell"></i><br>
              Notifications
            </a></li>
            <li class="tab-title" id="tab-account"><a href="#panel-account">
              <i class="fa fa-user"></i><br>
              Account
            </a></li>
          </ul>
          <div class="tabs-content">
            <div class="content active" id="panel-messages">
              <ul class="notifications-list">
                <li>
                  <a href=""><i class="fa fa-star"></i>
                  <span class="message">Jessie endorsed for - Styling!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-comments"></i>
                  <span class="message">Jessie left you a comment!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-share-alt"></i>
                  <span class="message">Jessie shared your photo!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-heart"></i>
                  <span class="message">Jessie added you to her collection!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-tag"></i>
                  <span class="message">Jessie tagged you in a photo!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Jessie is now stalking you!</span></a>
                </li>
                <li class="date past">Monday, Nov 1, 2015</li>
                <li class="past">
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Lori is now stalking you!</span></a>
                </li>
                <li class="past">
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Ashlee is now stalking you!</span></a>
                </li>
              </ul>
            </div>
            <div class="content" id="panel-notifications">
              <ul class="notifications-list">
                <li>
                  <a href=""><i class="fa fa-star"></i>
                  <span class="message">Jessie endorsed for - Styling!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-comments"></i>
                  <span class="message">Jessie left you a comment!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-share-alt"></i>
                  <span class="message">Jessie shared your photo!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-heart"></i>
                  <span class="message">Jessie added you to her collection!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-tag"></i>
                  <span class="message">Jessie tagged you in a photo!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Jessie is now stalking you!</span></a>
                </li>
                <li class="date past">Monday, Nov 1, 2015</li>
                <li class="past">
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Lori is now stalking you!</span></a>
                </li>
                <li class="past">
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Ashlee is now stalking you!</span></a>
                </li>
              </ul>
            </div>
            <div class="content" id="panel-account">
              <ul class="notifications-list">
                <li>
                  <a href=""><i class="fa fa-star"></i>
                  <span class="message">Jessie endorsed for - Styling!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-comments"></i>
                  <span class="message">Jessie left you a comment!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-share-alt"></i>
                  <span class="message">Jessie shared your photo!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-heart"></i>
                  <span class="message">Jessie added you to her collection!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-tag"></i>
                  <span class="message">Jessie tagged you in a photo!</span></a>
                </li>
                <li>
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Jessie is now stalking you!</span></a>
                </li>
                <li class="date past">Monday, Nov 1, 2015</li>
                <li class="past">
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Lori is now stalking you!</span></a>
                </li>
                <li class="past">
                  <a href=""><i class="fa fa-eye"></i>
                  <span class="message">Ashlee is now stalking you!</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="clearfix"></div>

  
  <div class="row">
    <div class="large-12">
      
      <nav id="top-bar" data-topbar role="navigation" class="show-for-medium-up">
        <section class="top-bar-section">
          <ul class="menu" id="main-menu">
            <li><a href="#">My Feed</a></li>
            <li class="has-dropdown not-click"><a href="#">Fresh Gallery</a>
              <ul class="dropdown">
                <li><a href="#">Sub Item</a>
                <li><a href="#">Sub Item</a>
              </ul>
            </li>
            <li><a href="">Articles</a></li>
            <li class="has-dropdown not-click"><a href="#">Finders</a>
              <ul class="dropdown">
                <li><a href="#">Sub Item</a>
                <li><a href="#">Sub Item</a>
              </ul>
            </li>
            <li><a href="#">Inspiration</a></li>
            <li><a href="#">Brands</a></li>
            <li><a href="#">Trend Report</a></li>
            <li><a href="#">The Tops</a></li>
            <li><a href="#">Search</a></li>
            <div id="main-menu-after"></div>
          </ul>
        </section>
      </nav>
      
    </div>
  </div>
  <?php } ?>
  
  </header>