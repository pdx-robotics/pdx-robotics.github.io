<?php include './parts/head.php';
  head($title='Events - Viking Robotics Society');
?>
    <section class="wrapper">
        <div class="inner">
        <h2>Flyers</h2>
        <ul>
            <li><a href="/documents/VRS_flyer.pdf">General Flyer</a></li>
            <li><a href="/documents/20181116_GameNight.pdf">[2018-11-16] Game Night</a></li>
            <li><a href="/documents/20190315_GameNight.pdf">[2019-03-15] Game Night</a></li>
        </ul>
        </div>

        <?php include "/parts/events.html";?>

        <div class="inner">
            <header class="special">
                <h2>Calendar</h2>
                <iframe src="https://calendar.google.com/calendar/embed?src=pdx.edu_v68cnhjp6329n0o48pqgsiaric%40group.calendar.google.com&ctz=America%2FLos_Angeles" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
            </header>
        </div>
<?php include './parts/footer.php';?>
</body>
</html>
