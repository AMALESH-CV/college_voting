
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Accordion Collapsible Side Navbar with Toggle Button - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    /********* SIDE NAV BAR ***********/
a {
color:#000;
}

li {
list-style:none;
} 

.panel-default>.panel-heading {
    color: #fff;
    background-color: #00436a;
    border-color: #ddd;
}

.panel-group .panel+.panel {
    margin-top: 0px;
}
.panel-group {
	margin-top: 35px;
}
.panel-collapse {
	background-color:rgba(220, 213, 172, 0.5);
}

.glyphicon { 
margin-right:10px; 
}


ul.list-group {
	margin:0px;
}

ul.bulletlist li {
	list-style:disc;
}


ul.list-group  li a {
 display:block;
 padding:5px 0px 5px 15px;
 text-decoration:none;
}

ul.list-group li {
	border-bottom: 1px dotted rgba(0,0,0,0.2);
}
	

ul.list-group  li a:hover, ul li a:focus {
 color:#fff;
 background-color: #00436a;
}

.panel-title a:hover,
.panel-title a:active,
.panel-title a:focus,
.panel-title .open a:hover,
.panel-title .open a:active,
.panel-title .open a:focus
 {
	text-decoration:none;
	color:#fff;
}

.panel-title>.small, .panel-title>.small>a, .panel-title>a, .panel-title>small, .panel-title>small>a {
        display: block;
}

@media (min-width: 768px){
.navbar-collapse.collapse 
	{
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important;
	padding-left:0px; 
}
}

@media (min-width: 992px){
.menu-hide {
    display: none;
}

}
.menu-hide .panel-default>.panel-heading {
    color: #fff;
    background-color: #8e8c8c;
    border-color: #ddd;
}

/********** END SIDEBAR *************/

/********** NAVBAR TOGGLE *************/

.navbar-toggle .icon-bar {
    background-color: #fff;
}
.navbar-toggle {
    padding: 11px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: #a32638;
    border-radius: 0px;
}

/********** END NAVBAR TOGGLE *************/
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
      <!-- I was motivated to create this after seeing BhaumikPatel's http://bootsnipp.com/snippets/featured/accordion-menu; I adapted it to a list format rather than a table so that it would be easy to create a nav toggle button when viewed on mobile devices -->
  <div class="col-md-3">
  <div id="sidenav1">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sideNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="collapse navbar-collapse" id="sideNavbar">
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href=""><span class="glyphicon glyphicon-home"></span>Home</a> </h4>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-book"> </span>Research<span class="caret"></span></a> </h4>
          </div>
          <!-- Note: By adding "in" after "collapse", it starts with that particular panel open by default; remove if you want them all collapsed by default --> 
          <div id="collapseOne" class="panel-collapse collapse in">
            <ul class="list-group">
              <li class="navlink2"><a href=""><span class="glyphicon glyphicon-book"></span>Overview</a></li>
              <li><a href="" class="navlink">Link 1</a></li>
              <li><a href="" class="navlink">Link 2</a></li>
              <li><a href="" class="navlink">Link 3</a></li>
              <li><a href="" class="navlink">Link 4</a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-cog"> </span>Services<span class="caret"></span></a> </h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="navlink2"><a href="" class="navlink"><span class="glyphicon glyphicon-cog"></span>Overview</a></li>
              <li><a href="" class="navlink">Link 1</a></li>
              <li><a href="" class="navlink">Link 2</a></li>
              <li><a href="" class="navlink">Link 3</a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-calendar"> </span>Calendar<span class="caret"></span></a> </h4>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <ul class="list-group">
              <li class="navlink2"><a href=""><span class="glyphicon glyphicon-calendar"></span>Overview</a></li>
              <li><a href="" class="navlink">Link 1</a></li>
              <li><a href="" class="navlink">Link 2</a></li>
              <li><a href="" class="navlink">Link 3</a></li>
              <li><a href="" class="navlink">Link 4</a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-user"></span> About Us<span class="caret"></span></a></h4>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
            <ul class="list-group">
              <li><a href="" class="navlink">Link 1</a></li>
              <li><a href="" class="navlink">Link 2</a></li>
              <li><a href="" class="navlink">Link 3</a></li>
              <li><a href="" class="navlink">Link 4</a></li>
              <li><a href="" class="navlink">Link 5</a></li>
            </ul>
          </div>
        </div>
        <!-- This is in case you want to add additional links that will only show once the Nav button is engaged; delete if you don't need -->
        <div class="menu-hide">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href=""><span class="glyphicon glyphicon-new-window"></span>External Link</a> </h4>
            </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title"><a href=""><span class="glyphicon glyphicon-new-window"></span>External Link</a> </h4>
            </div>
          </div>
        </div>
        <!-- end hidden Menu items --> 
      </div>
    </div>
  </div>
</div>	<script type="text/javascript">
		</script>
</body>
</html>
