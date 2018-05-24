<?php 

use yii\helpers\Html;


$this->title = "Location";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Location', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
         <th>ID No.</th>
        <th>Location Name</th>
       




        
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->id, ['/location/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->location_name ?></td>
        
        
    </tr>
    <?php endforeach; ?>
</table>
