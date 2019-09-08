<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="CV created by: Omotoso Yusuf">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/formStyles.css">
    <title>Omotoso Yusuf's CV</title>
</head>

<body>
    <!-- Creating a copy of my CV using HTML -->
    <!-- header section containing my name, image and address -->
    <header id="main-header">
        <div class="bio">
            <img src="https://res.cloudinary.com/omotosoyusuf/image/upload/v1566572749/yusufOmotoso_adafxo.jpg"
                alt="Omotoso Yusuf's Image" width="150px">
        </div>
        <div class="bio">
            <h1>OMOTOSO Yusuf</h1>
            <h4>
                No 3, Omotoso Ela Street,
                <br> Papa Adabi area Apete,
                <br> Ibadan, Oyo State, Nigeria.
                <br> (234) 8163904242
                <br> omotosoyuusuf@gmail.com
            </h4>
            <div id="contactForm" class="hidden">
                <form method="POST" action="result.php">
                    <label for="name">Name:
                        <input type="text" id="name" name="name" placeholder="Enter your name" min="4" required>
                    </label>
                    <label for="email">Email:
                        <input type="email" id="emial" name="email" placeholder="Enter your email" required>
                    </label>
                    <label for="title">Title/Subject of the Message:
                        <input type="text" id="title" name="title" required>
                    </label>
                    <textarea name="message" id="message" cols="37" rows="10" minlength="20"
                        placeholder="Your message here please!" required></textarea>
                    <input type="submit" name="submit" id="submit" onclick="closeForm()">
                    <input type="reset" name="reset" id="reset">
                </form>
            </div>
        </div>
    </header>

    <!-- section area containing other information -->
    <section class="main-section">
        <h3>EDUCATION</h3>
        <p>
            <strong>(BSc. Computer Science)</strong>
            <br> Fountain University, Osogbo, Osun State.
            <br> 2015 - 2018
        </p>
        <p>
            <strong>(National Diploma in Statistics)</strong>
            <br> Federal School of Statistics, Ajibode-Sasa Road, Ibadan.
            <br> 2010 - 2012
        </p>
        <h3>EXPERIENCE</h3>
        <p><strong>Grandnet Solutions Ijokodo,Ibadan. — Internship</strong>
            <br>(Assisted in the development of landing pages,
            <br> information websites, e-commerce websites,
            <br> pushing or uploading websites online and other web related activities).
            <br> March 2017 - August 2017
        </p>
        <p><strong>Next Level Telecommunication, New Bodija Ibadan.</strong>
            <br> (Junior WordPress Website Developer/SIWES)
            <br> November 2015 - January 2016
        </p>

        <h3>Software Application Proficiency</h3>
        <div class="underline">
            <strong>Front-end Web Development</strong>
            <p>HTML <span class="progress">.......................................<span class="circle">75%</span></p>
            <p>CSS <span class="progress">..........................................<span class="circle">70%</span></p>
        </div>
        <h3>VOLUNTEERING</h3>
        <p>Volunteer at TechQuest Oyo State Chapter(2018 - present).</p>

        <h3>LANGUAGES</h3>
        <p>English, Yoruba, Arabic</p>
        <button id="hire" onclick="openForm()">Hire Me</button>

    </section>

    <script src="form.js"></script>

</body>

</html>