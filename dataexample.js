// Main JS functions not method specific
function clearData()
{
    document.getElementById('data').innerHTML = '';
}

function writeData(data)
{
    for(var i=0; i<data.length; ++i)
    {
        var current = document.getElementById('data').innerHTML;
        current = current + data[i].name + " is " + data[i].age + "<br />";
        document.getElementById('data').innerHTML = current;
    }
}
