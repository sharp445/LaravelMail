<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Mail\SendMessageToEndUser;
use Mail;
use App\Models\Product;
class MailController extends Controller
{
public function mailform()
{
return view('multi');
}

public function maildata(Request $request)
{
    
    

$fname = $request->fname;
$lname = $request->lname;
$date = $request->date;
$gender = $request->gender;
$marital = $request->marital;
$emailcontact = $request->emailcontact;
$phone = $request->phone;
$nationality = $request->nationality;
$state = $request->state;
$distric = $request->distric;
$address = $request->address;
$education = $request->education;
$institution = $request->institution;
$gyear = $request->gyear;
$department = $request->department;
$company = $request->company;
$position = $request->position;
$year = $request->year;
$place = $request->place;


$email = $request->email;
$sub = $request->sub;
$mess = $request->mess;
$mailData = [
'url' => 'https://sandroft.com/',
];
$send_mail = "sahincseiu@gmail.com";
Mail::to($send_mail)->send(new SendMail( $fname,$lname,$date,$gender,$marital, $emailcontact,$phone,$nationality,$state,$distric,$address, $education,$institution,$gyear,$department,$company,$position,$year, $place,       $email, $sub, $mess));
$senderMessage = "thanks for your message , we will reply you in later";
Mail::to( $email)->send(new
SendMessageToEndUser($fname,$lname,$date,$gender,$marital, $emailcontact,$phone,$nationality,$state,$distric,$address, $education,$institution,$gyear,$department,$company,$position,$year, $place,       $senderMessage, $mess,$mailData));
return redirect()->route('mailform')->withMessage('Mail Send Successfully');
}





}