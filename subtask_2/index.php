<html>

<head>
    <title>Тестируем PHP</title>
    <link rel="stylesheet" href="./index.css"/>
</head>

<body>
    <?php  
    $x1 = true;
    $x2 = false;
    $x3 = 1;
    $x4 = 0;
    $x5 = -1;
    $x6 = "1";
    $x7 = null;
    $x8 = "php";
    $y1 = true;
    $y2 = false;
    $y3 = 1;
    $y4 = 0;
    $y5 = -1;
    $y6 = "1";
    $y7 = null;
    $y8 = "php"; 
    ?>
    
    <h3> Гибкое сравнение в PHP</h>
    <table>
        <tr colspan = grey>
            <th> == </th>
            <th> true </th>
            <th> false </th>
            <th> 1 </th>
            <th> 0 </th>
            <th> -1 </th>
            <th> "1" </th>
            <th>null</th>
            <th>"php"</th>
        </tr>
    <tr>
        <th> true </th>
        <td> <?php echo var_dump($x1 == $y1) ?> </td>
        <td> <?php echo var_dump($x2 == $y1) ?> </td>
        <td> <?php echo var_dump($x3 == $y1) ?> </td>
        <td> <?php echo var_dump($x4 == $y1) ?> </td>
        <td> <?php echo var_dump($x5 == $y1) ?> </td>
        <td> <?php echo var_dump($x6 == $y1) ?> </td>
        <td> <?php echo var_dump($x7 == $y1) ?> </td>
        <td> <?php echo var_dump($x8 == $y1) ?> </td>
    </tr>
    <tr>
        <th> false </th>
        <td> <?php echo var_dump($x1 == $y2) ?> </td>
        <td> <?php echo var_dump($x2 == $y2) ?> </td>
        <td> <?php echo var_dump($x3 == $y2) ?> </td>
        <td> <?php echo var_dump($x4 == $y2) ?> </td>
        <td> <?php echo var_dump($x5 == $y2) ?> </td>
        <td> <?php echo var_dump($x6 == $y2) ?> </td>
        <td> <?php echo var_dump($x7 == $y2) ?> </td>
        <td> <?php echo var_dump($x8 == $y2) ?> </td>
    </tr>
    <tr>
        <th> 1 </th>
        <td> <?php echo var_dump($x1 == $y3) ?> </td>
        <td> <?php echo var_dump($x2 == $y3) ?> </td>
        <td> <?php echo var_dump($x3 == $y3) ?> </td>
        <td> <?php echo var_dump($x4 == $y3) ?> </td>
        <td> <?php echo var_dump($x5 == $y3) ?> </td>
        <td> <?php echo var_dump($x6 == $y3) ?> </td>
        <td> <?php echo var_dump($x7 == $y3) ?> </td>
        <td> <?php echo var_dump($x8 == $y3) ?> </td>
    </tr>
    <tr>
        <th> 0 </th>
        <td> <?php echo var_dump($x1 == $y4) ?> </td>
        <td> <?php echo var_dump($x2 == $y4) ?> </td>
        <td> <?php echo var_dump($x3 == $y4) ?> </td>
        <td> <?php echo var_dump($x4 == $y4) ?> </td>
        <td> <?php echo var_dump($x5 == $y4) ?> </td>
        <td> <?php echo var_dump($x6 == $y4) ?> </td>
        <td> <?php echo var_dump($x7 == $y4) ?> </td>
        <td> <?php echo var_dump($x8 == $y4) ?> </td>
    </tr>
    <tr>
        <th> -1 </th>
        <td> <?php echo var_dump($x1 == $y5) ?> </td>
        <td> <?php echo var_dump($x2 == $y5) ?> </td>
        <td> <?php echo var_dump($x3 == $y5) ?> </td>
        <td> <?php echo var_dump($x4 == $y5) ?> </td>
        <td> <?php echo var_dump($x5 == $y5) ?> </td>
        <td> <?php echo var_dump($x6 == $y5) ?> </td>
        <td> <?php echo var_dump($x7 == $y5) ?> </td>
        <td> <?php echo var_dump($x8 == $y5) ?> </td>
    </tr>
    <tr>
        <th> "1" </th>
        <td> <?php echo var_dump($x1 == $y6) ?> </td>
        <td> <?php echo var_dump($x2 == $y6) ?> </td>
        <td> <?php echo var_dump($x3 == $y6) ?> </td>
        <td> <?php echo var_dump($x4 == $y6) ?> </td>
        <td> <?php echo var_dump($x5 == $y6) ?> </td>
        <td> <?php echo var_dump($x6 == $y6) ?> </td>
        <td> <?php echo var_dump($x7 == $y6) ?> </td>
        <td> <?php echo var_dump($x8 == $y6) ?> </td>
    </tr>
    <tr>
        <th> null </th>
        <td> <?php echo var_dump($x1 == $y7) ?> </td>
        <td> <?php echo var_dump($x2 == $y7) ?> </td>
        <td> <?php echo var_dump($x3 == $y7) ?> </td>
        <td> <?php echo var_dump($x4 == $y7) ?> </td>
        <td> <?php echo var_dump($x5 == $y7) ?> </td>
        <td> <?php echo var_dump($x6 == $y7) ?> </td>
        <td> <?php echo var_dump($x7 == $y7) ?> </td>
        <td> <?php echo var_dump($x8 == $y7) ?> </td>
    </tr>
    <tr>
        <th> "php" </th>
        <td> <?php echo var_dump($x1 == $y8) ?> </td>
        <td> <?php echo var_dump($x2 == $y8) ?> </td>
        <td> <?php echo var_dump($x3 == $y8) ?> </td>
        <td> <?php echo var_dump($x4 == $y8) ?> </td>
        <td> <?php echo var_dump($x5 == $y8) ?> </td>
        <td> <?php echo var_dump($x6 == $y8) ?> </td>
        <td> <?php echo var_dump($x7 == $y8) ?> </td>
        <td> <?php echo var_dump($x8 == $y8) ?> </td>
    </tr>
    </table>

    <h3>Жёсткое сравнение в PHP</h>
    <table>
        <tr colspan = grey>
            <th> === </th>
            <th> true </th>
            <th> false </th>
            <th> 1 </th>
            <th> 0 </th>
            <th> -1 </th>
            <th> "1" </th>
            <th>null</th>
            <th>"php"</th>
        </tr>
    <tr>
        <th> true </th>
        <td> <?php echo var_dump($x1 === $y1) ?> </td>
        <td> <?php echo var_dump($x2 === $y1) ?> </td>
        <td> <?php echo var_dump($x3 === $y1) ?> </td>
        <td> <?php echo var_dump($x4 === $y1) ?> </td>
        <td> <?php echo var_dump($x5 === $y1) ?> </td>
        <td> <?php echo var_dump($x6 === $y1) ?> </td>
        <td> <?php echo var_dump($x7 === $y1) ?> </td>
        <td> <?php echo var_dump($x8 === $y1) ?> </td>
    </tr>
    <tr>
        <th> false </th>
        <td> <?php echo var_dump($x1 === $y2) ?> </td>
        <td> <?php echo var_dump($x2 === $y2) ?> </td>
        <td> <?php echo var_dump($x3 === $y2) ?> </td>
        <td> <?php echo var_dump($x4 === $y2) ?> </td>
        <td> <?php echo var_dump($x5 === $y2) ?> </td>
        <td> <?php echo var_dump($x6 === $y2) ?> </td>
        <td> <?php echo var_dump($x7 === $y2) ?> </td>
        <td> <?php echo var_dump($x8 === $y2) ?> </td>
    </tr>
    <tr>
        <th> 1 </th>
        <td> <?php echo var_dump($x1 === $y3) ?> </td>
        <td> <?php echo var_dump($x2 === $y3) ?> </td>
        <td> <?php echo var_dump($x3 === $y3) ?> </td>
        <td> <?php echo var_dump($x4 === $y3) ?> </td>
        <td> <?php echo var_dump($x5 === $y3) ?> </td>
        <td> <?php echo var_dump($x6 === $y3) ?> </td>
        <td> <?php echo var_dump($x7 === $y3) ?> </td>
        <td> <?php echo var_dump($x8 === $y3) ?> </td>
    </tr>
    <tr>
        <th> 0 </th>
        <td> <?php echo var_dump($x1 === $y4) ?> </td>
        <td> <?php echo var_dump($x2 === $y4) ?> </td>
        <td> <?php echo var_dump($x3 === $y4) ?> </td>
        <td> <?php echo var_dump($x4 === $y4) ?> </td>
        <td> <?php echo var_dump($x5 === $y4) ?> </td>
        <td> <?php echo var_dump($x6 === $y4) ?> </td>
        <td> <?php echo var_dump($x7 === $y4) ?> </td>
        <td> <?php echo var_dump($x8 === $y4) ?> </td>
    </tr>
    <tr>
        <th> -1 </th>
        <td> <?php echo var_dump($x1 === $y5) ?> </td>
        <td> <?php echo var_dump($x2 === $y5) ?> </td>
        <td> <?php echo var_dump($x3 === $y5) ?> </td>
        <td> <?php echo var_dump($x4 === $y5) ?> </td>
        <td> <?php echo var_dump($x5 === $y5) ?> </td>
        <td> <?php echo var_dump($x6 === $y5) ?> </td>
        <td> <?php echo var_dump($x7 === $y5) ?> </td>
        <td> <?php echo var_dump($x8 === $y5) ?> </td>
    </tr>
    <tr>
        <th> "1" </th>
        <td> <?php echo var_dump($x1 === $y6) ?> </td>
        <td> <?php echo var_dump($x2 === $y6) ?> </td>
        <td> <?php echo var_dump($x3 === $y6) ?> </td>
        <td> <?php echo var_dump($x4 === $y6) ?> </td>
        <td> <?php echo var_dump($x5 === $y6) ?> </td>
        <td> <?php echo var_dump($x6 === $y6) ?> </td>
        <td> <?php echo var_dump($x7 === $y6) ?> </td>
        <td> <?php echo var_dump($x8 === $y6) ?> </td>
    </tr>
    <tr>
        <th> null </th>
        <td> <?php echo var_dump($x1 === $y7) ?> </td>
        <td> <?php echo var_dump($x2 === $y7) ?> </td>
        <td> <?php echo var_dump($x3 === $y7) ?> </td>
        <td> <?php echo var_dump($x4 === $y7) ?> </td>
        <td> <?php echo var_dump($x5 === $y7) ?> </td>
        <td> <?php echo var_dump($x6 === $y7) ?> </td>
        <td> <?php echo var_dump($x7 === $y7) ?> </td>
        <td> <?php echo var_dump($x8 === $y7) ?> </td>
    </tr>
    <tr>
        <th> "php" </th>
        <td> <?php echo var_dump($x1 === $y8) ?> </td>
        <td> <?php echo var_dump($x2 === $y8) ?> </td>
        <td> <?php echo var_dump($x3 === $y8) ?> </td>
        <td> <?php echo var_dump($x4 === $y8) ?> </td>
        <td> <?php echo var_dump($x5 === $y8) ?> </td>
        <td> <?php echo var_dump($x6 === $y8) ?> </td>
        <td> <?php echo var_dump($x7 === $y8) ?> </td>
        <td> <?php echo var_dump($x8 === $y8) ?> </td>
    </tr>
    </table>
    
</body>

</html>