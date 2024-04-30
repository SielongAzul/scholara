You made it dummy

<a href="{{ route ('validator.logoutHandler') }}" 
onclick="event.preventDefault(); document.getElementById('adminLogoutForm').submit();" class="btn btn-default btn-flat float-right">Sign out</a>
<form action="{{ route('validator.logoutHandler') }}" id="adminLogoutForm" method="POST">@csrf</form>