<?php require('include/array.php'); ?>

<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand">
            <a href="index.php">
                <h3>My portfolio<h3>
            </a>
        </li>
        <?php
            foreach ($pages as $filename => $pageName) {
                if ($filename == $currentPage) {
                    ?><li class="active"><?php echo $pageName ; ?></li><?php
                }
                else {
                    ?><li><a href="<?php echo $filename ; ?>"><?php echo $pageName ; ?></a></li> <?php
                }
            }
        ?>
    </ul>
</div>
	<!-- Page Content -->
	<div id="page-content-wrapper">
		<a href="#menu-toggle" class="btn" id="menu-toggle">menu</a>
