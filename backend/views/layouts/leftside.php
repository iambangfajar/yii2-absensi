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
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>admin</p>
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
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'Master',
                            'icon' => 'fa fa-database',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Fakultas',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=fakultas/',
				    'active' => $this->context->route == 'fakultas/index'
                                ],
                                [
                                    'label' => 'Program Study',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=prodi/',
				    'active' => $this->context->route == 'prodi/index'
                                ],
                                [
                                    'label' => 'Dosen',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=dosen/',
				    'active' => $this->context->route == 'dosen/index'
                                ],
                                [
                                    'label' => 'Mata Kuliah',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=makul/',
				    'active' => $this->context->route == 'makul/index'
                                ],
                                [
                                    'label' => 'Mahasiswa',
                                    'icon' => 'fa fa-database',
                                    'url' => '?r=mahasiswa/',
				    'active' => $this->context->route == 'mahasiswa/index'
                                ]
                            ]
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
