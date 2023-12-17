<?php 
    //take the active site url and store it in a variable
    $url = $_SERVER['REQUEST_URI'];

    //concatenate the url taking the only the part after the last '/' and ending with php and store it in the variable
    $url = substr($url, strrpos($url, '/') + 1);
    //remove all the parts after .php
    $url = explode('.php', $url)[0];
    //add .php to the $url
    $url = $url . '.php';



    //before assigning any value declare all the variables and set to empty string
    $index = $bmi = $pricing = $contacts = $join = $pay = "";

    //check if the url contains the string 'index.php' and if it does then set the $index variable to active
    if($url == 'index.php'){
        $index = "active";
    }
    elseif($url == 'bmi-calculator.php'){
        $bmi = "active";
    }
    elseif($url == 'pricing.php'){
        $pricing = "active";
    }
    elseif($url == 'contacts.php'){
        $contacts = "active";
    }
    elseif($url == 'pay-now.php'){
        $pricing = "active";
    }

?>


<nav class="navbar navbar-expand-lg bg-black sticky-top px-lg-3 shadow-sm sticky-top">
  <div class="container-fluid">

    <img src="images/Flex Gym.svg" width="100" height="70">
    <a class="navbar-brand fw-bold fs-3 h-font" href="index.php">FlexGym</a>

    <button class="navbar-toggler shadow-none custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"  aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ml-auto">
        <li class="nav-item mb-2">
          <a class="nav-link me-2 text-white <?php echo $index ?>" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link me-2 text-white <?php echo $bmi ?>" href="bmi-calculator.php">Bmi Calculator</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link me-2 text-white <?php echo $pricing ?>" href="pricing.php">Pricing</a>
        </li>
        <li class="nav-item mb-2">
          <a class="nav-link text-white <?php echo $contacts ?>" href="contacts.php">Contact</a>
        </li>
        <li class="">
          <a href="join-us.php?login=0" class="btn btn-1 btn-sm align-items-center text-white">Join Us</a>
        </li> 
      </ul>
    </div>
  </div>
</nav>
