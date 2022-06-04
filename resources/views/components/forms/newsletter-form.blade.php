<form class="input-group" method="post" action="{{route('newsletter-emails.store')}}">
    @csrf
    <input type="email" name="email" class="form-control border-0" style="padding: 25px;" placeholder="Your Email">
    <div class="input-group-append">
        <button class="btn btn-primary px-4">Sign Up</button>
    </div>
</form>
