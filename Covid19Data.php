<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Cases</title>
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
<script>
let loadData = '';
console.log(loadData)
let prev = 0,
    next = 5;
const getCoronaCases = () => {
    if (!loadData) {
        document.getElementById('coronaDataGlobal').innerHTML = `
            <div id="dots5">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>`;
        fetch('https://api.covid19api.com/summary').then(res => res.json()).then(data => {
            document.getElementById('coronaDataGlobal').innerHTML = "";
            loadData = {
                ...data
            };
            const {
                Global,
                Countries
            } = loadData;
            for (key in Global) {
                document.getElementById('coronaDataGlobal').innerHTML +=
                    `<span class='d-inline-block flex-grow-1 px-2 text-warning'>${key} : ${Global[key]} </span>`;
            }
            document.getElementById('table').classList.remove("d-none");
            document.getElementById('pg').classList.remove("d-none");
            document.getElementById('pg').classList.add("d-flex");
            document.getElementById('searchContainer').classList.remove("d-none");
            document.getElementById('searchContainer').classList.add("d-flex");
            pagination();
        });
    }
}
const pagination = (type, Countries = loadData.Countries) => {
    let prevBtn = document.getElementById('pg-btn-prev');
    let nextBtn = document.getElementById('pg-btn-next');
    if (type === "+") {
        prev += 5;
        next = prev + 5;
    } else if (type === "-") {
        prev -= 5;
        next = prev + 5;
    }
    prev <= 1 ? prevBtn.disabled = true : prevBtn.disabled = false;
    next >= Countries.length ? nextBtn.disabled = true : nextBtn.disabled = false;
    showAllData(Countries);
}
const showAllData = (Countries) => {
    let row = "";
    let index = prev;
    const col = value => {
        return `<td>${value}</td>`
    }
    Countries.slice(prev, next).map(p => {
        row += `<tr style="background:hsl(${Math.random() * 360}, 100%, 75%)">
                   ${col(index++)}
                   ${col(p.Country)}
                   ${col(p.NewConfirmed)}
                   ${col(p.NewDeaths)}
                   ${col(p.NewRecovered)}
                   ${col(p.TotalConfirmed)}
                   ${col(p.TotalDeaths)}
                   ${col(p.TotalRecovered)}
                </tr>`;
    });
    document.getElementById('allCororaDataTable').innerHTML = row;
};
const searchData = () => {
    prev = 0;
    next = 5;
    const value = document.getElementById('searchQuery').value;
    const Countries = loadData.Countries.filter(p => p.Country.toLowerCase().includes(value.toLowerCase()));
    pagination(null, Countries);
}
</script>

</html>