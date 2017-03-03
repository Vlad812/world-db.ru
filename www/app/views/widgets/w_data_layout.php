<div class="wp">

    <section class="row top-panel">

        <div class="col-xs-12 col-sm-6 view-switch">

            <div class="col-xs-12 col-sm-6"> Режим отображения: </div>

            <div class="col-xs-6 col-sm-3 view-switch-table <?= $activeTable ?>" data-modeview='table'> Таблица </div>

            <div class="col-xs-6 col-sm-3 view-switch-blocks <?= $activeBlocks ?>" data-modeview='blocks'> Карточки </div>

        </div>

        <? if ($itemsPanel): ?>
        <div class="col-xs-12 col-sm-6 items">

            <div class="col-xs-6"> Найдено записей: <span id = 'totalItems'><?= $totalItems ?></span> </div>

            <div class="col-xs-6">
                <form>
                    <label>Отображать по:</label>
                    <select id="item-per-page">
                        <option selected="selected">10</option>
                        <option>20</option>
                        <option>30</option>
                        <option>40</option>
                        <option>50</option>
                        <option>100</option>
                    </select>
                </form>
            </div>
        </div>
        <?endif?>
    </section>

    <section class="row view">
        <?= $view ?>
    </section>

    <? if ($showPagination): ?>
        <section class="row bottom-panel">
            <ul class="pagination ">
                <?= $pagination ?>
            </ul>
        </section>
    <?endif?>
</div>