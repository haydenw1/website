dots = {
  data: [1,2,3,4],
  counter: 0,

  make: function() {
    var svg = d3.select("#dot-holder").append("svg");
    var g = svg.append("g");

    g.selectAll("circle-d")
      .data(dots.data)
      .enter()
      .append("circle")
        .attr("class","test-circles")
        .attr("cy", 40)
        .attr("cx", function(d,i) {
          return 40 * (i + 1);
        })
        .attr("r", function(d,i) {
          if (i == dots.counter) {
            return 10;
          }
          return 7.5;
        })
        .attr("fill", function(d,i) {
          if (i == dots.counter) {
            console.log(dots.counter);
            return "rgb(4, 216, 238)";
          }
          return "#fff";
        });
    dots.counter++;

    setInterval( function(){
      dots.change();
    }, 1000);
  },

  change: function() {
    d3.selectAll(".test-circles")
      .transition().duration(500)
        .attr("r", function(d,i) {
          if (i == dots.counter) {
            return 10;
          }
          return 7.5;
        })
        .attr("fill", function(d,i) {
          if (i == dots.counter) {
            console.log(dots.counter);
            return "rgb(4, 216, 238)";
          }
          return "#fff";
        });

    if (dots.counter < dots.data.length -1) {
      dots.counter++;
    } else {
      dots.counter = 0;
    }
  }
}


