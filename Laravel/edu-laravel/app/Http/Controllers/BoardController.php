<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 쿼리 빌더
        // $result = DB::select( 'select * from categories' );
        // $no = '5';
        // $result = DB::select( 'select * from categories where no = :no' , ['no' => $no] );

        // $input = [4,7,8]; // no ,게시글번호 게시글제목 카테고리명 (게시글번호 오름차순정렬 상위5개)
        // $result = DB::select( 'select bo.bno , bo.title , ca.name from categories ca inner join boards bo on ca.no = bo.category WHERE ca.no=? OR ca.no=? OR ca.no=? ORDER BY bo.bno ASC LIMIT 5;' , $input );
        // $result = DB::select( 'select bo.bno , bo.title , ca.name from categories ca inner join boards bo on ca.no = bo.category WHERE ca.no in(?,?,?) ORDER BY bo.bno ASC LIMIT 5;' , $input );
        // $result = DB::select( 'select bo.bno , bo.title , ca.name from categories ca inner join boards bo on ca.no = bo.category WHERE ca.no= :no OR ca.no= :no1 OR ca.no= :no2 ORDER BY bo.bno ASC LIMIT 5;' , ['no' => $input[0] , 'no1' => $input[1] , 'no2' => $input[2]] );
        
        // $result = DB::insert(' insert into boards (category ,title, contents,created_at,updated_at) values(?,?,?,?,?)',[2,'제목','내용',now(),now()]);
        
        // $result = DB::update(' update boards set title= :title ,contents= :con where bno=:no ', ['title'=>'제목1' , 'con'=>'내용1' , 'no'=>30]);
        
        // $result = DB::delete('delete from board where bno = ?', [31]);
        // $no ='5';
        // $result = DB::table('categories')->where('no','=',$no)->get();
        // $result = DB::table('categories')->where('no',$no)->orWhere('no',2)->dd();
        // $result = DB::table('categories')->wherein('no',[$no,7])->dd();
        // $result = DB::table('categories')->whereNotin('no',[$no,7])->dd();
        // $result = DB::table('categories')->pluck('no','name')->where('no',$no)->dd();
        // $result = DB::table('categories')->select('id','no','name')->dd();
        // $result = DB::table('categories')->select('id','no','name')->orderBy('name','desc')->get();
        // $result = DB::table('categories')->whereRaw('no ='.$no);

        // $result = DB::table('boards')->orderBy('bno','desc')->first();

        // $result = DB::table('boards')->count();
        // $result = DB::table('boards')->max('bno');

        // DB::beginTransaction();

        // DB::commit();

        // DB::rollback();

        // 카테고리가 활성화 되어 있는 게시글의 카테고리 별 갯수를 출력 (카테고리번호, 명 ,갯수)
        // $result = DB::table('categories')->select('no', 'name')->where('active_flg',1)->get();
        $result = DB::table('categories')
        ->join('boards','categories.no','=','boards.category')
        // ->select('boards.category', 'categories.name')
        // ->selectRaw('count(categories.no)')
        ->select('boards.category', 'categories.name',DB::raw('count(*)'))
        ->where('categories.active_flg','1')
        ->groupBy('boards.category','categories.name')
        ->get();
        
        return var_dump($result);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}