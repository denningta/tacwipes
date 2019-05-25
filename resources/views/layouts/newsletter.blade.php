<form method="POST" action="/newsletter" id="newsletter-form">
    {{ csrf_field() }}
    <div class="input-group mb-3">
      <input type="email" name="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control border-secondary border-right-0">
      <div class="input-group-append">
        <button type="submit" class="btn btn-secondary border-left-0">Get Updates</button>
      </div>
    </div>
</form>