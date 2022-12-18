<?php

namespace App\Providers;
use App\Models\backend\Category;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\ServiceProvider;
use App\Models\frontend\Posts;
use App\Models\frontend\userProfiles;
use App\Models\frontend\Motels;
use App\Models\Comment;
use App\Models\Status;
use App\Models\Friends;
use App\Models\Messages;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $datamotel['moteldata']=Motels::all();
       view()->share($datamotel);
       $datafriend['friend']=Friends::all();
       view()->share($datafriend);
        $datapost['postdata']=Posts::all();
       view()->share($datapost);
       $datacate['catelist']=Category::all();
       view()->share($datacate);
       $dataproduct['productdata']=Product::all();
       view()->share($dataproduct);
        $datauser['user_pro']=User::all();
       view()->share($datauser);
        $dataprofiles['profiles']=userProfiles::all();
       view()->share($dataprofiles);
        $datastatus['statusdata']=Status::all();
       view()->share($datastatus);
       $datacmt['commentss']=Comment::all();
       view()->share($datacmt);

    }
}
