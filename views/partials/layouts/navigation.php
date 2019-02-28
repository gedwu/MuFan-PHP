<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">

<!--    LOGO-->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <img src="<?php echo IMG_LOGO; ?>logo.png" id="logo" />
        </div>

        <div id="navbar" class="collapse navbar-collapse">

<!--        LINKS-->
            <ul class="nav navbar-nav">
<!--            HOME-->
<!--                <li class="active"><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>-->
<!--            OTHERS-->
                <?php $navItems = getNavigationItems(); ?>
                <?php foreach($navItems as $navItem): ?>
                    <?php $active = false; if($navItem['page'] == $page) { $active = true; } ?>
                    <li<?php if($active): ?> class="active"<?php endif; ?>><a href="<?php echo $navItem['url']; ?>" ><?php echo $navItem['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>

<!--        USER TABS-->
            <ul class="nav navbar-nav navbar-right">

<!--            REGISTER-->
                <?php if (!isset($user)): ?>
                    <li><a href="index.php?page=user_register">Registruotis</a></li>
                <?php endif; ?>

<!--            LOGIN / USER INFO-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php if (isset($user)): echo $user['username']; else: echo 'Prisijungti'; endif; ?> <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <?php if (isset($user)) {
                            require_once(USER_PAGES.'loginInfo.php');
                        } else {
                            require_once(USER_PAGES.'loginForm.php');
                        }
                        ?>
                    </ul>
                </li>
            </ul>

<!--        SEARCH -->
            <form class="navbar-form navbar-right visible-lg visible-md" method="post" action="index.php?page=search">
                <div class="form-group">
                    <input type="text"  name="key" class="form-control" placeholder="Ieškoti">
                </div>
                <button type="submit" name="processSearch" class="btn btn-danger">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </form>

        </div><!--/.nav-collapse -->
    </div>
</nav>
<div class="container">
