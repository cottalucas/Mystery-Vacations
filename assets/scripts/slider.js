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
<<<<<<< HEAD
    var effect='slide';
    var options={direction:"right"}
    var duration = 50;
    
    $('#budgetDiv').toggle(effect, options, duration);
    $('#calendarDiv').toggle(effect, options, duration);
    $('#informationDiv').toggle(effect, options, duration);
    $('#doneDiv').toggle(effect, options, duration);
=======
    alert('slider');

    try
    {   
        var effect='slide';
        var options={direction:"right"}
        var duration = 50;

        /*$('#budgetDiv').toggle(effect, options, duration);
        $('#calendarDiv').toggle(effect, options, duration);
        $('#informationDiv').toggle(effect, options, duration);
        $('#doneDiv').toggle(effect, options, duration);*/
        $("#budgetDiv").hide("slide", { direction: "right" }, 1200);
    }
    catch (err)
    {
        alert('init slider: ' + err);
    }
>>>>>>> e851acd0e397309dd58c21574dacd4b2a00599bd
}

