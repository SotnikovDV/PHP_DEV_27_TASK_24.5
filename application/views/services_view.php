<h1>Мы предлагаем вам следующие услуги:</h1>
<p>
<div style="width: 50%; margin: auto;">
    <ul>
        <?php
			// инициируем данные
			$model = new Model_Services;
			$data = $model->get_data();

            foreach ($data as $row) {
            echo '<li><a target="_blank" href="'.$row['link'].'">'.$row['id'].' '.$row['description'].'</a></li>';
        }
        ?>
    </ul>
</div>