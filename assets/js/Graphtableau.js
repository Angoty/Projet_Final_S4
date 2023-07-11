var xValues = ["Utilisateur"];
var yValues = [49];
var barColors = [
  "#b91d47",
];

new Chart("myChart", {
    type: 'doughnut',
    data: {
       labels: ["utilisateur  50"],
       datasets: [{
       data: [50],
       label: 50,
       backgroundColor: ['yellow'],
       hoverOffset: 5
       }],
    },
    options: {
       responsive: false,
    }
});
var xValues2 = ["regime vendue"];
var yValues2 = [55];
var barColors2 = [
  "#e8c3b9",
];

new Chart("myChart2", {
    type: 'doughnut',
    data: {
       labels: ["Regime  20"],
       datasets: [{
       data: [20],
       label:20,
       backgroundColor: ['green'],
       hoverOffset: 5
       }],
    },
    options: {
       responsive: false,
    }
});