const site_url = "http://127.0.0.1:8000/";

$('body').on('change', '#FreeStatus', function () {

var id = $(this).attr('data-id');
if (this.checked) {
  var status = '1';
} else {
  status = '0';
}
$('.loader__').show();
$.ajax({
  url: "fees/update-status/" + id + '/' + status,
  method: 'get',
  success: function (result) {
    alertify.set('notifier', 'position', 'top-right');
    alertify.success('Status Update Successfully ');
    $('.loader__').hide();
  }
});

});


$('body').on('change', '#payStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "pay/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });
//category status
  $('body').on('change', '#categoryStatus', function () {

    var id = $(this).attr('data-id');
    if (this.checked) {
      var status = '1';
    } else {
      status = '0';
    }
    $('.loader__').show();
    $.ajax({
      url: "category/update-status/" + id + '/' + status,
      method: 'get',
      success: function (result) {
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('Status Update Successfully ');
        $('.loader__').hide();
      }
    });
    
    });


//subcategory status


$('body').on('change', '#subcategoryStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "subcategory/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });


  //city status


$('body').on('change', '#cityStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "city/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });


  //suburbs status


$('body').on('change', '#suburbsStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "suburbs/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

    //Email Tamplete status


$('body').on('change', '#emailTampleteStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  $('.loader__').show();
  $.ajax({
    url: "emailTamplete/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });


//edit fees

$('body').on('change', '.fees_price', function () {

  var price = $(this).val();
  var id = $(this).attr('data-id');
  
  $('.loader__').show();
  $.ajax({
    url: "pay/update-fees/" + id + '/' + price,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Price Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

  //edit fees Listing

$('body').on('change', '.listing_fees_price', function () {

  var price = $(this).val();
  var id = $(this).attr('data-id');
  
  $('.loader__').show();
  $.ajax({
    url: "listing/update-fees/" + id + '/' + price,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Price Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });


   //User Active Status

$('body').on('change', '#activeStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var status = '1';
  } else {
    status = '0';
  }
  
  
  $('.loader__').show();
  $.ajax({
    url: "user/update-status/" + id + '/' + status,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('status Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

  //user Banned

  
$('body').on('change', '#blockStatus', function () {

  var id = $(this).attr('data-id');
  if (this.checked) {
    var block = '1';
  } else {
    block = '0';
  }
  
  $('.loader__').show();
  $.ajax({
    url: site_url + "admin/user/update-block/" + id + '/' + block,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('banned Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

  //edit above

$('body').on('change', '.price_above', function () {

  var priceabove = $(this).val();
  var id = $(this).attr('data-id');
  
  $('.loader__').show();
  $.ajax({
    url:site_url +"admin/auction/update-above/" + id + '/' + priceabove,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Price Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });

  //edit Increment

$('body').on('change', '.price_increment', function () {

  var priceincrement = $(this).val();
  var id = $(this).attr('data-id');
  
  $('.loader__').show();
  $.ajax({
    url: site_url +"admin/auction/update-increment/" + id + '/' + priceincrement,
    method: 'get',
    success: function (result) {
      alertify.set('notifier', 'position', 'top-right');
      alertify.success('Price Update Successfully ');
      $('.loader__').hide();
    }
  });
  
  });
  //deletefile

 
  //COnfirm Delete with Sweet Alert




  $(document).on("click", ".confirmDelete", function () {
    var record = $(this).attr("record");
    var recordid = $(this).attr("recordid");
    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
        window.location.href = site_url + "admin/delete-" + record + "/" + recordid;

      }
    });

  });

  //check Password
$(document).ready(function () {
  $("#current_pwd").click(function () {
    var current_pwd = $("#current_pwd").val();
    $.ajax({
      type: 'get',
      url: site_url + 'admin/check-pwd',
      data: { current_pwd: current_pwd },
      success: function (resp) {
        if (resp == 'false') {
          $("#chkPwd").html("<font color='red'>Current password is incorrect</font>");
        } else if (resp == "true") {
          $("#chkPwd").html("<font color='green'>Current password is correct</font>");
        }
      }

    });
  });
});


$(document).ready(function(){
  $("#email").change(function(){
          var id = $(this).val();
      //  alert(12);
    
      
      $.ajax({
          type: 'get',
          dataType: 'html',//this line is not important for us at the moment
          url:site_url + 'admin/user/getuser',
          data: {id:id},
          success: function(data){
              // alert(data);
              $('#user_detail').html(data);
          }
      });
  });
});