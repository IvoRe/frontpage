<?php
use yii\widgets\Menu;
echo Menu::widget([
    'items' => [
        // Important: you need to specify url as 'controller/action',
        // not just as 'controller' even if default action is used.
        ['label' => 'Who', 'url' => ['/frontpage/default/index', '#' => 'section_0']],
        ['label' => 'Why', 'url' => ['/frontpage/default/index', '#' => 'section_1']],
        ['label' => 'What', 'url' => ['/frontpage/default/index', '#' => 'section_2']],
        ['label' => 'When', 'url' => ['/frontpage/default/index', '#' => 'section_3']],
        ['label' => 'Where', 'url' => ['/frontpage/default/index', '#' => 'section_4']],
        ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
    ],
]);

