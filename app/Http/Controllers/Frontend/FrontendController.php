<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Pdfs;
use App\Models\User;
use App\Models\Apeal;
use App\Models\Event;
use App\Models\Causes;
use App\Models\Comment;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Requests\volunteer;
use App\Http\Controllers\Controller;
use App\Http\Requests\FaqFormRequest;
use App\Models\AboutUs;
use App\Models\Faq;
use App\Models\General;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Why;
use Illuminate\Pagination\Paginator;

class FrontendController extends Controller
{
   public function index()
   {
      $gen=General::all();
      $settings=Setting::all();
      $cause = Causes::all();
      $blog = Blog::all();
      $events = Event::all();
      $apeal = Apeal::all();
      $latestPost= Event::latest()->first();
      $categories = Categories::all();
      $about=AboutUs::all();
      $user=User::all();
      $project=Project::all();
      $latestProject = Project::latest()->first();
      return view('front.index', compact('cause', 'blog', 'categories', 'apeal', 'events','latestPost','settings', 'about','gen','user','project', 'latestProject'));
   }
   public function about(AboutUs $view)
   {
      $gen = General::all();
      $settingss=Setting::all();
      $settings = AboutUs::all();
      $blog = Blog::all();
     // $view->visitsCounter()->increment();
      $categories=Categories::all();
      return view('front.about.index',compact('blog','settings','gen','categories', 'settingss'));
   }
   public function aboutdetails($id)
   {
      $settingss = Setting::all();
      $gen = General::all();
      $settings = AboutUs::findOrFail($id);
      $blog = Blog::all();
      $categories = Categories::all();
      return view('front.about.details', compact('blog', 'settings','gen', 'settingss','categories'));
   }
   public function event()
   {
      $gen = General::all();
      $blog = Blog::all();
      $events = Event::all();
      return view('front.event.index', compact('events','blog','gen'));
   }
   public function categories()
   {
      $gen = General::all();
      $blog = Blog::all();
      $categories = Categories::all();
      return view('front.categories.index', compact('categories','blog','gen'));
   }
   public function donate()
   {
      $gen = General::all();
      $blog = Blog::all();
      $categories = Categories::all();
      return view('front.donate.index', compact('categories','blog','gen'));
   }
   public function why()
   {
      $why=Why::all();
      $gen = General::all();
      $blog = Blog::all();
      $categories = Categories::all();
      return view('front.whyTaho.index', compact('categories', 'blog', 'gen','why'));
   }
   public function categoriesdetails($id)
   {
      $gen = General::all();
      $blog = Blog::all();
      $categoriess = Categories::all();
      $categories = Categories::where('id', $id)->first();
      return view('front.categories.details', compact('categories','blog','gen', 'categoriess'));
   }

   public function eventDetail($id)
   {
      $gen = General::all();
      $blog = Blog::all();
      $events = Event::where('id', $id)->first();
      $cause = Causes::all();
      $categories = Categories::all();
      return view('front.event.details', compact('events', 'cause', 'categories','blog','gen'));
   }
   public function Eventdonation($id)
   {
      $gen = General::all();
      $blog = Blog::all();
      $events = Event::where('id', $id)->first();
      if ($events) {
         return view('front.event.don.donation', compact('events','blog','gen'));
      } else {
         return back();
      }
   }

   public function blogpost()
   {
      $blog = Blog::all();
      $categories=Categories::latest()->paginate(4);
     
      return view('front.blog.index',compact('blog','categories'));
   }

   public function blogpostdetails($id)
   {
      $comment=Comment::all();
      $blog = Blog::where('id', $id)->first();
           $categories=Categories::all();
      return view('front.blog.details', compact('blog','categories','comment'));
      
   }

   public function galleries()
   {
      $causes = Causes::all();
      $blog = Blog::all();
      $event = Event::all();
      
      $apeal = Apeal::all();
      return view('front.gallery.index', compact('causes', 'blog', 'event', 'apeal'));
   }

