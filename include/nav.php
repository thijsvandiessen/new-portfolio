<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="index.php"><h3>Portfolio<h3></a>
        </li>
        <?php foreach ($pages as $filename => $pageName) { 
            if ($filename == $currentPage) { ?>
        <li class="active"><?php echo $pageName ; ?></li>
            <?php } else { ?>
        <li><a href="<?php echo $filename ; ?>"><?php echo $pageName ; ?></a></li>
            <?php
            } 
         } 
            ?>
    </ul>
</div>

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<a href="#menu-toggle" class="btn" id="menu-toggle">menu<!-- <img src="img/hamburger.svg"> --></a>
		<div class="container-fluid">
