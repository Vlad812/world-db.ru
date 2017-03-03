<? $n = 0; ?>

<? foreach($list as $v): ?>

     <? if (!$n or $n%3 == 0) echo "<div class='row'>\n" ?>
        <div class="col-xs-12 col-sm-4">

            <div class="data-blocks">

                <div  class='row data-blocks-section delimiter' >
                    <div class="col-xs-1 numb"><?= ++$offset ?></div>
                    <div class="col-xs-11 text-center ">
                        <span class="name"><?= $v['Name'] ?></span>
                        <span class="code">(<?= $v['Code'] ?>)</span>
                    </div>
                </div>
                <div  class='row data-blocks-section ' >

                    <div class="col-xs-12 text-center">
                        <img alt ="<?= $v['Code2'] ?>" src='/public/img/flags/48/<?= $v['Code2'] ?>.png' />
                    </div>
                </div>
                <div  class='row data-blocks-section'>
                    <div class="col-xs-12 ">
                        <span class="name-item ">Столица:</span>
                        <?= $v['Capital'] ?> (<?= $v['CapitalPopulation'] ?>) </div>
                </div>
                <div  class='row data-blocks-section'>
                    <div class="col-xs-12 ">
                        <span class="name-item ">Регион:</span>

                        <?= $v['Region'] ?>
                    </div>
                </div>
                <div  class='row data-blocks-section'>
                    <div class="col-xs-12 ">
                        <span class="name-item ">Население:</span>
                        <?= $v['CountryPopulation'] ?>
                    </div>
                </div>
                <div  class='row data-blocks-section'>
                    <div class="col-xs-12 ">
                        <span class="name-item ">Площадь:</span>
                        <?= $v['SurfaceArea'] ?>
                    </div>
                </div>
                <div  class='row data-blocks-section'>
                    <div class="col-xs-12 ">
                        <span class="name-item ">Форма Гос.Правления: </span>
                        <?= $v['GovForm'] ?>
                    </div>
                </div>
            </div>
        </div>
    <? $n++; ?>
    <? if ($n%3 == 0) echo "</div>\n" ?>

<? endforeach ?>
<? if ($n%3 != 0) echo "</div>\n" ?>