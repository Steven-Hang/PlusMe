<!DOCTYPE html>
<html>
<head>
    <title>Plus Me - Activation Link</title>
</head>
<body>
<h2>Thank You For Joining Plus ME {{$user['first_name']}}</h2>
<br/>
Your registered email is:{{$user['email']}} , Please click below to link your plus me account to your email address
<br/>
<!-- feel free to delete/modify everything else but the line below you-->
<a href="{{url('user/activate', $user->activateUser->token)}}">Activate Email</a>
</body>
</html>