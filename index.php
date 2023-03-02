<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.6.2/plyr.css" />
    <script src="https://cdn.plyr.io/3.6.2/plyr.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<?php
include_once 'head.php';
?>
<style>
    @media screen and (min-width: 1200px) {
        .app-wrapper {
            margin-left: 250px;
        }
    }
</style>


<body class="app">
    <header class="app-header fixed-top">
        <h2 style="padding-right:80px;">Ozdogs</h2>
        <?php
        include_once 'nav.php';
        ?>
        <div id="app-sidepanel" class="app-sidepanel">
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding" style="padding-left: 50px;">
                    <a class="app-logo" href="index.php">
                        <img src="assets/images/Ozdogs.png" alt="logo" width="100" height="50">
                        <!-- <span class="logo-text">Data To Leads</span> -->
                    </a>

                </div>
                <!--//app-branding-->

                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <div class="tab-container-one scroll">
                        <ul class="nav nav-tabs side-tabs" id="myTab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" href="#profile" role="tab" aria-controls="profile"
                                    style="font-size: 14px;" data-bs-toggle="tab">Search</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#messages" role="tab" aria-controls="messages"
                                    style="font-size: 14px;" data-bs-toggle="tab">Limit</a>
                            </li>
                            <!-- <li class="nav-item active">
                            <a class="nav-link active" href="#home" role="tab"
                                style="font-size: 8px; text-decoration: none" aria-controls="home"
                                data-bs-toggle="tab">Search Races by ONE</a>
                        </li> -->
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="profile" role="tab" aria-labelledby="profile-tab">
                                <div class="container py-3">
                                    <form>
                                        <div class="form-group">
                                            <label for="Date">Date</label>
                                            <input class="form-control" type="date" id="date-picker">
                                        </div>

                                        <div class="form-group">
                                            <label for="Dog">Dog</label>
                                            <select class="form-select" id="country">
                                                <option disabled selected>dog</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="In trap">In trap</label>
                                            <select class="form-select" id="country">
                                                <option disabled selected>Any</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <a class="app-logo" href="index.php">
                                                <span class="logo-text">Search Races By the Dogs:</span>
                                            </a>
                                        </div>

                                        <div class="form-group">
                                            <label for="AddDog">Add Dog</label>
                                            <select class="form-select" id="AddDog">
                                                <option disabled selected>Mairly on Fire</option>
                                                <option>Dog A</option>
                                                <option>Dog B</option>
                                                <option>Dog C</option>
                                                <option>Dog D</option>
                                            </select>
                                        </div>

                                        <div style="padding-left:25px;">
                                            <button class="btn btn-primary" onclick="importDog(event)">Import</button>
                                            <button class="btn btn-primary">Report</button>
                                        </div>

                                        <div class="form-group">
                                            <label for="Meeting">Meeting</label>
                                            <select class="form-select" id="country">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="AddDog">Race</label>
                                            <select class="form-select" id="AddDog">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="DogList">Dog List</label>
                                            <textarea class="form-control" id="DogList" name="DogList"
                                                disabled></textarea>
                                        </div>
                                        <button class="btn btn-danger" onclick="importdel(event)">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                        <div>
                                            <label for="state">Search:</label>
                                        </div>
                                        <div style="padding-left:40px;">
                                            <button type="reset" class="btn btn-outline-primary">Prev</button>
                                            <button type="submit" class="btn btn-outline-primary">Next</button>
                                        </div>

                                        <div>
                                            <div>
                                                <input type="radio" id="one" name="one" value="one">
                                                <label for="one">In The Same Race</label>
                                            </div>
                                            <div>
                                                <input type="radio" id="two" name="two" value="two">
                                                <label for="two">In The Different Race</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-select" id="country">

                                            </select>
                                        </div>

                                    </form>
                                </div>
                            </div>


                            <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
                                <div class="container py-3">
                                    <form>
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <input type="text" id="category" class="form-control" name="category"
                                                placeholder="Category">
                                        </div>
                                        <div class="form-group">
                                            <label for="store-name">Store Name</label>
                                            <input type="text" id="store-name" class="form-control" name="store-name"
                                                placeholder="Store Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="technology">Technology</label>
                                            <input type="text" id="technology" class="form-control" name="technology"
                                                placeholder="Technology">
                                        </div>
                                        <div class="form-group">
                                            <label for="platform">Platform</label>
                                            <input type="text" id="platform" class="form-control" name="platform"
                                                placeholder="Platform">
                                        </div>
                                        <div class="form-group">
                                            <label for="company-size">Company Size</label>
                                            <select class="form-select" id="company-size">
                                                <option disabled selected>Company Size</option>
                                                <option>1-10</option>
                                                <option>11-50</option>
                                                <option>51-200</option>
                                                <option>201-500</option>
                                                <option>501-1000</option>
                                                <option>1000+</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select class="form-select" id="country">
                                                <option disabled selected>Country</option>
                                                <option>USA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="revenue-group">Revenue Group</label>
                                            <select class="form-select" id="revenue-group">
                                                <option disabled selected>Revenue Group</option>
                                                <option>Under $25/month</option>
                                                <option>$25k-$50k/month</option>
                                                <option>$50k-$100k/month</option>
                                                <option>$100k-$250k/month</option>
                                                <option>$250k-$500k/month</option>
                                                <option>$500k-$1m/month</option>
                                                <option>$1m-$5m/month</option>
                                                <option>Above $5m/month</option>
                                            </select>
                                        </div>
                                        <div>
                                            <button type="reset" class="btn btn-outline-primary">Clear All</button>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
            <!--//sidepanel-inner-->
        </div>
        <!--//app-sidepanel-->
    </header>
    <!--//app-header-->

    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="tab-container-one">
                <ul class="nav nav-tabs" id="myTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="t1" href="#Races" role="tab" aria-controls="Races"
                            data-bs-toggle="tab">
                            10 Races Found:
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="t2" href="#Media" role="tab" aria-controls="Media" data-bs-toggle="tab">
                            Media Player
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" href="#Web" role="tab" aria-controls="Web" data-bs-toggle="tab">
                            Web Browser
                        </a>
                    </li>
                </ul>
            </div>
            <div class="card shadow mt-3">
                <div class="card-body">
                    <div class="tab-content">

                        <div class="tab-pane active" role="tabpane" aria-labelledby="Races-tab" id="Races">
                            <div class="table-responsive scroll" style="max-height: 350px">
                                <table id="" class="table table-bordered" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Stadium</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Gr</th>
                                            <th>Dist</th>
                                            <th>Winner</th>
                                            <th>WT</th>
                                            <th>Video</th>
                                        </tr>
                                    </thead>
                                    <tbody id="dogs-race" style="cursor:pointer;">

                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <br>
                        </div>

                        <div class="tab-pane" id="Media" role="tabpanel" aria-labelledby="Media-tab">
                            <div class="container py-3" style="height: 500px;">
                                <video id="player" playsinline controls>
                                    <source src="" type="video/mp4" />
                                </video>

                            </div>
                            <!-- <div class="container py-3" style="height: 400px;">
                            <iframe width="1200" height="380px" src="https://www.youtube.com/embed/gEX787opZvE"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div> -->
                        </div>

                        <div class="tab-pane" id="Web" role="tabpane2" aria-labelledby="Web-tab">
                            <div class="container py-3">
                                <p>IOSJDKJSDKSJKndkjsnakjk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow mt-5">
                <div class="card-header">
                    <h5 class="text-theme">Dogs in Selected Race 2023</h5>
                </div>
                <div class="card-body">
                    <table id="example" class="table table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <!-- <th><label><input type="checkbox" class="form-check-input"></label></th> -->
                                <th>Fin</th>
                                <th>Dogname</th>
                                <th>T</th>
                                <th>SP</th>
                                <th>Time</th>
                                <th>Btn</th>
                                <th>1st sec</th>
                                <th>2nd sec</th>
                                <th>Heat</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="participants">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>



    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script>
    <script src="assets/js/index-charts.js"></script>

    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>
    <script>
        const player = new Plyr('#player');
    </script>
    <script src="script.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
        $(document).ready(function () {
            $('#dogstable').DataTable();
        });
    </script>


</body>

</html>