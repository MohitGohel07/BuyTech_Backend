$( document ).ready(function() {   
    $( window ).on( "load", function() {
        var url = "{{URL::to('product_search')}}";
        $.ajax({
         type: "GET",
         url: base_url + "product_search",
         data: { data : $('.productSearch').val() },
         beforeSend: function () {},
         success: function (data) {
             $(".datas").html(data);
         },
         error: function (xhr) {},
         complete: function () {},
         dataType: "html",
     });
      } );


      $('.productSearch').keypress(function(event){
        var gender =  $('.sortgender').val();
        var type =  $('.sorttype').val();
         
        if(gender == '1'){
            gender = '';
        }
        if(type == '1'){
            type = '';
        }
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            var url = "{{URL::to('product_search')}}";
            $.ajax({
             type: "GET",
             data: { data : $('.productSearch').val(), gender:gender, type:type },
             data: { data : $('.productSearch').val() },
             beforeSend: function () {},
             success: function (data) {                
                    $(".datas").html(data);               
               },
             error: function (xhr) {},
             complete: function () {},
             dataType: "html",
         }); 
        }
      });
      $('.productSearch').bind("keyup","change",function(){
        var data = $(this).val();
        if(data === ""){
            var url = "{{URL::to('product_search')}}";
            $.ajax({
             type: "GET",
             url: base_url + "product_search",
             data: { data : $('.productSearch').val() },
             beforeSend: function () {},
             success: function (data) {
                 $(".datas").html(data);
             },
             error: function (xhr) {},
             complete: function () {},
             dataType: "html",
         }); 

        }
       
  });
     
     $('.productSearch-btn').on('click',function(){
        var gender =  $('.sortgender').val();
        var type =  $('.sorttype').val();
         
        if(gender == '1'){
            gender = '';
        }
        if(type == '1'){
            type = '';
        }
       var url = "{{URL::to('product_search')}}";
      $.ajax({
       type: "GET",
       url: base_url + "product_search",
       data: { data : $('.productSearch').val(), gender:gender, type:type },
       beforeSend: function () {},
       success: function (data) {
        if(data.length == 0){
            $(".datas").html('<h3 class="text-center my-5">Data Not Found</h3>');
        }else{
            $(".datas").html(data);
        }
       },
       error: function (xhr) {},
       complete: function () {},
       dataType: "html",
   });
     })


    $('.minusqty').on("click", function(){
         var qty = $(this).attr("data-qty");
         var id = $(this).attr("data-id");
         var price = $(this).attr("data-price");
         if(qty <=1){
           qty = 2
         }
        qty--;
         $.ajax({
           type:'get',
           url:"update/qty",
           data:{_token: '{{ csrf_token() }}',qty:qty, id:id, price:price},
           success:function(data){            
                if($.isEmptyObject(data.error)){
                    location.reload(); 
                }else{
                    printErrorMsg(data.error);
                }
           }
        });
    })
    $('.plusqty').on("click", function(){
         var qty = $(this).attr("data-qty");
         var id = $(this).attr("data-id");
         var price = $(this).attr("data-price");
        qty++;
         $.ajax({
           type:'get',
           url:"update/qty",
           data:{_token: '{{ csrf_token() }}',qty:qty, id:id, price:price},
           success:function(data){            
                if($.isEmptyObject(data.error)){
                    location.reload(); 
                }else{
                    printErrorMsg(data.error);
                }
           }
        });
    })
   
   
   
     $(".update-qty").change(function (e) {
         e.preventDefault();
         var qty = $(this).val();
         var id = $(this).attr("data-id");
         var price = $(this).attr("data-price");
         if(qty <=1){
           qty = 1
         }
        
         $.ajax({
            type:'get',
            url:"update/qty",
            data:{_token: '{{ csrf_token() }}',qty:qty, id:id, price:price},
            success:function(data){            
                 if($.isEmptyObject(data.error)){
                     location.reload(); 
                 }else{
                     printErrorMsg(data.error);
                 }
            }
         });
     
     });
   
   });






(function ($) {
    "use strict";
   
    // MENU
    $(".navbar-collapse a").on("click", function () {
        $(".navbar-collapse").collapse("hide");
    });

    // CUSTOM LINK
    $(".smoothscroll").click(function () {
        var el = $(this).attr("href");
        var elWrapped = $(el);
        var header_height = $(".navbar").height();

        scrollToDiv(elWrapped, header_height);
        return false;

        function scrollToDiv(element, navheight) {
            var offset = element.offset();
            var offsetTop = offset.top;
            var totalScroll = offsetTop - 0;

            $("body,html").animate(
                {
                    scrollTop: totalScroll,
                },
                300
            );
        }
    });

    $(".owl-carousel").owlCarousel({
        center: true,
        loop: true,
        margin: 30,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            767: {
                items: 3,
            },
            1200: {
                items: 4,
            },
        },
    });

   

})(window.jQuery);


