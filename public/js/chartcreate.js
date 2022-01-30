var showdata = $('#data').val();
var showlable = $('#lable').val();

const labels = JSON.parse(showlable);

const data = {
    labels: labels,
    datasets: [{
        label: 'News Pic Upload By Month',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: JSON.parse(showdata),
    }]
};

const config = {
    type: 'bar',
    data: data,
    options: {}
};





const myChart = new Chart(
    document.getElementById('myChart'),
    config
);


//Year chart

var Yeardata = $('#yeardata').val();
var Yearlable = $('#yearlable').val();

const yearlabels = JSON.parse(Yearlable);

const yeardata = {
    labels: yearlabels,
    datasets: [{
        label: 'News Pic Upload By Year',
        backgroundColor: "blue",
        borderColor: 'blue',
        data: JSON.parse(Yeardata),
    }]
};


const yearconfig = {
    type: 'line',
    data: yeardata,
    options: {}
};


const myChartYears = new Chart(
    document.getElementById('myChartYears'),
    yearconfig
);

//Year chart


//usr chart

var userdata = $('#userdata').val();
var userlable = $('#userlable').val();

const userlabels = JSON.parse(userlable);

const userdatas = {
    labels: userlabels,
    datasets: [{
        label: 'News Pic Upload By User',
        backgroundColor: "purple",
        borderColor: 'purple',
        data: JSON.parse(userdata),


    }]
};


const userconfig = {
    type: 'bar',
    data: userdatas,
    options: {
        elements: {
            bar: {

            }
        },
        responsive: true,
    }
};


const userChart = new Chart(
    document.getElementById('userChart'),
    userconfig
);


//usr chart