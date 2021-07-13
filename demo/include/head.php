<head>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" href="css/bootstrap-career.min.css">
      <title>Kent RO</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

      <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
      <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

      <meta name="theme-color" content="#FCDB5A" />
      <meta name="msapplication-navbutton-color" content="#FCDB5A" />
      <meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

      <!-- Favicons
      ================================================== -->
      <link rel="shortcut icon" href="img/favicon.ico">
      <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

      <!-- Critical styles
      ================================================== -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       <script type="text/javascript" src="js/sidebar.js"></script>
     <link rel="stylesheet" href="css/sidebar.css" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
      <link rel="stylesheet" href="css/style.min.css" type="text/css">
      <link rel="stylesheet" href="css/critical.min.css" type="text/css">
     
      <link rel="stylesheet" type="text/css" href="css/aj.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

      <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      
      <!-- Load google font
      ================================================== -->
      <script type="text/javascript">
         WebFontConfig = {
            google: { families: [ 'Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900'] }
         };
         (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
         })();
      </script>

      <!-- Load other scripts
      ================================================== -->
      <script type="text/javascript">
         var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

         _html.className = _html.className.replace("no-js","js");
         _html.classList.add( isTouch ? "touch" : "no-touch");
      </script>
      <script type="text/javascript" src="js/device.min.js"></script>
         <!-- Load lazyLoad scripts
            ================================================== -->
            <script>
               (function(w, d){
                  var m = d.getElementsByTagName('main')[0],
                     s = d.createElement("script"),
                     v = !("IntersectionObserver" in w) ? "8.17.0" : "10.19.0",
                     o = {
                        elements_selector: ".lazy",
                        data_src: 'src',
                        data_srcset: 'srcset',
                        threshold: 500,
                        callback_enter: function (element) {

                        },
                        callback_load: function (element) {
                           element.removeAttribute('data-src')

                           oTimeout = setTimeout(function ()
                           {
                              clearTimeout(oTimeout);

                              AOS.refresh();
                           }, 1000);
                        },
                        callback_set: function (element) {

                        },
                        callback_error: function(element) {
                           element.src = "https://placeholdit.imgix.net/~text?txtsize=21&txt=Image%20not%20load&w=200&h=200";
                        }
                     };
                  s.type = 'text/javascript';
                  s.async = true; // This includes the script as async. See the "recipes" section for more information about async loading of LazyLoad.
                  s.src = "https://cdn.jsdelivr.net/npm/vanilla-lazyload@" + v + "/dist/lazyload.min.js";
                  m.appendChild(s);
                  // m.insertBefore(s, m.firstChild);
                  w.lazyLoadOptions = o;
               }(window, document));
            </script>

   </head>


<!-- 	<div style="position: relative;top: -96px;">
	<div style="position: relative;left: 100px;bottom: -135px;">
	<h3 style="color: cornflowerblue">KENT Grand+</h3>
<p>Highest Selling RO water purifier<br> 
with UF + Double UV</p>
</div>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                
                     <div class="ts-form" id="ts-form">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                  
                     <form id='contact-form' class="contact-form" name="customerData" action="mail-pvt.php" method="post" onSubmit="javascript: return enquiryvalid(this);">
                        <div class="error-container"></div>
                        <div class="row">
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control" id="name" name="name" placeholder="Name" type="text" required="">
                              </div>
                           </div>
                          
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control" id="email-id" name="email-id" placeholder="Email ID" required="">
                              </div>
                           </div>
                           <div class="col-lg-12">
                              <div class="form-group">
                                 <input class="form-control" id="mobile-no" name="mobile-no" placeholder="Mobile No." required="">
                              </div>
                           </div>
                        
                        </div>
                      
                        <div>
                           <button class="btn btn-primary" type="submit" style="width: 148px;">Get Demo</button>
                           <button class="btn btn-primary" type="submit" style="position: absolute;
    right: 5px;width: 148px;">Buy on Jumia</button>
                        </div>
                     </form>
                   
                  </div>
                 
               </div>
            </div>
         </div>
              

               </div>
             
            </div>
           
         </div>
       
     </div>
   -->