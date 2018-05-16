// Bar chart


//function Chart(upvotecount,downvotecount)
var uv = document.getElementById("uv").value;
var dv = document.getElementById("dv").value;
//alert(upvote);
//alert(dv);
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["Upvote", "Downvote"],
        datasets: [{
            label: 'Number of Votes',
            data: [uv, dv],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)'
                
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)'
                
            ],
            borderWidth: 1
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