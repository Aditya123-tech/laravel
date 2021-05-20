<h1> User signup</h1>
<form action="signup" method="POST">
@csrf
<input type="text" name="id" placeholder="enter  id"/>
<br>
<br>

<input type="text" name="name" placeholder="enter  name"/>
<br>
<span style="color:red;">@error('name'){{ $message}}@enderror</span><br>
<input type="email" name="email" placeholder="enter email"/>
<br><span style="color:red;">@error('email'){{ $message}}@enderror</span><br>
<input type="password" name="password" placeholder="enter password"/>
<br><span style="color:red;">@error('password'){{ $message}}@enderror</span><br>


<button type="submit">sign up</button>
</form>