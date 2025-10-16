<script setup lang="ts">
import AuthLayout from '@/layouts/AuthLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <AuthLayout title="Two-Factor Disabled" description="This page is no longer available.">
        <Head title="Two-Factor Authentication" />
        <div class="space-y-6">
            <p class="text-muted-foreground">Two-factor authentication is disabled.</p>
        </div>
    </AuthLayout>
</template>
