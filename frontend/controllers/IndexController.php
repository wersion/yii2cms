<?php
/**
 * Created by PhpStorm.
 * User: wm
 * Date: 2015/3/18
 * Time: 7:10
 */

namespace frontend\controllers;

use common\helps\menu;
use Yii;
use frontend\controllers\BaseController;

class IndexController extends HualController  {

    public function actionMenu()
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
                Yii::$app->language='tw';
                $session['language']='tw';
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

        $id = Yii::$app->request->get('menu');
        $cache = Yii::$app->cache;
        $menu = $cache['menu_'.$id];

        $parentsArray = array_reverse($cache['menu_'.$id.'_parents']);
        $position='';
        foreach($parentsArray as $key=>$row)
        {
            $cname[$key] = explode('//',$cache['menu_'.$row]['cname']);
            $position.=  '&gt;<span>'.$cname[$key][$lang].'</span>';
        }

        return $this->render($menu['tmp'],[
            'cache'=>$cache,
            'menu'=>$menu,
            'id'=>Yii::$app->request->get('menu'),
            'lang'=>$lang,
            'position'=>$position,
            'cname'=>$cname[0][$lang],
            'cl'=>new menu()

        ]);
    }


    public function actionIndex()
    {
        $cache = Yii::$app->cache;
        $session = Yii::$app->session;
        Yii::$app->language= $session['language']?$session['language']:Yii::$app->request->get('lang')?Yii::$app->request->get('lang'):'tw';
        $session['language'] = Yii::$app->request->get('lang')? Yii::$app->request->get('lang'):'tw';
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
                Yii::$app->language='tw';
                $session['language']='tw';
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

        $id = Yii::$app->request->get('menu');

        $parentsArray = array_reverse($cache['menu_'.$id.'_parents']);
        $position='';
        foreach($parentsArray as $key=>$row)
        {
            $cname[$key] = explode('//',$cache['menu_'.$row]['cname']);
            $position.=  '&gt;<span>'.$cname[$key][$lang].'</span>';
        }

        return $this->render('show_xinwen',[
            'id'=>Yii::$app->request->get('id'),
            'menu_id'=>Yii::$app->request->getQueryParam('menu'),
            'cache'=>$cache,
            'lang'=>$lang,
            'cl'=>new menu(),
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
                Yii::$app->language='tw';
                $session['language']='tw';
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
        $id = Yii::$app->request->get('menu');
        $parentsArray = array_reverse($cache['menu_'.$id.'_parents']);
        $position='';
        foreach($parentsArray as $key=>$row)
        {
            $cname[$key] = explode('//',$cache['menu_'.$row]['cname']);
            $position.=  '&gt;<span>'.$cname[$key][$lang].'</span>';
        }
        return $this->render('show_nbh',[
            'id'=>Yii::$app->request->get('id'),
            'node'=>Yii::$app->request->getQueryParam('menu'),
            'cache'=>$cache,
            'position'=>$position,
        ]);
    }

    public function actionMap()
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
                Yii::$app->language='tw';
                $session['language']='tw';
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
        return $this->render('map',[
            'cl' => new menu(),
            'cache'=>$cache,
            'lang'=>$lang
        ]);
    }

}