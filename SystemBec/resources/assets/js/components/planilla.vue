
<template>
      <div>        
        <div class="row" id="crud"> 
    <table class="table table-hover table-sprite">
        <thead>
    <th class="success" id="letra" style="text-align: center;">Nombre Completo</th>
    <th class="success" id="letra"   style="text-align: center;">Identidad</th>
    <th class="success" id="letra"  style="text-align: center;">Telefono</th>
    <TH class="success" id="letra"  style="text-align: center;">Cargo</TH>
    <TH class="success" id="letra"  style="text-align: center;">Horas</TH>
    <th class="success" id="letra"  style="text-align: center;">Fecha</th>
    <th class="success" id="letra"  style="text-align: center;">Acción</th>
    
        </thead>
        <tbody>
             
              <tr  >
                        <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >
                           {{ideas}}
                        </td>
                       
             </tr>
                 
        </tbody>
    
     </table>
</div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {

        name:'buscar',
        data (){
            return{
                ideas:[],
            }

        },
        created: function(){
            this.getIdeas();
        },
        methods:{
            getIdeas: function(){
                var app = this;
                axios.get('http://127.0.0.1:8000/becarios/planilla').then(response=>{
                    app.ideas=response.data;
                }).catch(function (resp) {
                    console.log(resp);
                    alert("No se encontraron datos de actividades");
                });

            }
        }


    }

</script>
