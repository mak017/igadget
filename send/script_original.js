$(document).ready(function() {
	
$('#send8').click(function(){
				// собираем данные с формы
				var form_username1 	 = $('#form-username8').val();
				var form_phone1 	 = $('#form-tel8').val();
				var form_email8 	 = $('#form-email8').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
    
				$.ajax({
					url: "/send/send.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username1": 	form_username1,
						"form_phone1": 	form_phone1,
						"form_email8": 	form_email8,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages8').html(data.result);
						}
					}
				});
			});		
	
	
	

$('#send1').click(function(){
				// собираем данные с формы
				var form_username1 	 = $('#form-username1').val();
				var form_phone1 	 = $('#form-phone1').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные

   
				$.ajax({
					url: "/send/send1.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username1": 	form_username1,
						"form_phone1": 	form_phone1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages1').html(data.result);
						}
					}
				});
			});	
			
$('#send2').click(function(){
				// собираем данные с формы
				var form_username2 	 = $('#form-username2').val();
				var form_phone2 	 = $('#form-tel2').val();
				var form_email2 	 = $('#form-email2').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone2,
                    first_name: form_username2,
                    email: form_email2
                });
    
				$.ajax({
					url: "/send/send2.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username2": 	form_username2,
						"form_phone2": 	form_phone2,
						"form_email2": 	form_email2,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages2').html(data.result);
						}
					}
				});
			});	

			$('#send3').click(function(){
				// собираем данные с формы
				var form_username3 	 = $('#form-username3').val();
				var form_phone3 	 = $('#form-phone3').val();
				var form_email3 	 = $('#form-email3').val();
				var form_product1 	 = $('#form-product1').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone3,
                    first_name: form_username3,
                    email: form_email3,
                    comment: form_product1
                });
				$.ajax({
					url: "/send/send3.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username3": 	form_username3,
						"form_phone3": 	form_phone3,
						"form_email3": 	form_email3,
						"form_product1": 	form_product1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages3').html(data.result);
						}
					}
				});
			});	
			
			$('#send4').click(function(){
				// собираем данные с формы
				var form_username3 	 = $('#form-username4').val();
				var form_phone3 	 = $('#form-phone4').val();
				var form_email3 	 = $('#form-email4').val();
				var form_product1 	 = $('#form-product2').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone3,
                    first_name: form_username3,
                    email: form_email3,
                    comment: form_product1
                });
				$.ajax({
					url: "/send/send3.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username3": 	form_username3,
						"form_phone3": 	form_phone3,
						"form_email3": 	form_email3,
						"form_product1": 	form_product1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages4').html(data.result);
						}
					}
				});
			});	
			
			$('#send10').click(function(){
				// собираем данные с формы
				var form_username3 	 = $('#form-username10').val();
				var form_phone3 	 = $('#form-phone10').val();
				var form_email3 	 = $('#form-email10').val();
				var form_product1 	 = $('#form-product3').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone3,
                    first_name: form_username3,
                    email: form_email3,
                    comment: form_product1
                });
				$.ajax({
					url: "/send/send3.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username3": 	form_username3,
						"form_phone3": 	form_phone3,
						"form_email3": 	form_email3,
						"form_product1": 	form_product1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages10').html(data.result);
						}
					}
				});
			});	
			
			$('#send12').click(function(){
				// собираем данные с формы
				var form_username3 	 = $('#form-username12').val();
				var form_phone3 	 = $('#form-phone12').val();
				var form_email3 	 = $('#form-email12').val();
				var form_product1 	 = $('#form-product4').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone3,
                    first_name: form_username3,
                    email: form_email3,
                    comment: form_product1
                });
				$.ajax({
					url: "/send/send3.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username3": 	form_username3,
						"form_phone3": 	form_phone3,
						"form_email3": 	form_email3,
						"form_product1": 	form_product1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages12').html(data.result);
						}
					}
				});
			});	
			
			$('#send13').click(function(){
				// собираем данные с формы
				var form_username3 	 = $('#form-username13').val();
				var form_phone3 	 = $('#form-phone13').val();
				var form_email3 	 = $('#form-email13').val();
				var form_product1 	 = $('#form-product5').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone3,
                    first_name: form_username3,
                    email: form_email3,
                    comment: form_product1
                });
				$.ajax({
					url: "/send/send3.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username3": 	form_username3,
						"form_phone3": 	form_phone3,
						"form_email3": 	form_email3,
						"form_product1": 	form_product1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages13').html(data.result);
						}
					}
				});
			});	
			
			$('#send14').click(function(){
				// собираем данные с формы
				var form_username3 	 = $('#form-username14').val();
				var form_phone3 	 = $('#form-phone14').val();
				var form_email3 	 = $('#form-email14').val();
				var form_product1 	 = $('#form-product6').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
                var request = robo('lead', '1-8ce094e37af887b1e5bf', {
                    phone: form_phone3,
                    first_name: form_username3,
                    email: form_email3,
                    comment: form_product1
                });
				$.ajax({
					url: "/send/send3.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username3": 	form_username3,
						"form_phone3": 	form_phone3,
						"form_email3": 	form_email3,
						"form_product1": 	form_product1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages14').html(data.result);
						}
					}
				});
			});	
	

$('#send5').click(function(){
				// собираем данные с формы
				var form_username2 	 = $('#name2').val();
				var form_phone2 	 = $('#phone2').val();
				var form_email2 	 = $('#email2').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные

				$.ajax({
					url: "/send/send5.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username2": 	form_username2,
						"form_phone2": 	form_phone2,
						"form_email2": 	form_email2,
						"opt_zak": 	opt_zak,
						
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages5').html(data.result);
						}
					}
				});
			});



	
$('#send6').click(function(){
				// собираем данные с формы
				var form_username2 	 = $('#form-username6').val();
				var form_phone2 	 = $('#form-tel6').val();
				var form_email2 	 = $('#form-email6').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные
				$.ajax({
					url: "/send/send2.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"form_username2": 	form_username2,
						"form_phone2": 	form_phone2,
						"form_email2": 	form_email2,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages6').html(data.result);
						}
					}
				});
			});				
			
			
			
			
$('#send_comment').click(function(){
				// собираем данные с формы
				var usr1 	 = $('#usr1').val();
				var phone1 	 = $('#phone1').val();
				var comment1 	 = $('#comment1').val();
				var opt_zak 	 = $('#opt_zak').val();
				// отправляем данные

				$.ajax({
					url: "/send/send4.php", // куда отправляем
					type: "post", // метод передачи
					dataType: "json", // тип передачи данных
					data: { // что отправляем
						"usr1": 	usr1,
						"phone1": 	phone1,
						"comment1": 	comment1,
						"opt_zak": 	opt_zak,
					},
					// после получения ответа сервера
					success: function(data){
						if(data.result=='ok'){
						window.location.replace("/thankyou/index.html");	
						} else {
						$('.messages5').html(data.result);
						}
					}
				});
			});				
			

	
});