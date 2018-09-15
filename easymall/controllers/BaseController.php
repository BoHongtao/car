<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 2018/7/30
 * Time: 16:21
 */
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\components\Utils;

class BaseController extends Controller
{
    public $pageSize;

    public function actions()
    {
        return [
            'ueditor'=>[
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config'=>[
                    //上传图片配置
                    'imageUrlPrefix' => "", /* 图片访问路径前缀 */
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}", /* 上传保存路径,可以自定义保存路径和文件名格式 */
                ]
            ]
        ];
    }

    public function init()
    {
        parent::init();
        $this->pageSize = Yii::$app->params ['pageSize'];
    }
    public function beforeAction($action)
    {
        parent::beforeAction($action);
        if (Yii::$app->user->isGuest) {
            $this->redirect(['site/login'])->send();
            die();
        } else {
            $authname = Yii::$app->controller->id . '/' . Yii::$app->controller->action->id;
            if (!Utils::checkAccess($authname)) {
                throw new ForbiddenHttpException("对不起，您现在还没获此操作的权限");
                exit();
            }
        }
        return true;
    }
    //response a json format
    public function returnJson()
    {
        Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
    }

    // return curl error message
    public function getMsg($model)
    {
        $errors = $model->errors;
        return $errors [array_keys($errors) [0]] [0];
    }

    // pagination
    public function setPager($model, $route)
    {
        return new \yii\data\Pagination([
            'totalCount' => $model->count(),
            'pageSize' => $this->pageSize,
            'route' => $route
        ]);
    }
    /*
     * 是否post请求
     */
    public function isPost()
    {
        if (Yii::$app->request->isPost) {
            return true;
        }
        return false;
    }
    public function isAjax()
    {
        if (Yii::$app->request->isAjax) {
            return true;
        }
        return false;
    }
}
