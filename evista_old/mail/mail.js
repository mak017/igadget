$(function(){$("#contactForm input").jqBootstrapValidation({preventSubmit:!0,submitError:function(a,b,c){},submitSuccess:function(a,b){b.preventDefault();var c=$("input#name").val(),d=$("input#phone").val(),e=c;e.indexOf(" ")>=0&&(e=c.split(" ").slice(0,-1).join(" ")),$.ajax({url:"./mail.php",type:"POST",data:{name:c,phone:d},cache:!1,success:function(){$("#success-contactForm").html("<div class='alert alert-success'>"),$("#success-contactForm > .alert-success").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),$("#success-contactForm > .alert-success").append("<strong>Ваш запрос отправлен </strong>"),$("#success-contactForm > .alert-success").append("</div>"),$("#contactForm").trigger("reset"),$(".modal, .modal-backdrop").hide(),setTimeout(function(){window.location.assign("http://igadget.me/thankyou/index.html")},2e3)},error:function(){$("#success-contactForm").html("<div class='alert alert-danger'>"),$("#success-contactForm > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),$("#success-contactForm > .alert-danger").append("<strong>Извините "+e+", Похоже, что почтовый сервер не отвечает. Перезвоните нам сами или попробуйте позже!"),$("#success-contactForm > .alert-danger").append("</div>"),$("#contactForm").trigger("reset")}})},filter:function(){return $(this).is(":visible")}}),$("#contact input").jqBootstrapValidation({preventSubmit:!0,submitError:function(a,b,c){},submitSuccess:function(a,b){b.preventDefault();var c=$("input#name-contact").val(),d=$("input#phone-contact").val(),e=c;e.indexOf(" ")>=0&&(e=c.split(" ").slice(0,-1).join(" ")),$.ajax({url:"./mail.php",type:"POST",data:{name:c,phone:d},cache:!1,
success:function(){
window.location.replace("http://igadget.me/thankyou/index.html")
//$("#success-contact").html("<div class='alert alert-success'>"),
//$("#success-contact > .alert-success").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),
//$("#success-contact > .alert-success").append("<strong>Ваш запрос отправлен </strong>"),
//$("#success-contact > .alert-success").append("</div>"),$("#contact").trigger("reset")
},error:function(){$("#success-contact").html("<div class='alert alert-danger'>"),$("#success-contact > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),$("#success-contact > .alert-danger").append("<strong>Извините "+e+", Похоже, что почтовый сервер не отвечает. Перезвоните нам сами или попробуйте позже!"),$("#success-contact > .alert-danger").append("</div>"),$("#contact").trigger("reset")}})},filter:function(){return $(this).is(":visible")}}),$("#contact-form input").jqBootstrapValidation({preventSubmit:!0,submitError:function(a,b,c){},submitSuccess:function(a,b){b.preventDefault();var c=$("input#name-contact-form").val(),d=$("input#phone-contact-form").val(),e=c;e.indexOf(" ")>=0&&(e=c.split(" ").slice(0,-1).join(" ")),$.ajax({url:"./mail.php",type:"POST",data:{name:c,phone:d},cache:!1,
success:function(){
window.location.replace("http://igadget.me/thankyou/index.html")
//$("#success-contact-form ").html("<div class='alert alert-success'>"),
//$("#success-contact-form  > .alert-success").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),$("#success-contact-form  > .alert-success").append("<strong>Ваш запрос отправлен </strong>"),
//$("#success-contact-form  > .alert-success").append("</div>"),$("#contact-contact-form ").trigger("reset")
},
error:function(){$("#success-contact-form ").html("<div class='alert alert-danger'>"),$("#success-contact-form  > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),$("#success-contact-form  > .alert-danger").append("<strong>Извините "+e+", Похоже, что почтовый сервер не отвечает. Перезвоните нам сами или попробуйте позже!"),$("#success-contact-form  > .alert-danger").append("</div>"),$("#contact-contact-form").trigger("reset")}})},filter:function(){return $(this).is(":visible")}}),$("#contact-form-input input").jqBootstrapValidation({preventSubmit:!0,submitError:function(a,b,c){},submitSuccess:function(a,b){b.preventDefault();var c=$("input#name-form-input").val();console.log(c);var d=$("input#phone-form-input").val(),e=c;e.indexOf(" ")>=0&&(e=c.split(" ").slice(0,-1).join(" ")),$.ajax({url:"./mail.php",type:"POST",data:{name:c,phone:d},cache:!1,
success:function(){
window.location.replace("http://igadget.me/thankyou/index.html")
//$("#success-form-input").html("<div class='alert alert-success'>"),
//$("#success-form-input > .alert-success").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),
//$("#success-form-input > .alert-success").append("<strong>Ваш запрос отправлен </strong>"),
//$("#success-form-input > .alert-success").append("</div>"),$("#contact-form-input").trigger("reset")
},error:function(){$("#success-form-input").html("<div class='alert alert-danger'>"),$("#success-form-input > .alert-danger").html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;").append("</button>"),$("#success-form-input > .alert-danger").append("<strong>Извините "+e+", Похоже, что почтовый сервер не отвечает. Перезвоните нам сами или попробуйте позже!"),$("#success-form-input > .alert-danger").append("</div>"),$("#contact-form-input").trigger("reset")}})},filter:function(){return $(this).is(":visible")}}),$('a[data-toggle="tab"]').click(function(a){a.preventDefault(),$(this).tab("show")})}),$("#name").focus(function(){$("#success-contactForm").html(""),$("#success-contact").html(""),$("#success-contact-form").html(""),$("#success-form-input").html("")});