<nav class="navbar navbar-default " role="navigation">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav ">

            <? foreach($configNav as $k => $v ) :?>

                <? if($v == "/".$page ): ?>
                    <li class="active"><a href="<?= $v ?>"><?= $k ?> </a></li>
                <? else: ?>
                     <li><a href="<?= $v ?>"><?= $k ?> </a></li>
                <? endif ?>
            <? endforeach ?>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
