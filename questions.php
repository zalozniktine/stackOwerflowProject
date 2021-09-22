<div>
    <?php
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
    <form action="question.php" method="post">
        <input type="hidden" value>
    </form>
</div>
<script>
function myFunction() {
    document.getElementById("myForm").submit();
</script>