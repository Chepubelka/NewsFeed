<?php include ROOT.'/views/header.php'; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <td>Номер новости</td>
                    <td>Заголовок</td>
                    <td>Дата</td>
                    <td>Анонс</td>
                    <td>Действие</td>
                </tr>
                </thead>
                <tbody>
            <?php
            foreach ($all_news as $news_item):
                ?>
            <tr id="<?php echo $news_item['id_news']; ?>">
                <?php
                echo "<td>".$news_item['id_news']."</td>";
                echo "<td>".$news_item['title']."</td>";
                echo "<td>".$news_item['date_news']."</td>";
                echo "<td>".$news_item['announce']."</td>";
                echo "<td><div class='row'><div class='col'>
                        <a href='/edit/".$news_item['id_news']."'  class='btn btn-white'>&#9997;</a></div><div class='col'>
                        <button type='button' id='deletenews' name='".$news_item['id_news']."' class='form-control border-0'>&#10008;</button>
                        </div></div></td>";
                endforeach;
                ?>
            </tr>
                </tbody>
            </table>
            <a href="/create" class="btn btn-primary">Создать запись</a>
        </div>
    </div>
</div>

<?php include ROOT.'/views/footer.php'; ?>
