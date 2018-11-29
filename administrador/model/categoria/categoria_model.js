    $( document ).ready(function() { 
    	  mostrar_categoria();
    });


/*=================================REGISTRAR=============================================================*/
    $("#button_registrar_categoria").click(function() {    
            let datosRegistrar=$("#formulario_registrar_Categorias").serialize();     
    });

/*=====================================Editar============================================================*/

    id_editar=""; 
    function actualizar_categorias(id,categoria){
        id_editar=id; 
        $("#editar_categoria").val(categoria);
    }


    $("#botton_editar_categoria").click(function() {    
            let editar=$("#formulario_editar_categorias").serialize();   
            alert(editar);  
    });


/*=====================================Editar============================================================*/

 eliminar_cat="";
    function eliminar_categorias(id){
        eliminar_cat=id;  
    }
    
    $("#button_aceptar_eliminacion").click(function() {    
            
        alert(eliminar_cat);        
    });

 


var tabla_nombre;
 function mostrar_categoria() {
  
    tabla_nombre = $("#tabla_Categorias").dataTable({     	
        "destroy":true,
        "bDeferRender": true,
        "sPaginationType": "full_numbers",
          
        "ajax": {
            "url": "../model/categoria/mostrar_categoria_model.php",
            "type": "POST"
        },
        "columns": [ 
           
            { "data": "id" },
            { "data": "categoria" },
            { "data": "Editar" },
            { "data": "Eliminar" } 
        ],
        "oLanguage": {
            "sProcessing": "Procesando...",
            "sLengthMenu": 'Mostrar <select>' +
                '<option value="5">5</option>' +
                '<option value="10">10</option>' +
                '<option value="20">20</option>' +
                '<option value="30">30</option>' +
                '<option value="40">40</option>' +
                '<option value="50">50</option>' +
                '<option value="-1">All</option>' +
                '</select> registros',
            "sZeroRecords": "No se encontraron resultados",
            "sEmptyTable": "Ningún dato disponible en esta tabla",
            "sInfo": "Mostrando del (_START_ al _END_) de un total de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando del 0 al 0 de un total de 0 registros",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix": "",
            "sSearch": "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Por favor espere - cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
}