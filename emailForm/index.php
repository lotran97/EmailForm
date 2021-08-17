<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>Formulaire de contact</h1>
    <form name="myForm" id="contactForm" action="process.php"  onsubmit="return validateForm()" method="post">
       <table class="form-style">
            <tr>
             <td>
                <label>
                   Votre prénom <span class="required">*</span>
                </label>
             </td>
             <td>
                <input type="text" name="prenom" id="prenom" class="long"/>
                <span class="error" id="errorname"></span>
             </td>
          </tr>
          <tr>
             <td>
                <label>
                   Votre nom <span class="required">*</span>
                </label>
             </td>
             <td>
                <input type="text" name="nom" id="name" class="long"/>
                <span class="error" id="errorname"></span>
             </td>
          </tr>
          <tr>
             <td>
                <label>
                   Votre adresse e-mail <span class="required">*</span>
                </label>
             </td>
             <td>
                <input type="email" name="email" id="email" class="long"/>
                <span class="error" id="erroremail"></span>
             </td>
          </tr>
          <tr>
            <tr>
                <td>
                   <label>
                      Confirmation adresse e-mail <span class="required">*</span>
                   </label>
                </td>
                <td>
                   <input type="email" name="confemail" id="email2" class="long"/>
                   <span class="error" id="erroremail2"></span>
                </td>
             </tr>
             <tr>
             <td>
                <label>
                   Sujet 
                </label>
             </td>
             <td>
                <input type="text" name="sujet" id="sujet" class="long"/>
                <span class="error" id="errorname"></span>
             </td>
          </tr>
             <tr>
             <td>
                <label>
                   Message <span class="required">*</span>
                </label>
             </td>
             <td>
                <textarea name="message" id="msg" class="long field-textarea"></textarea>
                <span class="error" id="errormsg"></span>
             </td>
          </tr>
          <tr>
             <td></td>
             <td>
                <input type="submit" name="submit" value="Envoyer">      
                <input type="reset" value="Réinitialiser"> 
                <!-- <div id="msgSubmit" class="h3 text-center hidden">Message envoyé!</div> -->
                <span class="success" id="success">Message envoyé !</span>
             </td>
          </tr>
       </table>
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="form.js"></script>
 </body>
</html>