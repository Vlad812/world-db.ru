<? $n = 0; ?>

<div class="table-responsive">
    <table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>№</th>
            <th>Флаг </th>
            <th>Название </th>
            <th>Столица </th>
            <th>Код </th>

        </tr>
    </thead>
    <tbody>
        <? foreach($list as $v): ?>
            <tr>
                <td><?= ++$n ?></td>
                <td><img src='/public/img/flags/64/<?= $v['Code2'] ?>.png' /> </td>
                <td><?= $v['Name'] ?> </td>
                <td><?= $v['Capital'] ?> </td>
                <td><?= $v['Code2'] ?> </td>
            </tr>
        <? endforeach ?>
    </tbody>
    <tfoot>
        <tr>
            <th>№</th>
            <th>Флаг </th>
            <th>Название </th>
            <th>Столица </th>
            <th>Код </th>
        </tr>
    </tfoot>
</table>
</div>
