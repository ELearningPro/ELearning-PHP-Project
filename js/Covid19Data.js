
let loadData = '';
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
    next >= loadData.Countries.length ? nextBtn.disabled = true : nextBtn.disabled = false;
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