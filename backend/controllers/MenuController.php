<?php

namespace backend\controllers;

use backend\models\Menu;
use Yii;
use backend\models\MenuSearch;
use common\lib\tree;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 *menuController implements the CRUD actions formenu model.
 */
class MenuController extends BaseController
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                   // 'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists allmenu models.
     * @return mixed
     */
    public function actionIndex()
    {
        $session = Yii::$app->session;
       // $cache = Yii::$app->cache;
        //$menuList = $cache['menus'];
        $searchModel = new MenuSearch();
        $menuList = $searchModel->menuList();
        $tree = new tree();
        $tree->init($menuList);

        $str=<<<Eof
        <tr>
            <td>\$id</td>
            <td> \$spacer\$cname</td>
            <td>
                <a href='/menu/create?id=\$id'>添加子类</a> |
                <a href='/menu/update?id=\$id'>更新</a> |
                <a href='/menu/delete?id=\$id'>删除</a> |
                <a href='/menu/manage?id=\$id'>内容管理</a> |
                <a href='/photo-menu/index?menu_id=\$id'>栏目图片</a>
            </td>
        </tr>
Eof;
        $menuTree = $tree->get_tree(0,$str);
        return $this->render('index',[
            'menuTree'=>$menuTree,
        ]);
    }


    /**
     * Displays a single menu model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {

        $getArticles = Menu::findOne(Yii::$app->request->get('id'));
        return $this->render('view', [
            'model' => $this->findModel($id),
            'article' =>$getArticles->articles,

        ]);
    }

    /**
     * Creates a new menu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $request = Yii::$app->request;
        $model = new Menu();

        $model->parentid = $request->get('id')?$request->get('id'):0;
        $model->place = implode(',',$model->place);

        if ($model->load($request->post()) && $model->save()) {
            $model->url = $model->link?$model->link:$model->route?Yii::$app->params['siteUrl'].'/'.$model->route.'/'.$model->id:Yii::$app->params['siteUrl'].'/menu/'.$model->id;
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    public function actionCache()
    {
        $searchModel = new MenuSearch();
        $menuList = $searchModel->menuList();

        $cache = Yii::$app->cache;
        $menu = new Menu();
        $route = $menu->find()->select('route')->column();
        $route = array_filter($route);
        $cache['route']=$route;
        $str = "<?php \n\$rules = [\n";
        foreach($route as $v)
        {
            $str.= "     '".$v."/<menu:\d+>' => 'index/menu',\n";
        }

        $str.= "]; \n?>";

        file_put_contents(Yii::getAlias('@common').'/config/rules.php',$str);


        $cache['menu'] = $menuList;
        foreach($menuList as $menuOne)
        {
            $this->cacheMenuOneAction($menuOne['id'],$menuOne['parentid']);
        }
        return $this->redirect('index');

    }


    public function cacheMenuOneAction($id,$pid)
    {
        $model = Menu::findOne($id);

        if($model->link)
        {
            $model->url = $model->link;
        }elseif($model->route)
        {
            $model->url = Yii::$app->params['siteUrl'].'/'.$model->route.'/'.$id;
        }else
        {
            $model->url = Yii::$app->params['siteUrl'].'/menu/'.$id;
        }
        $model->save();
        $request = Yii::$app->request;
        $cache = Yii::$app->cache;

        $menuOne = Menu::findOne($id)->toArray();

        $menu_tmp = \backend\models\Template::findOne($menuOne['template_id'])->toArray();
        $menuOne['tmp'] = $menu_tmp['ename'];

        $cache['menu_'.$id] = $menuOne;

        $menuObject = Menu::findOne($id);

        $menu = new Menu();

        $cache['menu_'.$id.'_parent'] = $menu->getParent($pid);

        $parents = explode(',',$id.','.$menu->getParents($id));

        array_pop($parents);

        $cache['menu_'.$id.'_parents'] = $parents;

        $cache['menu_'.$id.'_articles'] = $menuObject->articles;

        $cache['menu_'.$id.'_photos'] = $menuObject->photos;

        $cache['menu_'.$id.'_brother'] = $menu->getBrother($pid);

        $cache['menu_'.$id.'_children'] = $menu->getBrother($id);
    }

    /**
     * Updates an existing menu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if($model->link)
            {
                $model->url = $model->link;
            }elseif($model->route)
            {
                $model->url = Yii::$app->params['siteUrl'].'/'.$model->route.'/'.$id;
            }else
            {
                $model->url = Yii::$app->params['siteUrl'].'/menu/'.$id;
            }
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
               
            ]);
        }
    }

    /**
     * Deletes an existing menu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds themenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @returnmenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Menu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    public function  actionManage()
    {
        $cache = Yii::$app->cache;
        $menu = new MenuSearch();
        $menuList = $menu->menuList();
        $id =  Yii::$app->request->get('id');
        foreach($menuList as $key=>$menu)
        {
            if($menu['id'] == $id)
            {
                $model_id = $menu['model_id'];
            }
        }

        $models = $cache['models'];
        foreach($models as $model)
        {
            if($model['id']==$model_id)
            {
                $forword = $model['ename'];
            }
        }

        return $this->redirect('/'.$forword.'/index?id='.$id);

    }

    public function getPhotos()
    {
        return $this->hasMany(\common\models\PhotoMenu::className(), ['menu_id' => 'id']);
        //return $this->hasMany(\common\models\Photo::className(), ['article_id' => 'id'])->asArray();
        // return $this->hasMany(Article::className(), ['menu_id' => 'id']);
    }
}
