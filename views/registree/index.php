<?php 

use yii\helpers\Html;


$this->title = "Registree";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<p>
        <?= Html::a('Create Registree', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<table class="table table-bordered">
    <tr>
        
        <th>Name</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Phone</th>
       

 </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/registree/view', 'id'=>$model->id]); ?>
        </td>  
        
        <td><?= $model->address ?></td>
         <td><?= $model->gender ?></td>
          <td><?= $model->phone ?></td>
           
        
    </tr>
    <?php endforeach; ?>
</table>
