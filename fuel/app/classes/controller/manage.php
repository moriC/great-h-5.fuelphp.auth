<?php

class Controller_Manage extends Controller
{
	public function action_index()
	{
		return Response::forge(View::forge('manage/index'));
	}
}