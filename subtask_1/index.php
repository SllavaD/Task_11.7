<html>

<head>
    <title>Тестируем PHP</title>
    <link rel="stylesheet" href="./index.css"/>
</head>

<body>
    <?php echo '<p>Задание 1. Таблица истинности PHP</p>'; 
    $a0 = 0;
    $a1 = 1;
    $b0 = 0;
    $b1 = 1;
    ?>
    
    <table>
    <colgroup>
        
        
    </colgroup>
        <tr colspan = grey>
            <th>A</th>
            <th>B</th>
            <th>!A</th>
            <th>A || B</th>
            <th>A && B</th>
            <th>A xor B</th>
        </tr>
    <tr>
        <td> <?= $a0?> </td>
        <td> <?= $b0?> </td>
        <td> <?= var_dump(!$a0) ?> </td>
        <td> <?= var_dump($a0 || $b0) ?> </td>
        <td> <?= var_dump($a0 && $b0) ?> </td>
        <td> <?= var_dump($a0 xor $b0) ?> </td>
    </tr>
    <tr>
        <td> <?= $a0?> </td>
        <td> <?= $b1?> </td>
        <td> <?= var_dump(!$a0) ?> </td>
        <td> <?= var_dump($a0 || $b1) ?> </td>
        <td> <?= var_dump($a0 && $b1) ?> </td>
        <td> <?= var_dump($a0 xor $b1) ?> </td>
    </tr>
    <tr>
        <td> <?= $a1?> </td>
        <td> <?= $b0?> </td>
        <td> <?= var_dump(!$a1) ?> </td>
        <td> <?= var_dump($a1 || $b0) ?> </td>
        <td> <?= var_dump($a1 && $b0) ?> </td>
        <td> <?= var_dump($a1 xor $b0) ?> </td>
    </tr>
    <tr>
        <td> <?= $a1?> </td>
        <td> <?= $b1?> </td>
        <td> <?= var_dump(!$a1) ?> </td>
        <td> <?= var_dump($a1 || $b1) ?> </td>
        <td> <?= var_dump($a1 && $b1) ?> </td>
        <td> <?= var_dump($a1 xor $b1) ?> </td>
    </tr>
    </table>
</body>

</html>