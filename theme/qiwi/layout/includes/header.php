<?php
?>

<header role="banner" class="navbar moodle-has-zindex">
    <nav role="navigation" class="navbar-inner">


        <?php echo $OUTPUT->lm_navigation(); ?>
        <div class="right-menu-inner">
            <ul class="right-menu">
                <li class="personal">
                    <?php echo $OUTPUT->user_menu(); ?>
                </li>

                <?php if($islogin){ ?>
                <li class="bell">
                    <div class="icon-bell"></div>
                <!--    <div class="alert-menu">12</div>-->
                </li>
                <?php } ?>

                <?php include(dirname(__FILE__) . '/bnav.php'); ?>
            </ul>
        </div>

    </nav>
    <div class="container">
        <?php if($islogin){ ?>
        <a class="brand" href="<?php echo $CFG->wwwroot; ?>"></a>
        <?php } ?>
    </div>
</header>