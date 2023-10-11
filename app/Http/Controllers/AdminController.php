<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Knowledge;
use App\Models\PaddyBugs;
use App\Models\Pesticide;
use App\Models\PaddyType;
use App\Models\Review;

class AdminController extends Controller
{
    //
    public function addNewKnowledge(){
        return view('admin.addnewknowledge');
    }
    
    public function addNewPaddyBugs(){
        
        
        return view('admin.addnewpaddybugs');
    }
    
    public function addNewPesticide(){
        $bug=PaddyBugs::all();
        
        return view('admin.addnewpesticide',compact('bug'));
    }
    
    public function ViewKnowledge(){
        $bugs=PaddyBugs::all();
        return view('admin.viewbugs',compact('bugs'));
    }
    
    public function upload_Knowledge(Request $request)
    {
        $knowledge=new Knowledge;
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientoriginalExtension();
       
       $request->file->move('knowledge_images',$imagename);
       
       $knowledge->image=$imagename;
       
       $knowledge->title=$request->title;
       
       $knowledge->article=$request->article;
       
       $knowledge->ref=$request->ref;
       
       $knowledge->body=$request->body;
       
       $knowledge->save();
       
       return redirect()->back()->with('message','Knowledge Post Added Successfully'); 
    }
    
    //bugs Function
    
    public function upload_paddyBugs(Request $request)
    {
        $bugs=new paddybugs;
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientoriginalExtension();
       
       $request->file->move('bugs_images',$imagename);
       
       $bugs->image=$imagename;
       
       $bugs->name=$request->name;
       
       $bugs->article=$request->article;
       
       $bugs->body=$request->body;
       
       $bugs->pervention_method=$request->pervent;
       
       $bugs->save();
                                 
       return redirect()->back()->with('message','New Paddy Bugs Added Successfully'); 
    }
    
    public function deleteBugs($id)
{
    $data=PaddyBugs::find($id);
    
    $data->delete();
    
    return redirect()->back()->with('message','Delete Successfully');
    
    
}
   public function UpdateBugs($id)
   {
       $data=PaddyBugs::find($id);
       
       return view('admin.updateBugs',compact('data'));
   }   
   
   public function EditBug(Request $request,$id){
        $data=PaddyBugs::find($id);
        
        $data->article=$request->article;
        
        $data->name=$request->bug;
        
        $data->body=$request->body;
        
        $data->pervention_method=$request->pervent;
        
        
        $image=$request->file;
                 
        $imagename=time().'.'.$image->getClientOriginalExtension();
        
        $request->file->move('bugs_images',$imagename);
        
        $data->image=$imagename;
                 
        $data->save();
        
        return redirect()->back()->with('message','Paddy Bugs Information was successfully update');
    } 

    //Pesticide Function
    
       public function upload_pesticide(Request $request)
    {
        $pesticide=new pesticide;
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientoriginalExtension();
       
       $request->file->move('pesticide_image',$imagename);
       
       $pesticide->image=$imagename;
       
       $pesticide->name=$request->name;
       
       $pesticide->use_message=$request->message;
       
       $pesticide->amount=$request->amount;
       
       $pesticide->type=$request->type;
       
       $pesticide->paddy_bugs_id=$request->id;
       
       $pesticide->use_amount=$request->uamount;
       
       $pesticide->use_vegetable=$request->uvegetable;
       
       $pesticide->use_advantage=$request->advantage;
       
       $pesticide->min=$request->min;
       
       $pesticide->max=$request->max;
       
       $pesticide->price=$request->price;
       
       $pesticide->save();
                                 
       return redirect()->back()->with('message','New Pesticide Added Successfully'); 
    }
    
    public function viewpesticide(){
        $data=Pesticide::all();
        
        return view('admin.viewPesticide',compact('data'));
    }
    
    public function deletepest($id){
        $data=Pesticide::find($id);
        
            $data->delete();
    
    return redirect()->back()->with('message','Delete Successfully');
    }
    
    public function updatepest($id){
        $data=Pesticide::find($id);
        
        return view('admin.updatepest',compact('data'));
    }
    
    public function editpest($id,Request $request)
    {
        $validator=validator(request()->all(),[
       'name' => 'required',
       'message' => 'required',
       'amount' => 'required'
       ]);
       
       if($validator->fails()){
           return back()->withErrors($validator);
       }
        
      $pesticide=Pesticide::find($id);
        $image=$request->file;
        
        $imagename=time().'.'.$image->getClientoriginalExtension();
       
       $request->file->move('pesticide_image',$imagename);
       
       $pesticide->image=$imagename;
       
       $pesticide->name=$request->name;
       
       $pesticide->use_message=$request->message;
       
       $pesticide->amount=$request->amount;
       
       $pesticide->type=$request->type;
       
       $pesticide->paddy_bugs_id=$request->id;
       
       $pesticide->use_amount=$request->uamount;
       
       $pesticide->use_vegetable=$request->uvegetable;
       
       $pesticide->use_advantage=$request->advantage;
       
       $pesticide->min=$request->min;
       
       $pesticide->max=$request->max;
       
       $pesticide->price=$request->price;
       
       $pesticide->save();
                                 
       return redirect()->back()->with('message','Pesticide Updated Successfully'); 
      
    }
    
    //Paddy Type Function
    
    public function addpaddyType(){
        $type=TypeCategory::all();
        
        return view('admin.addnewpaddytype',compact('type'));
        
    }
    
    //Review Function
    
    public function ViewReview(){
        $review=Review::all();
        
        return view('admin.ViewReview',compact('review'));
    }
}
