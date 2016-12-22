$(document).ready(function(){
    var ctx = $("#mycanvas").get(0).getContext("2d");
    ctx.canvas.width = 300;
    ctx.canvas.height = 300;

    //pie chart data
    var data = {
        datasets: [
            {
                data: [100, 50, 300],
                backgroundColor: [
                    "#0087bb",
                    "#009aca",
                    "#006ea7"
                ],
                hoverBackgroundColor: [
                    "#0087bb",
                    "#009aca",
                    "#006ea7"
                ]
            }]
    };
    var options= {
                   legend: {
                       display: false
                   },
                   tooltips: {
                     enabled: false
                   },
                   responsive: false
               };

      var inView = false;

    function isScrolledIntoView(elem){
      var docViewTop = $(window).scrollTop();
      var docViewBottom = docViewTop + $(window).height();

      var elemTop = $(elem).offset().top;
      var elemBottom = elemTop + $(elem).height();

      return ((elemTop <= docViewBottom) && (elemBottom >= docViewTop));
    }

    $(window).scroll(function() {
    if (isScrolledIntoView('#mycanvas')) {
     if (inView) { return; }
     inView = true;
     setTimeout(function(){
       new Chart(ctx,{
           type: 'pie',
          data: data,
          options: options
           });
     }, 1000);

    } else {
    //  inView = false;
     }
    });
});
