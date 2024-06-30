jQuery(document).ready(function ($) {
  var $form_modal = $(".user-modal"),
    $form_login = $form_modal.find("#login"),
    $form_signup = $form_modal.find("#signup"),
    $form_forgot_password = $form_modal.find("#reset-password"),
    $form_modal_tab = $(".switcher"),
    $tab_login = $form_modal_tab.children("li").eq(0).children("a"),
    $tab_signup = $form_modal_tab.children("li").eq(1).children("a"),
    $forgot_password_link = $form_login.find(".form-bottom-message a"),
    $back_to_login_link = $form_forgot_password.find(".form-bottom-message a"),
    $main_nav = $(".main-nav");



  //close modal
  $(".user-modal").on("click", function (event) {
    if ($(event.target).is($form_modal) || $(event.target).is(".close-form")) {
      $form_modal.removeClass("is-visible");
    }
  });
  //close modal when clicking the esc keyboard button
  $(document).keyup(function (event) {
    if (event.which == "27") {
      $form_modal.removeClass("is-visible");
    }
  });

  //switch from a tab to another
  $form_modal_tab.on("click", function (event) {
    event.preventDefault();
    $(event.target).is($tab_login) ? login_selected() : signup_selected();
  });

  login_selected();



  
  

  //hide or show password
  $(".hide-password").on("click", function () {
    var $this = $(this),
      $password_field = $this.prev("input");

    "password" == $password_field.attr("type")
      ? $password_field.attr("type", "text")
      : $password_field.attr("type", "password");
    "Show" == $this.text() ? $this.text("Hide") : $this.text("Show");
    //focus and move cursor to the end of input field
    $password_field.putCursorAtEnd();
  });

  //show forgot-password form
  $forgot_password_link.on("click", function (event) {
    event.preventDefault();
    forgot_password_selected();
  });

  //back to login from the forgot-password form
  $back_to_login_link.on("click", function (event) {
    event.preventDefault();
    login_selected();
  });

  function login_selected() {
    $form_login.addClass("is-selected");
    $form_signup.removeClass("is-selected");
    $form_forgot_password.removeClass("is-selected");
    $tab_login.addClass("selected");
    $tab_signup.removeClass("selected");
  }

  function signup_selected() {
    $form_login.removeClass("is-selected");
    $form_signup.addClass("is-selected");
    $form_forgot_password.removeClass("is-selected");
    $tab_login.removeClass("selected");
    $tab_signup.addClass("selected");
  }

  function forgot_password_selected() {
    $form_login.removeClass("is-selected");
    $form_signup.removeClass("is-selected");
    $form_forgot_password.addClass("is-selected");
  }

  //REMOVE THIS - it's just to show error messages
  $form_login.find('input[type="submit"]').on("click", function (event) {
    event.preventDefault();
    $form_login
      .find('input[type="email"]')
      .toggleClass("has-error")
      .next("span")
      .toggleClass("is-visible");

      login();
  });
  $form_signup.find('input[type="submit"]').on("click", function (event) {
    event.preventDefault();
    $form_signup
      .find('input[type="email"]')
      .toggleClass("has-error")
      .next("span")
      .toggleClass("is-visible");


      
      signup();



  });


  function signup()
  {
      $.ajax({
        url: "signup_mw.php",
        type: "POST",
        data: {
          // data: $("#signup_form").serializeArray(),
          name: $("#signup_name").val(),
          phone: $("#signup_contact").val(),
          pass: $("#signup_password").val(),
          mtype: $("#memberType").val(),
          etype: $("#employementType").val(),
          state : $("#signup_state").val(),
          city : $("#signup_city").val(),
          pincode:$("#signup_pincode").val()
        },
        // dataType:"JSON",
        success: function (json) {
          console.log(json);
          if(json == 1)
          {
            alert('Registration successfull. please login');
          }
        },
      });
  }


  function login()
  {
    $.ajax({
      url: "signin_mw.php",
      type: "POST",
      data: {
        // data: $("#signup_form").serializeArray(),
        
        phone: $("#signin_contact").val(),
        pass: $("#signin_password").val(),
      },
      // dataType:"JSON",
      success: function (json) {
        if (json == 1) {
          alert("Login success");
          window.location.href="../index.php";
        }
      },
    });
  }

  

  //IE9 placeholder fallback
  //credits http://www.hagenburger.net/BLOG/HTML5-Input-Placeholder-Fix-With-jQuery.html



 


});

//credits https://css-tricks.com/snippets/jquery/move-cursor-to-end-of-textarea-or-input/
jQuery.fn.putCursorAtEnd = function () {
  return this.each(function () {
    // If this function exists...
    if (this.setSelectionRange) {
      // ... then use it (Doesn't work in IE)
      // Double the length because Opera is inconsistent about whether a carriage return is one character or two. Sigh.
      var len = $(this).val().length * 2;
      this.setSelectionRange(len, len);
    } else {
      // ... otherwise replace the contents with itself
      // (Doesn't work in Google Chrome)
      $(this).val($(this).val());
    }
  });
};
