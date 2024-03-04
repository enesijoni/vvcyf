<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FrontImgModel;

class FrontImagController extends Controller
{
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = \Validator::make($request->all(),
          
              [
                'front_title'=>'required'
                // 'quiz_file'=> 'required|mimes:pdf',
               
              ],
              [
                'front_title.required'=>'Front Title name is  required'
              ]);

              if(!$validator->passes()){
                 return response()->json(['code'=>0,'error'=> $validator->errors()->toArray()]);
              }else{
                 
                $id = $request->id;
                $details = [
                'front_title' => $request->front_title

                ];
    
                  if($request->file('front_file')){

                     \File::delete('FrontImgfile/'.$request->image_preview);

                    $path = 'FrontImgfile/';
                    $file = $request->file('front_file');
                    $file_name = time().'_'.$file->getClientOriginalName();
                    $upload = $file->move($path,$file_name);
                    $details['front_file'] =  $file_name;

                          }
                $FrontImgModel = new FrontImgModel();
                // $FrontImgModel->front_title = $request->front_title;
                // $FrontImgModel->front_file = $file_name;
       
                //  $FrontImgModel->save();
                $save = FrontImgModel::updateOrCreate(['id'=>$id],$details);

                     return response()->json(['code'=>1,'msg'=>'New File added']);
              
        
                    }

    }

    public function fetchAll(){
        $frontimg = FrontImgModel::all();
        $output= '';
        $key =1;
        if($frontimg->count() > 0){
            $output .= '<table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>No</th>
              <th>Front File File</th>
              <th>Front Tile</th>
              <th>Action</th>
    
              
            </tr>
            </thead>
            <tbody>';
            foreach ($frontimg as  $frontimg){
               $output .= '<tr>
               <td>'.$key++.'</td>
               <td><img src="/FrontImgfile/'.$frontimg->front_file.'" alt="" class="d-flex align-self-start rounded mr-3" height="64"></th>
               <td>'.$frontimg->front_title.'</td>
             
               <td>
               <button type="button" class="btn btn-danger delete" data-id="'.$frontimg->id.'"  >Delete</button>
               <button type="button" class="btn btn-info edit" data-front_title="'.$frontimg->front_title.'" data-front_file="'.$frontimg->front_file.'" data-id="'.$frontimg->id.'"  >Edit</button>
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
        
        FrontImgModel::where('id',$request->id)->delete();
        return response()->json([
         'status'=>'success',
     ]);
    }
 
}