   public function volunteers()
   {
      $blog=Blog::all();
      $user = User::all();
      $categories = Categories::all();
      return view('front.volunteer.index', compact('categories', 'user','blog'));
   }
   public function volunteersRequest(volunteer $request)
   {
      $val = $request->validated();
      $categories = Categories::findOrFail($val['catId']);
      $vol = $categories->volunteer()->create([
         'catId' => $val['catId'],
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'message' => $request->input('message'),
         'contact' => $request->input('phone'),
      ]);
      $vol->save();
       return back();
   }
   public function faquest()
   {
      $blog = Blog::all();
      $events =
      $faq= Faq::all();
      $categories = Categories::all();
      return view('front.faq.index', compact('categories', 'blog','faq'));
      
   }
   public function faquestion(FaqFormRequest $request)
   {
      $val = $request->validated();
      $categories = Categories::findOrFail($val['catId']);
      $faq = $categories->faqs()->create([
         'catId' => $val['catId'],
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'question' => $val['message'],
         'phone' => $request->input('phone'),
      ]);
      $faq->save();
      return back();
      
   }
   public function pdfs()
   {
      $blog = Blog::all();
      $pdf = Pdfs::all();
      return view('front.pdf.index', compact('pdf','blog'));
   }
   public function pdfshow($id)
   {
      $pdf = Pdfs::findOrFail($id);
      return $pdf->getFirstMedia('files');
   }
   public function contact()
   {
      $blog = Blog::all();
      $categories = Categories::all();
      return view('front.contact.index',compact('blog','categories'));
   }

   public function causesView()
   {
      $blog = Blog::all();
      $cause = Causes::latest()->paginate(12);
      $categories = Categories::all();
      if ($cause) {
         return view('front.news.index', compact('cause', 'categories','blog'));
      } else {
         return redirect('front/index');
      }
   }
   
   public function project()
   {
      $blog = Blog::all();
      $project = Project::latest()->paginate(12);
      $categories = Categories::all();
      if ($project) {
         return view('front.project.index', compact('project', 'categories','blog'));
      } else {
         return redirect('front/index');
      }
   }
   public function Causedonate($id)
   {
      $cause = Causes::where('id', $id)->first();
      $blog=Blog::all();
      $categories = Categories::all();
      if ($cause) {
         return view('front.news.donate', compact('cause', 'categories','blog'));
      } else {
         return redirect('front/index');
      }
   }
   public function Causedonation($id)
   {
      $blog = Blog::all();
      $cause = Causes::where('id', $id)->first();
      if ($cause) {
         return view('front.news.don.donation', compact('cause','blog'));
      } else {
         return back();
      }
   }
   public function CauseComment(Request $request, $id)
   {
      $categories = Categories::all();
      $cause = Causes::where('id', $id)->first();
      $comment = $cause->comments()->create([
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'comment' => $request->input('reply')
      ]);
      $comment->save();

      return back();
   }
   public function ApealsComment(Request $request, $id)
   {
      $categories = Categories::all();
      $apeal = Apeal::where('id', $id)->first();
      $comment = $apeal->comments()->create([
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'comment' => $request->input('reply')
      ]);
      $comment->save();

      return back();
   }
   public function BlogComment(Request $request, $id)
   {
      $categories = Categories::all();
      $blog = Blog::where('id', $id)->first();
      $comment = $blog->comments()->create([
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'comment' => $request->input('reply')
      ]);
      $comment->save();

      return back();
   }
   public function EventComment(Request $request, $id)
   {
      $cause = Causes::all();
      $categories = Categories::all();
      $events = Event::where('id', $id)->first();
      $comment = $events->comments()->create([
         'name' => $request->input('name'),
         'email' => $request->input('email'),
         'comment' => $request->input('reply')
      ]);
      $comment->save();

      return back();
   }

   public function apeals()
   {
      $gen = General::all();
      $blog = Blog::all();
      $apeal = Apeal::latest()->paginate(12);
      return view('front.apeal.index', compact('apeal','blog','gen'));
   }
   public function apealdonate($id)
   {
      $apeal = Apeal::where('id', $id)->first();
      $blog = Blog::all();
      $categories = Categories::all();
      if ($apeal) {
         return view('front.apeal.donate', compact('apeal', 'categories','blog'));
      } else {
         return redirect('front/index');
      }
   }
   public function projectdonate($id)
   {
      $project = Project::where('id', $id)->first();
      $blog = Blog::all();
      $categories = Categories::all();
      if ($project) {
         return view('front.project.don.donation', compact('project', 'categories', 'blog'));
      } else {
         return redirect('front/index');
      }
   }
   public function details($id)
   {
      $project = Project::where('id', $id)->first();
      $blog = Blog::all();
      $categories = Categories::all();
      if ($project) {
         return view('front.project.datails', compact('project', 'categories', 'blog'));
      } else {
         return redirect('front/index');
      }
   }
   public function apealdonation($id)
   {
      $apeal = Apeal::where('id', $id)->first();
      if ($apeal) {
         return view('front.apeal.don.donation', compact('apeal'));
      } else {
         return redirect('front/apeal');
      }
   }
}
