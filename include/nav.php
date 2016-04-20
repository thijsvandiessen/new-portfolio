<?php
$pages = array(
    'index.php' => 'Featured',
    'projects.php' => 'Projects',
    'profile.php' => 'Profile',
    'writing.php' => 'Writing',
    'contact.php' => 'Contact',
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

	<!-- Page Content -->
	<div id="page-content-wrapper">
		<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
		<div class="container-fluid">
