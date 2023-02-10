<?php include 'head.php'; ?>

        <div class="container-fluid" style="width:100%; height:50%;">
            <h3>Welcome to our Travels Website!</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit eros, aliquam vel velit vel, congue congue eros. Donec velit eros, aliquam vel velit vel, congue congue eros. Donec velit eros, aliquam vel velit vel, congue congue eros. Done velit eros, aliquam vel velit vel, congue congue eros. Donec velit eros, aliquam vel velit vel, congue congue eros.</p>
        </div>


        <div>
            <div class="container-fluid" style="width:100%; height:50%;margin-bottom:30px">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/europe.jpg" class="responsive-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Europe</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit eros, aliquam vel velit vel, congue congue eros.</p>
                                <a href="#" class="btn btn-primary" @click="changeTableCellColor1">Explore Europe</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/asia.jpg" class="responsive-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Asia</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit eros, aliquam vel velit vel, congue congue eros.</p>
                                <a href="#" class="btn btn-primary" @click="changeTableCellColor2">Explore Asia</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img src="images/africa.jpg" class="responsive-image" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Africa</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec velit eros, aliquam vel velit vel, congue congue eros.</p>
                                <a href="#" class="btn btn-primary" @click="changeTableCellColor3">Explore Africa</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid " style="width:100%; height:50%;">
                <table class="table table-bordered" id="table">
                    <thead>
                        <tr>
                            <th>Destination</th>
                            <th>Price</th>
                            <th>Travel Date 1</th>
                            <th>Travel Date 2</th>
                            <th>Travel Date 3</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Europe</td>
                            <td>$1000</td>
                            <td>01/01/2020</td>
                            <td>02/02/2020</td>
                            <td>03/03/2020</td>
                        </tr>
                        <tr>
                            <td>Asia</td>
                            <td>$1200</td>
                            <td>04/04/2020</td>
                            <td>05/05/2020</td>
                            <td>06/06/2020</td>
                        </tr>
                        <tr>
                            <td>Africa</td>
                            <td>$1500</td>
                            <td>07/07/2020</td>
                            <td>08/08/2020</td>
                            <td>09/09/2020</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="cookie-request" v-if="!cookieThemeExists()" v-show="!cookieTheme">
                <h4>We use cookies to improve your experience on our website.</h4>
                <div class="btn-group">
                    <button class="btn btn-primary" @click="acceptCookieTheme">Accept</button>
                    <button class="btn btn-danger" @click="rejectCookieTheme">Reject</button>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
<?php include 'footer.php' ?>
