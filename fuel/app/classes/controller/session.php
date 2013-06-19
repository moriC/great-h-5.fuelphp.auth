<?php

class Controller_Session extends Controller
{
	public function action_login()
	{
		if ($_POST)
		{
			// Authのインスタンス化
			$auth = Auth::instance();
			// 資格情報の確認
			if ($auth->login($_POST['username'],$_POST['password']))
			{
				// 認証OKならmanageへ
				Response::redirect('/index/manage');
			}
			else
			{
				// 認証NGなら何もせずに条件式を抜けて再度ログインページへ
		 	}
		}
		// ログインフォームの表示
		return Response::forge(View::forge('session/login'));
	}

	public function action_logout()
	{
		//ログアウト
		Auth::logout();
		//ログアウト後はログインページへ
		Response::redirect('/index/session/login');
	}
}