<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function comment(Request $request)
    {
        $input = $request->all();
        $rules = [
            'comment' => 'required',
        ];
        $messages = [];
        $validator = Validator::make($request->all() , $rules, $messages);
        if ($validator->fails())
        {
            $arr = array("status" => 400, "msg" => $validator->errors()->first() ,"result" => array());
        }
        else {
            try {
                
                $msg =  'Added successfully';
                $data = new Comment;
                $data->Comment = $request->comment;
                if ($request->type == 'album') {
                    $data->album_id = decrypt($request->id);
                }else {
                    $data ->song_id = decrypt($request->id);
                }
                $data->user_id = Auth::id();
                $data->save();

                $arr = array("status" => 200, "msg" => $msg, 'result'=> ['name' => Auth::user()->name, 'comment'=> $request->comment, 'date'=> \Carbon\Carbon::parse($data->created_at)->diffForHumans()]);
            } catch(\Illuminate\Database\QueryException $ex)
            {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2]))
                {
                    $msg = $ex->errorInfo[2];
                }
                $arr = array( "status" => 400,"msg" => $msg, "result" => array());
            }
            catch(Exception $ex)
            {
                $msg = $ex->getMessage();
                if (isset($ex->errorInfo[2]))
                {
                    $msg = $ex->errorInfo[2];
                }
                $arr = array("status" => 400, "msg" => $msg,"result" => array() );
            }
        }
        return \Response::json($arr);
    }
}
