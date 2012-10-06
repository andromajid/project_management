<?php

class DashboardController extends Controller {

    /**
     * @return array action filters
     */
    public function init() {
        parent::init();
        $this->menu = array(
            array('label' => 'Desktop'),
            array('label' => 'Desktop', 'icon' => 'home', 'url' => $this->createUrl('/dashboard/'), 'active' => true),
            array('label' => 'My Project', 'icon' => 'book', 'url' => $this->createUrl('/dashboard/project/')),
            array('label' => 'My Task', 'icon' => 'folder-open', 'url' => $this->createUrl('/dashboard/task/')),
            array('label' => 'My Message', 'icon' => 'briefcase', 'url' => $this->createUrl('/dashboard/task/')),
        );
    }

    public function filters() {
        return array(
            'rights', // perform access control for CRUD operations
        );
    }

    public function actionIndex() {
        $data_provider = new User_project('search');
        $data_provider->unsetAttributes();  // clear any default values
        if (isset($_GET['User_project']))
            $data_provider->attributes = $_GET['User_project'];
        $project = new Project;
        $user = new User();
        //    $this->renderPartial('partial/_dashboard', array('model' => $data_provider, 'user_project' => $user_project));
        $this->render('index', array('model' => $data_provider, 'user' => $user, 'project' => $project));
    }

    public function actionDashboard() {
        $data_provider = new CActiveDataProvider('User_project', array(
                    'criteria' => array('condition' => 't.user_id=' . Yii::app()->user->getId(),
                        'with' => array('user', 'project'),
                        'order' => 'project.project_start'),
                ));
        $user_project = new User_project();
        $project = new Project;
        $user = new User();
        $this->renderPartial('/project/_form', array('model' => $model, 'user' => $user));
        $this->renderPartial('partial/_dashboard', array('model' => $data_provider, 'user_project' => $user_project, 'user' => $user, 'project' => $project));
    }

    public function actionProject() {
        $model = new Project;
        $user = new User();
        $this->renderPartial('/project/_form', array('model' => $model, 'user' => $user));
    }

    // Uncomment the following methods and override them if needed
    /*
      public function filters()
      {
      // return the filter configuration for this controller, e.g.:
      return array(
      'inlineFilterName',
      array(
      'class'=>'path.to.FilterClass',
      'propertyName'=>'propertyValue',
      ),
      );
      }

     */
    public function actions() {
        // return external action classes, e.g.:
        return array(
                // 'action1' => 'application.controllers.dashboard.IndexAction',
        );
    }

}