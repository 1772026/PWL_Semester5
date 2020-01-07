<div style="background-color: black;top: 0;height: 120px"></div>
<div class="site-section" id="properties-section">
    <div class="container">
        <h1 style="text-align: center; color: #333333;">ADMIN MODE</h1>
        <br>
        <div class="justify-content-center">
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageMovies"
                    aria-expanded="false" aria-controls="collapseExample">
                Manage Movies
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageStudios"
                    aria-expanded="false" aria-controls="collapseExample">
                Manage Studios
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageCashiers"
                    aria-expanded="false" aria-controls="collapseExample">
                Manage Cashiers
            </button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#manageCashiers"
                    aria-expanded="false" aria-controls="collapseExample">
                Sales Report
            </button>
            <div class="collapse mt-2 text-black" id="manageMovies">
                <div class="card card-body">
                    <h3>ADD NEW MOVIE</h3>
                    <table class="table text-black mt-4 text-center" cellspacing="5"
                           cellpadding="5">
                        <tbody>
                        <tr>
                            <th>Title</th>
                            <td><input type="text" class="" id="inputTitle" name="title" value="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>Duration</th>
                            <td><input type="text" id="inputDuration" name="duration" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td><input type="text" id="inputDesc" name="description" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Poster</th>
                            <td><input type="file" id="inputPoster" name="poster" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Trailer</th>
                            <td><input type="text" id="inputTrailer" name="trailer" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input type="button" class="btn btn-primary" id="buttonAddMovie" name="addMovieButton"
                                       value="Add Movie"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="collapse mt-2 text-black" id="manageStudios">
                <div class="card card-body">
                    <h3>ADD NEW STUDIO</h3>
                    <table class="table text-black mt-4 text-center" cellspacing="5"
                           cellpadding="5">
                        <tbody>
                        <tr>
                            <th>Number</th>
                            <td><input type="text" class="" id="inputNumber" name="number" value="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>Capacity</th>
                            <td><input type="text" id="inputCapacity" name="capacity" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Row</th>
                            <td><input type="text" id="inputRow" name="row" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Column</th>
                            <td><input type="text" id="inputColumn" name="column" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td><input type="text" id="inputType" name="type" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><input type="text" id="inputPrice" name="price" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input type="button" class="btn btn-primary" id="buttonStudioMovie"
                                       name="addStudioButton" value="Add Studio"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="collapse mt-2 text-black" id="manageCashiers">
                <div class="card card-body">
                    <h3>ADD NEW CASHIER</h3>
                    <table class="table text-black mt-4 text-center" cellspacing="5"
                           cellpadding="5">
                        <tbody>
                        <tr>
                            <th>Full Name</th>
                            <td><input type="text" class="" id="inputName" name="name" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td><input type="text" id="inputUsername" name="username" value="" autocomplete="off"></td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td><input type="password" id="inputPassword" name="password" value="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>Re-type Password</th>
                            <td><input type="password" id="inputPassword" name="password" value="" autocomplete="off">
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input type="button" class="btn btn-primary" id="buttonAddCashier"
                                       name="addCashierButton" value="Add Cashier"></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

