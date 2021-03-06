<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\employee\models\EmpDepartment */

$this->params['breadcrumbs'][] = ['label' => 'Employee Departments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->emp_department_name, 'url' => ['view', 'id' => $model->emp_department_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-edit"></i> Update   Department</h3>
  </div>
  <div class="col-xs-4"></div>
    <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4"></div>
	<div class="col-xs-4"></div>
	<div class="col-xs-4 left-padding">
	
	</div>
    </div>
 </div>

<div class="emp-department-update">

      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
