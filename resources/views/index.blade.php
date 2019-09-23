<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="js/app.js" defer></script>
        <script src="js/matrix.js" defer></script>
        <head>
            <title>Joe Dineen</title>
            <link rel="stylesheet" href="css/app.css" type="text/css" />
            <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
            <link rel="shortcut icon" href="css/images/Flash.ico" />
        </head>
    </head>
    <body>
        <section id="matrix_section">
            <div class="container">
                <div class="canvas_wrapper">
                    <canvas id="matrix_canvas">
                </div>
                <div class="welcome">
                    <div class="text">
                        Hello, I'm <span class="highlight">Joe Dineen</span>.<br>
                        I'm a full-stack web developer.
                    </div>
                </div>
            </div>
        </section>
        <div id="navbar_container"></div>
        <section id="about_section">
            <div class="container">
                <h1 class="section_header">About</h1>
                <div class="section_header_underline"></div>
                <ul class="keystone_container">
                    <li class="keystone">
                        <div class="keystone_content">
                            <!-- <img src="" alt="" class="keystone_img"> -->
                            <h3 class="keystone_header">Fast</h3>
                            <p class="keystone_description">Rapid page load times and responsive interaction.</p>
                        </div>
                    </li>
                    <li class="keystone">
                        <div class="keystone_content">
                            <!-- <img src="" alt="" class="keystone_img"> -->
                            <h3 class="keystone_header">Responsive</h3>
                            <p class="keystone_description">Pages are designed to work on a full range of devices.</p>
                        </div>
                    </li>
                    <li class="keystone">
                        <div class="keystone_content">
                            <!-- <img src="" alt="" class="keystone_img"> -->
                            <h3 class="keystone_header">Intuitive</h3>
                            <p class="keystone_description">An emphasis on easy to use pages, intuitive UX/UI design.</p>
                        </div>
                    </li>
                    <li class="keystone">
                        <div class="keystone_content">
                            <!-- <img src="" alt="" class="keystone_img"> -->
                            <h3 class="keystone_header">Smart</h3>
                            <p class="keystone_description">Expertise in database design and implemetation for smarter websites.</p>
                        </div>
                    </li>
                </ul>
                <div class="summary_container">
                    <h3 class="summary_header">What I'm about</h3>
                    <p class="summary_description">
                        I'm a Full-Stack Developer based in Sheffield, UK.
                        I have serious passion making a difference through Web Development creating intuitive, dynamic user experiences.
                        Let's make something great.
                    </p>
                </div>
                <div class="tool_progress_container">
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 90%;">
                            <div class="tag">HTML</div>
                        </div>
                        <span>90%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 80%;">
                            <div class="tag">CSS</div>
                        </div>
                        <span>80%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 90%;">
                            <div class="tag">PHP</div>
                        </div>
                        <span>90%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 80%;">
                            <div class="tag">Laravel</div>
                        </div>
                        <span>80%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 70%;">
                            <div class="tag">Javascript</div>
                        </div>
                        <span>70%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 80%;">
                            <div class="tag">React</div>
                        </div>
                        <span>80%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 60%;">
                            <div class="tag">Node.js</div>
                        </div>
                        <span>60%</span>
                    </div>
                    <div class="tool_progress_bar">
                        <div class="bar_fill" style="width: 70%;">
                            <div class="tag">UI Design</div>
                        </div>
                        <span>70%</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="portfolio_section">
            <div class="container">
                <h1 class="section_header">Projects</h1>
                <div class="section_header_underline"></div>
                <div class="portfolio_container">
                    <div class="project"></div>
                    <div class="project"></div>
                    <div class="project"></div>
                    <div class="project"></div>
                    <div class="project"></div>
                    <div class="project"></div>
                </div>
            </div>
        </section>
        <section id="contact_section">
            <div class="container">
                <h1 class="contact_header">Contact</h1>
                <div class="contact_header_underline"></div>
                <p class="contact_prompt">Have a question?</p>
                <form class="contact_form" action="" method="post">
                    <input class="contact_input" placeholder="Name" type="text" name="name" id="" required>
                    <input class="contact_input" placeholder="Enter email" type="email" name="email" id="" required>
                    <textarea placeholder="Your Message" name="message" id="" cols="30" rows="10"></textarea>
                    <input class="contact_submit" type="submit" value="SUBMIT">
                </form>
            </div>
        </section>
        <footer id="footer">
            <p class="owner">Joe Dineen ©2019</p>
        </footer>
    </body>
</html>