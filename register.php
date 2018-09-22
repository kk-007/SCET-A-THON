
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="shortcut icon" href="/favicon.ico">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PUBG Mobile Registration</title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Playfair+Display+SC|Roboto" rel="stylesheet">

  <style>
  input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;
    }
  .form-group.required .control-label:after {
    content:"*";
    color: red;
  }
  .mdl-layout__header-row {
    background-color: white;
    color: #e62e00;
  }
  .demo-card-wide.mdl-card {
    width: 50%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    padding-top: 12px;
    padding-bottom: 24px;
  }
  .demo-card-wide > .mdl-card__title {
    color: #fff;
    height: 176px;
  }
  .demo-card-wide > .mdl-card__menu {
    color: #fff;
  }
  .btn-my-css {
    width: auto;
    margin-left: auto;
    margin-right: auto;
  }
  a {
    text-decoration: none;
  }
  a:link {
    text-decoration: none;
  }
  a:visited {
    text-decoration: none;
  }
  a:hover {
    color: #e62e00;
    text-decoration: none;
  }
  a:active {
    text-decoration: none;
  }
  body {
    font-family: 'Open Sans', sans-serif;
    font-weight: bolder;
  }
  .submit-detail {
    font-weight: bold;
  }
  .mdl-layout__tab {
    font-weight: 500;
  }
  @media (max-width: 479px) {
    .demo-card-wide.mdl-card{
      width: auto;
      height: auto;
      margin-left: auto;
      margin-right: auto;
    }
  }
  .button-backward {
    display: inline; margin-top: 48px; margin-left: auto; margin-right: 10%; margin-bottom: 24px; bottom:16px;
  }
  .button-forward {
    display: inline; margin-top: 48px; margin-left: 10%; margin-right: auto; margin-bottom: 24px; bottom:16px;
  }

  </style>

