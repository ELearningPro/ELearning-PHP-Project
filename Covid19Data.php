<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button"
        class="btn btn-outline-warning btn-sm right-fixed-btn d-flex align-items-center justify-content-between"
        data-toggle="modal" data-target="#coronaModal" onclick="getCoronaCases()">
        <img src="assets/images/covidIcon.png" class="img-fluid mr-2" style="height: 30px;">
        <span>Covid-19</span>
    </button>

    <!-- Modal -->
    <div class="modal fade" id="coronaModal" tabindex="-1" role="dialog" aria-labelledby="coronaModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="coronaModalLongTitle">Covid-19</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="coronaDataGlobal" class="p-2">
                    </div>
                    <div class="d-none my-2" id="searchContainer">
                        <input class="form-control" id="searchQuery" placeholder="Search With Country Name..."
                            onkeyup="searchData()">
                    </div>
                    <table class="table table-sm d-none table-responsive table-hover" id="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Country</th>
                                <th scope="col">New Confirmed</th>
                                <th scope="col">New Deaths</th>
                                <th scope="col">New Recovered</th>
                                <th scope="col">Total Confirmed</th>
                                <th scope="col">Total Deaths</th>
                                <th scope="col">Total Recovered</th>
                            </tr>
                        </thead>
                        <tbody id="allCororaDataTable">

                        </tbody>
                    </table>
                    <div class="justify-content-end d-none" id="pg">
                        <button id="pg-btn-prev" class="mx-2 btn btn-outline-primary btn-sm"
                            onclick="pagination ('-')">Prev</button>
                        <button id="pg-btn-next" class="mx-2 btn btn-outline-primary btn-sm"
                            onclick="pagination('+')">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>