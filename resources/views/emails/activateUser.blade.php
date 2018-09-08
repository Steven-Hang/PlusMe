<!DOCTYPE html>
<html>
<head>
    <title>Plus Me - Activation Link</title>
</head>
<body>
<h2>Thank You For Joining Plus ME {{$user['first_name']}}</h2>
<br/>
Your registered email is:{{$user['email']}}
<br/>
<p>
    In order for your registration to be processed, we need to verify your email address.
    Please use the verification URL below to confirm your email address, review terms and conditions,
    and complete the application process.
</p>
<!-- feel free to delete/modify everything else but the line below you-->
<br>
<a href="{{url('user/activate', $user->activateUser->token)}}">Activate Email</a>
</body>
</html>
