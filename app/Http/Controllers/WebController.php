<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\About;
use App\Academic;
use App\Address;
use App\Contact;
use App\Contact_Page;
use App\CornerMessage;
use App\Facility;
use App\Gallery;
use App\Member;
use App\NewsAndEvent;
use App\Notice;
use App\Slider;
use App\SocialLinker;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function index()
    {
        $address = $this->address();
        $contacts = $this->contact();
        $social_liners = $this->social_linker();
        $facilities = $this->facilities();
        $sliders = Slider::all();
        $corner_messages = CornerMessage::all();
        $notices = Notice::query()->select('*')->orderBy('id','DESC')->get();
        $abouts = About::query()->select('*')->orderBy('id',"DESC")->first();
        $news_events = NewsAndEvent::all();
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();
        return view('web.home',compact('messages','abouts','address','contacts','social_liners','facilities','sliders','corner_messages','notices','news_events','all_facilities','academics'));
    }
    public function gallery()
    {
//        $address = $this->address();
//        $contacts = $this->contact();
//        $social_liners = $this->social_linker();
//        $facilities = $this->facilities();
        $all_galleries = Gallery::paginate(10);
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();
        return view('web.gallery.gallery',compact('all_galleries','messages','all_facilities','academics'));
    }

    public function web_categorized_gallery($id)
    {
//        $all_galleries = Gallery::query()->select('*')->where('id','=',$id)->get();
        $all_galleries = Gallery::find($id);
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();
//        return $all_galleries;
        return view('web.gallery.categorized_gallery',compact('all_galleries','messages','all_facilities','academics'));
    }




//    Video Page
    public function youtube_api()
    {
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        return view('web.video.web_video',compact('messages','all_facilities','academics'));
        // youtube_api = AIzaSyAkHj5Tl62FLLMRWWf6o1RokEaa0FnOF4M
        /*
         * YouTube User ID: PpoBbrSl9My1tfBqeKNHbQ
           YouTube Channel ID: UCPpoBbrSl9My1tfBqeKNHbQ
        */
      /*  $API_key    = 'AIzaSyAkHj5Tl62FLLMRWWf6o1RokEaa0FnOF4M';
        $channelID  = 'UCPpoBbrSl9My1tfBqeKNHbQ';
        $channelID_OCT  = 'UCGIyJdgP_AyqdgvdE9RjynA';
        $maxResults = 10;


//        $videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
//        return $videoList;

        $videoList = Youtube::listChannelVideos($channelID, 40);

        return view('web.video.web_video',compact('videoList'));*/
    }





    public function notice()
    {
        $notices = Notice::orderBy('id','DESC')->paginate(10);
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.notice.notice',compact('notices','messages','all_facilities','academics'));
    }

    public function about()
    {
        $abouts = About::orderBy('id','DESC')->first();
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.about.about',compact('abouts','messages','all_facilities','academics'));
    }
    public function academic($name)
    {
        //$academics = Academic::all();
        $academy_details = Academic::query()->select('*')->where('academy_name','=',$name)->first();
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.academic.academic',compact('academics','messages','all_facilities','academy_details'));
    }

    public function message($id)
    {
        $message = CornerMessage::find($id);
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.message.message',compact('message','messages','all_facilities','academics'));
    }

//    public function web_message_us(Request $request)
//    {
//        //return $request;
//        Contact_Page::craete([
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'phone' => $request->get('phone'),
//            'subject' => $request->get('subject'),
//            'message' => $request->get('message'),
//        ]);
//        return back()->with('message','Message Sent');
//    }


    public function facility($name)
    {
        $facilities = Facility::query()->select('*')->where('facility_name','=',$name)->first();

        //return $facilities;
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.facility.facility',compact('facilities','messages','all_facilities','academics'));
    }

    public function contact_page()
    {
        $contacts = Contact::all();
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.contact.contact',compact('contacts','messages','all_facilities','academics'));
    }
    public function news_events()
    {
        $news_events = NewsAndEvent::orderBy('id','DESC')->paginate(10);
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        //return $notices;
        return view('web.newsevents.news_events',compact('news_events','messages','all_facilities','academics'));
    }



    public  function member_info($name)
    {
        $all_members = Member::query()->select('*')->where('member_type','=',$name)->get();
        $messages = $this->get_header_messages_list();
        $all_facilities = $this->header_facilities();
        $academics = $this->header_academics();

        if ($name == "teacher")
        {
            $type = "TEACHER";
        }
        if ($name == "govt_body")
        {
            $type = "MANAGEMENT COMMITTEE";
        }
        if ($name == "member")
        {
            $type = "FACULTY MEMBER";
        }
        //return $all_members;
        return view('web.member.member',compact('all_members','messages','all_facilities','type','academics'));


    }
    /*Start Ajax Call function*/

    public function get_video_data()
    {
        $channelID  = 'UCGIyJdgP_AyqdgvdE9RjynA';
        $videoList = Youtube::listChannelVideos($channelID, 50);

        return json_encode($videoList);
    }

    public function header_facilities()
    {
        $all_facilities = Facility::query()->select('id','facility_name')->orderBy('id','DESC')->limit(10)->get();
        return $all_facilities;
    }

    public function header_academics()
    {
        $academics = Academic::query()->select('*')->orderBy('id','DESC')->limit(10)->get();
        return $academics;
    }
    public function get_footer_address()
    {
        $address = Address::first();
        return json_encode($address);
    }



    public function get_footer_contact()
    {
        $contact = Contact::first();
        return json_encode($contact);
    }
    public function get_footer_social_linker()
    {
        $social_linkers = SocialLinker::all();
        return json_encode($social_linkers);
    }

    public function get_header_messages_list()
    {
        $res = CornerMessage::query()->select('id','designation')->get();
        return $res;
//        return json_encode($res);
    }

    /*End of ajx call functions*/

    //    Common Footer

    public function address()
    {
        $addresses = Address::all();
        return $addresses;
    }
    public function social_linker()
    {
        $social_linkers = SocialLinker::all();
        return $social_linkers;
    }
    public function contact()
    {

        $contacts = Contact::all();
        return $contacts;
    }
//    Common Header
    public function facilities()
    {
        $facilities = Facility::all();

        return $facilities;
    }
}
