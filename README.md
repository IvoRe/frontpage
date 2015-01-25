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

The frontpage will be accessible via `index.php?r=frontpage', and will open with a default make-up and images.

Customize the frontpage by copying the `@frontpage\defaults` directory to where you like. Below, we assume that your copy can be reached via `@app/myfrontpage`. Change `sections.php` and `views/*` to taste. Make the frontpage refer to your changed files by configuring the Yii config as follows:

~~~
$config = [
  ...
  'modules' => [
      'frontpage' => [
          'class' => 'app\modules\frontpage\Module',
          'sections' => '@app/myfrontpage/sections.php',
          'views' => '@app/myfrontpage/views',
      ],
  ],
];
~~~


