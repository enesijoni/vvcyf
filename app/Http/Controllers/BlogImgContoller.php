<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogpic;
use Illuminate\Support\Facades\DB;

class BlogImgContoller extends Controller
{
    public function index(){
    
        return view('adminblog');

    }

    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(),
          
              [
                'blog_title'=>'required',
                'blog_detail'=>'required'
          
              ],
              [
                'blog_title.required'=>'Blog Title  is  required',
                'blog_detail.required'=>'Blog Details  is  required'
              ]);

              if(!$validator->passes()){
                 return response()->json(['code'=>0,'error'=> $validator->errors()->toArray()]);
              }else{
                 
                $id = $request->id;
                $details = [
                'blog_title' => $request->blog_title,
                'blog_detail' => $request->blog_detail

                ];
    
                  if($request->file('blog_file')){

                     \File::delete('FrontImgfile/'.$request->image_preview);

                    $path = 'BlogImgfile/';
                    $file = $request->file('blog_file');
                    $file_name = time().'_'.$file->getClientOriginalName();
                    $upload = $file->move($path,$file_name);
                    $details['blog_file'] =  $file_name;

                          }
                $BlogImgModel = new Blogpic(); 
                $save = Blogpic::updateOrCreate(['id'=>$id],$details);

                     return response()->json(['code'=>1,'msg'=>'New File added']);
              
        
                    }

    }

    public function fetchAll(){
        $frontblog = Blogpic::all();
        $output= '';
        $key =1;
        if($frontblog->count() > 0){
            $output .= '<table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Blog Image</th>
              <th>Blog Title</th>
              <th>Blog Detail</th>
              <th>Action</th>
    
              
            </tr>
            </thead>
            <tbody>';
            foreach ($frontblog as  $frontblog){
               $output .= '<tr>
               <td>'.$key++.'</td>
               <td><img src="/BlogImgfile/'.$frontblog->blog_file.'" alt="" class="d-flex align-self-start rounded mr-3" height="64"></th>
               <td>'.$frontblog->blog_title.'</td>
               <td>'.$frontblog->blog_detail.'</td>
               <td>
               <button type="button" class="btn btn-danger delete" data-id="'.$frontblog->id.'"  >Delete</button>
               <button type="button" class="btn btn-info edit" data-blog_detail="'.$frontblog->blog_detail.'" data-blog_title="'.$frontblog->blog_title.'" data-blog_file="'.$frontblog->blog_file.'" data-id="'.$frontblog->id.'"  >Edit</button>
           </td>
              
            </tr>';
            }
            $output .='</tbody></table>';
            echo  $output;
 
        }else{
         $output .='<h1 class="text-center text-secondary my-3">No record present</h1>';
          echo  $output;
        }
    
    }

    public function destroy(Request $request)
    {
        
        Blogpic::where('id',$request->id)->delete();
        return response()->json([
         'status'=>'success',
     ]);
    }

    public function load_data(Request $request){

      if($request->ajax()){
          if($request->id > 0){

            $data = DB::table('blogpics')
                        ->where('id','<',$request->id)
                        ->orderBy('id','DESC')
                        ->limit(5)
                        ->get();
          }
          else{

            $data = DB::table('blogpics')
            ->orderBy('id','DESC')
            ->limit(5)
            ->get();

          }
          $output = '';
          $last_id='';
          if(!$data->isEmpty()){
              foreach($data as $row){
                $output.='  <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="blog-wrapper mb-60 wow fadeInUp" data-wow-delay=".3s" data-wow-duration=".3">
                    <div class="blog-img">
                        
                    <img src="/BlogImgfile/'.$frontimg->blog_file.'" alt="" height="350" width="300">     

                    </div>
                    <div class="blog-text">
                     
                        <h4>'.$row->blog_title.'</h4>
                        <p>{{$frontimg->blog_detail}}</p>
                        <!-- <a class="btn-border" href="blog-details.html">read more <i class="far fa-long-arrow-right"></i></a> -->
                    </div>
                </div>
            </div>';
            $last_id= $row->id;
              }

              $output .='
              <div id="load_more">
                <button type="button" name="load_more_button" id="load_more_button" data-id="'.$row->id.'" class="btn btn-info form-control">Load More</button></div>
            ';
          }
          else{
            $output .='
              <div id="load_more">
                <button type="button" name="load_more_button" class="btn btn-info form-control">No Data</button></div>
            ';
          }

      }
    }

}
