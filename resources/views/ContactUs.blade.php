@include('header')
<div class="ContactUs">

    <form style="max-width: 50%;" id="contactForm" >
        @csrf
        <div class="mb-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" style="color: white; margin: 0;">
        </div>
        <div class="mb-6">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" style="color: white; margin: 0;" rows="5"></textarea>
        </div>
        <div class="contactSubmit">
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">
                    Send
                </button>
            </div>
        </div>
    </form>

    <div class="mb-3">
        <div class="contactUsReachUs">Or Reach us in Our Social Media Platforms</div>
    </div>

    <div class="col-12 socialIcons" id="Social-Media-Container">
        <a href="https://facebook.com"><img class="ContactUsIcon" src="{{asset('public/storage/Images/fb.png') }}" alt="Facebook" /></a>
        <a href="https://www.instagram.com/"><img class="ContactUsIcon" src="{{asset('public/storage/Images/insta.png') }}" alt="Instagram" /></a>
        <a href="https://www.tiktok.com/en/"><img class="ContactUsIcon" src="{{ asset('public/storage/Images/tiktok.png') }}" alt="TikTok" /></a>
        <a href="https://www.linkedin.com/feed/"><img class="ContactUsIcon" src="{{ asset('public/storage/Images/Linkedin.png') }}" alt="LinkedIn" /></a>
    </div>

</div>

@include('footer')