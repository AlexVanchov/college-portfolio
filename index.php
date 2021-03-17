<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    body,
    h1,
    h2 {
        font-family: "Raleway", sans-serif
    }

    body,
    html {
        height: 100%
    }

    p {
        line-height: 2
    }

    .bgimg,
    .bgimg2 {
        min-height: 100%;
        background-position: center;
        background-size: cover;
    }

    .bgimg {
        background-image: url("images/bg.jpeg")
    }

    .bgimg2 {
        background-image: url("/w3images/flowers.jpg")
    }
</style>

<body>

    <!-- Header / Home-->
    <header class="w3-display-container w3-wide bgimg w3-grayscale-min" id="home">
        <div class="w3-display-middle w3-text-white w3-center">
            <h1 class="w3-jumbo">Ryde College</h1>
            <h2>Co-Ed Senior school with a junior department or a prep school</h2>
            <h2><b>2020/2021</b></h2>
        </div>
    </header>

    <!-- Navbar (sticky bottom) -->
    <div class="w3-bottom w3-hide-small">
        <div class="w3-bar w3-white w3-center w3-padding w3-opacity-min w3-hover-opacity-off">
            <a href="#home" style="width:25%" class="w3-bar-item w3-button">Home</a>
            <a href="#welcome" style="width:25%" class="w3-bar-item w3-button">Welcome</a>
            <a href="#dream" style="width:25%" class="w3-bar-item w3-button">Our Dream</a>
            <a href="#apply" style="width:25%" class="w3-bar-item w3-button">Apply</a>
        </div>
    </div>

    <!-- About / Jane And John -->
    <div class="w3-container w3-padding-64 w3-grayscale-min" id="welcome" style="
    background-color: #ced7e0!important;">
        <div class="w3-content">
            <h1 class="w3-center w3-text-white"><b>Welcome</b></h1>
            <img class="w3-round" src="./images/welcome.jpg" style="width:100%;margin:32px 0">
            <p><i>Welcome to Ryde School. We are delighted to welcome you to a School that has been educating young people from the Isle of Wight and beyond for exactly one hundred years. We start our centenary year in strange times and having welcomed pupils back in September 2020, we were again running a fully online school during our Spring Term, we are now very much looking forward to welcoming back all our pupils physically to Ryde this week.
                </i>
            </p>
            <p><i>We were pleased to have managed last year to get the majority of our pupils back in school in the Summer Term, run a full online school (Virtually@RYDE), run our Summer School and keep our main boarding house open and I am confident that we have a full and meaningful year ahead of us in 2021. I also realise that there will be further challenges to test the resilience, flexibility and creativity of our staff and pupil body.

                </i>
            </p>
            <p><i>Our aim is to promote a healthy atmosphere of learning in which all pupils will seek to develop their full potential. In academic matters, we encourage an independent attitude, one where each pupil wants to learn and make full use of the resources available. We offer a range of activities at lunchtime and after school to develop other important skills and talents. We hope that all our pupils will want to be involved in school life and certainly we expect them to be committed to any activities which they choose or for which they are chosen. We also want to prepare our pupils socially and culturally for their adult lives which is why our School Mission and Purpose talk of the characteristics and skills we hope to foster in all those in the School.
                </i>
            </p>
            <br>
            <p class="w3-center"><a href="#apply" class="w3-button w3-black w3-round w3-padding-large w3-large">Apply</a></p>
        </div>
    </div>


    <div class="w3-container w3-padding-64 w3-grayscale-min" id="dream" style="
    background-color: #f8f8f8!important;">
        <div class="w3-content">
            <h1 class="w3-center w3-text-black"><b>Our Dream</b></h1>
            <img class="w3-round" src="./images/dream.jpg" style="width:100%;margin:32px 0">
            <h3>
                <i>What makes us different and distinct?
                </i>
            </h3>

            <p>
                <i>Stay closer to home and get a European degree in Bulgaria; We will provide you with conditions for studying and communication on an EU level; We will help you and the job that makes you happy; We will provide you with lecturers who work today and have a job that you will have tomorrow; We will put you in an atmosphere and will give you access to innovations which are unique and hard to and anywhere else.

                </i>
            <p>
            <h3>
                <i>We believe that..
                </i>
            </h3>

            <p>
                <i>What we do changes peoples' lives
                </i>
            </p>
            <p>
                <i>Problems do not exist, only challenges
                </i>
            </p>
            <p>
                <i>Each student deserves to get the best for his/her development
                </i>
            </p>
            <p>
                <i>Our students are the main reason for the development of VUZF
                </i>
            </p>
            <p>
                <i>Each student has their own potential and we are there to and develop it
                </i>
            </p>
            <br>
        </div>
    </div>


    <!-- Wedding information -->
    <div class="w3-container w3-padding-64 w3-grayscale-min w3-center" id="apply" style="
    background-color: #efefef!important;">
        <div class="w3-content">
            <h1 class="w3-text-grey"><b>Apply</b></h1>
            <img class="w3-round-large" src="./images/gsd-logo.png" style="width:20%;margin:64px 0">
            <div class="w3-row">
                <div class="secondLvlCss">
                    <p class="featuredParagraph">Parents seeking the admission of their sons or daughters are asked to complete and return a registration form, available below for download in&nbsp;PDF format, and arrange payment of the non-returnable registration fee.&nbsp; Admission and entry will be subject to the availability of a place and the pupil satisfying our admission requirements.</p>
                    <p>In due course applicants will be invited to sit the relevant entrance tests. Although we do not run competitive entrance exams, we do need to ensure that all pupils&nbsp;can access&nbsp;our academic curriculum.&nbsp; In the case of students entering the Sixth Form from other British curriculum schools, admission is based on interview and GCSE results. We&nbsp;expect students joining our Sixth Form on any of our three programmes (IB Diploma, A Level Plus or IB Career-related Programme) to have a minimum five GCSE passes at grade 5 or above with grades 6 in the subjects they wish to study at&nbsp;A Level or Higher Level IB (students for IBCP need at least 5 grade 5s to access the course.)</p>
                    
                    <p>&nbsp;</p>
                    <hr>
                    <h2>Important Documents:</h2>
                    <ul class="text-left">
                        <li class="odd"><a href="/userfiles/rsucmvc/admissions/Registration%20Form%202020.pdf" target="_blank">Registration Form 2020/2021 | PDF 181KB</a></li>
                        <li><a href="/userfiles/rsucmvc/admissions/Bank-Details-for-RYDE-SCHOOL%20July%20%202020.pdf" target="_blank">Ryde School Bank Details updated 2020 | PDF 8KB</a></li>
                        <li class="odd"><a href="/userfiles/rsucmvc/admissions/Parent-Contract-May-2018.pdf" target="_blank">Parent Contract Document | PDF 254KB</a></li>
                        <li><a href="/userfiles/rsucmvc/documents/001-About%20us/Policies%20PDF's/Other/2020%20Admissions%20Policy%20-%20Whole%20School.pdf" target="_blank">Admissions Policy | PDF 49KB</a></li>
                        <li class="odd"><a href="/userfiles/rsucmvc/documents/001-About%20us/Policies%20PDF's/Other/MAY%20Privacy%20Notice%202020-2021.pdf" target="_blank">Privacy Notice</a></li>
                    </ul>
                    <hr>
                    <h2>Further Information:</h2>
                    <ul class="text-left">
                        <li class="odd"><a href="/userfiles/rsucmvc/documents/002-Admissions/Admissions%20Process/Junior-School--Fiveways-2020%20final.pdf" target="_blank">Junior School with Fiveways Brochure 2020</a></li>
                        <li><a href="/userfiles/rsucmvc/documents/002-Admissions/Senior-School-2020-DIGITAL-SINGLES.pdf" target="_blank">Senior School Brochure 2020</a></li>
                        <li class="odd"><a href="/userfiles/rsucmvc/admissions/Boarding%202019-2020%20FINAL%20web.pdf" target="_blank">Boarding Brochure 2020</a></li>
                        <li><a href="/userfiles/rsucmvc/documents/002-Admissions/Admissions%20Process/INformation%20Booklet%202020-2021%20web(1).pdf" target="_blank">Information Booklet 2020/2021</a></li>
                        <li class="odd"><a href="/userfiles/rsucmvc/documents/002-Admissions/Admissions%20Process/2020-%202021%20forces%20boarding%20package.pdf" target="_blank">The Armed Forces Package at Ryde 2020/2021</a></li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>


    <!-- RSVP modal -->
    <div id="id01" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
            <div class="w3-container w3-white w3-center">
                <h1 class="w3-wide">CAN YOU COME?</h1>
                <p>We really hope you can make it.</p>
                <form>
                    <input class="w3-input w3-border" type="text" placeholder="Name(s)" name="name">
                </form>
                <p><i>Sincerely, John & Jane</i></p>
                <div class="w3-row">
                    <div class="w3-half">
                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-green">Going</button>
                    </div>
                    <div class="w3-half">
                        <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">Can't come</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-16 ">
        <p>Project: Alex Vanchov, Martin Andreev, Kostadin Radoslavov, Martin Delev</p>
        <p>Source Code <a href="https://github.com/AlexVanchov/college-portfolio" title="GitHub" target="_blank" class="w3-hover-text-green">GitHub</a></p>
    </footer>
    <div class="w3-hide-small" style="margin-bottom:82px"> </div>

</body>

</html>