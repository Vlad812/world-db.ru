<? $n = 0 ?>

<? foreach($list as $v): ?>

    <?  if (!$n or $n%3 == 0) echo "<div class='row'>\n"; ?>
    <div class="col-xs-12 col-sm-4">

        <div class="data-blocks">

            <div  class='row data-blocks-section delimiter' >
                <div class="col-xs-1 numb"><?= ++$offset ?></div>
                <div class="col-xs-11 text-center ">
                    <span class="name"><?= $v['NameCity'] ?></span>
                    <span class="code" title="Население"> (<?= $v['Population'] ?>)</span>
                </div>
            </div>
            <div  class='row data-blocks-section ' >

                <div class="col-xs-12 text-center">
                    <img alt ="<?= $v['Code2'] ?>" src='/public/img/flags/22/<?= $v['Code2'] ?>.png' />&nbsp; <?= $v['NameCountry'] ?>
                </div>
            </div>

        </div>
    </div>
    <? $n++ ?>
    <? if ($n%3 == 0) echo "</div>\n" ?>

<? endforeach ?>
<? if ($n%3 != 0) echo "</div>\n" ?>