<?php include("include/config-admin.php");
         if (empty($_SESSION['type'] == "0")) { 
            //  print_r($_SESSION['type']);exit();
             if (isset($_POST['add-career-details'])) {
              
               $add_blog = $db->prepare("INSERT INTO career SET name = ?, email = ?, phone_num = ?,
               job_preference = ?, position = ?, exp_year = ?, exp_month = ?, current_ctc = ?,message = ?, resume=?" );
                print_r($add_blog);exit();
   

              $add_blog->execute(array($_POST['name'],$_POST['email'],$_POST['phone_num'],$_POST['optradio'],$_POST['position'],$_POST['exp_year'],$_POST['exp_month'],$_POST['current_ctc'],$_POST['message'],$_POST['picture']));
              print_r($add_blog);exit();
                   if ($add_blog->rowCount()) {
                     
                       
                       // $control = $db->prepare("Select * from manage_commission where reseller_id = ?");
                       // $control->execute(array($manage_resellers['id']));
                       if($add_blog->rowCount()){
                        //   header("Location: career");
                       } else {
                               
                               if ($add_commission->rowCount()) {
                                   // header("Location: career");
                               } else {
                                   $errMSGs = "An error occurred!";
                               }
                               
                       }
   
                       
                   } else {
                       $errMSGs = "An error occurred!";
                   }
                   // alert($add_blog);
           } else {}  
   
         }
       
    //  }
    
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<?php include 'include/head.php' ?>
<?php include "include/header-all.php" ?>
<?php include "include/sidebar.php" ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php' ?>
 <div class="banner-area" id="banner-area" style="background-image:url(img/career.jpg);">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col">
                  <div class="banner-heading">
                     <!--<h1 class="banner-title">Career</h1>-->
                     
                  </div>
               </div>
               <!-- Col end-->
            </div>
            <!-- Row end-->
         </div>
         <!-- Container end-->
      </div>
      <!-- Banner area end-->
      
      <section class="main-container bg-pattern-1 career2" id="main-container">
         <div class="container ">
            <div class="row text-center">
               <div class="col-md-12">
                  <h2 class="section-title">Career</h2>
               </div>
            </div>
            <!-- Title row end-->
         </div>
         <!-- container end-->

<form method="post" action="mail/career.php" class="career_details_form" id="career_details_form">
<section class="sec-pd">
 <div class="container career-cont">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="contact-wrapper">
                        <div class="contact-box form-box">
                           <form class="contact-form" id="contact-form" action="#" method="POST">
                              <div class="error-container"></div>
                              <div class="row">
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input class="form-control form-name" id="name" name="name" placeholder="Full Name*" type="text" required="" >
                                    </div>
                                 </div>
                                 <!-- Col end-->
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input class="form-control form-email" id="email" name="email" placeholder="Email*" type="email" required="">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input class="form-control form-email" id="mobile" name="phone_num" pattern="^[0-9-+\s()]*$" minlength="10" maxlength="10" title="10 digit mobile number" value="" placeholder="Phone number*" type="tel" required="">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <label>Job preference*:</label>
                                       <label class="radio-inline">
                                          <input type="radio" name="optradio" value="part_time" checked> Part time
                                          </label>&nbsp;&nbsp;
                                          <label class="radio-inline">
                                          <input type="radio" name="optradio" value="full_time"> Full time
                                          </label>&nbsp;&nbsp;
                                          <label class="radio-inline">
                                          <input type="radio" name="optradio" value="intership"> Internship
                                       </label>
                                    </div>
                                 </div>
                                   <div class="col-lg-12">
                                    <div class="form-group">
                                       <input class="form-control form-name" id="name" name="position" placeholder="Position applying for*" type="text" required="">
                                    </div>
                                 </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                       <label>Total Work Experience*:</label>
                                       <label class="radio-inline">
                                         <select name="exp_year" id="total_work_exp_year" class="career-se p3px" value="<?php echo $row['exp_year']; ?>">
                                         <option value="">--Select Year--</option>
                                         <option value="fresher">Fresher</option>
                                         <option value="0">0 Years</option>
                                         <option value="1">1 Years</option>
                                         <option value="2">2 Years</option>
                                         <option value="3">3 Years</option>
                                         <option value="4">4 Years</option>
                                         <option value="5">5 Years</option>
                                         <option value="6">6 Years</option>
                                         <option value="7">7 Years</option>
                                         <option value="8">8 Years</option>
                                         <option value="9">9 Years</option>
                                         <option value="10">10 Years</option>
                                         <option value="11">11 Years</option>
                                         <option value="12">12 Years</option>
                                         <option value="13">13 Years</option>
                                         <option value="14">14 Years</option>
                                         <option value="15">15 Years</option>
                                         <option value="16">16 Years</option>
                                         <option value="17">17 Years</option>
                                         <option value="18">18 Years</option>
                                         <option value="19">19 Years</option>
                                         <option value="20">20 Years</option>
                                         <option value="21">21 Years</option>
                                         <option value="22">22 Years</option>
                                         <option value="23">23 Years</option>
                                         <option value="24">24 Years</option>
                                         <option value="25">25 Years</option>
                                         <option value="26">26 Years</option>
                                         <option value="27">27 Years</option>
                                         <option value="28">28 Years</option>
                                         <option value="29">29 Years</option>
                                         <option value="30">30 Years</option>
                                       </select>
                                       <select name="exp_month" id="total_work_exp_month" class="career-se p3px" value="<?php echo $row['exp_month']; ?>">
                                         <option value="">--Select Month--</option>
                                         <option value="1">1 Months</option>
                                         <option value="2">2 Months</option>
                                         <option value="3">3 Months</option>
                                         <option value="4">4 Months</option>
                                         <option value="5">5 Months</option>
                                         <option value="6">6 Months</option>
                                         <option value="7">7 Months</option>
                                         <option value="8">8 Months</option>
                                         <option value="9">9 Months</option>
                                         <option value="10">10 Months</option>
                                         <option value="11">11 Months</option>
                                         <option value="12">12 Months</option>
                                       </select>
                                       </label>
                                    </div>
                                 </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                       <input class="form-control form-name" id="name" name="current_ctc" placeholder="Current CTC" type="text" required="" >
                                    </div>
                                 </div>
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                       <textarea class="form-control form-message required-field" name="message" id="message" placeholder="Message" rows="8"></textarea>
                                    </div>
                                 </div> 
                                  <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Upload Resume*:</label>
                                      <input style="padding:0px;border: none; background: no-repeat;box-shadow: none;" type="file" class="form-control form-message required-field" id="input-file-now-custom-1" class="file-upload" data-default-file="https://mdbootstrap.com/img/Photos/Others/images/89.jpg" />
                                    </div>
                                 </div>
                                 <!-- Col 12 end-->
                              </div>
                              <!-- Form row end-->
                              <div class="text-left">
                                 <button class="btn btn-primary tw-mt-30" type="submit">Submit</button>
                              </div>
                              <br><br><br><br>
                           </form>
                           <!-- Form end-->
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
            </section>
            </form>

      <!-- <div class="map" id="map"></div> -->
 <?php include 'include/cont-footer.php' ?>
   </div>
   
   <!--Body Inner end-->
</body>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<!--<script>-->
<!--    function delete_row()-->
<!--    {-->
        
<!--        alert("Are you Sure You Want to delete data");-->
<!--    }-->
    
<!--</script>-->

	
</html>
<style>
.sec-pd{padding-top: 40px;}
.search-back {
    color: #fff;
    background-color: #ee1a97;
    border-color: #b70a70;
}
.banner-area {
    position: initial;
    min-height: 500px;
    /*color: #fff;*/
    background-position: 50% 50%;
    background-size: cover;
    background-size: cover;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
}
.banner-heading {
    padding: 200px 0 0 0;
    width: 100%;
    /*color: #fff;*/
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -moz-box-orient: vertical;
    -moz-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -moz-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -moz-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    min-height: 500px;
}
.banner-title {
    /*color: #fff;*/
    font-size: 50px;
    margin-bottom: 30px;
}
.topbar img{position: absolute;width: 10%;padding-top: 10px;}

@media only screen and (max-width: 768px) {
    
    .banner-heading {min-height: 163px;}
    .banner-area {min-height: 290px;}
    .topbar img { width: 20%;}

}
</style>

	