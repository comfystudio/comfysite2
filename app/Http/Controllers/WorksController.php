<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;
use DB;

class WorksController extends Controller
{
    /**
     * PAGE: Admin/Work/
     * GET: /admin/works/
     * This method handles the index view of Work
     * @param
     * @return
     */
    public function admin_index(){
        $meta = array(
            'title' => 'Work Index',
            'description' => 'Work index',
            'section' => 'Work',
            'subSection' => 'Work'
        );
        if(isset($_GET['keywords']) && !empty($_GET['keywords'])){
            $works = Work::where('title', 'like', '%'.$_GET['keywords'].'%')
                ->orWhere('link', 'like', '%'.$_GET['keywords'].'%')
                ->orderBy('created_at', 'ASC')
                ->paginate(20);
        }else{
            $works = Work::paginate(20);
        }

        return view('works/admin/index', compact('works', 'meta'));
    }

    /**
     * PAGE: Admin/Work/Create
     * GET: /admin/works/create
     * This method handles the creation view of Work
     * @param
     * @return
     */
    public function admin_createShow(){
        $meta = array(
            'title' => 'Work Index',
            'description' => 'Work index',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        return view('works/admin/create', compact('meta'));
    }

    /**
     * PAGE: Admin/Work/Create
     * POST: /admin/works/create
     * This method handles the creation of Work
     * @param Request $request
     * @return
     */
    public function admin_create(Request $request){
        $this->validate($request, [
            'title' => array('required','unique:works', 'max:255'),
            'text' => 'required',
            'client' => 'required',
            'date' => 'Date',
            'is_active' => 'Integer'
        ]);

        $works = Work::create(array(
                'title' => $request->title,
                'slug' => $this->FormatUrl($request->title),
                'text' => $request->text,
                'client' => $request->client,
                'link' => $request->link,
                'date' => $request->date,
                'is_active' => $request->is_active,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description
            )
        );

        return redirect('/admin/works/')->with('status', 'Work added successfully.');
    }

    /**
     * PAGE: Admin/Work/Delete
     * GET: /admin/works/delete
     * This method handles the deletion view of Work
     * @param Work $works
     * @return
     */
    public function admin_deleteShow(Work $works){
        $meta = array(
            'title' => 'Work Delete',
            'description' => 'Work Delete',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        return view('works/admin/delete', compact('meta', 'works'));
    }

    /**
     * PAGE: Admin/Work/Delete
     * POST: /admin/works/delete
     * This method handles the deletion view of Work
     * @param Work $works
     * @return
     */
    public function admin_delete(Work $works){
        $works->delete();

        return redirect('/admin/works/')->with('status', 'Work deleted successfully.');
    }

    /**
     * PAGE: Admin/Work/edit
     * GET: /admin/works/edit
     * This method handles the edit view of Work
     * @param Work $works
     * @return
     */
    public function admin_editShow(Work $works){
        $meta = array(
            'title' => 'Work Edit',
            'description' => 'Work edit',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        return view('works/admin/create', compact('meta', 'works'));
    }

    /**
     * PAGE: Admin/Work/edit
     * POST: /admin/works/edit
     * This method handles the editing of Work
     * @param Request $request Work $works
     * @return
     */
    public function admin_edit(Request $request, Work $works){
        $this->validate($request, [
            'title' => array('required','unique:works', 'max:255'),
            'text' => 'required',
            'client' => 'required',
            'date' => 'Date',
            'is_active' => 'Integer'
        ]);

        $works->update(array(
                'title' => $request->title,
                'slug' => $this->FormatUrl($request->title),
                'text' => $request->text,
                'client' => $request->client,
                'link' => $request->link,
                'date' => $request->date,
                'is_active' => $request->is_active,
                'meta_title' => $request->meta_title,
                'meta_description' => $request->meta_description
            )
        );

        return redirect('/admin/works/')->with('status', 'Work Edited successfully.');
    }

    /**
     * PAGE: Work
     * GET: /works
     * This method handles the index view of Work
     * @param
     * @return
     */
    public function index(){
        $meta = array(
            'title' => 'ComfyStudio Website Development Belfast Work',
            'description' => 'ComfyStudio Website Development, Website Design, Belfast, Work',
            'section' => 'Work',
            'subSection' => 'Work'
        );
        if(isset($_GET['keywords']) && !empty($_GET['keywords'])){
            $works = Work::where('title', 'like', '%'.$_GET['keywords'].'%')
                ->orWhere('link', 'like', '%'.$_GET['keywords'].'%')
                ->orderBy('created_at', 'ASC')
                ->paginate(9);
        }else{
            $works = Work::paginate(9);
        }

        return view('works/index', compact('works', 'meta'));
    }

    /**
     * PAGE: Work/{{slug}}
     * GET: /works/{{slug}}
     * This method handles the view of Work
     * @param String $slug
     * @return
     */
    public function view($slug){
        $meta = array(
            'title' => 'ComfyStudio Website Development Belfast Work',
            'description' => 'ComfyStudio Website Development, Website Design, Belfast, Work',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        $work = Work::where('slug', $slug)->first();

        //changing the meta title and description if we have some from the data.
        if(isset($work) && !empty($work)){
            if(isset($work->meta_title) && !empty($work->meta_description)){
                $meta['title'] = $work->meta_title;
            }
            if(isset($work->meta_description) && !empty($work->meta_description)){
                $meta['description'] = $work->meta_description;
            }
        }

        $prev = Work::where('id', '<', $work->id)->max('slug');
        $next = Work::where('id', '>', $work->id)->min('slug');

        return view('works/view', compact('works', 'meta', 'work', 'prev', 'next'));
    }
}
