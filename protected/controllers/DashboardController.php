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

        Yii::import('application.extensions.fullcalendar.FullcalendarGraphWidget');
        //buat grid dari task project
        $data_task = new Tasks('search');
        $data_task->unsetAttributes();
        if (isset($_GET['Tasks'])) {
            $data_task->attributes = $_GET['Tasks'];
        }
        $data_provider = new User_project('search');
        $data_provider->unsetAttributes();  // clear any default values
        if (isset($_GET['User_project']))
            $data_provider->attributes = $_GET['User_project'];
        $project = new Project;
        $user = new User();
        //    $this->renderPartial('partial/_dashboard', array('model' => $data_provider, 'user_project' => $user_project));
        $this->render('index', array('data_task' => $data_task, 'model' => $data_provider, 'user' => $user, 'project' => $project));
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
        $data_provider = new User_project('search');
        $data_provider->unsetAttributes();  // clear any default values
        if (isset($_GET['User_project']))
            $data_provider->attributes = $_GET['User_project'];
        $this->render('partial/_dashboard', array('model' => $data_provider));
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
    public function actionCalfeed() {
        $date_start = date('Y-m-d', $_GET['start']);
        $date_end = date('Y-m-d', $_GET['end']);
        $data_task = Tasks::model()->get_calender_data($date_start, $date_end, Yii::app()->user->getId());
        $data_milestone = Milestone::model()->getCalendarData($date_start, $date_end, Yii::app()->user->getId());
        $data = CMap::mergeArray($data_task, $data_milestone);
        echo CJSON::encode($data);
    }

    public function actionGet_modal_data() {
        $type = $_GET['type'];
        $id = $_GET['data_id'];
        switch ($type) {
            case 'milestone' :
                $data = Milestone::model()->findByPk($id);
                $data_arr = array('data_title' => $data->milestone_name,
                    'description' => $data->milestone_desc,
                    'start_date' => $data->milestone_start,
                    'end_date' => $data->milestone_end,
                    'milestone_status' => $data->milestone_status == '0' ? 'on progress' : 'done',
                    'project' => $data->milestone_project->project_name);
                break;
            case 'task' :
                $data = Tasks::model()->findByPk($id);
                $data_arr = array('data_title' => $data->task_title,
                    'description' => $data->task_text,
                    'start_date' => $data->task_start,
                    'end_date' => $data->task_end,
                    'status' => $data->task_status == '0' ? 'on progress' : 'done',
                    'project' => $data->taskProject->project_name,
                    'milestone' => $data->taskMilestone->milestone_name);
                break;
        }
        $this->renderPartial('partial/_modal_task', array('data' => $data_arr, 'model' => $data, 'type' => $type));
    }

}