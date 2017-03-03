<h2>Фильтр:</h2>
<div class="body_filter ">
    <form id="filterForm" data-namefilter = "<?= $nameFilter ?>">

        <? foreach($filterSection as $v): ?>

            <div class="form-group ">
                <?= $v ?>
            </div>

        <? endforeach ?>
        <div id="submitFilter">
            <button style="display: none" type="submit" class="btn btn-default pull-right">Применить Фильтр</button>
        </div>
    </form>
</div>
