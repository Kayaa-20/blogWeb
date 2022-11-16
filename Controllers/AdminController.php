<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Navbar;
use App\Models\Slider;
use App\Models\About;
use App\Models\Category;
use App\Models\Post;
use App\Models\Contact;
use App\Models\Message;
use Illuminate\Support\Str;

class AdminController extends Controller
{
  public function view_nav()
  {
    $data = navbar::all();
    return view('admin.navbar', compact('data'));
  }

  // EDIT NAV
  public function edit_nav()
  {
    $info = navbar::all();
    return view('admin.navbar_edit', compact('info'));
  }
  public function edit_nav_confirm(Request $request, $id)
  {
    $navbar = Navbar::find($id);
    $logo = $request->logo;
    if ($logo) {
      $logoname = time() . '.' . $logo->getClientOriginalExtension();
      $request->logo->move('db_img', $logoname);
      $navbar->logo = $logoname;
    }
    $navbar->title_1 = $request->title_1;
    $navbar->link_1 = $request->link_1;
    $navbar->title_2 = $request->title_2;
    $navbar->link_2 = $request->link_2;
    $navbar->title_3 = $request->title_3;
    $navbar->link_3 = $request->link_3;
    $navbar->title_4 = $request->title_4;
    $navbar->link_4 = $request->link_4;
    $navbar->save();
    return redirect()->back()->with('message', 'Item updated successfully');
  }

  // SLIDER
  public function view_slide()
  {
    $data = slider::paginate(4);
    return view('admin.slider', compact('data'));
  }

  // EDIT
  public function edit_slider($id)
  {
    $data = slider::find($id);
    return view('admin.slider_edit', compact('data'));
  }
  public function edit_slider_confirm(Request $request, $id)
  {
    $slider = Slider::find($id);
    $slide = $request->slider;
    if ($slide) {
      $imagename = time() . '.' . $slide->getClientOriginalExtension();
      $request->slider->move('db_img/slider', $imagename);
      $slider->slider_url = $imagename;
    }
    $slider->title = $request->title;
    $slider->text = $request->slide_text;
    $slider->link = $request->link;
    $slider->color = $request->color_name;
    $slider->save();
    return redirect()->back()->with('message', 'Item updated successfully');
  }
  
  //  INSERT
  public function add_slider(Request $request)
  {
    return view('admin.slider_insert');
  }
  public function add_slider_confirm(Request $request)
  {
    $slider = new slider;
    $slide = $request->slider;
    if ($slide) {
      $imagename = time() . '.' . $slide->getClientOriginalExtension();
      $request->slider->move('db_img/slider', $imagename);
      $slider->slider_url = $imagename;
    }
    $slider->title = $request->title;
    $slider->text = $request->slide_text;
    $slider->link = $request->link;
    $slider->color = $request->color_name;
    $slider->save();
    return redirect()->back()->with('message', 'Item added successfully');
  }

