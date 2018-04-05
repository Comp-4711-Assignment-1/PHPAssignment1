<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>

        <nav class="navbar navbar-toggleable-md navbar-light bg-faded" style="background-color: lightblue;">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="/">Home</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/Catalog">Catalog</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="/About">About</a>
                    </li>
                    <li class="dropdown nav-item text-center">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">User Role<b class="caret"></b></a>
                        <div class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                            <a class="dropdown-item text-center" href="/roles/actor/Admin">Admin</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center" href="/roles/actor/User">User</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item text-center" href="/roles/actor/Guest">Guest</a>
                        </div>
                    </li> 
                </ul>
            </div>
        </nav>

        <div id="container">
            {content}
        </div>

    </body>
</html>