<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>

<div id="menu_div"> 
	<?php echo public_navigation($sel_subject, $sel_page); ?> </div><a href="login.php" style="float:right; padding: 10 15 ;"> Login</a> </div>
	<div id="content_hor1">
	<?php if ($sel_page) { ?>
		
		<h2><?php echo htmlentities($sel_page['menu_name']); ?></h2><br/>
			<?php echo strip_tags(nl2br($sel_page['content']), "<h2><b><br><p><a><img><u>"); ?>
				
				
	<?php } else { ?>
<div id="sliderFrame">
    <div id="slider">  
        <img src="images/homeD.jpg" alt="Sunrise in Sarangkot"/>     
        <img src="images/homeA.jpg"   alt="Mount Machhapuchhre in Pokhara" />
        <img src="images/home2.jpg" alt="Pashupatinath Temple in Kathmandu" />
        <img src="images/homeB.jpg" alt="Mount Kanchanjunga" />
        <img src="images/homeC.jpg" alt="Mount Everest"/>
    </div>
</div>
	        <img src="images/banner1.jpg" height="200px" width="100%" style="margin-top:20px" alt="image not found"/>     
	
	<?php } ?>
	</div>
		<?php include("includes/footer.php"); ?> 
		