  // DELETE
  public function delete_slider($id)
  {
    $data = Slider::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Item deleted successfully');
  }
  public function view_about()
  {
    $data = About::find(1);
    $about = $data->text;
    $meet_text = $data->meet_text;
    $detail_text = $data->detail_text;
    $detail_subtext = $data->detail_subtext;
    $subAbout = substr($about, 0, 300);
    $subMeet = substr($meet_text, 0, 150);
    $subDetail = substr($detail_text, 0, 150);
    $subText = substr($detail_subtext, 0, 150);
    return view('admin.about', compact('data', 'subAbout', 'subMeet', 'subDetail', 'subText'));
  }
  public function edit_aboutHome()
  {
    $info = About::all();
    return view('admin.aboutHome_edit', compact('info'));
  }
  public function aHome_confirm(Request $request)
  {
    $id = 1;
    $ahome = About::find($id);
    $image = $request->image;
    if ($image) {
      $imagename = time() . '.' . $image->getClientOriginalExtension();
      $request->image->move('db_img/about', $imagename);
      $ahome->img_url = $imagename;
    }
    $ahome->title = $request->title;
    $ahome->text = $request->about_text;
    $ahome->save();
    return redirect()->back()->with('message', 'Item updated successfully');
  }
  public function edit_aboutMeet()
  {
    $info = About::all();
    return view('admin.aboutMeet_edit', compact('info'));
  }
  public function aMeet_confirm(Request $request)
  {
    $aMeet = About::find(1);
    $aMeet->meet_title = $request->meet_title;
    $aMeet->meet_text = $request->meet_text;
    $aMeet->sign = $request->sign;
    $aMeet->save();
    return redirect()->back()->with('message', 'Item updated successfully');
  }
  public function edit_aboutDetails()
  {
    $info = About::all();
    return view('admin.aboutDetails_edit', compact('info'));
  }
  public function aDetails_confirm(Request $request)
  {
    $aDetails = About::find(1);
    $image_one = $request->detail_img;
    if ($image_one) {
      $imagename_one = time() . '.' . $image_one->getClientOriginalExtension();
      $request->detail_img->move('db_img/about', $imagename_one);
      $aDetails->detail_img = $imagename_one;
    }
    $image_two = $request->dt_about_img;
    if ($image_two) {
      $imagename_two = time() . '.' . $image_two->getClientOriginalExtension();
      $request->dt_about_img->move('db_img/about', $imagename_two);
      $aDetails->dt_about_img = $imagename_two;
    }
    $aDetails->detail_title = $request->detail_title;
    $aDetails->detail_text = $request->detail_text;
    $aDetails->detail_subtitle = $request->detail_subtitle;
    $aDetails->detail_subtext = $request->detail_subtext;
    $aDetails->save();
    return redirect()->back()->with('message', 'Item updated successfully');
  }

  public function view_category()
  {
    $data = Category::paginate(4);
    return view('admin.categories', compact('data'));
  }

  // EDIT
  public function edit_category($id)
  {
    $info = Category::find($id);
    return view('admin.category_edit', compact('info'));
  }
  public function edit_category_confirm(Request $request, $id)
  {
    $category = Category::find($id);
    $category->category_name = $request->category_name;
    $category->save();
    return redirect()->back()->with("message", "Category name updated successfully");
  }

  //  INSERT
  public function add_category()
  {
    return view('admin.category_insert');
  }
  public function add_category_confirm(Request $request)
  {
    $category = new category;
    $category->category_name = $request->category_name;
    $category->save();
    return redirect()->back()->with("message", "Category added successfully");
  }

  //DELETE
  public function delete_category($id)
  {
    $data = Category::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Item deleted successfully');
  }
  public function view_posts()
  {
    $data = Post::paginate(5);
    return view('admin.posts', compact('data'));
  }

  // DETAIL
  public function post_detail($id)
  {
    $data = Post::find($id);
    return view('admin.post_detail', compact('data'));
  }

  // EDIT
  public function edit_post($id)
  {
    $data = Post::find($id);
    return view('admin.post_edit', compact('data'));
  }
  public function edit_post_confirm(Request $request, $id)
  {
    $post = Post::find($id);
    $post->post_title = $request->title;
    $post->post_subtitle = $request->subtitle;
    $post->post_description = $request->description;
    $post->post_text = $request->post_text;
    $bg = $request->post_bg;
    if ($bg) {
      $imagename = 'bg' . time() . '.' . $bg->getClientOriginalExtension();
      $request->post_bg->move('db_img/posts', $imagename);
      $post->bg_img = $imagename;
    }
    $first = $request->first_img;
    if ($first) {
      $imagename = 'first' . time() . '.' . $first->getClientOriginalExtension();
      $request->first_img->move('db_img/posts', $imagename);
      $post->first_img = $imagename;
    }
    $second = $request->second_img;
    if ($second) {
      $imagename = 'second' . time() . '.' . $second->getClientOriginalExtension();
      $request->second_img->move('db_img/posts', $imagename);
      $post->second_img = $imagename;
    }
    $post->save();
    return redirect()->back()->with('message', 'Post updated successfully.');
  }

