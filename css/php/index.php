<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>

<body>
    <center>
        <form id="myform">
            <h2>Send an Email</h2>
            <label>Name</label>
            <input id="name" type="text" placeholder="Enter Name">
            <br><br>
            <label>Email</label>
            <input id="email" type="text" placeholder="Enter Email">
            <br><br>
            <label>Subject</label>
            <input id="subject" type="text" placeholder="Enter Subject">
            <br><br>
            <p>Message<p>
            <textarea id="body" rows="5" placeholder="Type Message"></textarea>
            <br><br>
            <button type="button" onclick="sendEmail()" value="Send an Email">Submit</button>
        </form>
    </center>
</body>
</html>