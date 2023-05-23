<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     * list page
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Tasks.index!';
    }

    /**
     * Show the form for creating a new resource.
     * form page
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'Tasks.create!';
    }

    /**
     * Store a newly created resource in storage.
     * 생성처리
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $aa = $r->all();
        // $a = $request->only(['id']);
        $b = $r->get('pw');
        $c = $r->get('id');
        // return 'Tasks.store . id : '.$aa['id'].'<br>Tasks.store . pw : '.$aa['pw'];
        // return 'Tasks.store . id : '.$c.'<br>Tasks.store . pw : '.$b;
        return 'Tasks.store . id : '.$r->id.'<br>Tasks.store . pw : '.$r->pw;
    }

    /**
     * Display the specified resource.
     * detail page
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'Tasks.show : '.$id;
    }

    /**
     * Show the form for editing the specified resource.
     * 리소스 수정 폼 페이지
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'Tasks.edit : '.$id;
    }

    /**
     * Update the specified resource in storage.
     * 수정처리
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // var_dump($request);
        $arrAll = $request->all();
        $arrOnly = $request->only(['id','name']);
        $oneGet = $request->get('pw');

        // var_dump($arrAll);
        // var_dump($arrOnly);
        // var_dump($oneGet);


        return 'Tasks.update : '.$id;
    }

    /**
     * Remove the specified resource from storage.
     * 리소스삭제
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'Tasks.destroy : '.$id;
    }
}
