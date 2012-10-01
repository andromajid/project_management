<?php

class ECLEditor extends CInputWidget {

    public $options = array();

    public function init() {
        $this->publishAssets();
    }

    public function run() {
        list($name, $id) = $this->resolveNameID();

        if (isset($this->htmlOptions['id']))
            $id = $this->htmlOptions['id'];
        else
            $this->htmlOptions['id'] = $id;
        if (isset($this->htmlOptions['name']))
            $name = $this->htmlOptions['name'];
        else
            $this->htmlOptions['name'] = $name;
        if (empty($this->htmlOptions['generate'])) {
            if ($this->hasModel())
                echo CHtml::activeTextArea($this->model, $this->attribute, $this->htmlOptions);
            else
                echo CHtml::textArea($name, $this->value, $this->htmlOptions);
        } 
        $options = CJavaScript::encode($this->options);
        Yii::app()->clientScript->registerScript($id, "
			$('#{$id}').cleditor({$options});
		");
    }

    protected static function publishAssets() {
        $assets = dirname(__FILE__) . '/assets';
        $baseUrl = Yii::app()->assetManager->publish($assets);
        if (is_dir($assets)) {
            Yii::app()->clientScript->registerCoreScript('jquery');
            Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.cleditor.min.js', CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerScriptFile($baseUrl . '/jquery.cleditor.extimage.js', CClientScript::POS_HEAD);
            $real_path = Yii::app()->createUrl('site/upload');
            Yii::app()->clientScript->registerScript('image-upload-cleditor', "$.cleditor.buttons.image.uploadUrl = '".$real_path."';", CClientScript::POS_HEAD);
            Yii::app()->clientScript->registerCssFile($baseUrl . '/jquery.cleditor.css');
        } else {
            throw new Exception('EClEditor - Error: Couldn\'t find assets to publish.');
        }
    }

}