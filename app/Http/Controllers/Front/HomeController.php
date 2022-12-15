<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\HomeAdvertisement;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Post;
use App\Models\SubCategory;
use App\Models\Video;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() 
    {
        $video_data = Video::get();
        $home_ad_data = HomeAdvertisement::where('id',1)->first();
        $setting_data =Setting::where('id',1)->first();
        $post_data = Post::with('rSubCategory')->orderBy('id','desc')->get();
        $sub_category_data = SubCategory::with('rPost')->orderBy('sub_category_order','asc')->where('show_on_home','Show')->get();
        $category_data = Category::orderBy('category_order','asc')->get();
        return view('front.home', compact('home_ad_data','setting_data','post_data','sub_category_data','video_data','category_data'));
    }
    //skrypt do dzialania kategorii wyszukiwania na stronie glownej, wybor podkategorii wynika z kategorii, skrypt ajax we front/home.blade.php 
    public function get_subcategory_by_category($id)
    {
        $sub_category_data = SubCategory::where('category_id',$id)->get();
        $response = "<option value=''>Wybierz Podkategorie</option>";
        foreach($sub_category_data as $item) {
            $response .= '<option value="'.$item->id.'">'.$item->sub_category_name.'</option>';
        }
        return response()->json(['sub_category_data'=>$response]);
    }

    public function search(Request $request)
    {

        $post_data = Post::with('rSubCategory')->orderBy('id','desc');
        if($request->text_item!='')
        {
            $post_data = $post_data->where('post_title', 'like', '%'.$request->text_item.'%');
        }
        if($request->sub_category!='')
        {
            $post_data = $post_data->where('sub_category_id', $request->sub_category);
        }
        $post_data = $post_data->paginate(12);

        return view('front.search_result', compact('post_data'));
        
    }
}
