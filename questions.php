<div>
    <?php
    include 'povezava.php';
    $stmt = $pdo->query('SELECT * FROM vprasanja');
    echo '<table  class="izpis">';
    while ($row = $stmt->fetch()) {
        echo
        '<tr>'
        .'<td style="width:100px; border-bottom: 1px solid black">&nbsp</td>'
        //.'<td style="border-bottom: 1px solid black; width:600px" class="celica"><a id="myLink" href="#" onclick="myFunction();return false;">'.$row['Naslov'].'</a></td>'
        .'<td style="border-bottom: 1px solid black; width:600px" class="celica"><a href="question.php?id='.$row['id'].'">'.$row['Naslov'].'</a></td>'
        .'</tr>';
    }
    echo '</table>';
    ?>

</div>