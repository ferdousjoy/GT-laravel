<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BannerModel;
use App\ServiceModel;
use App\SolutionModel;
use App\GTSolutionModel;
use App\CadSolutionModel;
use App\FireModel;
use App\Biometric;
use App\UpsModel;
use App\EventModel;
use App\PartnerModel;
use Carbon\Carbon;
use Image;

class DashBoardController extends Controller
{

 public function __construct()
 {
     $this->middleware('auth');
 }

    public function dashboard()
    {
    return view('dashboard');
    }
    public function banner()
    {     $attach=BannerModel::all();
           $sl=1;
           return view('Dashboard_page/banner',compact('attach','sl'));
    }


    public function bannerinsert(Request $request)
    {
      if($request->hasFile('allimg')){
       $product_image=$request->file('allimg');
       $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
       Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),50);
       BannerModel::insert([
         'title'=>$request->title,
         'text'=>$request->text,
         'allimg'=>'all_img/'.$filename,
         'created_at'=>Carbon::now(),
       ]);
       return back()->with('success','Data Insert Successfully');
     }else{
       BannerModel::insert([
         'title'=>$request->title,
         'text'=>$request->text,
         'allimg'=>'all_img/default.png',
       ]);
          return back()->with('success','Data Insert Successfully');
    }

}




//=========================================================== SERVICE==============================================================================

public function service()
{     $attach=ServiceModel::all();
       $sl=1;
       return view('Dashboard_page/service',compact('attach','sl'));
}

public function serviceinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(118, 118)->save(base_path('public/all_img/'.$filename),50);
   ServiceModel::insert([
     'link'=>$request->link,
     'ttile'=>$request->ttile,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   ServiceModel::insert([
      'link'=>$request->link,
     'ttile'=>$request->ttile,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//=========================================================== SOLUTION==============================================================================


public function solution()
{     $attach=SolutionModel::all();
       $sl=1;
       return view('Dashboard_page/solution',compact('attach','sl'));
}

public function solutioninsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),50);
   SolutionModel::insert([

     'title'=>$request->title,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   SolutionModel::insert([

     'title'=>$request->title,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//=========================================================== SOLUTION==============================================================================


public function gtsolution()
{     $attach=GTSolutionModel ::all();
       $sl=1;
       return view('Dashboard_page/GTsolution',compact('attach','sl'));
}

public function gtsolutioninsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),50);
  GTSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   GTSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}
//===========================================================CAD SOLUTION==============================================================================


public function cadsolution()
{     $attach=CadSolutionModel::all();
       $sl=1;
       return view('Dashboard_page/Cadsolution',compact('attach','sl'));
}

public function cadsolutioninsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(50, 100)->save(base_path('public/all_img/'.$filename),50);
  CadSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   CadSolutionModel::insert([

     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/d1.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//===========================================================Biometric SOLUTION==============================================================================


public function biometric()
{     $attach=Biometric::all();
       $sl=1;
       return view('Dashboard_page/Biometric',compact('attach','sl'));
}

public function biometricinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $product_image1=$request->file('allimg1');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   $filename1= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),50);
   Image::make($product_image1)->resize(150, 150)->save(base_path('public/all_img/'.$filename1),50);
  Biometric::insert([

     'title'=>$request->title,
     'title1'=>$request->title1,
     'text'=>$request->text,
     'text1'=>$request->text1,
     'allimg'=>'all_img/'.$filename,
     'allimg1'=>'all_img/'.$filename1,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   Biometric::insert([

     'title'=>$request->title,
     'title1'=>$request->title1,
     'text'=>$request->text,
     'text1'=>$request->text1,
     'allimg'=>'all_img/default.png',
     'allimg1'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}
//===========================================================UPS  ==============================================================================


public function ups()
{     $attach=UpsModel::all();
       $sl=1;
       return view('Dashboard_page/Ups',compact('attach','sl'));
}

public function upsinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),50);
  UpsModel::insert([

     'title'=>$request->title,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   UpsModel::insert([

     'title'=>$request->title,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}


//===========================================================Fire SOLUTION==============================================================================


public function fire()
{     $attach=FireModel::all();
       $sl=1;
       return view('Dashboard_page/Fire',compact('attach','sl'));
}

public function fireinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');

   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();

   Image::make($product_image)->resize(150, 150)->save(base_path('public/all_img/'.$filename),50);

  FireModel::insert([
     'title'=>$request->title,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   FireModel::insert([
     'title'=>$request->title,
     'allimg'=>'all_img/default.png',

   ]);
      return back()->with('success','Data Insert Successfully');
}

}

//===========================================================Event  ==============================================================================


public function event()
{     $attach=EventModel::all();
       $sl=1;
       return view('Dashboard_page/Event',compact('attach','sl'));
}

public function eventinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(300, 300)->save(base_path('public/all_img/'.$filename),50);
  EventModel::insert([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
   EventModel::insert([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}
//===========================================================partner ==============================================================================


public function partner()
{     $attach=PartnerModel::all();
       $sl=1;
       return view('Dashboard_page/partner',compact('attach','sl'));
}

public function Partnerinsert(Request $request)
{
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(300, 300)->save(base_path('public/all_img/'.$filename),50);
  PartnerModel::insert([
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return back()->with('success','Data Insert Successfully');
 }else{
  PartnerModel::insert([
     'allimg'=>'all_img/default.png',
   ]);
      return back()->with('success','Data Insert Successfully');
}

}





























// ==================================================ALL EDIT===============================================================
function E1($id){
 $attach= BannerModel::findOrFail($id);

return view('Dashboard_page/BannerUpdate',compact('attach'));
}
function E2($id){
 $attach= GTSolutionModel::findOrFail($id);

return view('Dashboard_page/Gt_solutionupdate',compact('attach'));
}
function E3($id){
 $attach= CadSolutionModel::findOrFail($id);

return view('Dashboard_page/Cadsolutionupdate',compact('attach'));
}
function E4($id){
 $attach= Biometric::findOrFail($id);

return view('Dashboard_page/BiometricUpdate',compact('attach'));
}
function E5($id){
 $attach= EventModel::findOrFail($id);
return view('Dashboard_page/EventUpdate',compact('attach'));
}
function U1(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),50);
   BannerModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
   return redirect()->route('biometric');
 }else{
   BannerModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('biometric');
}
function U2(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),50);
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('gtsolution');
 }else{
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('gtsolution');

}


function U3(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),50);
   CadSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
    return redirect()->route('cadsolution');
 }else{
   CadSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('cadsolution');

}
function U4(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),50);
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('gtsolution');
 }else{
   GTSolutionModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('gtsolution');

}
function U5(Request $request){
  if($request->hasFile('allimg')){
   $product_image=$request->file('allimg');
   $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
   Image::make($product_image)->resize(1023, 433)->save(base_path('public/all_img/'.$filename),50);
   EventModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/'.$filename,
     'created_at'=>Carbon::now(),
   ]);
return redirect()->route('gtsolution');
 }else{
   EventModel::findOrFail($request->all_id)->update([
     'title'=>$request->title,
     'text'=>$request->text,
     'allimg'=>'all_img/default.png',
   ]);

}

 return redirect()->route('gtsolution');

}




// ============================================ALL DELETE===================================================================
function D1($id){
BannerModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D2($id){
ServiceModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D3($id){
SolutionModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}

function D4($id){
GTSolutionModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D5($id){
CadSolutionModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D6($id){
Biometric::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D8($id){
UpsModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D9($id){
FireModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D10($id){
EventModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}
function D11($id){
PartnerModel::find($id)->delete();
return back()->with('successdelte','Item delete Successfully');
}



















}
