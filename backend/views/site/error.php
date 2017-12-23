<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
//$this->context->layout = false;

?>


<div class="middle-box text-center animated fadeInDown">
    <h1><?= Html::encode($exception->statusCode) ?></h1>
    <h3 class="font-bold"><?= nl2br(Html::encode($exception->getMessage())) ?></h3>

    <div class="error-desc">
        Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.
        <form class="form-inline m-t" role="form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search for page">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
</div>