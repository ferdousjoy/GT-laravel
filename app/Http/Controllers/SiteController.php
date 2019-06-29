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


class SiteController extends Controller
{
    public function website()
    {
      $banner=BannerModel::all();
      $ser=ServiceModel::all();
      $sol=SolutionModel::all();
      $gt=GTSolutionModel::all();
      $cad=CadSolutionModel::all();
      $fir=FireModel::all();
      $bio=Biometric::all();
      $ups=UpsModel::all();
      $eve=EventModel::all();
      $par=PartnerModel::all();
       return view('website',compact('bio','ups','eve','par','banner','ser','sol','gt','cad','fir'));
    }
}
