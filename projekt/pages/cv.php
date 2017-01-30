
<?php 
    $db = mysqli_connect('localhost', 'root', '', 'db_enskilt');
    mysqli_query($db, "SET NAMES utf8");
?>

<section class="second">
<h2>Mitt CV</h2>
  <div id="frame">
    <ul id="toggle-view">
  <li>
    <h3><?php 
    $query = "SELECT * FROM pages WHERE id=4";
    $pages_result = mysqli_query($db, $query);
    $page = mysqli_fetch_assoc($pages_result);
    echo $page['main_heading']; 
?> </h3> 
    <span>+</span>
    <div class="panel">
      <p><?php echo $page['page_content1']; ?></p>
    </div>
  </li>
  <li>
    <h3><?php 
    $query = "SELECT * FROM pages WHERE id=5";
    $pages_result = mysqli_query($db, $query);
    $page = mysqli_fetch_assoc($pages_result);
    echo $page['main_heading']; 
?>  </h3>
    <span>+</span>
    <div class="panel">
      <p><?php echo $page['page_content2']; ?></p>
    </div>
  </li>
</ul>
</div>
<ul class="share-buttons">
  <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.pierremassamiri.se&t=Pierre%20Massamiri" title="Share on Facebook" target="_blank"><img alt="Share on Facebook" src="img/Facebook.png"></a></li>
  <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fwww.pierremassamiri.se&text=Pierre%20Massamiri:%20http%3A%2F%2Fwww.pierremassamiri.se" target="_blank" title="Tweet"><img alt="Tweet" src="img/Twitter.png"></a></li>
  <li><a href="https://plus.google.com/share?url=http%3A%2F%2Fwww.pierremassamiri.se" target="_blank" title="Share on Google+"><img alt="Share on Google+" src="img/Google+.png"></a></li>
</ul>
</section>

<?php include('footer.php'); ?>
  <script src="js/toggle.js"></script>
  <script src="js/game.js"></script>
  <script src="js/responsive-menu.js"></script>
</body> 
</html>