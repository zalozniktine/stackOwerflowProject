<div>
    <?php
    include 'povezava.php';

    if(isset($_SESSION['search'])){
        $search = $_SESSION['search'];
        echo "oink";
        $query = ('SELECT v.Naslov AS Naslov,v.id AS id,COUNT(o.id) AS neki FROM vprasanja v left JOIN odgovori o ON o.vprasanje_id=v.id WHERE lower(Naslov) LIKE ? GROUP BY v.Naslov ');
        $stmt = $pdo->prepare($query);
        $stmt->execute(["%$search%"]);
    }else{
        $stmt = $pdo->query('SELECT v.Naslov AS Naslov,v.id AS id,COUNT(o.id) AS neki FROM vprasanja v left JOIN odgovori o ON o.vprasanje_id=v.id GROUP BY v.Naslov');
    }
    
    echo '<table  class="izpis">';
    while ($row = $stmt->fetch()) {
        echo
        '<tr>'
        .'<td style="border-bottom: 1px solid black">
        
        <div style="font-size:10px; font-family:Arial; color:gray; padding-right:10px">
            <div style="text-align:center">'.$row['neki'].'</div>
            <div>Answers</div>
        <div>
        
        </td>'
        //.'<td style="border-bottom: 1px solid black; width:600px" class="celica"><a id="myLink" href="#" onclick="myFunction();return false;">'.$row['Naslov'].'</a></td>'
        .'<td style="border-bottom: 1px solid black; width:600px" class="celica"><a href="question.php?id='.$row['id'].'">'.$row['Naslov'].'</a></td>'
        .'</tr>';
    }
    echo '</table>';
    ?>

</div>