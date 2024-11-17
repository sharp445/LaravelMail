<?php
namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
// use App\Http\Controllers\MailController;
class SendMail extends Mailable
{
use Queueable, SerializesModels;
/**
* Create a new message instance.
*/
public  $fname,$lname,$date,$gender,$marital, $emailcontact,$phone,$nationality,$state,$distric,$address, $education,$institution,$gyear,$department,$company,$position,$year, $place,      $email, $sub, $mess;
public function __construct( $fname,$lname,$date,$gender,$marital, $emailcontact,$phone,$nationality,$state,$distric,$address, $education,$institution,$gyear,$department,$company,$position,$year, $place,     $email, $sub, $mess)
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




$this->email = $email;
$this->sub = $sub;
$this->mess = $mess;
}
/**
* Get the message envelope.
*/
public function envelope(): Envelope
{
return new Envelope(
// subject: 'Sandroft Website Mail',
subject: $this->sub,
);
}
/**
* Get the message content definition.
*/
public function content(): Content
{
return new Content(
// view: 'sand',
markdown: 'email_to_admin',
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