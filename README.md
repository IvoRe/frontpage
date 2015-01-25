# frontpage
Parallax frontpage for Yii2

This module creates a parallax frontage for a Yii app.

Parallax meaning that the frontpage has text in front, and images moving in the background. Such a page breaks the message into textual chuncks, and creates an atmosphere by the background images.

## installation

Add this to Yii's config file:

~~~
$config = [
  ...
  'modules' => [
      'frontpage' => [
          'class' => 'app\modules\frontpage\Module',
      ],
  ],
];
~~~

