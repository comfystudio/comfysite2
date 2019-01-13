<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\WorkImage;
use App\Work;
use Illuminate\Support\Facades\File;

class WorkImagesController extends Controller
{
    /**
     * PAGE: Admin/Work-Images/
     * GET: /admin/works-images/
     * This method handles the index view of Work Images
     * @param Work $works
     * @return
     */
    public function admin_index(Work $works){
        $meta = array(
            'title' => 'Work Images Index',
            'description' => 'Work Images index',
            'section' => 'Work',
            'subSection' => 'Work'
        );
        if(isset($_GET['keywords']) && !empty($_GET['keywords'])){
            $images = $works->workImages()->where('image', 'like', '%'.$_GET['keywords'].'%')
                ->orWhere('title', 'like', '%'.$_GET['keywords'].'%')
                ->orderBy('sort', 'ASC')
                ->paginate(20);
        }else{
            $images = $works->workImages()->orderBy('sort', 'ASC')->paginate(20);
        }
        return view('works_images/admin/index', compact('images', 'meta', 'works'));
    }

    /**
     * PAGE: Admin/Work-Images/Create
     * GET: /admin/works-images/create
     * This method handles the creation view of Work Images
     * @param Work $works
     * @return
     */
    public function admin_createShow(Work $works){
        $meta = array(
            'title' => 'Work Images Index',
            'description' => 'Work Images index',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        return view('works_images/admin/create', compact('meta', 'works'));
    }

    /**
     * PAGE: Admin/Work-Images/Create
     * POST: /admin/works-images/create
     * This method handles the creation of Work Images
     * @param Request $request Work $works
     * @return
     */
    public function admin_create(Work $works, Request $request){
        $this->validate($request, [
            'title' => 'max:255',
            'image' => 'required',
            'is_active' => 'Integer'
        ]);

        //finding the largest sort value so we can increment this to the end
        $count = DB::table('work_images')->where('work_id', $works->id)->max('sort');
        if(!isset($count)){
            $count = 0;
        }else{
            $count++;
        }

        // storing the image
        if(isset($request->image) && !empty($request->image)){
            $path = $request->image->store('images/uploads');
            $file = $request->file('image');

            $file->move('images/uploads',  $path);
        }
        WorkImage::create(array(
                'title' => $request->title,
                'sort' => $count,
                'work_id' => $works->id,
                'image' => $path,
                'is_active' => $request->is_active
            )
        );

        return redirect('/admin/works-images/'.$works->id)->with('status', 'Work Images added successfully.');
    }

    /**
     * PAGE: Admin/Work-Images/Delete
     * GET: /admin/works-images/delete
     * This method handles the deletion view of Work Images
     * @param Work $works Work Images $images
     * @return
     */
    public function admin_deleteShow(Work $works, WorkImage $images){
        $meta = array(
            'title' => 'Work Images Delete',
            'description' => 'Work Images Delete',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        return view('works_images/admin/delete', compact('meta', 'images', 'works'));
    }

    /**
     * PAGE: Admin/Work-Images/Delete
     * POST: /admin/works-images/delete
     * This method handles the deletion view of Work Images
     * @param Work $works WorkImage $images
     * @return
     */
    public function admin_delete(Work $works, WorkImage $images){
        $images->delete();
        File::delete($images->image);

        return redirect('/admin/works-images/'.$works->id)->with('status', 'Work Images deleted successfully.');
    }

    /**
     * PAGE: Admin/Work-Images/edit
     * GET: /admin/works-images/edit
     * This method handles the edit view of Work Images
     * @param Work $works, WorkImage $images
     * @return
     */
    public function admin_editShow(Work $works, WorkImage $images){
        $meta = array(
            'title' => 'Work Images Edit',
            'description' => 'Work Images edit',
            'section' => 'Work',
            'subSection' => 'Work'
        );

        return view('works_images/admin/create', compact('meta', 'images', 'works'));
    }

    /**
     * PAGE: Admin/Work-Images/edit
     * POST: /admin/works-images/edit
     * This method handles the editing of Work Images
     * @param Request $request WorkImage $images
     * @return
     */
    public function admin_edit(Work $works, Request $request, WorkImage $images){
        $this->validate($request, [
            'title' => 'max:255',
            'is_active' => 'Integer'
        ]);

        //checking if we have new image and do following else assign $path to previous image path
        if(isset($request->image) && !empty($request->image)){
            $path = $request->image->store('images/uploads');
            $file = $request->file('image');
            File::delete($images->image);

            $file->move('images/uploads',  $path);
        }else{
            $path = $images->image;
        }

        $input = array(
            'title' => $request->title,
            'is_active' => $request->is_active,
            'image' => $path
        );

        $images->update($input);
        return redirect('/admin/works-images/'.$works->id)->with('status', 'Work Images Edited successfully.');
    }

    /**
     * PAGE: Admin/Work-Images/download
     * GET: /admin/works-images/download
     * This method handles the download of Work Images
     * @param Work $worksWorkImage $images
     * @return
     */
    public function admin_download(Work $works, WorkImage $images){
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename="'.basename($images->image).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Content-Transfer-Encoding: binary');
        header('Pragma: public');
        header('Content-Length: ' . filesize($images->image));
        readfile($images->image);
        exit;
    }

    /**
     * PAGE: works-images types sort
     * GET: /admin/works-images/{works}/sort/:direction/{works-images}
     * This method handles the sorting of works-images
     * @param string $direction, int $id
     */
    public function admin_sort(Work $works, $direction = null, WorkImage $images, $sort){
        if(!empty($images->id)){
            if($direction == 'up'){
                $order = $sort-1;
                // Make sure we don't move below 0
                if($order < 0){
                    $order = 0;
                }

                // Update the previous item with the new order and add one to it.
                DB::table('work_images')->where([
                    ['work_id', $works->id],
                    ['sort', $order],
                ])
                    ->update(['sort' => ($order+1)]);


                // Update the selected item sort order.
                DB::table('work_images')->where('id', $images->id)->update(['sort' => $order]);


            }elseif($direction == 'down'){
                $order = $sort+1;

                // Update the previous item with the new order and add one to it.
                DB::table('work_images')->where([
                    ['work_id', $works->id],
                    ['sort', $order],
                ])
                    ->update(['sort' => ($order-1)]);

                // Update the selected item sort order.
                DB::table('work_images')->where('id', $images->id)->update(['sort' => $order]);

            }
            //Url::redirect('backoffice/trainer-images/index/'.$parent_id);
            return redirect()->back()->with('status', 'Work Images sorted successfully.');

        }else{
            //Url::redirect('backoffice/trainer-images/index/'.$parent_id);
            return redirect()->back()->withErrors('Work Images sort failed');
        }
    }
}
