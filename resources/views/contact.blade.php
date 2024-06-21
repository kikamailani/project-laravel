<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style3.css"/>
</head>
<body>
      <!--header-->
      <header>
        <div class="main-container">
            <div class="nav">
                <div class="logo">
                    <a href="/">DA</a>
                </div>
                <nav>
                    <ul>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/portofolio">Portfolio</a></li>
                        <li><a href="/skills">Skills</a></li>
                        <li><a href="/contact">Contact</a></li>
                        <li>
                            <a href="resume.pdf" target="_blank">
                                <button class="btn">Resume</button>
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="burger">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>
            </div>
            <section id="hero">
                <div class="hero-left">
                    <h3 class="pre-title">My Name Is</h3>
                    <h1 class="hero-name">Kika<span> Mailani</span></h1>
                    <p>This is my portfolio</p>
                </div>
                <div class="hero-right">
                    <img src="assets/hero.svg" alt="Person standing">
                </div>
            </section>
        </div>
    </header>
    <!--End of header-->
 
    
    <!--contact-->
    <section id="contact">
        <div class="contact main-container">
            <div class="contact-left">
                <form class="contact-form"action="">
                    <div>
                        <input type="text" placeholder="Name" name="name">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email"> 
                    </div>
                    <div>
                        <textarea
                         name="message"
                          id="message" 
                          placeholder="Message"
                          cols="30"
                         rows="10"
                         ></textarea>
                    </div>
                    <div>
                        <button class="btm-submit">Send Message</button>
                    </div>
                </form>
            </div>
            <div class="contact-right"></div>
            <!--contact item 1-->
            <div class="contact-item">
                <div class="contact-item">
                    <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 3c2.131 0 4 1.73 4 3.702 0 2.05-1.714 4.941-4 8.561-2.286-3.62-4-6.511-4-8.561 0-1.972 1.869-3.702 4-3.702zm0-2c-3.148 0-6 2.553-6 5.702 0 3.148 2.602 6.907 6 12.298 3.398-5.391 6-9.15 6-12.298 0-3.149-2.851-5.702-6-5.702zm0 8c-1.105 0-2-.895-2-2s.895-2 2-2 2 .895 2 2-.895 2-2 2zm8 6h-3.135c-.385.641-.798 1.309-1.232 2h3.131l.5 1h-4.264l-.344.544-.289.456h.558l.858 2h-7.488l.858-2h.479l-.289-.456-.343-.544h-2.042l-1.011-1h2.42c-.435-.691-.848-1.359-1.232-2h-3.135l-4 8h24l-4-8zm-12.794 6h-3.97l1.764-3.528 1.516 1.528h1.549l-.859 2zm8.808-2h3.75l1 2h-3.892l-.858-2z"/></svg>
                    </div>
                    <div class="contact-item-detail">
                    <h4>Address</h4>
                    <p>16720, Kota Bogor</p>
                </div>
                </div>
               <!--contact item 2-->
                <div class="contact-item">
                    <div class="contact-item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3.59 1.322l2.844-1.322 4.041 7.89-2.725 1.341c-.538 1.259 2.159 6.289 3.297 6.372.09-.058 2.671-1.328 2.671-1.328l4.11 7.932s-2.764 1.354-2.854 1.396c-7.861 3.591-19.101-18.258-11.384-22.281zm1.93 1.274l-1.023.504c-5.294 2.762 4.177 21.185 9.648 18.686l.971-.474-2.271-4.383-1.026.5c-3.163 1.547-8.262-8.219-5.055-9.938l1.007-.497-2.251-4.398zm7.832 7.649l2.917.87c.223-.747.16-1.579-.24-2.317-.399-.739-1.062-1.247-1.808-1.469l-.869 2.916zm1.804-6.059c1.551.462 2.926 1.516 3.756 3.051.831 1.536.96 3.263.498 4.813l-1.795-.535c.325-1.091.233-2.306-.352-3.387-.583-1.081-1.551-1.822-2.643-2.146l.536-1.796zm.95-3.186c2.365.705 4.463 2.312 5.729 4.656 1.269 2.343 1.466 4.978.761 7.344l-1.84-.548c.564-1.895.406-4.006-.608-5.882-1.016-1.877-2.696-3.165-4.591-3.729l.549-1.841z"/></svg>
                    </div>
                    <div class="contact-item-detail">
                    <h4>Phone</h4>
                    <p>+62859334567</p>
                </div>
                </div>
                <!--contct item 3--> 
                  <div class="contact-item">
                    <div class="contact-item-icon">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M24 23h-24v-13.275l2-1.455v-7.27h20v7.272l2 1.453v13.275zm-20-10.472v-9.528h16v9.527l-8 5.473-8-5.472zm14-.528h-12v-1h12v1zm0-3v1h-12v-1h12zm-7-1h-5v-3h5v3zm7 0h-6v-1h6v1zm0-2h-6v-1h6v1z"/></svg>
                    </div>
                    <div class="contact-item-detail">
                    <h4>Email</h4>
                    <p>Email</p>
                </div>
                </div>
</section>
    
</body>
</html>