<? foreach($list as $v): ?>

    <? if (!$n or $n%3 == 0) echo "<div class='row'>\n" ?>
    <div class="col-xs-12 col-sm-4">

        <div class="data-blocks">

            <div  class='row data-blocks-section'>
                <div class="col-xs-1 numb"><?= ++$n ?></div>
                <div class="col-xs-11 text-center ">
                    <span class="name"><?= $v['Name'] ?></span>
                    <span class="code">(<?= $v['Code2'] ?>)</span>
                </div>
            </div>
            <div  class='row'>
                <div class="col-xs-12 text-center">
                    <img class="" src='/public/img/flags/48/<?= $v['Code2'] ?>.png' />
                </div>
            </div>
            <div  class='row'>
                <div class="col-xs-12 text-center">Столица: <?= $v['Capital'] ?></div>
            </div>
        </div>

    </div>
    <? if ($n%3 == 0) echo "</div>\n" ?>

<? endforeach ?>
<? if ($n%3 != 0) echo "</div>\n" ?>