# GAuth-Test

  OAuth with Google+
|----------------------|

1) Assumed having already installed XAMPP, pull this repository.

2) Go ahead and download the lastest release of Google's PHP API
  >https://github.com/googleapis/google-api-php-client/releases
  
3) Drop the "google-api-php-client-2.2.2" folder into the main folder of GAuth-Test.

4) Drop GAuth-Test into HTdocs inside XAMPP directory.

5) Open in your preferred IDE, open the Config.php file. Note the areas noted as Insert Secret and ClientID, these will need to be updated.

6) Head to https://console.cloud.google.com/home

7) Follow this guide on setting up credentials with Google Cloud PLatform. 
  >https://imgur.com/a/f6LMmNN
  >(Callback URL: http://localhost/GoogleLogin/g-callback.php)
  
8) Now, you should have a file named GAuth-Test in HTDocs, run Apache and open Admin, then open GAuth-Test and attempt to login using Google.

9) This takes the user to an index page displaying "Getters" for the information given. 

10) To logout, directly go to logout.php in the browser.

# Things to Note

test





 
