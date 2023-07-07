<?php

namespace App\Http\Controllers\Admin;




use App\Mail\TahoMail;
use Illuminate\Http\Request;
use Webklex\IMAP\Facades\Client;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Console\Input\Input;



class MailController extends Controller
{
   
    
    public function index()
    {

        $oClient = Client::account('default');
        $oClient->connect();
        $oFolder = $oClient->getFolder('INBOX');  // get the read inbox
        //Get all Messages of the current Mailbox $oFolder

        $aMessage = $oFolder->messages()->all()->get();
        return view('admin.email.index',compact('aMessage'));
    }


    public function create()
    {
        return view('admin.email.compose.add');
    }
    public function send(Request $request)
    {
    // $email=explode(',', $request->email);

    // dd($email);

     
    
       $subject = $request->subject;
       $body = $request->body;
       $attachement=$request->attach;
      // echo mail($to, $subject, $body);
       foreach (explode(',', $request->email) as $recipient) {
            $mail= Mail::to($recipient)->send(new TahoMail($subject, $body, $attachement));
        }

        return redirect('admin/email');
    }
    public function sent()
    {
        

      $oClient = Client::account('default');
        $oClient->connect();
        $oFolder = $oClient->getFolderByName('Sent');  // get the read inbox
        //Get all Messages of the current Mailbox $oFolder
         $aMessage = $oFolder->messages()->all()->get();
       // $result = $oFolder->appendMessage($mail->getSymfonySentMessage()->toString(), ['\Seen'], now()->format("d-M-Y h:i:s O"));

        return view('admin.email.sent.index',compact('aMessage'));
    }
    public function details($Uid)
    {
        $oClient = Client::account('default');
        $oClient->connect();
        $oFolder = $oClient->getFolder('INBOX');  // get the read inbox
        //Get all Messages of the current Mailbox $oFolder

        $aMessage = $oFolder->messages()->getMessageByUid($Uid);
        return view('admin.email.details.details', compact('aMessage'));
    }

    public function del($Uid){
        $oClient = Client::account('default');
        $oClient->connect();
        $oFolder = $oClient->getFolder('INBOX');  // get the read inbox
        //Get all Messages of the current Mailbox $oFolder

        $aMessage = $oFolder->messages()->getMessageByUid($Uid);
        $result=$aMessage->delete();
        
       
        return redirect('admin/email',compact('result'));
    }
}
