var page=0;

function slide() {
    
    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'left' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 300;
    
    if(page == 0)
    {
        $("#indexDiv").hide("slide", { direction: "right" }, duration-10);
        $('#budgetDiv').toggle(effect, options, duration);
    }
    else if(page == 1)
    {
        $("#budgetDiv").hide("slide", { direction: "right" }, duration-10);
        $('#calendarDiv').toggle(effect, options, duration);
    }
    else if(page == 2)
    {
        $("#calendarDiv").hide("slide", { direction: "right" }, duration-10);
        $('#informationDiv').toggle(effect, options, duration);
    }
    else
    {
        $("#informationDiv").hide("slide", { direction: "right" }, duration-10);
        $('#doneDiv').toggle(effect, options, duration);
    }
    page++;
}

function initSlider()
{
    var effect='slide';
    var options={direction:"right"}
    var duration = 150;
    
    /*
    $('#budgetDiv').toggle(effect, options, duration);
    $('#calendarDiv').toggle(effect, options, duration);
    $('#informationDiv').toggle(effect, options, duration);
    $('#doneDiv').toggle(effect, options, duration);
    */
    
    $("#budgetDiv").hide("slide", { direction: "right" }, duration);
    $("#calendarDiv").hide("slide", { direction: "right" }, duration);
    $("#informationDiv").hide("slide", { direction: "right" }, duration);
    $("#DoneDiv").hide("slide", { direction: "right" }, duration);
}

