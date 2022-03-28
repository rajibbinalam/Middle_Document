//Bootsshop-----------------------//
$(document).ready(function(){
	/* carousel of home page animation */
	$('#myCarousel').carousel({
	  interval: 4000
	})
	 $('#featured').carousel({
	  interval: 4000
	})
	$(function() {
		$('#gallery a').lightBox();
	});
	
	$('.subMenu > a').click(function(e)
	{
		e.preventDefault();
		var subMenu = $(this).siblings('ul');
		var li = $(this).parents('li');
		var subMenus = $('#sidebar li.subMenu ul');
		var subMenus_parents = $('#sidebar li.subMenu');
		if(li.hasClass('open'))
		{
			if(($(window).width() > 768) || ($(window).width() < 479)) {
				subMenu.slideUp();
			} else {
				subMenu.fadeOut(250);
			}
			li.removeClass('open');
		} else 
		{
			if(($(window).width() > 768) || ($(window).width() < 479)) {
				subMenus.slideUp();			
				subMenu.slideDown();
			} else {
				subMenus.fadeOut(250);			
				subMenu.fadeIn(250);
			}
			subMenus_parents.removeClass('open');		
			li.addClass('open');	
		}
	});
	var ul = $('#sidebar > ul');
	$('#sidebar > a').click(function(e)
	{
		e.preventDefault();
		var sidebar = $('#sidebar');
		if(sidebar.hasClass('open'))
		{
			sidebar.removeClass('open');
			ul.slideUp(250);
		} else 
		{
			sidebar.addClass('open');
			ul.slideDown(250);
		}
	});

});



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
        window.location.href = site_url + "user/delete-" + record + "/" + recordid;

      }
    });

  });


$(document).ready(function(){
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  $("#getPrice").change(function(){

    var size = $(this).val();

    var product_id = $(this).attr("product-id");
      // alert(product_id);
    $.ajax({
      url:site_url +'get-product-price',
      data:{size:size,product_id:product_id},
      type:'post',
      success:function(resp){
        $(".getAttriPrice").html("৳" +resp);
      },error:function(){
        alert("error");
      }
    });

  });


  $("#current_pwd").click(function(){
  var current_pwd = $(this).val();
  $.ajax({
    type:'get',
    url: 'check-user-pwd',
    data:{current_pwd:current_pwd},
    success:function(resp){
      if (resp=="false") {
        $("#chkPwd").html("<font color='red'>Current Password is incorrect</font>")
      }else if(resp=="true"){
          $("#chkPwd").html("<font color='green'>Current Password is correct</font>")
      }
    },error:function(){
      alert("faild");
    }
  });
});




//Product Filtering



//shorting Product
 $("#sort").on('change',function(){
//  alert('sort')
  this.form.submit();
 });


});



function selectPaymentMethod(){
if ($('#Paypal').is(':checked') || $('#Payoneer').is(':checked')|| $('#Debit-credit').is(':checked') || $('#Bitcoin').is(':checked') || $('#Square').is(':checked') || $('#Transwise').is(':checked') || $('#COD').is(':checked') ) {
  // alert("checked");
}else {
  alert("Please Select Payment Method");
  return false;
}

}




$(document).ready(function(){
  
//   $("#sort").on('change',function(){

//   this.form.submit();
//  });
 $("#sort").on('change',function(){
  //  alert("test");
  var sort = $(this).val();
  // alert(sort);
  var url = $("#url").val();
  //  alert(url);
  $.ajax({
    url:url,
    method:"post",
    data:{sort:sort,url:url},
    success:function(data){
      $('.filter_products').html(data);
    }
  })
 });
 $(".sell").on('click',function(){
   var sell = get_filter(this);
  var sort = $("$sort option:selected").text();
  // alert(sort);
  var url = $("#url").val();
  $.ajax({
    url:url,
    method:"post",
    data:{sell:sell,sort:sort,url:url},
    success:function(data){
      $('.filter_products').html(data);
    }
  })
 });

 function get_filter(class_name){
  var filter =[];
  $('.'+class_name+':checked').each(function(){
    filter.push($(this).val());
  });
  return filter;

}

});

