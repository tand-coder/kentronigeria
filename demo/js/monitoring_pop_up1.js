function auto_ifsc(){
$('.ifsc').autocomplete({
                 source: "api/mon_ifsc_fetch.php",
                 minLength: 1,
                 maxLength: 10,

                 select: function( event, ui ) 
                   {
                             $('#ifsc').val(ui.item.ifsc);
                             $('#bankname').val(ui.item.bankname);
                             $('#branch').val(ui.item.branch);
                             $('#address').val(ui.item.address);
                             $('#micr').val(ui.item.micr)
                   }
               });
}


function edit(id)
{ 
  $(".id").val(id);
  var con_id = $('.con_id').val();
  $.ajax({
              url: "api/monitoring_pop_up1.php?step=3&id="+id+"&con_id="+con_id, 
              success: function(data){

              $("#id").val(data.id);
              $("#ifsc").val(data.ifsc);
              $("#bankname").val(data.bankname);
              $("#branch").val(data.branch);
              $("#address").val(data.address);
              $("#micr").val(data.micr);
              $("#accountnumber").val(data.accountnumber);
              $("#confirmaccountnumber").val(data.confirmaccountnumber);
              $("#accounttype").val(data.accounttype);

                }

              }); 
                 

}

function delete1(id)
{ 
 // $(".id").val(id);
  $.ajax({
              url: "api/monitoring_pop_up1.php?step=4&id="+id, 
              success: function(data){
            // $("#id").val('0');
              if(data.stat == true){
                 $('#monitoring_pop_up1').DataTable().ajax.reload();
              }
               else{

               }

                }
              }); 
}




function save_bank_acc_detail()
{
 var flag = 0;
  if($(".ifsc").val()=='')
  {
    $(".ifsc").addClass("error");
    flag = 1;
  }
  if($(".bankname").val()=='')
  {
    $(".bankname").addClass("error");
    flag = 1;
  }
   if($(".branch").val()=='')
  {
    $(".branch").addClass("error");
    flag = 1;
  }
  if($(".address").val()=='')
  {
    $(".address").addClass("error");
    flag = 1;
  }
   if($(".micr").val()=='')
  {
    $(".micr").addClass("error");
    flag = 1;
  }
  if($(".accountnumber").val()=='')
  {
    $(".accountnumber").addClass("error");
    flag = 1;
  }
  if($(".confirmaccountnumber").val()=='')
  {
    $(".confirmaccountnumber").addClass("error");
    flag = 1;
  }
  if($(".accountnumber").val() != $(".confirmaccountnumber").val())
  {
    $(".confirmaccountnumber").addClass("error");
    flag = 1;
  }
   if($(".accounttype").val()=='')
  {
    $(".accounttype").addClass("error");
    flag = 1;
  }
  // if($(".accountnumber").val() != $(".confirmaccountnumber").val())
  // {
  //   $(".confirmaccountnumber").addClass("error");
  //   flag = 1;
  // }
  // if($(".accountnumber").val() && $(".confirmaccountnumber").val() < 9)
  // {
  //  $(".accountnumber").addClass("error");
  //   $(".confirmaccountnumber").addClass("error");
  //   flag = 1;
  // }

  // if($(".accountnumber").val() < 9){
  //  $(".accountnumber").addClass("error");
  //  //$(".confirmaccountnumber").addClass("error");   
  //  flag = 1;
  // }

  //  if(flag == 0)
  // {
  //   $("#monitoringpage_pop_up1").show();
  // }
 
  if(flag==0){
    $(".ifsc").removeClass("error");
    $(".bankname").removeClass("error");
    $(".branch").removeClass("error");
    $(".address").removeClass("error");
    $(".micr").removeClass("error");
    $(".accountnumber").removeClass("error");
    $(".confirmaccountnumber").removeClass("error");
    $(".accounttype").removeClass("error");
     var  comp_id = $('.btn_save').data('val');
          $.ajax({
          url: "api/monitoring_pop_up1.php?step=1"
          data: $('.pop_up1').serialize(),
          dataType: 'json',
    success: function(data) 
      {
      if(data.stat==true){
        $(".dt_principle").show();
         $("#ifsc").val('');
            $("#bankname").val('');
            $("#branch").val('');
            $("#address").val('');
            $("#micr").val('');
            $("#accountnumber").val('');
            $("#confirmaccountnumber").val('');
            $("#accounttype").val('');
            $("#id").val('0');
            $(".dt_principle").show();
            // load_1();
            $('#monitoring_pop_up1').DataTable().ajax.reload();
      
      }
      else{

      }
      }
  });
}
}

   //     if(ifsc == '') {
  //  //alert('please enter ifsc');
  //  $('#ifsc').addClass('errorClass');
  //  $('#ifsc').focus();
  // }

  //  else if(bankname == '') {
  //  //alert('please enter bankname');
  //  $('#bankname').addClass('errorClass');
  //  $('#bankname').focus();
  // }

 //     else if(branch == '') {
  //  //alert('please enter branch');
  //  $('#branch').addClass('errorClass');
  //  $('#branch').focus();
  // }

  //  else if(address == '') {
  //  //alert('please enter address');
  //  $('#address').addClass('errorClass');
  //  $('#address').focus();
  // }

  //  else if(micr == '') {
  //  //alert('please enter micr');
  //  $('#micr').addClass('errorClass');
  //  $('#micr').focus();
  // }

 //     if(accountnumber == '') {
  //  //alert('Please enter Account Number');
  //  $("#accountnumber").addClass('error');
  //  $('#accountnumber').focus();
 //           }

  // else if(confirmaccountnumber == ''){
  //  //alert('Please enter Confirm Account Number');
  //  $("#confirmaccountnumber").addClass('error');
  //  $('#confirmaccountnumber').focus();
  // }

  //  else if(accounttype == '') {
  //  //alert('please enter accounttype');
  //  $('#accounttype').addClass('errorClass');
  //  $('#accounttype').focus();
  // }

  // else if(accountnumber != confirmaccountnumber)
 //    {
  //   //alert('Account Number and Confirm Account Number do not match')
  //   $('#confirmaccountnumber').addClass('error');
  //   $('#confirmaccountnumber').focus();
 //    }
    

// $(document).ready(function () {

//     $('#pop_up1').validate({ 
//         onkeyup: function (element, event) {
//             if (event.which === 9 && this.elementValue(element) === "") {
//                 return;
//             } else if (element.name in this.submitted || element === this.lastElement) {
//                 this.element(element);
//             }
//         },
//         rules:{
//                 minlength: 6
//             }
//         },
//         submitHandler: function (form) { 
//             alert('valid form submitted'); 
//             return false; 
//         }
//     });

// });




