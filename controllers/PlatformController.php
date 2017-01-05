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

    /**
     * Lists all Platform models.
     * @return mixed
     */
    public function actionList()
    {
        $searchModel = new PlatformSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Platform model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
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
}
