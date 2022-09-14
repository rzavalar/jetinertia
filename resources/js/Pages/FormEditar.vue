<script>
import { Link,useForm } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import { Inertia } from '@inertiajs/inertia';
import route from '../../../vendor/tightenco/ziggy/src/js';


export default ({
    components: {
        AppLayout,
        Link,
        Inertia
    },
    props:{
        usuario:Object
    },
    setup(props) {
        const form = useForm({
               
                Nombre: props.usuario.Nombre,
                Edad: props.usuario.Edad,
                Direccion: props.usuario.Direccion,
            });
       function submit(){
     
        form.put(`/users/`+props.usuario.id+`/update`);
       }     
      return{form,submit};            
    }
})
</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Editar Usuario
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg my-1.5">
                    <form @submit.prevent="submit" class="md:w-full">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-3/6 px-3" >

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Nombre</label>
                                <input id="nombre" v-model="form.Nombre"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Nombre" />

                            </div>

                            <div class="w-full md:w-1/4 px-3">

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Edad</label>
                                <input id="nombre" v-model="form.Edad"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Edad" />

                            </div>
                            <div class="w-full md:w-3/6 px-3">

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Direccion</label>
                                <input id="nombre" v-model="form.Direccion"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Direccion" />

                            </div>

                            <div class="flex justify-end md:gap8 gap-4 pt-5 pb-5 pr-5">
                                <Link :href="route('UserGeneral.index')"
                                    class=" bg-red-500 text-white text-base py-2 px-4 rounded-full py-2 hover:bg-red-700"
                                    type="button">

                                Cancelar
                                </Link>
                                <button type="submit"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">

                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
        