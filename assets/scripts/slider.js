var page=0;

$(".button").click(function () {
    
    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: "left" };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 300;
    
    if(page == 0)
    {
        var elemButton = document.getElementById();
        elemButton.value = "Next";
        $('budgetDiv').toggle(effect, options, duration);
    }
    else if(page == 1)
    {
        $('calendarDiv').toggle(effect, options, duration);
    }
    else if(page == 2)
    {
        $('informationDiv').toggle(effect, options, duration);
    }
    else
    {
        $('doneDiv').toggle(effect, options, duration);
    }
    page++;
});
