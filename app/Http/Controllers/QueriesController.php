<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Query;
use Illuminate\Bus\Queueable;
use Mail;

class QueriesController extends Controller
{
    /**
     * PAGE: Admin/Query/
     * GET: /admin/queries/
     * This method handles the index view of Query
     * @param
     * @return
     */
    public function admin_index(){
        $meta = array(
            'title' => 'Query Index',
            'description' => 'Query index',
            'section' => 'Query',
            'subSection' => 'Query'
        );
        if(isset($_GET['keywords']) && !empty($_GET['keywords'])){
            $queries = Query::where('name', 'like', '%'.$_GET['keywords'].'%')
                ->orWhere('subject', 'like', '%'.$_GET['keywords'].'%')
                ->orWhere('email', 'like', '%'.$_GET['keywords'].'%')
                ->orderBy('created_at', 'ASC')
                ->paginate(20);
        }else{
            $queries = Query::paginate(20);
        }

        return view('queries/admin/index', compact('queries', 'meta'));
    }

    /**
     * PAGE: Admin/Query/Delete
     * GET: /admin/queries/delete
     * This method handles the deletion view of Query
     * @param Query $queries
     * @return
     */
    public function admin_deleteShow(Query $queries){
        $meta = array(
            'title' => 'Query Delete',
            'description' => 'Query Delete',
            'section' => 'Query',
            'subSection' => 'Query'
        );

        return view('queries/admin/delete', compact('meta', 'queries'));
    }

    /**
     * PAGE: Admin/Query/Delete
     * POST: /admin/queries/delete
     * This method handles the deletion view of Query
     * @param Query $queries
     * @return
     */
    public function admin_delete(Query $queries){
        $queries->delete();

        return redirect('/admin/queries/')->with('status', 'Query deleted successfully.');
    }

    /**
     * PAGE: /Query/Create
     * POST: /queries/create
     * This method handles the creation of Query
     * @param Request $request
     * @return
     */
    public function create(Request $request){
        $this->validate($request, [
            'name' => array('required','max:255'),
            'email' => array('required', 'email'),
            'subject' => 'required|max:255',
            'message' => 'required|max:1000',
        ]);

        Query::create(array(
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
            )
        );

        $data = array('name' => $request->name, 'email' => $request->email, 'subject' => $request->subject, 'emailMessage' => $request->message);

        Mail::queue('emails.query', $data, function($message) {
            $message->subject("Someone has added a query to the comfystudio.com site.");
            $message->from('hello@comfystudio.com');
            $message->to('hello@comfystudio.com');
        });

        return redirect()->back()->with('status', 'Query added successfully.');
    }


}
