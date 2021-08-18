// Event
$( "#category_id" ).change(function(event){
    getSubcategories(event.target.value)
});


//Function
function getSubcategories(value){
    if(value == '' || value == null)
    {
        $( "#subcategory_id" ).find("option:gt(0)").remove();
    }
    else
    {
        $.get(direction+"/dynamic-selects/subcategories/"+value, function(response, value){
            $( "#subcategory_id" ).find("option:gt(0)").remove();
            for(i=0; i<response.length; i++){
                $( "#subcategory_id" ).append("<option value='"+ response[i].id +"'>"+ response[i].name +"</option>");
            }
        });
    }
}

