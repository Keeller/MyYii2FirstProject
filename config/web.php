<?php

return [

    'id'=>'video',
    'basePath'=>realpath(__DIR__.'/../'),
    'bootstrap'=>[
      'debug'
    ],
    'components'=>
        [
            'urlManager'=>[
                'enablePrettyUrl'=>true,
                'showScriptName'=>false

        ],
            'request' => [
                'cookieValidationKey' => 'asdasaa'
            ]
          ],
    'modules'=> [
        'debug'=>'yii\debug\Module'

    ],


];

?>