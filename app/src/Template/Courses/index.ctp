<h1>Blog courses</h1>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Created</th>
</tr>
 
<?php foreach ($courses as $course): ?>
    <tr>
    <td><?php echo $course->id; ?></td>
    <td>
    <?php echo $this->Html->link($course->title, array('controller' => 'courses', 'action' => "view", $course->id));?>
    </td>
    <td><?php echo $course->created->format('Y-m-d H:i:s'); ?></td>
    </tr>
<?php endforeach; ?>
<?php unset($course); ?>
</table>