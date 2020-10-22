<?php get_header(); ?>

<?php  

$outwhen_content = "";
$button_content = "";

$mydate = '2020-11-30';
$curdate = date('Y-m-d');

if($curdate < $mydate) {
    $outwhen_content = "11.30.20";
    $button_content = "Pre-order";
} else {
    $outwhen_content = "Now";
    $button_content = "Order";
}

?>

<h1 class="heading"><span class="therefore">&rfloor;</span> ROB MOORE <span class="therefore">&lfloor;</span></h1>

<div class="new-album-box">
    <img class="new-album-img" src="wp-content/themes/rob-site-theme/imgs/newalbum.jpg" />
    <div class="album-blurb">
        <h3 class="na">New Album</h3>
        <h3 class="tcw">The Calculated Wilderness</h3>
        <h3 class="outwhen">Out <?php echo $outwhen_content ?></h3>
        <a href="https://robmoore.bandcamp.com/" class="no-line btn" target="_blank"><?php echo $button_content ?> Now</a>
    </div>
</div>
<?php get_footer(); ?>