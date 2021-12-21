<html>
    <body>
<?php if(isset($_SESSION['error'])){ 
        ?>
        <div class="alert alert-success"><?php echo $_SESSION['error']; ?></div>
        <?php } ?>
        bye,<?php echo $_SESSION['email']; ?>
</body>
        </html>