<h1>All Textbooks</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

    <!-- ここから、$articles のクエリーオブジェクトをループして、投稿記事の情報を表示 -->

    <?php foreach ($textbooks as $textbook): ?>
    <tr>
        <td><?= $textbook->id ?></td>
        <td>
            <?= $this->Html->link($textbook->title, ['action' => 'view', $textbook->id]) ?>
        </td>
        <td>
          <?php //  <?= $textbook->created->format(DATE_RFC850) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
