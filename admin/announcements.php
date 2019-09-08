<?php
    include "../parts/head.php";
    include "../parts/Parsedown.php";
    $parsedown = new Parsedown();
    head('announcements');
    include '../db.php';
    $sql = "SELECT * FROM announcements";
    $result = mysqli_query($conn, $sql);?>
    <section class='wrapper'>
        <div class='inner'>
            <h2>Announcements</h2>
            <table>
    <?php
    foreach($result as $row){
        echo '<tr><td>';
        echo $parsedown->text($row['announcement']);
        echo '</td></tr>'.PHP_EOL;
    }?>
            </table>
        </div>
    </section>
    <?php include "../parts/footer.html";?>
</body></html>