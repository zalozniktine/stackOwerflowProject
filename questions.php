<div>
    <?php
    $stmt = $pdo->query('SELECT * FROM vprasanja');
    echo '<table class="izpis"> <tr><th class="celica1">Naslov</th></tr>';
    while ($row = $stmt->fetch())
{
    echo 
        '<tr>'
        .'<td class="celica">'.$row['Naslov'].'</td>'
        .'</tr> ';
}
    echo '</table>';
    ?>
</div>