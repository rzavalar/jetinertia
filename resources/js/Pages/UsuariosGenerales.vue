<script>
    import { Link } from '@inertiajs/inertia-vue3';
    import AppLayout from '@/Layouts/AppLayout.vue';
    import { Inertia } from '@inertiajs/inertia';
import route from '../../../vendor/tightenco/ziggy/src/js';

    export default ({
        props:{
         usuarios: Array,
        },
        components:{
       AppLayout,
       Link,
       Inertia
        },
      setup(){
        function destroy(id){
            if(confirm('Are u sure?')){
                Inertia.delete(`users/${id}/destroy`)
            }          
        }
        return {destroy}
      }
    })
    </script>

  
    
    <template>
        <AppLayout title="Dashboard">
            <template #header>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                   USer
                </h2>
            </template>
    
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        
                        <Link
                        :href ="route('UserGeneral.create')"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        type="button"
                        >
                            
                        Nuevo
                        </Link>

                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th scope="col" class="py-3 px-6">
                                Nombre
                                 </th>
                                 <th scope="col" class="py-3 px-6">
                                 Edad
                                </th>
                                <th scope="col" class="py-3 px-6">
                                  Direccion
                                </th>      
                                <th scope="col" class="py-3 px-6">
                                  Acciones
                                </th>                         
                            </thead>
                            <tbody>
                                <tr v-for="usuario in usuarios" :key="usuario.id">
                                    <td class="px-6 py-4 whitespace-nowrap">{{usuario.Nombre}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{usuario.Edad}}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">{{usuario.Direccion}}</td>
                                    <td class="flex m-2">
                                        <Link
                                                    :href ="route('UserGeneral.edit', usuario.id)"
                                                    class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                                    type="button"
                                        >                           
                                         Editar
                                        </Link>
                                        <!-- <Link
                                                    method="delete"
                                                    :href ="route('UserGeneral.destroy', usuario)"
                                                    
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                                   as="button"
                                        >                           
                                         Borrar
                                        </Link> -->
                                        
                                        <button type="button"  @click="destroy(usuario.id)" 
                                   
                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" >
                                           Delete
                                        </button>
                                    </td>
                   
                                </tr>
                              
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </AppLayout>
    </template>
 