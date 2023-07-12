@extends('layouts.web')

@section('title', 'Privacy Policy')
@section('description', '')
@section('canonical', config('app.url') . Request::path())

@section('content')

    <main class="container my-6 mx-auto px-10">
        <section class="typo">
            <h1>
                Privacy Policy
            </h1>

            <p>Our privacy policy is especially for our trusted customers who has put on their trust in assignmentwritingireland.com.
                We highly recommend our customers to go through our privacy policy and if there is any bewilderment
                they can talk to one our agent. This privacy policy will make it clear the information require is for what
                purpose.</p>
            
            <h2>The Contact Details</h2>
            <p>As mentioned in our contact form we require very basic and useful contact details that are; Name, email
                address, contact number and paper information. This all information is secured in our system and the
                confidentiality is maintained totally. We ensure no one except the authorized person could access the data.
                Your information is used to contact with our clients regarding their orders.</p>
                
            <h2>Information And Detail Regarding Cookies</h2>
            <p>Cookies are some chunks of files that are automatically sent to your devices. Cookies are deleted or removed
                when browser is closed or some other time it is removed. Cookies sent to your computer or
                account are particularly for it and not used anywhere else. Cookies are also used for advertising and help
                us to increase our customer’s base. We can easily find with cookies that who is in need of our
                services so that we can help them. Cookies also enhance the user experience, cookies can be disabled from
                the browsers but this led to impact the user experience.</p>
                
        </section>
    </main>

@endsection
