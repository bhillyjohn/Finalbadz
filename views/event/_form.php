<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\Location;
use app\models\Registree;

/* @var $this yii\web\View */
/* @var $model common\models\Event */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="event-form">

    <div class="company-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'event_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_id')->dropDownList(ArrayHelper::map(
    	Location::find()->asArray()->all(), 'id','location_name')) ?>

    <div class="form-group">
    <label for="date"> Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>
    </div>

    <?= $form->field($model, 'registree_id')->dropDownList(ArrayHelper::map(
    			Registree::find()->asArray()->all(), 'id','name')) ?>
<?= $form->field($model, 'time_started')->textInput(['maxlength' => true]) ?>
<?= $form->field($model, 'time_end')->textInput(['maxlength' => true]) ?>
    
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
