<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PagesController extends Controller
{
    public function contact() {
        $cities = Project::select('city')->distinct()->get();
        return view('contact', compact("cities"));
    }

    public function flutter_data(Request $request) {
        return ["success" => false];
    }

    public function projects() {
        $cities = Project::select('city')->distinct()->get();
        return view('projects', compact("cities"));
    }

    public function project_info_detached() {
        $cities = Project::select('city')->distinct()->get();
        return view('project-info-detached', compact("cities"));
    }

    public function project_info_duplex() {
        $cities = Project::select('city')->distinct()->get();
        return view('project-info-duplex', compact("cities"));
    }

    public function project_info_attached() {
        $cities = Project::select('city')->distinct()->get();
        return view('project-info-attached', compact("cities"));
    }

    public function project_search() {
        
        $projects = Project::where("published", "=", true)->orderBy('name')->get();
        $cities = Project::select('city')->distinct()->get();
        
        return view("project-search", compact("projects", "cities"));
    }

    public function search_project(Request $request) {
        
        // return $request->all();
        // ATTACHED
        $projects = null;
        
        if($request->property == 0 && $request->sortType == 'all') {
            $projects = Project::where("published", "=", true)->limit(10)->get();
        }
        
        if($request->property == 0 && $request->sortType != 'all') {
            $projects = Project::where("city", "=", $request->sortType)->where("published", "=", true)->get();
        }
     
        
        if($request->sortType != 'all' && $request->property != 0) {
            $projects = Project::where("type_id", "=", $request->property)->where("city", "=", $request->sortType)->where("published", "=", true)->get();
        }
        
        if($request->property != 0 && $request->sortType == 'all') {
            $projects = Project::where("type_id", "=", $request->property)->where("published", "=", true)->get();
        }
            
        $cities = Project::select('city')->distinct()->get();
        
        
        return view("project-search", compact("projects", "cities"));
    }

    public function project_info($type_id, $id) {
        
        $project = Project::where("id", "=", $id)->first();
        $cities = Project::select('city')->distinct()->get();
        
        // return $project;
        
        if($project === null) {
            return view('404', compact('cities'));
        }
        if($type_id == 1) {
            
            return view('project-info-attached', compact('project', 'cities'));
        }

        elseif($type_id == 2) {
            return view('project-info-detached', compact('project', 'cities'));
        }

        else {
            return view('project-info-duplex', compact('project', 'cities'));
        }
    }

    public function se() {
          return redirect('/');
    }
    
    public function send_message(Request $request) {
        
        
        $to = 'info@skyriseprojects.com';
        $subject = $request->subject;
        $from = $request->email;
         
        // To send HTML mail, the Content-type header must be set
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
         
        // Create email headers
        $headers .= 'From: '.$from."\r\n".
            'Reply-To: '.$from."\r\n" .
            'X-Mailer: PHP/' . phpversion();
         
        // Compose a simple HTML email message
        // $message = '<html><body>';
        // $message .= '<h1 style="color:#f40;">Hi Jane!</h1>';
        // $message .= '<p style="color:#080;font-size:18px;">Will you marry me?</p>';
        // $message .= '</body></html>';
        
        $message = $request->message;
        // Sending email
        if(mail($to, $subject, $message, $headers)){
            return 'Your mail has been sent successfully.';
        } else{
            return 'Unable to send email. Please try again.';
        }
    }
}
