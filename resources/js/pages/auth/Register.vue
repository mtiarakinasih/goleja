<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import AuthBase from '@/layouts/AuthLayout.vue';
import { useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';
import { ref, watch } from 'vue';

const isCompany = ref(true); // Switch tab state

const form = useForm({
    name: '',
    email: '',
    password: '',
    password_confirmation: '',
    role: 'pelamar', // Default role
});

const submit = () => {
    form.role = isCompany.value ? 'perusahaan' : 'pelamar'; // Pastikan nilai role sesuai toggle

    form.post(route('register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    });
};

</script>

<template>
    <div class="grid h-screen grid-cols-4">
        <div class="col-span-3 h-screen">
            <img src="/images/bg-login.png" alt="Login Background" class="h-full w-full object-cover" />
        </div>

        <div class="col-span-1 flex h-screen items-center justify-center bg-white">
            <div class="w-full max-w-lg bg-white px-10 dark:bg-white">
                <AuthBase>
                    <Head title="Register" />

                    <h1 class="mb-4 text-center text-2xl font-bold text-black dark:text-black">Sign Up</h1>

                    <!-- Switch Tab -->
                    <div class="flex w-full overflow-hidden rounded-lg border">
                        <button
                            class="w-1/2 px-2 py-1.5 text-center text-sm font-medium transition-colors"
                            :class="isCompany ? 'bg-black text-white' : 'bg-white text-gray-700'"
                            @click="isCompany = true"
                            type="button"
                        >
                            Perusahaan
                        </button>
                        <button
                            class="w-1/2 px-2 py-1.5 text-center text-sm font-medium transition-colors"
                            :class="!isCompany ? 'bg-black text-white' : 'bg-white text-gray-700'"
                            @click="isCompany = false"
                            type="button"
                        >
                            Pelamar
                        </button>
                    </div>

                    <form @submit.prevent="submit" class="flex flex-col gap-6">
                        <div class="grid gap-4">
                            <div class="grid gap-2">
                                <Input
                                    id="name"
                                    type="text"
                                    required
                                    autofocus
                                    :tabindex="1"
                                    autocomplete="name"
                                    v-model="form.name"
                                    placeholder="Nama lengkap"
                                />
                                <InputError :message="form.errors.name" />
                            </div>

                            <div class="grid gap-2">
                                <Input id="email" type="email" required :tabindex="2" autocomplete="email" v-model="form.email" placeholder="Email" />
                                <InputError :message="form.errors.email" />
                            </div>

                            <div class="grid gap-2">
                                <Input
                                    id="password"
                                    type="password"
                                    required
                                    :tabindex="3"
                                    autocomplete="new-password"
                                    v-model="form.password"
                                    placeholder="Password"
                                />
                                <InputError :message="form.errors.password" />
                            </div>

                            <div class="grid gap-2">
                                <Input
                                    id="password_confirmation"
                                    type="password"
                                    required
                                    :tabindex="4"
                                    autocomplete="new-password"
                                    v-model="form.password_confirmation"
                                    placeholder="Confirm password"
                                />
                                <InputError :message="form.errors.password_confirmation" />
                            </div>

                            <Button
                                type="submit"
                                class="mt-2 w-full bg-black text-white hover:bg-gray-900 dark:bg-black dark:text-white dark:hover:bg-gray-900"
                                tabindex="5"
                                :disabled="form.processing"
                            >
                                <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                                Sign Up
                            </Button>
                        </div>

                        <div class="text-center text-sm text-muted-foreground">
                            Already have an account?
                            <TextLink :href="route('login')" :tabindex="5">Log in</TextLink>
                        </div>
                    </form>
                </AuthBase>
            </div>
        </div>
    </div>
</template>
