<div class="section landing-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="text-center">Keep in touch?</h2>
                <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input class="form-control" name="name" placeholder="Name">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="4"
                        placeholder="Tell us your thoughts and feelings..."></textarea>
                    <div class="row">
                        <div class="col-md-4 offset-md-4">
                            <button class="btn btn-danger btn-lg btn-fill">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>