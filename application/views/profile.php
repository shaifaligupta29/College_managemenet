<html>
    <body>
<?php if(isset($_SESSION['success'])){ 
        ?>
        <div class="alert alert-success"><?php echo $_SESSION['success']; ?></div>
        <?php } ?>
        HELLO,<?php echo $_SESSION['username']; ?>
        <br><br>
        <!-- <a href="<?php echo base_url('index.php/display/logout'); ?>">Log out</a -->
</body>
        </html>