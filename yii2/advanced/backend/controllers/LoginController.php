<?php
	/**
	 * @author  Jin <[flyingMr@163.com]>
	 * @date 
	 * @file  	
	 * @brief   [测试数据]
	 * @version [PHP-5.6]
	 */

	namespace backend\controllers;

	use Yii;
	use yii\web\Controller;

	class LoginController extends Controller {
		public function actionIndex() {
			return $this->renderPartial('index');
		}
	}