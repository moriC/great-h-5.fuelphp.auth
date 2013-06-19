<?php

class Controller_Manage extends Controller
{
	public function before()
	{
		# もし認証チェックしてNGだったら
		if(!Auth::check())
		{
			# ログインページへ移動
			Response::redirect('index/session/login');
		}else{
			# 認証問題なければ何もしない
		}
	}

	public function action_index()
	{
		return Response::forge(View::forge('manage/index'));
	}
}