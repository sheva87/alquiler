function limpiarForm(obj) {
    // enaviar asi: limpiarForm('#miForm');
    $(':input', $(obj)).each(function() {
        var type = this.type;
        var tag = this.tagName.toLowerCase();      
        if (type == 'text' || type == 'password' || tag == 'textarea' || type == 'hidden')
            this.value = '';       
        else if (type == 'checkbox' || type == 'radio')
            this.checked = false;
        else if (tag == 'select')
            this.selectedIndex = 0; //-1
    });
}

function set_popup(url,title,ancho,alto,parametro,func_close){
    var a = 1;
    var b = 100;
    var randomnumber = (a+Math.floor(Math.random()*b));
 
    //    $(".popedit" ).remove();
    //    $(".popedit" ).dialog( "destroy" ); 
    var id = "popupEdicion"+randomnumber;
    $("body").append("<div id='"+id+"' class='popedit' title='"+title+"'></div>");           
    $("#"+id).dialog({          
        autoOpen:false,      
        position: 1, //0=TOP        
        width:ancho,
        Height:'auto',
        minHeight:alto,
        zIndex : 2000,
        resizable: false,
        modal:true ,
        open: function(event,ui){
            get_page(url,this.id,parametro);
        }
        ,close: function(){      
            eval(func_close);
            $("#"+id).dialog('destroy');                        

        }
    });
    $("#"+id).dialog('open');
}

function get_page(Url,div_name,parametro){
    var Rdn=(Math.floor(Math.random()*11));  
    $.post(Url, {
        Rdn:Rdn,        
        parametro:parametro    
    }, function(data){ 
        data = data.trim();  
        $('#'+div_name).html(data);       

    });
}