<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { useForm, Link } from '@inertiajs/inertia-vue3';

defineProps({
    errors: Object,
});

const form = useForm({
    Nombre: '',
    Edad: '',
    Direccion: '',
});

const submit = () => {
    form.post(route('UserGeneral.store'));
};
</script>
<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Crear User
            </h2>
        </template>

        <div class="py-12">
            <p>asdasdas</p>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <form @submit.prevent="submit" class="w-full max-w-lg">
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full md:w-1/4 px-3">

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
                            <div class="w-full md:w-1/4 px-3">

                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                                    Direccion</label>
                                <input id="nombre" v-model="form.Direccion"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    type="text" placeholder="Direccion" />

                            </div>

                            <div class="flex justify-end md:gap8 gap-4 pt-5 pb-5 pr-5">
                                <Link :href="route('UserGeneral.index')"
                                    class="flex-shrink-0 bg-blue-500 text-white text-base py-2 px-4 rounded-lg py-2 hover:bg-blue-700"
                                    type="button">

                                Cancelar
                                </Link>
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                    
                                    Guardar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
    