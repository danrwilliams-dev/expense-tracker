<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import SettingsLayout from '@/layouts/settings/Layout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <AppLayout>
        <Head title="Two-Factor Authentication" />
        <SettingsLayout>
            <div class="space-y-6">
                <p class="text-muted-foreground">Two-factor authentication has been disabled.</p>
            </div>
        </SettingsLayout>
    </AppLayout>
</template>
