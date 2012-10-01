<?php

// controller to host connector action
class ElfinderController extends CController {

    public function actions() {
        return array(
            'connector' => array(
                'class' => 'ext.elFinder.ElFinderConnectorAction',
                'settings' => array(
                    'root' => Yii::getPathOfAlias('webroot') . '/uploads/',
                    'URL' => Yii::app()->baseUrl . '/uploads/',
                    'rootAlias' => 'Home',
                    'uploadAllow' => array('image'),
                    'mimeDetect' => 'none',
                    'imgLib' => 'gd',
                    'tmbPath' => 'thumbnails',
                    'tmbCrop' => true,
                )
            ),
        );
    }

}