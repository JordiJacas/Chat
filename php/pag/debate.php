<!DOCTYPE html>
<?php
  session_start();
  $pwd = $_SESSION['pwd']; 
  $user = $_SESSION['user'];
?>
<html>
  <head>
  <title> Ayuntamiento de tu casa</title>
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
  </head>
    
  <body>
  	<header><h1>Banner</h1></header>
        <nav>
			<ul class="menu">
				<li><a href="../../index.html">Inicio</a></li>
	            <li><a href="debate.php">Debates</a></li>
	            <li><a href="#">Denuncias</a></li>
	            <li><a href="#">Intercambios</a></li>
	            <li><a href="chat.php">Chat</a></li>
	            <?php
	            	echo "	<p id='ini_ses'>".$user."</p>";		
	            ?>
	            <a href='logout.php' id='reg'>Logout</a>
			</ul>
		</nav>
        <div id="debate">
		<h3 id="title_debate" >Leave a Reply <small><a rel="nofollow" href="/cosas-a-tener-en-cuenta-al-disenar-la-web-de-un-ayuntamiento/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="http://sergiodelamo.es/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" value="" size="30" maxlength="245" aria-required="true" required="required" type="text"></p>
<p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" value="" size="30" maxlength="100" aria-describedby="email-notes" aria-required="true" required="required" type="text"></p>
<p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" value="" size="30" maxlength="200" type="text"></p>
<p class="form-submit"><input name="submit" id="submit" class="submit" value="Post Comment" type="submit"> <input name="comment_post_ID" value="28" id="comment_post_ID" type="hidden">
<input name="comment_parent" id="comment_parent" value="0" type="hidden">
</p><p style="display: none;"><input id="akismet_comment_nonce" name="akismet_comment_nonce" value="97a7dc6083" type="hidden"></p><p class="comment-subscription-form"><input name="subscribe_comments" id="subscribe_comments" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" type="checkbox"> <label class="subscribe-label" id="subscribe-label" for="subscribe_comments">Notify me of follow-up comments by email.</label></p><p class="comment-subscription-form"><input name="subscribe_blog" id="subscribe_blog" value="subscribe" style="width: auto; -moz-appearance: checkbox; -webkit-appearance: checkbox;" type="checkbox"> <label class="subscribe-label" id="subscribe-blog-label" for="subscribe_blog">Notify me of new posts by email.</label></p><p style="display: none;"></p>			<input id="ak_js" name="ak_js" value="1516118096280" type="hidden"></form>
			</div>
  </body>
</html>