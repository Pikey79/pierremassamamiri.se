
<?php 
    $db = mysqli_connect('localhost', 'root', '', 'db_enskilt');
    mysqli_query($db, "SET NAMES utf8");
?>

  <section class="second">
<h2>Mitt CV</h2>
  <div id="frame">
    <div id="cv-first">


       <h3><?php 
    $query = "SELECT * FROM pages WHERE id=4";
    $pages_result = mysqli_query($db, $query);
    $page = mysqli_fetch_assoc($pages_result);
    echo $page['main_heading']; 
?> </h3>
       <p><?php echo $page['page_content1']; ?></p> 
       <a href="javascript:showOrHide();"><img class="show-more-button" src="img/show-more.png" alt="visa mer">
       </a>
    <div id="showOrHideDiv">
      <p>
       Det är ett välkänt faktum att läsare distraheras av läsbar text på en sida när man skall studera layouten. Poängen med Lorem Ipsum är att det ger ett normalt ordflöde, till skillnad från "Text här, Text här.
      </p>
    </div>
  
</div>
<div id="cv-second">


<h3><?php 
    $query = "SELECT * FROM pages WHERE id=5";
    $pages_result = mysqli_query($db, $query);
    $page = mysqli_fetch_assoc($pages_result);
    echo $page['main_heading']; 
?>  </h3>
<p><?php echo $page['page_content2']; ?></p>
<a href="javascript:showOrHideSecond();">
    <img class="show-more-button" src="img/show-more.png" alt="visa mer">
  </a>
<div id="showOrHideDivSecond">
<p>Det är ett välkänt faktum att läsare distraheras av läsbar text på en sida när man skall studera layouten. Poängen med Lorem Ipsum är att det ger ett normalt ordflöde, till skillnad från "Text här, Text här.
</p>
</div>

</div>
</div>
<ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pierremassamiri.se&t=Pierre%20Massamiri" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="img/Facebook.png"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.pierremassamiri.se&text=Pierre%20Massamiri:%20http%3A%2F%2Fwww.pierremassamiri.se" target="_blank" title="Tweet"><img alt="Tweet" src="img/Twitter.png"></a></li>
  <li><a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.pierremassamiri.se" target="_blank" title="Share on Google+"><img alt="Share on Google+" src="img/Google+.png"></a></li>
</ul>
</section>

<?php include('footer.php'); ?>
  
  <script src="show-hide.js"></script>
  <script src="responsive-menu.js"></script>
</body> 
</html>