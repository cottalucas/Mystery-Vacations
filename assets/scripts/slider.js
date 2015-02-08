var page=0;

function slide(hideElm, showElm) {
    
    // Set the effect type
    var effect = 'slide';

    // Set the options for the effect type chosen
    var options = { direction: 'right' };
    
    // Set the duration (default: 400 milliseconds)
    var duration = 300;
    
    //  style="display: none"

    $(hideElm).hide();

    $(showElm).toggle(effect, options, duration);

    /*if(page == 0)
        $('#budgetDiv').toggle(effect, options, duration);
    else if(page == 1)
        $('#calendarDiv').toggle(effect, options, duration);
    else if(page == 2)
        $('#informationDiv').toggle(effect, options, duration);
    else
        $('#doneDiv').toggle(effect, options, duration);*/

    page++;
}

function initSlider()
{

    try
    {   
        var effect='slide';
        var options={direction:"right"}
        var duration = 50;

        $('#budgetDiv').hide();
        $('#calendarDiv').hide();
        $('#informationDiv').hide();
        $('#doneDiv').hide();

        //$("#budgetDiv").hide("slide", { direction: "left" }, 1200);
    }
    catch (err)
    {
        alert('init slider: ' + err);
    }
}

