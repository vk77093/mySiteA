
<h2>Hey !</h2> <br><br>

{{-- You received an email from : {{ $name }} <br><br>

User details: <br><br>

Name:  {{ $name }}<br>
Email:  {{ $email }}<br>
Phone:  {{ $phone }}<br>
Subject:  {{ $subject }}<br>
Message:  {!! $subject !!}<br><br>
'name', 'email', 'phone', 'subject', 'message'
Thanks --}}
 <h4>You received and email from {{$details['email']}}</h4>
 Name:  {{$details['name']}}<br>
Email:  {{$details['email']}}<br>
Phone:  {{$details['phone']}}<br>
Subject: {{$details['subject']}}<br>
Message:  {{$details['message']}}<br><br>
