<div class="table-responsive">
    <table class="table  table-hover table-striped">
        <thead>
            <tr>
                <th>№</th>
                <th>Название Города </th>
                <th>Население </th>
                <th>Страна</th>

            </tr>
        </thead>
        <tbody>
            <? foreach($list as $v): ?>
                <tr>
                    <td><?= ++$offset ?></td>
                    <td><?= $v['NameCity'] ?> </td>
                    <td><?= $v['Population'] ?> </td>
                    <td><?= $v['NameCountry'] ?> (<?= $v['CountryCode'] ?> ) </td>
                </tr>

            <? endforeach ?>
        </tbody>
        <tfoot>
            <tr>
                <th>№</th>
                <th>Название Города </th>
                <th>Население </th>
                <th>Страна</th>
            </tr>
        </tfoot>
    </table>
</div>
