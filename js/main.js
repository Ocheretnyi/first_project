var selectInputValue = function (elementId)
{
    var selectInput = document.getElementById(elementId);
    return selectInput.value;
};


var radioButtonsInputValue = function (className)
{
    var buttons = document.getElementsByClassName(className);
    var n = buttons.length;
    var i;
    for (i = 0; i < n; i++)
    {
        if (buttons[i].checked)
        {
            return buttons[i].value;
        }
    }
    return null;
};

function checkboxInputValue(elementId) {
    var element = document.getElementById(elementId);
    if (element) {
        return "on" == element.value ;
    }
    return null;
}


var textInputValue = function(elementId)
{
    var textInput = document.getElementById(elementId);
    if(textInput)
    {
        return textInput.value;
    }
    return null;
};

var readDataFromForm = function ()
{
    var formData = [];
    formData['film'] = selectInputValue('Film_film');
    formData['Hall'] = selectInputValue('film_hall');
    formData['row_hall'] = radioButtonsInputValue('row_film');
    formData['quantity'] = textInputValue('ticket_quantity');
    formData['ticket'] = checkboxInputValue('cinema_ticket');

    return formData;
};

var calculateTotalPrice = function (formData) {
    var allPricesArray = getArrayPrices();
    var filmArray = allPricesArray[formData['film']];
    if (!filmArray) return -1;


    var HallArray = filmArray[formData['Hall']];
    if (!HallArray) return -1;

    var price = HallArray[formData['row_hall']];

    if (!price) return -1;
    {
        var totalPrice = price * formData['quantity'];
    }

    if (formData['ticket']) {
        totalPrice = totalPrice + 15;
    } else null;

    return totalPrice;
};

    var outputResultMessage = function (totalPrice)
    {
        var text = 'Полная стоимость ваших билетов составляет - ' + totalPrice + ' грн. <br>Приятного просмотра!';
               var resultElement = document.getElementById('result');
        resultElement.innerHTML = text;

    };

    var submitOrder = function ()
    {
        var formData = readDataFromForm();
        var totalPrice = calculateTotalPrice(formData);
        if (totalPrice > 0 )
        {
            outputResultMessage(totalPrice);
        } else
        {
            alert('Ви не повністю заповнили форму!');
        }
    };
