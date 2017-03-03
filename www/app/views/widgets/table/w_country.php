
<? $n = 0; ?>
<div class="table-responsive">
    <table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>№</th>
            <th>Флаг</th>
            <th>Название </th>
            <th>Население Страны</th>
            <th>Столица</th>
            <th>Население Столицы</th>
            <th>Код Страны</th>
            <th>Основной Язык</th>
            <th>Регион</th>
            <th>Площадь (км<sup>2</sup>)</th>
            <th>Форма Гос.Правления</th>
        </tr>
    </thead>
    <tbody>
        <? foreach($list as $v): ?>
            <tr>
                <td><?= ++$offset ?></td>
                <td><img src='/public/img/flags/22/<?= $v['Code2'] ?>.png' alt = "<?= $v['Code2'] ?>"/> </td>
                <td><?= $v['Name'] ?> </td>
                <td><?= $v['CountryPopulation'] ?> </td>
                <td><?= $v['Capital'] ?> </td>
                <td><?= $v['CapitalPopulation'] ?> </td>
                <td><?= $v['Code'] ?> </td>
                <td><?= $v['Lng'] ?> </td>
                <td><?= $v['Region'] ?> </td>
                <td><?= $v['SurfaceArea'] ?> </td>
                <td><?= $v['GovForm'] ?> </td>
            </tr>
        <? endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <th>№</th>
            <th>Флаг</th>
            <th>Название </th>
            <th>Население Страны</th>
            <th>Столица</th>
            <th>Население Столицы</th>
            <th>Код Страны</th>
            <th>Основной Язык</th>
            <th>Регион</th>
            <th>Площадь (км<sup>2</sup>)</th>
            <th>Форма Гос.Правления</th>
        </tr>
    </tfoot>
</table>
</div>
