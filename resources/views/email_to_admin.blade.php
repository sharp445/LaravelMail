@component('mail::message')

<h1>Personal-Details </h1>

Name: {{ $fname }} .{{ $lname }} <br>
Date Of Birth: {{ $date }} <br>
Gender {{ $gender }} <br>
Maritalstatus: {{ $marital }} <br>
Phone: {{ $phone }} <br>
Nationality: {{ $nationality }} <br>
State: {{ $state }} <br>
Distric: {{ $distric }} <br>
Address: {{ $address }} <br>
<h1>Educational-Qualification</h1>
Education: {{ $education }} <br>
Lnstitution: {{ $institution }} <br>
Year Of Pass: {{ $gyear }} <br>
Department: {{ $department }} <br>
<h1>Company and Experience</h1>
Company: {{ $company }} <br>
Position: {{ $position }} <br>
Experience: {{ $year }} <br>
Place: {{ $place }} <br>




 Email: {{ $email }}<br>
Subject: {{ $sub }} <br><br>
Message:<br> {{ $mess }}

Thanks,
{{ config('app.name') }}
@endcomponent