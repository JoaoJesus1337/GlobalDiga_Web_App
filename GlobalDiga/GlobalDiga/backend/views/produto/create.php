<?php

use common\models\Iva;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Marca;
use common\models\Categoria;


/** @var yii\web\View $this */
/** @var common\models\Produto $model */

$this->title = 'Criar Produto';
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-create">
    <?= $this->render('_form', [
        'model' => $model,
        'modelUpload' => $modelUpload
    ]) ?>


</div>