<?php
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $ata = htmlspecialchars($data);

        return $data;
    }

    $name  = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $sub = 'Website';

    $name2 = test_input($name);
    $email2 = test_input($email);
    $comment2 = test_input($comment);

    $destination_email = "lolsonform@gmail.com";

    $email_body = "$name2 -> $email2  -> $comment2";

    mail($destination_email, $sub2, $email_body);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A website to learn about Lindsey Olson, a current Web and Mobile
        Computing major at Rochester Institute of Technology. Get in touch to learn more, ask questions,
        or just talk.">
    <meta name="keywords" content="Lindsey Olson, HTML, CSS, Javascript, Rochester Institute of Technology,
        web developer, content creator, accessibility">
    <meta name="author" content="Lindsey Olson">
    <title>Lindsey Olson - Web Developer</title>
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
    <div class="bg" id="home">
        <div style="padding-top:1%" role="navigation">
            <div class="topnav" id="navbar">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#edu">Education</a>
                <a href="#projects">Projects</a>
                <a href="#experience">Experience</a>
                <a href="#activities">Activities</a>
                <a href="#contact">Contact</a>
                <a href="/assets/media/resume.pdf" download> Download Resume </a>
                <a href="javascript:void(0);" class="icon" onclick="hamburger()">
                    <div>
                        <div class="menu"></div>
                        <div class="menu"></div>
                        <div class="menu"></div>
                    </div>
                </a>
            </div>
        </div>

        <div class="centered">
            Hi, I'm <span style="color:#ff94f8;">Lindsey</span><br/>
            I'm a web developer<br/>

            <button class="view" id='seemore' onClick="seeButton()"> See More </button>
        </div>
    </div>

    <div class="about" id="about" role="main">
        <h1>Meet the Maker</h1> <br/>
        <hr class="hr1">

        <img src="assets/media/picture.jpg" alt="Photograph of me" class="photo">

        <div class="desc">
            If you told me I would be looking to code for a living
            when I was in tenth grade I probably would have laughed.
            Coding was big and scary and meant nothing to me, now, it's my life. <br/> <br/>

            I'm a Web and Mobile Computing major at Rochester Institute of
            Technology with a passion for developing software and a curiosity
            that fuels it. I love thinking about things in new, and often
            times, strange ways that lead to new discoveries or ideas. <br/> <br/>

            My overarching goal in life is to help people
            any way that I can, which I have done through my volunteering,
            my work, tutoring, supporting, donating, and what I hope to do
            in my career. My desire is to create responsive, user friendly,
            and accessible software for people of all walks of life and
            differing abilities. I truly want to make an impact, and
            I plan on doing nothing less. <br/> <br/>

            Join me on my weird, anything-but-linear journey as
            I strengthen current skills, while growing others such as React,
            Node, Angular, Bootstrap, and more in order to be a truly
            outstanding web or mobile developer, full stack engineer,
            or whatever else life throws at me.
        </div>
    </div>

    <div class="about" style="background-color: #e8e8e8;" id="skills">
        <h1> Skills </h1>
        <hr class="hr1" style="margin-bottom: 2%;">

        <div class="desc" style="text-align: left">
            <div style="width: 50%; margin-left: 25%">
                HTML <br/>
                <div class="meter"> <span style="width: 87%"></span> </div> <br/>
                CSS <br/>
                <div class="meter"> <span style="width: 82%"></span> </div> <br/>
                Javascript <br/>
                <div class="meter"> <span style="width: 72%"></span> </div> <br/>
                Responsive Design <br/>
                <div class="meter"> <span style="width: 72%"></span> </div> <br/>
                React.js <br/>
                <div class="meter"> <span style="width: 50%"></span> </div> <br/>
                Node.js <br/>
                <div class="meter"> <span style="width: 40%"></span> </div> <br/>

                Python <br/>
                <div class="meter"> <span style="width: 87%"></span> </div> <br/>
                Java <br/>
                <div class="meter"> <span style="width: 87%"></span> </div> <br/>
                PHP <br/>
                <div class="meter"> <span style="width: 65%"></span> </div> <br/>
                SQL/MySQL <br/>
                <div class="meter"> <span style="width: 72%"></span> </div> <br/>
            </div>
        </div>
    </div>

    <div class="about" id="edu">
        <h1> Education </h1>
        <hr class="hr1" style="margin-bottom: 2%;">

        <div class="desc" style="text-align:left;">
            Rochester Institute of Technology - August 2018 - May 2022 <br/> <br/>
            <span class="pink">Major:</span> Web and Mobile Computing <br/> <br/>
            <span class="pink">Immersion:</span> American Sign Language and Deaf Cultural Studies <br/> <br/>
            <span class="pink">GPA:</span> 3.63/4.0 <br> <br/>
            <span class="pink">Relevant Courses:</span> Computer Science I and II
            <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Computational Problem Solving in the Information Domain III <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Web and Mobile I and II <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Discrete Mathematics for Computing <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Introduction to Database and Data Modelling <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Designing the User Experience<span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Networking Essentials for Developers <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Calculus I and II<span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Software Engineering Seminar<span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Personal Software Engineering <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            New Media Design <br/> <br/>
            <span class="pink">Coming Fall 2020: </span> Database Connectivity and Access <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Client Programming <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Foundations of Mobile Design <span class="pink" style="font-weight: bolder; font-size: 1.25em">|</span>
            Software Design Principles
        </div>
    </div>

    <div class="about" id="projects" style="background-color: #e8e8e8;">
        <h1> Projects </h1>
        <hr class="hr1" style="margin-bottom: 2%;">

        <div class="desc" style="text-align:left">
            <span class="pink">Personal Website </span> <br/>
            October 2019 - Current <br/>
            Created and maintained a personal portfolio website in order
            to accurately represent where I am in my journey of
            coding. Presented information that would be found on a resume.
            Kept up to date on technologies and aesthetics. <br/>
            <a href="https://people.rit.edu/lo6169/olsonresume/" target="_blank"> Version 1.0 </a> <br/>
            <a href="https://people.rit.edu/lo6169/portfolioold" target="_blank"> Version 2.0 </a> <br/>
            <a href="https://people.rit.edu/lo6169/portfolio" target="_blank"> Version 3.0 </a> <br/>
            <a href="http://lolson.xyz" target="_blank"> Version 4.0 </a> <br/> <br/>

            <span class="pink">Client's Website </span><br/>
            April 2020 - May 2020 <br/>
            Created a website from scratch for a client using HTML, CSS, and Javascript.
            Kept communication with client throughout entire process to
            ensure happiness with design. Taught client how to publish and
            edit text within website. <br/>
            <a href="https://people.rit.edu/irp5775" target="_blank"> Client's Site </a> <br/> <br/>

            <span class="pink">Metalworks Website </span><br/>
            October 2019 - May 2020 <br/>
            Created and maintained a website for the on campus club, Metalworks.
            Include up to date information on eBoard, events, and projects.
            Currently on Version 2.0. <br/>
            <a href="https://people.rit.edu/lo6169/metalworks" target="_blank">Metalworks Site</a> <br/> <br/>

            <span class="pink"> Icon Project </span> <br/>
            April 2020 <br/>
            Created a set of matching icons using Adobe Illustrator. <br/>
            <a href="assets/media/icons.pdf" target="_blank"> See Icons</a> <br/> <br/>

            <span class="pink">Book Cover Project</span> <br/>
            2019 <br/>
            Created a series of book covers that carry a theme and are
            connected in some way using Adobe Illustrator and Photoshop. <br/>
            <a href="assets/media/bookcover.pdf" target="_blank">See Covers</a> <br/> <br/>

            <span class="pink">Poster Project</span> <br/>
            2019 <br/>
            Created a National Parks style poster of a place that was
            significant to me. I chose my hometown and utilized Adobe Photoshop
            and Illustrator in order to create it. <br/>
            <a href="assets/media/posterproject%20.jpg" target="_blank">See Poster</a>
        </div>
    </div>

    <div class="about" id="experience">
        <h1> Experience </h1>
        <hr class="hr1" style="margin-bottom: 2%;">

        <div class="desc" style="text-align: left;">
            June 2020 - August 2020 <br/>
            <span class="pink">MassMutual - Web Developer Intern </span><br/>
            Design, implement, and deploy new updates for the Accounts
            team that include more responsive design and adhere to the
            accessibility standards set forth by W3. Utilize HTML, CSS,
            React, and Docker in an agile environment in order to maintain,
            manage, update, and launch new features for the website.
            Work in a team in order to drive towards effective
            utilization of the latest technologies.
            <br/> <br/>

            January 2020 - Current <br/>
            <span class="pink">CADTECH - Information Technology Assistant </span><br/>
            Manage issues with hardware and software within
            the College of Art and Design. Find, troubleshoot,
            and solve technological difficulties. Assist any
            students, faculty, or staff with computers in the
            building. Maintain usability of printers,
            projectors, speakers, and computers. <br/> <br/>

            August 2019 - Current <br/>
            <span class="pink">Golisano Office of the Dean - Instructor / Student Employee </span><br/>
            Graded Javascript assignments for accurate syntax, commenting,
            and best programming practices. Provided feedback, and
            answered any questions students have about the coursework,
            programming, or computer science in general. <br/> <br/>

            July 2019 - August 2019 <br/>
            <span class="pink">Camp Tiger - Instructor / Crew Chief </span> <br/>
            Responsible for 12-24 students at a time,
            including safety and learning. Taught Python,
            specifically the Turtle library, and MIT App Inventor.
            Had students create works of art using Python,
            including functions, recursion, and more. Students
            also created applications and tested them,
            took feedback, and continued to improve them.
            Created curriculum for the students to learn from.
        </div>
    </div>

    <div class="about" style="background-color: #e8e8e8;" id="activities">
        <h1> Activities </h1>
        <hr class="hr1" style="margin-bottom: 2%;">

        <div class="desc" style="text-align: left;">
            May 2020 - Current <br/>
            <span class="pink"> Metalworks - President </span> <br/>
            Make executive decisions regarding the club and its activities.
            Handle communication with outside parties for events. Lead and
            host E-Board meetings. Schedule, plan, and host different activities
            such as Ring Buy, sales, and activities with outside parties.
            Create a new advertising technique in order to draw in more
            interest to the club. <br/> <Br/>
            May 2020 - Current <br/>
            <span class="pink"> iSchool - Student Ambassador</span> <br/>
            Utilize leadership and interpersonal skills in order to act
            as a knowledge database for life as an iSchool student.
            Establish relationships with alumni, current students,
            potential students, parents, and the greater RIT community.
            Assist in planning and hosting different activities
            such as open houses, participate in student panels,
            and give tours. Organize community strengthening
            events for the iSchool. <br/> <br/>

            May 2019 - May 2020 <br/>
            <span class="pink"> Metalworks - Secretary and Webmaster</span> <br/>
            Sent out weekly emails pertaining to the details of the upcoming meeting,
            as well as any extra information. Helped plan and host events,
            managed funds during sales and material ordering. Prepared students
            and other club members for any upcoming events. Created, managed,
            and hosted the Metalworks website, keeping it up to date both
            with information and technologically.
        </div>
    </div>

    <div class="bg" region="footer">
        <div class="about" id="contact">
            <h1 style="color: #FFD6FC;"> Contact Me </h1>
            <hr class="hr1" style="margin-bottom: 2%;">

            <div class="desc">
                Like what you see? <span class="lightpink">Contact me!</span> <br/> <br/>

                <form action = "secure_email_form.php" method="POST" onsubmit = "return validateForm();">
                    <label for="name">Name</label> <br/>
                    <input id = "name" name="name" placeholder="Name" type="text" value="">
                    <br/> <br/>

                    <label for="email">Email</label><br/>
                    <input id="email" name="email" placeholder="Email" type="text" value="">
                    <br/> <br/>

                    <label for="comment">Comment</label><br/>
                    <textarea id="comment" name="comment" placeholder="Comments" ></textarea>
                    <br/> <br/>

                    <input id="send" name="submit" type="submit" value="Send">
                </form>

                <br/> <br/>

                <a href="https://www.linkedin.com/in/l-olson/" style="color:white"> LinkedIn </a> <br/>
                <a href="https://github.com/lo6169" style="color:white"> GitHub </a> <br/> <br/> <br/>

                <span style="font-size: 2em; color:#FFD6FC;"> "If you think math is hard, try web design"</span> <br/>
                <span style="color:#FFD6FC;"> - Pixxelznet</span>
            </div>
        </div>
    </div>


    <script>
        function hamburger()
        {
            var x = document.getElementById("navbar");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

        function seeButton()
        {
            document.getElementById('about').scrollIntoView();
            document.getElementById('seemore').style.background = '#FF5AF5';
        }

        function validateForm()
        {
            isValid = true;

            if (document.getElementById("name").value == '')
            {
                document.getElementById("name").style.borderColor = "red";
                isValid = false;
            }
            else
            {
                document.getElementById("name").style = null;
            }

            if (document.getElementById("email").value == '')
            {
                document.getElementById("email").style.borderColor = "red";
                isValid = false;
            }
            else
            {
                document.getElementById("email").style = null;
            }

            if (document.getElementById("comment").value == '')
            {
                document.getElementById("comment").style.borderColor = "red";
                isValid = false;
            }
            else
            {
                document.getElementById("comment").style = null;
            }

            return isValid;
        }
    </script>

</body>
</html>