</head>
<body>

  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row" style="padding-left: 2%;">
        <a href="/"><img style="max-width: 72px; height:auto; margin-right: 8px;" src="/images/updates_logo_mod.png" alt="Updates2k18 Logo" /></a>
        <a href="./../">
          <span class="mdl-layout-title" style="font-family: 'Playfair Display SC', serif; font-size: 200%; font-weight:700">PUBG Mobile</span>
        </a>
      </div>
      <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="font-family: 'Roboto', sans-serif, font-weight: bold;">
        <a href="#scroll-tab-1" class="mdl-layout__tab is-active"><div class="student1">Student 1</div></a>
        <a href="#scroll-tab-2" class="mdl-layout__tab"><div class="student2">Student 2</div></a>
        <a href="#scroll-tab-3" class="mdl-layout__tab"><div class="student3">Student 3</div></a>
        <a href="#scroll-tab-4" class="mdl-layout__tab"><div class="student4">Student 4</div></a>
      </div>
    </header>
    <main class="mdl-layout__content">
      <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
        <div class="page-content">
          <div class="student1-data" style="position: relative;">
            <div class="container demo-card-wide mdl-card mdl-shadow--8dp" style="position: relative;">
              <div class="form-group required">
                <label class="control-label" for="input2">Name: </label>
                <input type="text" class="form-control name1 not-null" id="input2" placeholder="Enter name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input3">Email: </label>
                <input type="email" class="form-control email1 not-null email-validation" id="input3" placeholder="Enter email" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input4">Phone No: </label>
                <input type="number" class="phone-number form-control phone1 not-null" id="input4" placeholder="Enter phone number" required>
              </div>

              <div class="form-group">
                <label for="input5">Enrollment No: </label>
                <input type="number" class="form-control enroll1" id="input5" placeholder="Enter enrollment number">
              </div>

              <div class="form-group required">
                <label class="control-label" for="input6">College: </label>
                <input type="text" class="form-control college1 not-null" id="input6"  placeholder="Enter college name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input7">Branch: </label>
                <input type="text" class="form-control branch1 not-null" id="input7" placeholder="Enter branch" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input8">Semester: </label>
                <input type="number" class="semester form-control sem1 not-null" id="input8" placeholder="Enter semester" required>
              </div>

            </div>

            <button style="display: block; margin-top: 48px; margin-left: auto; margin-right: auto; margin-bottom: 24px; bottom:16px;" class="student1-next-student-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
              <i class="material-icons">arrow_forward</i>
            </button>

          </div>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-2">
        <div class="page-content">
          <div class="student2-data">
            <div class="container demo-card-wide mdl-card mdl-shadow--8dp">
              <div class="form-group required">
                <label class="control-label" for="input22">Name: </label>
                <input type="text" class="form-control name2 not-null" id="input22" placeholder="Enter name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input32">Email: </label>
                <input type="email" class="form-control email2 not-null email-validation" id="input32" placeholder="Enter email" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input42">Phone No: </label>
                <input type="number" class="phone-number form-control phone2 not-null" id="input42" placeholder="Enter phone number" required>
              </div>

              <div class="form-group">
                <label for="input52">Enrollment No: </label>
                <input type="number" class="form-control enroll2" id="input52" placeholder="Enter enrollment number" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input62">College: </label>
                <input type="text" class="form-control college2 not-null" id="input62"  placeholder="Enter college name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input72">Branch: </label>
                <input type="text" class="form-control branch2 not-null" id="input72" placeholder="Enter branch" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input82">Semester: </label>
                <input type="number" class="semester form-control sem2 not-null" id="input82" placeholder="Enter semester" required>
              </div>

            </div>

            <div style="display: flex;" >
              <button  class="button-backward student2-previous-student-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">arrow_backward</i>
              </button>
              <button class="button-forward student2-next-student-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">arrow_forward</i>
              </button>
            </div>

          </div>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-3">
        <div class="page-content">
          <div class="student3-data" style="position: relative;">
            <div class="container demo-card-wide mdl-card mdl-shadow--8dp" style="position: relative;">
              <div class="form-group required">
                <label class="control-label" for="input2">Name: </label>
                <input type="text" class="form-control name3 not-null" id="input2" placeholder="Enter name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input3">Email: </label>
                <input type="email" class="form-control email3 not-null email-validation" id="input3" placeholder="Enter email" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input4">Phone No: </label>
                <input type="number" class="phone-number form-control phone3 not-null" id="input4" placeholder="Enter phone number" required>
              </div>

              <div class="form-group">
                <label for="input5">Enrollment No: </label>
                <input type="number" class="form-control enroll3" id="input5" placeholder="Enter enrollment number">
              </div>

              <div class="form-group required">
                <label class="control-label" for="input6">College: </label>
                <input type="text" class="form-control college3 not-null" id="input6"  placeholder="Enter college name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input7">Branch: </label>
                <input type="text" class="form-control branch3 not-null" id="input7" placeholder="Enter branch" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input8">Semester: </label>
                <input type="number" class="semester form-control sem3 not-null" id="input8" placeholder="Enter semester" required>
              </div>

            </div>

            <div style="display: flex;">
              <button class="button-backward student3-previous-student-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">arrow_backward</i>
              </button>
              <button class="button-forward student3-next-student-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
                <i class="material-icons">arrow_forward</i>
              </button>
            </div>

          </div>

        </div>
      </section>
      <section class="mdl-layout__tab-panel" id="scroll-tab-4">
        <div class="page-content">
          <div class="student4-data" style="position: relative;">
            <div class="container demo-card-wide mdl-card mdl-shadow--8dp" style="position: relative;">
              <div class="form-group required">
                <label class="control-label" for="input2">Name: </label>
                <input type="text" class="form-control name4 not-null" id="input2" placeholder="Enter name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input3">Email: </label>
                <input type="email" class="form-control email4 not-null email-validation" id="input3" placeholder="Enter email" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input4">Phone No: </label>
                <input type="number" class="phone-number form-control phone4 not-null" id="input4" placeholder="Enter phone number" required>
              </div>

              <div class="form-group">
                <label for="input5">Enrollment No: </label>
                <input type="number" class="form-control enroll4" id="input5" placeholder="Enter enrollment number">
              </div>

              <div class="form-group required">
                <label class="control-label" for="input6">College: </label>
                <input type="text" class="form-control college4 not-null" id="input6"  placeholder="Enter college name" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input7">Branch: </label>
                <input type="text" class="form-control branch4 not-null" id="input7" placeholder="Enter branch" required>
              </div>

              <div class="form-group required">
                <label class="control-label" for="input8">Semester: </label>
                <input type="number" class="semester form-control sem4 not-null" id="input8" placeholder="Enter semester" required>
              </div>

              <button class="submit-detail mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent btn-my-css">Submit</button>

            </div>

            <button style="display: block; margin-top: 48px; margin-left: auto; margin-right: auto; margin-bottom: 24px; bottom:16px;" class="student4-previous-student-button mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
              <i class="material-icons">arrow_backward</i>
            </button>

          </div>

        </div>
      </section>
    </main>
  </div>

  <script>
  $(document).ready(function(){
    $('.name1').focus();

    $('.submit-detail').on('click', function(){
      var confirmation = confirm("Please check your data before registration!\nAre you sure?");

      if(!confirmation) {
        return false;
      }

      var status = true;

      $('.not-null').each(function() {
        if($(this).val() == "" || $(this).val() == " ") {
          status = false;
          alert('Please enter all required data!');
          return false;
        }
      });

      if(status == false) {
        return false;
      }

      $('.email-validation').each(function(){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(regex.test($(this).val()) == false) {
          alert("Please enter valid email address!");
          status = false;
          return false;
        }
      });

      $('.phone-number').each(function(){
        var regex = /^[0-9]+$/;
        if(regex.test($(this).val()) == false || $(this).val().length != 10) {
          alert("Please enter valid phone number!");
          status = false;
          return false;
        }
      });

      $('.semester').each(function(){
        var regex = /^[1-8]+$/;
        if(regex.test($(this).val()) == false || ($(this).val() < 1 || $(this).val() > 8)) {
          alert("Please enter semester between 1 to 8!");
          status = false;
          return false;
        }
      });

      if(status == false) {
        return false;
      }

      var student1 = [];
      student1[0] = $('.name1').val().trim();
      student1[1] = $('.email1').val().trim();
      student1[2] = $('.phone1').val().trim();
      student1[3] = $('.enroll1').val().trim();
      if(student1[3] == "") {
        student1[3] = 0;
      }
      student1[4] = $('.college1').val().trim();
      student1[5] = $('.branch1').val().trim();
      student1[6] = $('.sem1').val().trim();

      var student2 = [];
      student2[0] = $('.name2').val().trim();
      student2[1] = $('.email2').val().trim();
      student2[2] = $('.phone2').val().trim();
      student2[3] = $('.enroll2').val().trim();
      if(student2[3] == "") {
        student2[3] = 0;
      }
      student2[4] = $('.college2').val().trim();
      student2[5] = $('.branch2').val().trim();
      student2[6] = $('.sem2').val().trim();

      var student3 = [];
      student3[0] = $('.name3').val().trim();
      student3[1] = $('.email3').val().trim();
      student3[2] = $('.phone3').val().trim();
      student3[3] = $('.enroll3').val().trim();
      if(student3[3] == "") {
        student3[3] = 0;
      }
      student3[4] = $('.college3').val().trim();
      student3[5] = $('.branch3').val().trim();
      student3[6] = $('.sem3').val().trim();

      var student4 = [];
      student4[0] = $('.name4').val().trim();
      student4[1] = $('.email4').val().trim();
      student4[2] = $('.phone4').val().trim();
      student4[3] = $('.enroll4').val().trim();
      if(student4[3] == "") {
        student4[3] = 0;
      }
      student4[4] = $('.college4').val().trim();
      student4[5] = $('.branch4').val().trim();
      student4[6] = $('.sem4').val().trim();

      var student = [student1, student2, student3, student4];

      if(status == true) {
        $.ajax({
          url:"./insert.php",
          method: "post",
          data: {
            student: JSON.stringify(student)
          },
          success: function(data){
            alert("Registration successfull!" + "\nYour Team ID for PUBG Mobile is " + data + ".\nImportant: Please make note of your team id!\nPay fees on the registration desk at Computer Department.");
            alert("For any query please visit the registration desk at the Computer Department.");
window.location.href="/";
          },
          error: function(data){
            alert("Your mobile number may be already registerd.\nRegistration failed! Please try again");
            alert("For any query please visit the registration desk at the Computer Department.\nPay fees on the registration desk at Computer Department.");
window.location.href="./../";
          }
        });
      }
    });

    $('.student1-next-student-button').on('click', function(){
      $('.student2').click();
      $("html, body, main").scrollTop(0);
    });

    $('.student2-next-student-button').on('click', function(){
      $('.student3').click();
      $("html, body, main").scrollTop(0);
    });

    $('.student2-previous-student-button').on('click', function(){
      $('.student1').click();
      $("html, body, main").scrollTop(0);
    });

    $('.student3-next-student-button').on('click', function(){
      $('.student4').click();
      $("html, body, main").scrollTop(0);
    });

    $('.student3-previous-student-button').on('click', function(){
      $('.student2').click();
      $("html, body, main").scrollTop(0);
    });

    $('.student4-previous-student-button').on('click', function(){
      $('.student3').click();
      $("html, body, main").scrollTop(0);
    });

  });
  </script>
</body>
</html>
