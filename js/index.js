$.ajax({
    url: "./templates/products_categories.php",
    type: "GET",
    beforeSend: function(){
        $("#Section2").empty();
        $("#Section2").append(
            '<h3> Categorias de nuestros productos </h3> <div aria-busy="true"></div>'
        );
    },
    success: function(response){
        $("#Section2").empty();
        $("#Section2").append(response);
    }
})
$.ajax({
    url: "./templates/contact.php",
    type: "GET",
    beforeSend: function(){
        $("#Section3").empty();
        $("#Section3").append(
            '<h3> Ubicanos </h3> <div aria-busy="true"></div>'
        );
    },
    success: function(response){
        $("#Section3").empty();
        $("#Section3").append(response);
    },
    complete: function(){
        $("#loader3").hide();
    }
})

$("#searchPokemons").click(function(){

    let limit = $("#limit").val();
    let offset = $("#offset").val();

    if(validateInputs(limit, offset)){
        return
    }

    $('#limitAlert').remove();
    $('#limit').removeAttr("aria-invalid"); 
    $('#limit').attr({ "aria-invalid" : "false"});
    $('#offsetAlert').remove();
    $("#offset").removeAttr("aria-invalid");
    $("#offset").attr({ "aria-invalid" : "false"});

    let data = {limit: limit, offset: offset}
    $.ajax({
    url: "./templates/pokemon.php",
    type: "post",
    data: {data: data},
    beforeSend: function(){
        $(".pokemons__wrapper").empty();
        $(".pokemons__wrapper").append(
        '<div aria-busy="true"></div>'
        );
    },
    success: function(response){
        $(".pokemons__wrapper").empty();
        $(".pokemons__wrapper").append(response);
    }
    })

function validateInputs(limit , offset){
    validation = false

    if (limit === '') {
        $('#limitAlert').remove();
        $('#limit').after('<small id="limitAlert" class="message-alert">Campo obligatorio.</small>');
        $('#limit').removeAttr("aria-invalid"); 
        $('#limit').attr({ "aria-invalid" : "true"});
        validation = true;
    }

    if (limit > 20) {
        $('#limitAlert').remove();
        $('#limit').after('<small id="limitAlert" class="message-alert">Valor maximo del campo es 20.</small>');
        $('#limit').removeAttr("aria-invalid"); 
        $('#limit').attr({ "aria-invalid" : "true"});
        validation = true;
    }
    if (limit.indexOf('.') !== -1) {
        $('#limitAlert').remove();
        $('#limit').after('<small id="limitAlert" class="message-alert">Valor debe ser entero.</small>');
        $('#limit').removeAttr("aria-invalid"); 
        $('#limit').attr({ "aria-invalid" : "true"});
        validation = true;
    }

    if ( offset === '') {
        $('#offsetAlert').remove();
        $('#offset').after('<small id="offsetAlert" class="message-alert">Campo obligatorio.</small>');
        $("#offset").removeAttr("aria-invalid");
        $("#offset").attr({ "aria-invalid" : "true"});
        validation = true;
    }

    if ( offset > 1302) {
        $('#offsetAlert').remove();
        $('#offset').after('<small id="offsetAlert" class="message-alert">Valor maximo del campo es 1302.</small>');
        $("#offset").removeAttr("aria-invalid");
        $("#offset").attr({ "aria-invalid" : "true"});
        validation = true;
    }
    if ( offset.indexOf('.') !== -1) {
        $('#offsetAlert').remove();
        $('#offset').after('<small id="offsetAlert" class="message-alert">Valor debe ser entero.</small>');
        $("#offset").removeAttr("aria-invalid");
        $("#offset").attr({ "aria-invalid" : "true"});
        validation = true;
    }

    return validation;
}
})
