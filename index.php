<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gold's Gym - The best fitness gym in the town</title>
    <link rel="stylesheet" href="style.css">
    <script src="timer.js"></script>
    <link rel="stylesheet" href="utils.css">
</head>

<body class='overflow-x-hidden'>
    <div class="container mx-auto">
        <header>
            <nav class="flex justify-between">
                <div class="logo font-bold flex items-center text-blue">Gold's Gym</div>
                <ul class="navbar flex items-center">
                    <li><a href="index.php"> Home</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#comparePlans">Compare Plans</a></li>
                    <li><a href="book.php"> Contact Us</a></li>
                    <li><button onclick="window.location.href='book.php';" class="btn">Join Now</button></li>
                </ul>
            </nav>
            <hr>
        </header>
        <main class="min-h-screen">
            <section class="section1">
                <div class="flex">
                    <div class="topleft flex flex-col justify-center px-2">
                        <div class=" text-center">
                            <img class="dumbellimg" src="dumbell.jpeg" alt="">
                        </div>
                        <h1 class="my-1 text-center">The best fitness Gym in the town is here</h1>
                        <p class=" text-center"><b>Success isn't always about greatness, it's about consistency. Consistent hardwork gains success.Greatness will come.</b><br>
                        Push your fitness further with our mix of facilities and we will support you with advice on new and better ways to train.</p>
                            <!-- Display the countdown timer in an element -->
                            <p class="deal text-center">The deal ends in <span id="demo"></span></p>
                            <div class="buttons">
                                <button onclick="window.location.href='book.php';"  class="btn">Join now</button>
                                <button onclick="window.location.href='book.php';"  class="btn">Contact Us</button>
                            </div>
                    </div>
                    <div class="topright flex justify-center">
                        <img class="gymimg" src="gym.jpeg" alt="">
                    </div>
                </div>
            </section>
            <hr>
            <section class="section2" id="pricing">
                <h1 class="text-center my-2">Pricing</h1>
                <p class="my-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi debitis provident
                    suscipit temporibus modi voluptatem. Assumenda aspernatur ad nihil quasi expedita eligendi atque?
                    Dolorum eum deserunt dicta iste beatae commodi, doloribus expedita hic recusandae, tempora illum
                    consequuntur? Necessitatibus voluptate animi repellendus reiciendis!</p>
                <div class="boxes flex justify-center">
                    <div class="box">
                        <h2>Free</h2>
                        <ul>
                            <li class="highlighted">₹0/month</li>
                            <li>50 users included</li>
                            <li>Free Wifi Access</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Signup Now</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Pro</h2>
                        <ul>
                            <li class="highlighted">₹150/month</li>
                            <li>30 users included</li>
                            <li>Free Wifi Access</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Signup Now</button></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h2>Enterprise</h2>
                        <ul>
                            <li class="highlighted">₹500/month</li>
                            <li>20 users included</li>
                            <li>Free Wifi Access</li>
                            <li>Email support</li>
                            <li>Help center access</li>
                            <li><button class="btn">Signup Now</button></li>
                        </ul>
                    </div>

                </div>
            </section>
            <hr>
            <section class="section3" id="comparePlans">
                <h1 class="text-center my-2">Compare Plans</h1>
                <div class="container plantable">
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th></th><th>Free</th>
                          <th>Pro</th>
                          <th>Enterprise</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row" class="text-start">Public</th>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Private</th>
                          <td>-</td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                      </tbody>
              
                      <tbody>
                        <tr>
                          <th scope="row" class="text-start">Permissions</th>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Sharing</th>
                          <td>-</td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Unlimited members</th>
                          <td>-</td>
                          <td>Yes</svg></td>
                          <td>Yes</svg></td>
                        </tr>
                        <tr>
                          <th scope="row" class="text-start">Extra security</th>
                          <td>-</td>
                          <td>-</td>
                          <td>Yes</svg></td>
                        </tr>
                      </tbody>
                    </table>
            </section>
            <hr>
        </main>
        <footer>
            Copyright &copy; Gold'sGym.com | All rights reserved
        </footer>

    </div>
</body>

</html>