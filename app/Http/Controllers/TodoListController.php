<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use App\Http\Controllers\user_id;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todo_list= todo_list::where('user_id',Auth::user()->id)->get();
        $todo_share = DB::table('todo_lists')
             ->join('users', 'todo_lists.user_id', '=', 'users.id')
             ->select('todo_lists.name as todo_name', 'users.name as user_name')
             ->where('is_share', 1)
             ->get();
        return view("dashboard",compact('todo_list','todo_share'));
        
        // return view('dashboard')->with('todo_arr',$todo_list,$todo_shared);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_new_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /**
     * 1=shared
     * 0=not shared
     */
//     public function store(Request $request)
//     {
//         $todo = new todo_list();
//         if(empty($todo)) {
//             $todo->name = $request->input('name');
//             $todo->user_id = Auth::user()->id;
//             $todo->is_share = 0;
//             $todo->save();
//             return redirect('../dashboard');
            
            
//         }

//         else
//         echo "Please enter valid todo";
            
// }


public function store(Request $request)
{
    $name = $request->input('name');

    if (!empty($request->input('name'))) {
    $todo = new todo_list();
    $todo->name = $name;
    $todo->user_id = Auth::user()->id;
    $todo->is_share = 0;
    $todo->save();
    return redirect('../dashboard');
    }

    else{
        echo "Please enter valid todo";
    }
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
    public function edit(todo_list $todo_list, $id)
    {
        $todo = todo_list::find($id);
        return view('edit_list')->with('todo_arr', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, todo_list $todo_list,  $id)
    {

        // $this->validate($request, [
        //     'name' => ['required', 'not_in:0'],
        // ]);
        $todo = todo_list::find($id);
        
                if($todo->user_id == Auth::user()->id && !empty($request->input('name'))) 
                {
                $todo->name = $request->input('name');
                $todo->save();
                return redirect('../dashboard');
                }
             else {
             echo "cannot update data";
                }
    }
    

        // if(!empty($todo)) 
        //     {
        //          if($todo->user_id == Auth::user()->id) 
        //          {
        //          $todo->name = $request->input('name');
        //          $todo->save();
        //          return redirect('../dashboard');
        //          }
        //       else {
        //       echo "cannot update data";
        //       }
        //      }

        //      else {
        //      echo "cannot update data";
        //      }
        //   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(todo_list $todo_list, $id)
    {
        $todo = todo_list::find($id);

        if($todo->user_id == Auth::user()->id)
    {
        todo_list::destroy($id);
        return redirect('../dashboard');
    }
    else
        echo "cannot delete data";
        
    }
    
    public function share(Request $request, todo_list $todo_list,  $id)
    {    $todo = todo_list::find($id);
        if($todo->user_id == Auth::user()->id)
        {
            $todo->is_share = 1;
            $todo->save();
            return redirect('../dashboard');
        }
        else
           echo "cannot share data";
        
    }

    // public function hide(todo_list $todo_list, $id)
    // {
    //     $row = todo_list::destroy($id);
    //     // $todo_list->user_id = 1;
    //     $todo_list->user_id = 1;
    //     $todo_list->save();
    //     return redirect('../dashboard');
    // }
}
