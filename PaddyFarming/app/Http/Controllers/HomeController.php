<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use App\Models\Knowledge;
use App\Models\PaddyBugs;
use App\Models\User;
use App\Models\ConnectB;
use App\Models\Review;
use App\Models\Pesticide;
use App\Models\PaddyType;

class HomeController extends Controller
{
    //
    public function redirect(){
    if(Auth::id())
        {
            if(Auth::user()->usertype=='0')
            {
                $know=Knowledge::all();
                return view('home.home',compact('know'));
            }
            
            else{
                $user=User::all();
                $paddybug=PaddyBugs::all();
                $review=Review::all();
                $knowledge=Knowledge::all();
                $star=0;
                $res=0;
                foreach($review as $re)
                {
                  $star+=$re->star;
                  $res++;  
                }
                $avstar=number_format($star/$res,1);
                return view('admin.home',compact('user','paddybug','review','avstar','knowledge'));
            }
            
        }
        else
        {
            return redirect()->back();
        }
    }
    
    public function about_us(){
        return view('home.about_us');
    }
    
    public function contact(){
        return view('home.contact');
    }
    
    //Paddy Type Function
    public function alltype(){
      $data=PaddyType::latest()->paginate();


      
      return view('home.PaddyType.alltype',compact('data'));  
    }
    
    public function detailtype($id)
    {
        $data=PaddyType::find($id);
        
        return view('home.PaddyType.typedetail',[
        'data' => $data
        ]);
    }
    
    public function prevent(){
        return view('home.prevent');
    }
    
    public function showWeather(){
        return view('home.weather');
    }
    
    //Insurance function
    
    public function insurance(){
        return view('home.insurance');
    }
    
    public function lifeInsurance(){
        return view('home.life');
    }
    
    public function organInsurance(){
        return view('home.organ');
    }
    
    public function Knowledge($id){
        $data=Knowledge::find($id);
        
        return view('home.kn',[
        
        'knowledge'=>$data
        ]);
    }
    
    //Bug function
    public function SeeBugs(){
        $data=PaddyBugs::all();
        return view('home.BugsView',[
        'bugs'=>$data
        ]);
    }
    
    public function BugDetails($id){
        $data=PaddyBugs::find($id);
       
        return view('home.BugDetail',[
        'data'=>$data
        ]);    
    }
    
    // End Bug Functions
    
    //Knowledge function
    
    public function viewknowledge(){
        $data=Knowledge::latest()->paginate();
        
        return view('home.knowledge',[
        'knowledge'=>$data
        ]);
    }
    
    public function ViewKnowledgeDetail($id){
        $data=Knowledge::find($id);
        
        return view('home.kn',[
        'knowledge'=>$data
        ]);
    }
    
    //End Knowledge functions
    
    //Calculate Function
    public function Calculate(){
        $data=PaddyBugs::all();
        
        return view('home.calculate',compact('data'));
    }
    
    public function CalculateDetail($id)
    {
        $data=PaddyBugs::find($id);
        
        return view('home.twoChoice',[
        'data'=>$data
        ]);
    }
    
    public function ChoosingByPest($id)
    {
        $data=PaddyBugs::find($id);
        
        return view('home.calculatedetail',[
        'data' => $data
        ]);
    }
    
    public function ChoosingByBudget($id)
    {
        $data=PaddyBugs::find($id);
        
        return view('home.CalculateByBudget',[
        'data' => $data
        ]);
    }
    
    public function CalculateBudget(Request $request,$id)
    {
        $validator=Validator::make($request->all(),[
        'budget' => ['required','numeric','min:10000'],
        'acre' => ['required','numeric','min:1'],
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        
        $data=PaddyBugs::find($id);
        
        $budget=$request->budget;
        
        $acre=$request->acre;
        
        
        
        foreach($data->pesticides as $pest)
        {
            $price=$pest->price;
             $req1=$pest->max;
             
             $amount=$pest->amount;
             
             $reqamount=$req1*$acre;
             
             $reqpack=$reqamount/$amount;
             
                $reqpack1=(int)$reqpack;
                
                $reqpack2=$reqpack1+1;
                
            $req=$reqpack2*$price;
            
            if($budget>$req)
            {
             return view('home.EstimateByBudget',compact(
             'pest' ,'req' , 'data' , 'acre' , 'budget'
             )); 
            }
            else
            {
                return redirect()->back()->withErrors('Cannot Find Pesticide suit your budget');
            }    
            
        }
    
    }
 //Calculate On Pesticides
 
 public function OnChoiceAcre($id,$pestid)
 {
     $data=PaddyBugs::find($id);
     
     $pest=Pesticide::find($pestid);
     
     return view('home.CalculateOnChoosePest',compact(
     'data' , 'pest'
     ));
 }       
        
    
    
    public function CalculateOnPest(Request $request,$id,$pestid)
    {
        $validator=Validator::make($request->all(),[
        'acre' => ['required','numeric','min:1'],
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }
        
     $bug=PaddyBugs::find($id);
     
     $data=Pesticide::find($pestid);
     
     $min=$data->min;  $max=$data->max;
     
     $acre=$request->acre;
     
     $reqmin=$acre*$min;  $reqmax=$acre*$max;  
     
     $oneprice=$data->price;
     $oneamount=$data->amount;
     
     $req1=$reqmin/$oneamount; 
     if($req1<1)
     $req1=1;
                $req=(int)$req1;
     $total=$req*$oneprice;  
     
     return view('home.totalamount',compact('bug','data','total','oneprice','req','acre'));   
    }
    
    //End Calculate Function
    
    // Review Function
    
    public function payFeedback(Request $request)
    {
        $data=new Review;
        $data->email=$request->email;
        $data->message=$request->feedback;
        $data->star=rand(4,5);
        $data->user_id=auth()->user()->id;
        
        $data->save();
        
        return back();
    }

    public function myfeedback()
    {
        $feedback=Review::all();

        return view('home.viewfeedback',compact('feedback'));
    }
    
    public function index(){
        $know=Knowledge::all();
        
        return view('home.home',[
        'know'=>$know
        ]);
    }
}
