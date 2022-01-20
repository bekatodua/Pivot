<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="flex"> 
                            <div class="w-1/2">

                                MAP
                            </div>

                            <div clas="w-1/2>

                                <Select2 v-model="myValue" :
                                
                                :settings="{ 
                                        width: '100%',
                                        ajax: {
                                            url: '/api/countries/list', 
                                            dataType: 'json'
                                        }
                                    }" 
                                @change="myChangeEvent($event)" 
                                @select="mySelectEvent($event)" />
                                <h4>Value: {{ myValue }}</h4>
                            </div>
                            
                        </div>





                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

<script>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue'
import { Head } from '@inertiajs/inertia-vue3';
import Select2 from 'vue3-select2-component';

export default {
    components: {
        BreezeAuthenticatedLayout,
        Head,
        Select2,
    },
    data() {
        return {
            myValue: '',
            myOptions: ['op1', 'op2', 'op3'] // or [{id: key, text: value}, {id: key, text: value}]
        }
    },
    methods: {
        myChangeEvent(val){
            console.log(val);
        },
        mySelectEvent({id, text}){
            console.log({id, text})
        }
    },
    create()
    {
        this.myChangeEvent()
    }
}

</script>
