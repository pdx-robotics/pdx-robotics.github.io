<?php include "../parts/head.php";
head('VRS Gallery');
echo '<link rel="stylesheet" href="gallery.css">';
echo '<div class="slideshow-container">';
$images = 'images';
$imageCount = count(scandir($images)) -2;
$imageNumber = 0;
$image = scandir($images);
for($i=2; $i< $imageCount +2; $i++){
  $imageNumber += 1;
  echo '
    <div class="mySlides fade">
    <div class="numbertext">'.$imageNumber.'/'.$imageCount.'</div>
    <img src="'.$images.'/'.$image[$i].'"style="width:90%;margin-top:50px;margin-left:50px">
    </div>';
}
echo '
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div><br>
  <div style="text-align:center">'.PHP_EOL;
for( $i=1; $i <= $imageCount; $i++ ){
  echo '<span class="dot" onclick="currentSlide('.$i.')"></span>'.PHP_EOL;
}
echo '</div>';
echo '<script src="gallery.js"></script>';
include "../parts/footer.html";
?>
</body></html>
