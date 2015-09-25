   $(function () {

       var $formLogin = $('#login-form');
       var $formLost = $('#lost-form');
       var $formRegister = $('#register-form');
       var $divForms = $('#div-forms');
       var $modalAnimateTime = 300;
       var $msgAnimateTime = 150;
       var $msgShowTime = 2000;
       // SWITCH OM TE BEPALEN WELK FORMULIER ER WORD VERSTUURD
       $("form").submit(function () {
           switch (this.id) {
           case "login-form":
               //TODO: AJAX VOOR VERIFICATIE GEBRUIKER
               var $lg_username = $('#login_username').val();
               var $lg_password = $('#login_password').val();
               if ($lg_username == "ERROR") {
                   msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
               } else {
                   msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
               }
               return false;
               break;
           case "lost-form":
               //TODO: AJAX VOOR HERSTEL WACHTWOORD
               var $ls_email = $('#lost_email').val();
               if ($ls_email == "ERROR") {
                   msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "error", "glyphicon-remove", "Send error");
               } else {
                   msgChange($('#div-lost-msg'), $('#icon-lost-msg'), $('#text-lost-msg'), "success", "glyphicon-ok", "Send OK");
               }
               return false;
               break;
               default:
               return false;
           }
           return false;
       });
       //ANIMATIES
       // SWITCHT TUSSEN FORMULIEREN
       $('#login_register_btn').click(function () {
           modalAnimate($formLogin, $formRegister)
       });
       $('#register_login_btn').click(function () {
           modalAnimate($formRegister, $formLogin);
       });
       $('#login_lost_btn').click(function () {
           modalAnimate($formLogin, $formLost);
       });
       $('#lost_login_btn').click(function () {
           modalAnimate($formLost, $formLogin);
       });


       function modalAnimate($oldForm, $newForm) {
           var $oldH = $oldForm.height();
           var $newH = $newForm.height();
           $divForms.css("height", $oldH);
           $oldForm.fadeToggle($modalAnimateTime, function () {
               $divForms.animate({
                   height: $newH
               }, $modalAnimateTime, function () {
                   $newForm.fadeToggle($modalAnimateTime);
               });
           });
       }

       function msgFade($msgId, $msgText) {
           $msgId.fadeOut($msgAnimateTime, function () {
               $(this).text($msgText).fadeIn($msgAnimateTime);
           });
       }

       function msgChange($divTag, $iconTag, $textTag, $divClass, $iconClass, $msgText) {
           var $msgOld = $divTag.text();
           msgFade($textTag, $msgText);
           $divTag.addClass($divClass);
           $iconTag.removeClass("glyphicon-chevron-right");
           $iconTag.addClass($iconClass + " " + $divClass);
           setTimeout(function () {
               msgFade($textTag, $msgOld);
               $divTag.removeClass($divClass);
               $iconTag.addClass("glyphicon-chevron-right");
               $iconTag.removeClass($iconClass + " " + $divClass);
           }, $msgShowTime);
       }

   });

