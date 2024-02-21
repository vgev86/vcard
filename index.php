<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vCard Registration</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h2>Register for your vCard</h2>
        <form action="register.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name *</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname *</label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input type="text" id="company" name="company">
            </div>
            <div class="form-group">
                <label for="job_title">Job Title</label>
                <input type="text" id="job_title" name="job_title">
            </div>
            <div class="form-group">
                <label for="company_logo">Company Logo</label>
                <input type="file" id="company_logo" name="company_logo">
            </div>
            <div class="form-group">
                <label for="office_phone">Office Phone</label>
                <input type="text" id="office_phone" name="office_phone">
            </div>
            <div class="form-group">
                <label for="mobile_phone">Mobile Phone *</label>
                <input type="text" id="mobile_phone" name="mobile_phone" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address"></textarea>
            </div>
            <div class="form-group">
                <label for="mail_address">Mail Address</label>
                <input type="email" id="mail_address" name="mail_address">
            </div>
            <div class="form-group">
                <label for="web_address">Web Address</label>
                <input type="text" id="web_address" name="web_address">
            </div>
            <div class="form-group">
                <label for="facebook_link">Facebook Link</label>
                <input type="text" id="facebook_link" name="facebook_link">
            </div>
            <div class="form-group">
                <label for="linkedin_link">Linkedin Link</label>
                <input type="text" id="linkedin_link" name="linkedin_link">
            </div>
            <div class="form-group">
                <label for="x_link">X Link</label>
                <input type="text" id="x_link" name="x_link">
            </div>
            <div class="form-group">
                <label for="skype">Skype</label>
                <input type="text" id="skype" name="skype">
            </div>
            <div class="form-group">
                <label for="telegram">Telegram</label>
                <input type="text" id="telegram" name="telegram">
            </div>
            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="text" id="date_of_birth" name="date_of_birth">
            </div>
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" id="photo" name="photo">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
