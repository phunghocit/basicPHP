<h1><?= $datas['headingHot'] ?></h1>

<table border="1">
    <tr>
        <th>STT </th>
        <th>Product name</th>
    </tr>
    <tr>
    <?php foreach ($listProductHot as $key => $data ) :?>
        <tr>
            <td><?=$key+1 ?></td>
            <td><?=$data['name'] ?></td>
        </tr>
<?php endforeach?>
    </tr>
</table>
<h1><?= $datas['headingNewArrival'] ?></h1>


<table border="1">
    <tr>
        <th>STT </th>
        <th>Product name</th>
    </tr>
    <tr>
    <?php foreach ($listProductNewArrival as $key => $data ) :?>
        <tr>
            <td><?=$key+1 ?></td>
            <td><?=$data['name'] ?></td>
        </tr>
<?php endforeach?>
    </tr>
</table>