$(document).ready(function(){
  $.ajax({
    url : "http://localhost/web/sales.php",
    type : "GET",
    success : function(data){

      console.log(data);

      
      var reg_Date = [];
      var total= [];
      // var productname= [];
      
        for(var i in data) {
        
        reg_Date.push(data[i].reg_Date);
        total.push(data[i].total);
        // productname.push(data[i].productname);
        
      }

      var chartdata = {
        labels: reg_Date,
        datasets: [

          // {
          //   label: "Month",
          //   fill: false,
          //   lineTension: 0.1,
          //   backgroundColor: "rgba(59, 89, 152, 0.75)",
          //   borderColor: "rgba(59, 89, 152, 1)",
          //   pointHoverBackgroundColor: "rgba(59, 89, 152, 1)",
          //   pointHoverBorderColor: "rgba(59, 89, 152, 1)",
          //   data: date
          // },
           {

            label: "Total User",
            fill: false,
            lineTension: 0.1,
            backgroundColor: "rgb(140,240,247)",
            borderColor: "rgba(23, 46, 149)",
            pointHoverBackgroundColor: "rgb(59, 89, 152, 1)",
            pointHoverBorderColor: "rgba(59, 89, 152, 1)",
            data: total
          },
          

        ]
      };

      var ctx = $("#mycanvas");

      var LineGraph = new Chart(ctx, {

        type: 'bar',
        data: chartdata,
       options:{
        title:{
          display:true,
          text:'Graph User'
        },
        scales:{
          yAxes:[{
            scaleLabel:{
              display:true,
              labelString:'Total User'
            }
          }],
          xAxes:[{
            scaleLabel:{
              display:true,
              labelString:'Month'
            }
          }]
        },
       }
      });
    },
    error : function(data) {

    }
  });
});