<html>

<head>
    <link rel="stylesheet" href="css/form.css">
</head>

<body>
    
    <form action="{{url('contactus')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="elem-group">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern="[A-Z\sa-z]{3,20}" required />
        </div>
        <div class="elem-group">
            <label for="email">Your E-mail</label>
            <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required />
        </div>
        <div class="elem-group">
            <label for="title">Subject</label>
            <input type="text" id="title" name="visitor_subject" required placeholder="Unable to Reset my Password"
                pattern="[A-Za-z0-9\s]{8,60}" />
        </div>
        <div class="elem-group">
            <label for="message">Write your message</label>
            <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
        </div>
        <button type="submit">Send Message</button>
    </form>
</body>

</html>