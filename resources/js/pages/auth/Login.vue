<script setup lang="ts">
import InputError from '@/components/InputError.vue';
import TextLink from '@/components/TextLink.vue';
import { Button } from '@/components/ui/button';
import { Checkbox } from '@/components/ui/checkbox';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import { LoaderCircle } from 'lucide-vue-next';

defineProps<{
    status?: string;
    canResetPassword: boolean;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};
</script>

<template>
    <div class="grid h-screen grid-cols-4">
        <div class="col-span-3 h-screen">
            <img src="/bg-login.png" alt="Login Background" class="h-full w-full object-cover" />
        </div>

        <div class="col-span-1 flex h-screen items-center justify-center bg-white">
            <div class="w-full max-w-lg px-10">
                <AuthBase>
                    <Head title="Log in" />

                    <h1 class="text-center text-2xl font-bold text-black dark:text-black">Log in</h1>

                    <div v-if="status" class="mb-4 text-center text-sm font-medium text-green-600">
                        {{ status }}
                    </div>

                    <form @submit.prevent="submit" class="flex flex-col gap-6">
                        <div class="grid gap-4">
                            <div class="grid gap-2">
                                <Input
                                    id="email"
                                    type="email"
                                    required
                                    autofocus
                                    :tabindex="1"
                                    autocomplete="email"
                                    v-model="form.email"
                                    placeholder="Email"
                                />
                                <InputError :message="form.errors.email" />
                            </div>

                            <div class="grid gap-2">
                                <Input
                                    id="password"
                                    type="password"
                                    required
                                    :tabindex="2"
                                    autocomplete="current-password"
                                    v-model="form.password"
                                    placeholder="Password"
                                />
                                <InputError :message="form.errors.password" />
                            </div>

                            <div class="flex items-center justify-between">
                                <Label for="remember" class="flex items-center space-x-3">
                                    <Checkbox id="remember" v-model="form.remember" :tabindex="3" />
                                    <span class="font-normal text-black">Remember me</span>
                                </Label>
                            </div>

                            <Button
                                type="submit"
                                class="mt-2 w-full bg-black text-white hover:bg-gray-900 dark:bg-black dark:text-white dark:hover:bg-gray-900"
                                tabindex="5"
                                :disabled="form.processing"
                            >
                                <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                                Log in
                            </Button>
                        </div>

                        <div class="text-center text-sm text-muted-foreground">
                            Don't have an account?
                            <TextLink :href="route('register')" :tabindex="5">Sign up</TextLink>
                        </div>
                    </form>
                </AuthBase>
            </div>
        </div>
    </div>
</template>
