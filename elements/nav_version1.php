<?php
$pages = array(
    "index.php" => "Featured projects",
    "profile.php" => "Get to know me",
    "writing.php" => "My writing",
    "contact.php" => "Let's talk",
);

$currentPage = basename($_SERVER['REQUEST_URI']) ;

?>


<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
    	<li class="sidebar-brand">
			<h3>Portfolio</h3>
		</li>
        <?php foreach ($pages as $filename => $pageTitle) { 
            if ($filename == $currentPage) { ?>
        <li><?php echo $pageTitle ; ?></li>
            <?php } else { ?>
        <li><a href="<?php echo $filename ; ?>"><?php echo $pageTitle ; ?></a></li>
            <?php
            } 
         } 
            ?>
    </ul>
</div>