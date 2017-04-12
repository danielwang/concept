$(function() {
    counter();
});

function counter () {
    var parameter = parseInt(getQueryVariable("parameter"));
    var num_of_markers = 1020;
    var newnum, options; 
    if(parameter){      
        newnum = parameter + num_of_markers;      
       
    } else{
        newnum = num_of_markers;
    }
    options = {  
            useEasing: true,
              useGrouping: true,
              separator: ',',
              decimal: '.',
              prefix: '',
              suffix: ''
        };
    var counter = new CountUp("num", parameter, newnum, 0, 20, options);
    counter.start();
}

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
            return pair[1];
        }
    }
    return (31234567); // if not set, return fake number
}