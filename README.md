# GAuth-Test

  OAuth with Google+
|----------------------|

1) Assumed having already installed XAMPP, pull this repository.

2) Go ahead and download the lastest release of Google's PHP API
  >[Google API](https://github.com/googleapis/google-api-php-client/releases)
  
3) Drop the "google-api-php-client-2.2.2" folder into the main folder of GAuth-Test.

4) Drop GAuth-Test into HTdocs inside XAMPP directory.

5) Open in your preferred IDE, open the Config.php file. Note the areas noted as Insert Secret and ClientID, these will need to be updated.

6) Head to the Google Console page and create a new project.
  >[Google Console](https://console.cloud.google.com/home)

7) Follow this guide on setting up credentials with Google Cloud PLatform. 
  >[Imgure](https://imgur.com/a/f6LMmNN)
  >(Callback URL: http://localhost/GoogleLogin/g-callback.php)
  
8) Now, you should have a file named GAuth-Test in HTDocs, run Apache and open Admin, then open GAuth-Test and attempt to login using Google.

9) This takes the user to an index page displaying "Getters" for the information given. 

10) To logout, directly go to logout.php in the browser.

# Note from myself

I didn't have too much time to work on this, but I tried to get everything nailed down to make it as easy as possible to use in our webpage. This has the basic funcitonality of a Google oAuth login, and I could implement this with Twitter, Facebook, Guthub, etc. 

I don't really have any experience in web programming. So I've been struggling to find an IDE, how to get our webpage to work with everything. (I did get it to work with LocalHost, just beyond that it's difficult to work on top of the already in place login) In short I'm not sure what to change on our own without breaking anything. If anything I'm a little ovewrwhelmed. 

My idea for this was to get the functionality down of oAuth, as well as have an easily repeatable process to setting it up. 






 