  // INSERT
  public function add_post()
  {
    $category = Category::all();
    return view('admin.post_insert', compact('category'));
  }
  public function add_post_confirm(Request $request)
  {
    $post = new Post;
    $post->category_id = $request->category_id;
    $post->post_title = $request->title;
    $post->post_subtitle = $request->subtitle;
    $post->post_description = $request->description;
    $post->post_text = $request->post_text;
    $bg = $request->post_bg;
    if ($bg) {
      $imagename = 'bg' . time() . '.' . $bg->getClientOriginalExtension();
      $request->post_bg->move('db_img/posts', $imagename);
      $post->bg_img = $imagename;
    }
    $first = $request->first_img;
    if ($first) {
      $imagename = 'first' . time() . '.' . $first->getClientOriginalExtension();
      $request->first_img->move('db_img/posts', $imagename);
      $post->first_img = $imagename;
    }
    $second = $request->second_img;
    if ($second) {
      $imagename = 'second' . time() . '.' . $second->getClientOriginalExtension();
      $request->second_img->move('db_img/posts', $imagename);
      $post->second_img = $imagename;
    }
    $post->save();
    return redirect()->back()->with('message', 'Post added successfully.');
  }

  //DELETE
  public function delete_post($id)
  {
    $data = Post::find($id);
    $data->delete();
    return redirect()->back()->with('message', 'Item deleted successfully');
  }
  public function view_contact()
  {
    $data = Contact::all();
    return view('admin.contact', compact('data'));
  }

  // EDIT
  public function edit_contactInfo($id)
  {
    $data = Contact::find($id);
    return view('admin.contactInfo_edit', compact('data'));
  }
  public function contactInfo_confirm(Request $request)
  {
    $contactInfo = Contact::find(1);
    $contactInfo->fb_link = $request->fb_link;
    $contactInfo->ins_link = $request->ins_link;
    $contactInfo->tweet_link = $request->tweet_link;
    $contactInfo->admin_mail = $request->mail;
    $contactInfo->description = $request->desc_text;
    $contactInfo->save();
    return redirect()->back()->with('message', 'Contact Informations updated successfully.');
  }
  public function contactImg_confirm(Request $request)
  {
    $contactImg = Contact::find(1);
    $bg_img = $request->bg_img;
    if ($bg_img) {
      $imagename = 'bg_img' . time() . '.' . $bg_img->getClientOriginalExtension();
      $request->bg_img->move('db_img/contact', $imagename);
      $contactImg->bg_img = $imagename;
    }
    $ins_img1 = $request->ins_img1;
    if ($ins_img1) {
      $imagename = 'ins_img1' . time() . '.' . $ins_img1->getClientOriginalExtension();
      $request->ins_img1->move('db_img/contact', $imagename);
      $contactImg->ins_img1 = $imagename;
    }
    $ins_img2 = $request->ins_img2;
    if ($ins_img2) {
      $imagename = 'ins_img2' . time() . '.' . $ins_img2->getClientOriginalExtension();
      $request->ins_img2->move('db_img/contact', $imagename);
      $contactImg->ins_img2 = $imagename;
    }
    $ins_img3 = $request->ins_img3;
    if ($ins_img3) {
      $imagename = 'ins_img3' . time() . '.' . $ins_img3->getClientOriginalExtension();
      $request->ins_img3->move('db_img/contact', $imagename);
      $contactImg->ins_img3 = $imagename;
    }
    $ins_img4 = $request->ins_img4;
    if ($ins_img4) {
      $imagename = 'ins_img4' . time() . '.' . $ins_img4->getClientOriginalExtension();
      $request->ins_img4->move('db_img/contact', $imagename);
      $contactImg->ins_img4 = $imagename;
    }
    $ins_img5 = $request->ins_img5;
    if ($ins_img5) {
      $imagename = 'ins_img5' . time() . '.' . $ins_img5->getClientOriginalExtension();
      $request->ins_img5->move('db_img/contact', $imagename);
      $contactImg->ins_img5 = $imagename;
    }
    $ins_img6 = $request->ins_img6;
    if ($ins_img6) {
      $imagename = 'ins_img6' . time() . '.' . $ins_img6->getClientOriginalExtension();
      $request->ins_img6->move('db_img/contact', $imagename);
      $contactImg->ins_img6 = $imagename;
    }
    $contactImg->save();
    return redirect()->back()->with('message', 'Contact Images updated successfully.');
  }

  public function edit_contactImg($id)
  {
    $data = Contact::find($id);
    return view('admin.contactImg_edit', compact('data'));
  }
}
