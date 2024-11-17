<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
class SendMessageToEndUser extends Mailable
{
use Queueable, SerializesModels;
public $senderMessage = '';



public $fname = '';
public $lname = '';
public $date = '';
public $gender = '';
public $marital = '';
public $emailcontact = '';
public $phone = '';
public $nationality = '';
public $state = '';
public $distric = '';
public $address = '';
public $education = '';
public $institution = '';
public $gyear = '';
public $department = '';
public $company = '';
public $position = '';
public $year = '';
public $place = '';


public $mess = '';
public $url = '';
public $mailData;
/**
* Create a new message instance.
*/
public function __construct(  $fname,$lname,$date,$gender,$marital, $emailcontact,$phone,$nationality,$state,$distric,$address, $education,$institution,$gyear,$department,$company,$position,$year, $place,    $senderMessage, $mess,$mailData )
{

       
$this->fname = $fname;
$this->lname = $lname;
$this->date = $date;
$this->gender = $gender;
$this->marital = $marital;
$this->emailcontact = $emailcontact;
$this->phone = $phone;
$this->nationality = $nationality;
$this->state = $state;
$this->distric = $distric;
$this->address = $address;
$this->education = $education;
$this->institution = $institution;
$this->gyear = $gyear;
$this->department = $department;
$this->company = $company;
$this->position = $position;
$this->year = $year;
$this->place = $place;





$this->senderMessage = $senderMessage;
$this->mess = $mess;
$this->mailData = $mailData;
}
/**
* Get the message envelope.
*/
public function envelope(): Envelope
{
return new Envelope(
subject: 'Send Message To End User',
);
}
/**
* Get the message content definition.
*/
public function content(): Content
{
return new Content(
// view: 'enduser-mail',
markdown: 'reply_email',
);
}
/**
* Get the attachments for the message.
*
* @return array<int, \Illuminate\Mail\Mailables\Attachment>
*/
public function attachments(): array
{
return [];
}
}