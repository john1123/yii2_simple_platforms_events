<?php

namespace app\controllers;

use Yii;
use app\models\Platform;
use app\models\PlatformSearch;
use yii\data\Pagination;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PlatformController implements the CRUD actions for Platform model.
 */
class PlatformController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        $query = Platform::find();

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $query->count(),
        ]);

        $platforms = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'platforms' => $platforms,
            'pagination' => $pagination,
        ]);
    }
    public function actionView($id)
    {
        /* @var $modelPlatform Platform */
        $modelPlatform = Platform::find()
            ->with('events')
            ->where(['id' => $id])
            ->one();
        return $this->render('view', [
            'platform' => $modelPlatform,
        ]);
    }

}
