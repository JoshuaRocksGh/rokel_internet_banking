!function(a){"use strict";function t(){}t.prototype.createLine=function(t,e,i,n,r){return a(t).peity("line",{fill:e,stroke:i,width:n,height:r}),a(t)},t.prototype.init=function(){var i=this.createLine(".updating-chart","#5fbeaa","#5fbeaa",120,40);setInterval(function(){var t=Math.round(10*Math.random()),e=i.text().split(",");e.shift(),e.push(t),i.text(e.join(",")).change()},1e3)},a.PeityChart=new t,a.PeityChart.Constructor=t}(window.jQuery),function(){"use strict";window.jQuery.PeityChart.init()}();