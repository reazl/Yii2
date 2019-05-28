<?php
foreach ($tasks as $item):?>
    <div>


<h3><?= $item['header'] ?></h3>
<p><?= $item['body'] ?></p>
    </div>
<?endforeach;?>
<!--<p><b>Автор задачи:</b> <?/*= $author_id */?></p>
<p><b>Срок выполнения:</b> <?/*= $deadline */?></p>
<p><b>Исполнитель:</b> <?/*= $executer_id */?></p>
<p><b>Раздел:</b> <?/*= $section_id */?></p>
<p><b>Дата создания:</b> <?/*= $create_date */?></p>-->