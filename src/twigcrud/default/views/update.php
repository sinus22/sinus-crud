<?php

use yii\helpers\Inflector;
use yii\helpers\StringHelper;

/* @var $this yii\web\View */
/* @var $generator insolita\giitwig\crud\Generator */

$urlParams = $generator->generateTwigUrlParams();
$string= Inflector::camel2words(StringHelper::basename($generator->modelClass));
?>
{{ set(this,'title',<?= $generator->generateString('Update '.$string.' : ') ?> ~ model.<?= $generator->getNameAttribute() ?>) }}

{{ set(this, 'params', { 'breadcrumbs' : [
          { 'label' : <?= $generator->generateString(Inflector::pluralize(Inflector::camel2words(StringHelper::basename($generator->modelClass)))) ?>, 'url':['index'] },
          { 'label' : model.<?= $generator->getNameAttribute() ?>,'url':url('view',<?= $urlParams ?>) },
          { 'label' : this.title }
     ]
   })
}}

<div class="<?= Inflector::camel2id(StringHelper::basename($generator->modelClass)) ?>-update">

    <h1>{{this.title}}</h1>
    {{ this.render('_form.twig',{'model':model})|raw }}
</div>
