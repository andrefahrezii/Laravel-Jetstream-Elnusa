<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

        <title>{{ config('app.name', 'Elnusa OM & TAP') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- <div class="wrapper row0">
  <section id="ctdetails" class="hoc clear"> 
     ################################################################################################ -->
<!--     
    <ul class="nospace clear">
      <li class="one_quarter first">
        <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span>Give us a call: <strong>+00 (123) 456 7890</strong></span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span>Send us a mail: <strong>support@domain.com</strong></span></div>
      </li>
      <li class="one_quarter">
        <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span>Mon. - Sat.: <strong>08.00am - 18.00pm</strong></span></div>
      </li>
      <li class="one_quarter"><a class="btn" href="#"><strong>Get A Quote</strong></a></li>
    </ul>
     ################################################################################################ -->
  <!-- </section>
</div> --> 
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
  <div>
        <x-jet-application-logo class="block h-12 w-auto"  />
    </div>
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <!-- @if (Route::has('login'))
      @auth
      <h1><a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashbord</a></h1>
      @else
      <h1><a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a></h1>
      @if (Route::has('register'))
      <h1><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></h1>
      @endif
      @endauth
      @endif -->
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a class="drop" href="#">Pages</a>
          <ul>
            <li><a href="pages/gallery.html">Gallery</a></li>
            <li><a href="pages/full-width.html">Full Width</a></li>
            <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
            <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
            <li><a href="pages/basic-grid.html">Basic Grid</a></li>
            <li><a href="pages/font-icons.html">Font Icons</a></li>
          </ul>
        </li>
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
            <li><a href="#">Level 2</a></li>
          </ul>
        </li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
        <li><a href="#">Link Text</a></li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('https://www.elnusa.co.id/cfind/source/thumb/images/cover_w768_h580_tw1325_th1000_x1284_y10_cover_vibroseis_1920x1000.jpg');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article>
      <p>Leo suspendisse nec urna a arcu.</p>
      <h3 class="heading">Lobortis gravida elementum ante non mi fusce</h3>
      <footer><a class="btn" href="#"><strong>Euismod nullam</strong></a></footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <section>
      <article class="one_third first">
        <p>Ipsum primis in faucibus.</p>
        <h6 class="heading font-x2">Orci luctus et ultrices posuere cubilia curae vestibulum diam nisi dapibus a tincidunt eu ultricies in nunc proin</h6>
        <footer><a class="btn" href="#">Auctor justo ac</a></footer>
      </article>
      <div class="two_third">
        <ul class="nospace group">
          <li class="one_half first btmspace-30"><a href="#"><i class="icon btmspace-30 fas fa-leaf"></i></a>
            <h6 class="heading">Go Green</h6>
            <p>Consectetuer lacus fusce nec augue ut dui dui viverra ac vulputate scelerisque viverra molestie tortor vivamus ut.</p>
          </li>
          <li class="one_half btmspace-30"><a href="#"><i class="icon btmspace-30 fas fa-car-crash"></i></a>
            <h6 class="heading">Lacus sit amet arcu porta</h6>
            <p>Tempus aenean purus enim euismod nec scelerisque a fringilla et mauris morbi at sapien non enim blandit interdum.</p>
          </li>
          <li class="one_half first"><a href="#"><i class="icon btmspace-30 fas fa-charging-station"></i></a>
            <h6 class="heading">Morbi posuere phasellus ante</h6>
            <p>Phasellus a risus cras vel odio donec ornare morbi odio in non magna vel diam rutrum elementum aliquam eget nunc.</p>
          </li>
          <li class="one_half last"><a href="#"><i class="icon btmspace-30 fas fa-eye-dropper"></i></a>
            <h6 class="heading">Vestibulum vehicula neque et</h6>
            <p>Ornare congue lacus nisi pharetra nisl a pharetra urna metus vel nunc nulla nunc metus tempor vitae consectetuer.</p>
          </li>
        </ul>
      </div>
    </section>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper bgded" style="background-image:url('https://www.elnusa.co.id/cfind/source/thumb/images/cover_w768_h580_cover_fabrication_1920x1000.jpg');">
  <div class="hoc split clear">
    <section> 
      <!-- ################################################################################################ -->
      <p>Vel porttitor eu diam donec.</p>
      <h6 class="heading font-x2">Dolor nisl ultrices ac euismod</h6>
      <p class="btmspace-30">Eu rutrum sed tortor integer vitae felis vel magna posuere vestibulum pellentesque ullamcorper odio sed tempus sodales.</p>
      <ul class="nospace btmspace-50">
        <li class="btmspace-10"><i class="fas fa-check-circle"></i> Justo lectus faucibus neque a mollis</li>
        <li class="btmspace-10"><i class="fas fa-check-circle"></i> Augue arcu at pede mauris ac erat sit</li>
        <li class="btmspace-10"><i class="fas fa-check-circle"></i> Amet eros volutpat mollis pellentesque</li>
        <li class="btmspace-10"><i class="fas fa-check-circle"></i> Justo suspendisse potenti nam condimentum</li>
        <li class="btmspace-10"><i class="fas fa-check-circle"></i> Mi id magna aenean vulputate morbi elit</li>
        <li><i class="fas fa-check-circle"></i> Nunc molestie at ultrices eu eleifend</li>
      </ul>
      <footer><a class="btn" href="#">View Details &raquo;</a></footer>
      <!-- ################################################################################################ -->
    </section>
  </div>
  <div class="wrapper row3">
  <section id="services" class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Eu lorem vestibulum tincidunt in</p>
      <h6 class="heading">Nec tellus quis urna condimentum</h6>
    </div>
    <ul class="nospace group grid-3">
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-feather-alt"></i></a> Scelerisque integer ac</h6>
          <p>Ac consequat vulputate mauris orci pretium eros ac tincidunt lectus lacus quis libero vivamus ligula augue sagittis vel molestie.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-church"></i></a> Elit suspendisse erat</h6>
          <p>Non condimentum at nulla vestibulum nisl donec id libero fusce in nisl ut elit ultrices hendrerit etiam adipiscing ante nec nibh.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-tshirt"></i></a> Proin tincidunt venenatis</h6>
          <p>Proin consectetuer turpis quis malesuada scelerisque justo lorem porta enim nec interdum quam felis et libero aliquam ultrices.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-spa"></i></a> Massa aenean vehicula</h6>
          <p>Aliquam erat volutpat suspendisse viverra placerat nisi fusce cursus dapibus ligula vestibulum lobortis donec mi odio vehicula vel.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-lightbulb"></i></a> Et neque morbi tincidunt</h6>
          <p>Euismod vel suscipit at velit sed eget lectus vitae augue feugiat elementum integer sem erat sodales vel tempor sed placerat id.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
      <li class="one_third">
        <article>
          <h6 class="heading"><a href="#"><i class="fas fa-diagnoses"></i></a> Suspendisse luctus dolor</h6>
          <p>Quam etiam blandit nunc massa metus euismod non porta nec adipiscing a leo nulla quam aliquam vel tellus praesent ultricies augue.</p>
          <footer><a href="#">Read More</a></footer>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/01.png');">
  <article class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Eu metus suspendisse ut ligula</p>
      <h6 class="heading">Proin dui mauris facilisis</h6>
    </div>
    <figure id="points" class="group">
      <ul class="nospace group">
        <li><i class="fas fa-check-circle"></i> Dolor semper massa nam</li>
        <li><i class="fas fa-check-circle"></i> Est sed massa felis semper</li>
        <li><i class="fas fa-check-circle"></i> Quis ullamcorper sit amet</li>
        <li><i class="fas fa-check-circle"></i> Aliquam id turpis nullam</li>
        <li><i class="fas fa-check-circle"></i> Scelerisque in interdum</li>
        <li><i class="fas fa-check-circle"></i> Laoreet arcu phasellus</li>
        <li><i class="fas fa-check-circle"></i> Sollicitudin volutpat</li>
        <li><i class="fas fa-check-circle"></i> Nulla etiam auctor lectus</li>
      </ul>
    </figure>
    <!-- ################################################################################################ -->
  </article>
</div>
<div class="wrapper row2">
  <section class="hoc container clear"> 
    <!-- ################################################################################################ -->
    <div class="sectiontitle">
      <p class="nospace font-xs">Ut mollis pharetra nisi lorem vulputate</p>
      <h6 class="heading">Diam eget sagittis magna velit</h6>
    </div>
    <ul id="latest" class="nospace group grid-3">
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
          <div class="excerpt">
            <ul class="nospace meta clear">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li>
                <time datetime="2045-04-06T08:15+00:00">06 Apr 2045</time>
              </li>
            </ul>
            <h6 class="heading">Sed nisi nullam vitae</h6>
            <p>Ipsum fusce a arcu nulla dolor pellentesque imperdiet sagittis lacinia velit donec eleifend dignissim erat morbi.</p>
            <footer><a href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
          <div class="excerpt">
            <ul class="nospace meta clear">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li>
                <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
              </li>
            </ul>
            <h6 class="heading">Sagittis mauris nulla</h6>
            <p>Ultricies pede id eros pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</p>
            <footer><a href="#">Read More</a></footer>
          </div>
        </article>
      </li>
      <li class="one_third">
        <article>
          <figure><a class="imgover" href="#"><img src="images/demo/348x261.png" alt=""></a></figure>
          <div class="excerpt">
            <ul class="nospace meta clear">
              <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
              <li>
                <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
              </li>
            </ul>
            <h6 class="heading">Egestas donec augue</h6>
            <p>Sed nunc rutrum egestas suspendisse ultrices ipsum non nisi mauris felis nibh placerat nec feugiat vel vestibulum.</p>
            <footer><a href="#">Read More</a></footer>
          </div>
        </article>
      </li>
    </ul>
    <!-- ################################################################################################ -->
  </section>
</div>
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="one_quarter first">
      <h6 class="heading">Pentwist</h6>
      <nav>
        <ul class="nospace linklist">
          <li><a href="#">About</a></li>
          <li><a href="#">Terms</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Cookies</a></li>
          <li><a href="#">Disclaimer</a></li>
        </ul>
      </nav>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Interdum augue ut diam</h6>
      <p class="nospace btmspace-15">Velit laoreet et scelerisque facilisis lacinia ut sapien in vehicula.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Newsletter:</legend>
          <input class="btmspace-15" type="text" value="" placeholder="Name">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button class="btn" type="submit" value="submit">Submit</button>
        </fieldset>
      </form>
    </div>
    <div class="one_quarter">
      <h6 class="heading">Elementum ligula sed</h6>
      <ul class="nospace linklist">
        <li><a href="#">Feugiat odio a est</a></li>
        <li><a href="#">Ipsum eleifend elementum nullam</a></li>
        <li><a href="#">Vitae ligula etiam ante lectus</a></li>
        <li><a href="#">Venenatis at auctor in</a></li>
        <li><a href="#">Erat volutpat nulla elementum</a></li>
      </ul>
    </div>
    <div class="one_quarter last">
      <h6 class="heading">Lobortis ac velit aliquam</h6>
      <ul class="nospace clear latestimg">
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
        <li><a class="imgover" href="#"><img src="images/demo/100x100.png" alt=""></a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="/">Elnusa OM & TAP</a></p>
    <!-- <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p> -->
    <!-- ################################################################################################ -->
  </div>
</div>
<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>


    </body>
    
</html>
