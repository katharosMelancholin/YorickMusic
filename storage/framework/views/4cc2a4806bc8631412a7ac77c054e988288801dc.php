<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>YorickMusic</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/MenuNav.js')); ?>"></script>
    <script src="https://kit.fontawesome.com/096636172d.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/menunav.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/home.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/playlists.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>
<body>

<script>
function openNav () {
    document.getElementById("menunav").style.width = "350px";
  document.getElementById("app").style.marginLeft = "350px";
}

function closeNav() {
    document.getElementById("menunav").style.width = "0";
  document.getElementById("app").style.marginLeft = "0";
  }
</script>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <div id="menunav" class="sidenav">
            <a href="<?php echo e(url('/')); ?>">
            <p style="position: absolute left: 10px;
            padding: 10px;" id="logo-text">YORICK MUSIC</p>
            </a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav();">&times</a>
            <a href="<?php echo e(url('/')); ?>" class="menutext">MAIN</a>
            <a href="<?php echo e(url('upload')); ?>" class="menutext">Add Music/Albums</a>
            <a href="<?php echo e(url('home')); ?>" class="menutext">Favorite Tracks</a>
            <a href="<?php echo e(url('playlists')); ?>" class="menutext">Playlists</a>
            <a href="<?php echo e(url('albums')); ?>" class="menutext">Albums</a>
            </div>
            <span style="position: absolute; left: 50px;
            font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><img src="img/log-in.png"
                                                                                class="log_in_image">LOGIN</a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><img src="img/registration.png"
                                                                                    class="log_in_image">REGISTER</a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="font-family: Nunito; font-size: 18px;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?><br>
                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH /home/quovadis/YorickMusic/resources/views/layouts/app.blade.php ENDPATH**/ ?>