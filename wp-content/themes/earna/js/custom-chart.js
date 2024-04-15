/*=========================================================================================
    File Name: custom-chart.js
    ----------------------------------------------------------------------------------------
    Item Name: Buskey - Consulting Business Template
    Version: 1.0
    Author: Validthemes
    Author URL: http://www.themeforest.net/user/validthemes
==========================================================================================*/
jQuery(document).ready(function($){

$(function ($) {
  'use strict';

/*====  Line chart for business growth =====*/
var ctx = document.getElementById("lineChart");
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["2019", "2020", "2021", "2022", "2023", "2024"],
        datasets: [{
            label: 'Tốc độ tăng trưởng',
            data: [10, 20, 30, 50, 80, 100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.5)',
                'rgba(54, 162, 235, 0.5)',
                'rgba(255, 206, 86, 0.5)',
                'rgba(75, 192, 192, 0.5)',
                'rgba(153, 102, 255, 0.5)',
                'rgba(18, 115, 235, 0.5)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(18, 115, 235, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
/*====  End line chart =====*/


});

});