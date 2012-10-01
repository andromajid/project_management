<?php
// controller for tinyMce
Yii::import('ext.tinymce.*');
 
class TinymceController extends CController
{
     public function actions()
     {
          return array(
              'compressor' => array(
                    'class' => 'TinyMceCompressorAction',
                    'settings' => array(
                       'compress' => true,
                            'disk_cache' => true,
                        )
                    ),
//                    'spellchecker' => array(
//                        'class' => 'TinyMceSpellcheckerAction',
//               ),
          );
      }
}