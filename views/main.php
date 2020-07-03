<?php include ROOT.'/views/header.php'; ?>
    <div class="container">
        <div class="row d-flex flex-column">
                <?php
                foreach ($data_news as $datanew):
                    echo "";
                    echo "<div class='col mt-5 p-2'><div class='row'><div class='col-lg-3'><img src='".$datanew['img']."' alt='img' height='150px' width='200px'></div><div class='col'><a href='/news/".$datanew['id_news']."'>Подробнее</a>";
                    echo "<h1>".$datanew['date_news']." - ".$datanew['title']."</h1>";
                    echo "<div>".$datanew['announce']."</div></div></div></div>";
                endforeach;
                ?>
                <div class="row d-flex flex-row bg-secondary mt-5 mb-5 p-2">
                <?php
                for ($i = 1;$i<=$count_pages;$i++):
                    echo "<div class='col-auto'><a  class='text-white border p-1' href='/home/$i'>$i</a></div>";
                endfor;
                ?>
                </div>
        </div>
    </div>
<?php include ROOT.'/views/footer.php' ?>
