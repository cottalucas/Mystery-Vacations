var page=0;

function slide() {
    
    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'left' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 300;
    
    if(page == 0)
        $('#budgetDiv').toggle(effect, options, duration);
    else if(page == 1)
        $('#calendarDiv').toggle(effect, options, duration);
    else if(page == 2)
        $('#informationDiv').toggle(effect, options, duration);
    else
        $('#doneDiv').toggle(effect, options, duration);
    page++;
}

function initSlider()
{
    var effect='slide';
    var options={direction:"right"}
    var duration = 50;
    
    $('#budgetDiv').toggle(effect, options, duration);
    $('#calendarDiv').toggle(effect, options, duration);
    $('#informationDiv').toggle(effect, options, duration);
    $('#doneDiv').toggle(effect, options, duration);
}

