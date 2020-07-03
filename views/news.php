<?php include ROOT.'/views/header.php'; ?>

<div class="container">
    <div class="row mt-5">
        <div class="col">
            <img src="<?php echo $full_data['img'] ?>" height="200px" width="300px" alt="img">
        </div>
        <div class="col">
            <?php
                echo "<h1>".$full_data['title']."</h1>";
                echo "<h3>".$full_data['date_news']."</h3>";
            ?>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <?php
            echo "<p>".$full_data['text']."</p>"
            ?>
        </div>
    </div>
</div>


<?php include ROOT.'/views/footer.php' ?>
