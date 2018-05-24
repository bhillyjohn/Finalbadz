<?php 

use yii\helpers\Html;


$this->title = "Event";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Event Name</th>
        <th>Location Id</th>
        <th>Date</th>
        <th>Time Stared</th>
        <th>Time End</th>
       
     </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->event_name, ['/event/view', 'id'=>$model->id]); ?>
        </td>  
       
        <td><?= $model->location_id ?></td>
        <td><?= $model->date ?></td>
        <td><?= $model->time_started ?></td>
        <td><?= $model->time_end ?></td>
         
        
    </tr>
    <?php endforeach; ?>
</table>
