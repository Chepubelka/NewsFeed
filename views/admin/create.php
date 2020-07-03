<?php include ROOT.'/views/header.php'; ?>
<div class="container">
    <div class="row d-flex justify-content-center mt-5">
        <div class="col-lg-4">
            <h3><?php if ($full_data!=''): echo "<h3>Изменение записи <b>".$full_data['id_news']."</b></h3>"; else: echo "Добавление записи"; endif;?></h3>
            <form action="" method="post">
                <p class="mt-3 mb-0">Заголовок</p>
                <input type="text" class="form-control" name="title" value="<?php if ($full_data!=''): echo $full_data['title']; endif; ?>" required>
                <p class="mt-3 mb-0">Дата</p>
                <input type="date" name="date" class="w-100" value="<?php if ($full_data!=''): echo $full_data['date_news']; endif; ?>" required>
                <p class="mt-3 mb-0">Анонс</p>
                <input type="text" name="announce" class="form-control" value="<?php if ($full_data!=''): echo $full_data['announce']; endif; ?>" required>
                <p class="mt-3 mb-0">Текст</p>
                <textarea name="text" id=""cols="35" rows="5" required><?php if ($full_data!=''): echo $full_data['text']; endif; ?></textarea>
                <p class="mt-3 mb-0">Картинка</p>
                <input type="text" name="img" class="form-control" value="<?php if ($full_data!=''): echo $full_data['img']; endif; ?>">
                <input type="submit" class="w-100 mt-3 btn btn-primary" value="<?php if ($full_data!=''): echo "Сохранить"; else: echo "Добавить"; endif;?>">
            </form>
        </div>
    </div>
</div>
<?php include ROOT.'/views/footer.php'; ?>