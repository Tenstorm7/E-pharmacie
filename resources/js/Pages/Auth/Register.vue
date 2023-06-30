<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

const form = useForm({
    nom: '',
    prenom: '',
    email: '',
    telephone: '',
    adresse: '',
    sexe: '',
    profil: null,
    birthdate: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />

        <form @submit.prevent="submit" enctype="multipart/form-data">
            <div>
                <InputLabel for="nom" value="Nom" />

                <TextInput id="nom" type="text" class="mt-1 block w-full" v-model="form.nom" required autofocus
                    autocomplete="nom" />

                <InputError class="mt-2" :message="form.errors.nom" />
            </div>

            <div>
                <InputLabel for="prenom" value="Prenom" />

                <TextInput id="prenom" type="text" class="mt-1 block w-full" v-model="form.prenom" required autofocus
                    autocomplete="prenom" />

                <InputError class="mt-2" :message="form.errors.prenom" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput id="email" type="email" class="mt-1 block w-full" v-model="form.email" required
                    autocomplete="username" />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div>
                <InputLabel for="telephone" value="Telephone" />

                <TextInput id="telephone" type="number" class="mt-1 block w-full" v-model="form.telephone" required
                    autofocus autocomplete="telephone" />

                <InputError class="mt-2" :message="form.errors.telephone" />
            </div>

            <div>
                <InputLabel for="adresse" value="Adresse" />

                <TextInput id="adresse" type="text" class="mt-1 block w-full" v-model="form.adresse" required autofocus
                    autocomplete="adresse" />

                <InputError class="mt-2" :message="form.errors.adresse" />
            </div>

            <div>
                <InputLabel for="sexe" value="Sexe" />

                <select name="sexe"  id="sexe" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" v-model="form.sexe" required>
                    <option value="Masculin">Masculin</option>
                    <option value="Feminin">Feminin</option>
                </select>

                <InputError class="mt-2" :message="form.errors.sexe" />
            </div>

            <div>

            </div>

            <div>
                <InputLabel for="profil" value="photo de profil" />

                <input type="file" name="profil" id="profil" @input="form.profil = $event.target.files[0]"
                class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"  required/>


                <InputError class="mt-2" :message="form.errors.profil" />
            </div>

            <div>
                <InputLabel for="birthdate" value="Date de naissance" />

                <input type="date" name="birthdate" id="birthdate" class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" v-model="form.birthdate" required/>


                <InputError class="mt-2" :message="form.errors.birthdate" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                    autocomplete="new-password" />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput id="password_confirmation" type="password" class="mt-1 block w-full"
                    v-model="form.password_confirmation" required autocomplete="new-password" />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

<<<<<<< HEAD
            <div class="my-3">
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Continue
=======
            <div class="flex items-center justify-end mt-4">
                <Link :href="route('login')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                Already registered?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
>>>>>>> 92478725a965aaa3d23a00f81d8b5f790d69d66c
                </PrimaryButton>
            </div>

            <div class="text-xs pt-4">
                By signing-in you agree to PHARMA237 Conditions of Use & Sale.
                Please see our Privacy Notice, our Cookies Notice and our Interest-Based Ads Notice.
            </div>

            <div class="flex items-center justify-start mt-4">
                <Link
                    :href="route('login')"
                    class="hover:underline text-sm text-blue-700 hover:text-red-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Sign in?
                </Link>
            </div>

        </form>
    </GuestLayout>
</template>
