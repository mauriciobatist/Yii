<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\bootstrap\Button;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="site-index">

    <div class="jumbotron">
        <img src="../web/img/icomp.png" alt="Instituto de Computação" width="40%" height="250">
    </div>

    <div class="body-content">

        <div class="row">
            <p style="text-align: center;width: 50%;margin: auto;">
                O Instituto de Computação (IComp), antigo Departamento de Ciências da Computação <br>
                (DCC), é um instituto acadêmico que agreaga os professores da área de computação. <br>
                Como todo instituto acadêmico o IComp atua no ensino, pesquisa e extensão, além de <br>
                desempenhar atividades acadêmicas.
            </p>
        </div>

        <div style="width: 97.59px;margin: 30px auto 0;">
            <?php
            echo Html::a('Iniciar Jogo', ['/jogada/play'], ['class' => 'btn btn-success'])
            ?>
        </div>



    </div>
</div>
