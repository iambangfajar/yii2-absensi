<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user1-128x128.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Raharjo</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        [   
                            'label' => 'Akademik', 
                            'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 
                            'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'Rekap Absen',
                            'icon' => 'fa fa-users',
                            'url' => ['/rekap-absen'],
                            'active' => $this->context->route == 'rekap-absen/index',
                        ],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
