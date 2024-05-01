@include('layout.app-layout')
@include('pages.applicant.layout.applicant-sidebarnav')
You made it dummy

<a href="{{ route ('applicant.logoutHandler') }}" 
onclick="event.preventDefault(); document.getElementById('adminLogoutForm').submit();" class="btn btn-default btn-flat float-right">Sign out</a>
<form action="{{ route('applicant.logoutHandler') }}" id="adminLogoutForm" method="POST">@csrf</form>