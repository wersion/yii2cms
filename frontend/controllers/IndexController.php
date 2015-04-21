<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/18
 * Time: 7:10
 */

namespace frontend\controllers;

use common\helps\column;
use Yii;
use frontend\controllers\BaseController;

class IndexController extends HualController{

    public function actionColumn()
    {
        $session = Yii::$app->session;

        if(Yii::$app->request->getQueryParam('lang'))
        {
            Yii::$app->language=Yii::$app->request->getQueryParam('lang');
            $session['language']=Yii::$app->request->getQueryParam('lang');
        }else
        {
            if($session['language'])
            {
                Yii::$app->language=$session['language'];
            }else
            {
                Yii::$app->language='cn';
                $session['language']='cn';
            }
        }
        switch($session['language'])
        {
            case 'cn':
                $lang = 0;
                break;
            case 'en':
                $lang = 1;
                break;
            case 'tw':
                $lang = 2;
                break;
        }

        $id = Yii::$app->request->get('column');
        $cache = Yii::$app->cache;
        $column = $cache['column_'.$id];

        $parentsArray = array_reverse($cache['column_'.$id.'_parents']);
        $position='';
        foreach($parentsArray as $key=>$row)
        {
            $cname[$key] = explode('//',$cache['column_'.$row]['cname']);
            $position.=  '&gt;<span>'.$cname[$key][$lang].'</span>';
        }

        return $this->render($column['tmp'],[
            'cache'=>$cache,
            'column'=>$column,
            'id'=>Yii::$app->request->get('column'),
            'lang'=>$lang,
            'position'=>$position,
            'cname'=>$cname[0][$lang],
            'cl'=>new column()

        ]);
    }


    public function actionIndex()
    {
        $cache = Yii::$app->cache;
        $session = Yii::$app->session;
        Yii::$app->language= $session['language']?$session['language']:Yii::$app->request->get('lang')?Yii::$app->request->get('lang'):'cn';
        $session['language'] = Yii::$app->request->get('lang')? Yii::$app->request->get('lang'):'cn';
        switch($session['language'])
        {
            case 'cn':
                $lang = 0;
                break;
            case 'en':
                $lang = 1;
                break;
            case 'tw':
                $lang = 2;
                break;
        }
        return $this->render('index',['lang'=>$lang,'cache'=>$cache]);
    }

    public function actionPage()
    {
        $cache = Yii::$app->cache;
        $session = Yii::$app->session;

        if(Yii::$app->request->getQueryParam('lang'))
        {
            Yii::$app->language=Yii::$app->request->getQueryParam('lang');
            $session['language']=Yii::$app->request->getQueryParam('lang');
        }else
        {
            if($session['language'])
            {
                Yii::$app->language=$session['language'];
            }else
            {
                Yii::$app->language='cn';
                $session['language']='cn';
            }
        }
        switch($session['language'])
        {
            case 'cn':
                $lang = 0;
                break;
            case 'en':
                $lang = 1;
                break;
            case 'tw':
                $lang = 2;
                break;
        }

        $id = Yii::$app->request->get('column');

        $parentsArray = array_reverse($cache['column_'.$id.'_parents']);
        $position='';
        foreach($parentsArray as $key=>$row)
        {
            $cname[$key] = explode('//',$cache['column_'.$row]['cname']);
            $position.=  '&gt;<span>'.$cname[$key][$lang].'</span>';
        }

        return $this->render('show_xinwen',[
            'id'=>Yii::$app->request->get('id'),
            'column_id'=>Yii::$app->request->getQueryParam('column'),
            'cache'=>$cache,
            'lang'=>$lang,
            'cl'=>new column(),
            'position'=>$position,
        ]);
    }

    public function actionNbh()
    {
        $cache = Yii::$app->cache;

        $session = Yii::$app->session;

        if(Yii::$app->request->getQueryParam('lang'))
        {
            Yii::$app->language=Yii::$app->request->getQueryParam('lang');
            $session['language']=Yii::$app->request->getQueryParam('lang');
        }else
        {
            if($session['language'])
            {
                Yii::$app->language=$session['language'];
            }else
            {
                Yii::$app->language='cn';
                $session['language']='cn';
            }
        }
        switch($session['language'])
        {
            case 'cn':
                $lang = 0;
                break;
            case 'en':
                $lang = 1;
                break;
            case 'tw':
                $lang = 2;
                break;
        }
        return $this->render('show_nbh',[
            'id'=>Yii::$app->request->get('id'),
            'node'=>Yii::$app->request->getQueryParam('column'),
            'cache'=>$cache
        ]);
    }

    public function actionMap()
    {
        $cache = Yii::$app->cache;
        return $this->render('map',[

            'cache'=>$cache
        ]);
    }

}