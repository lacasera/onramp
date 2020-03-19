<template>
    <modal :show="show">
        <template slot-scope="modal">
            <div class="border-blue-violet border-t-4 flex flex-col h-full justify-between pt-12">
                <nav class="mt-2">
                    <div class="border-b border-gray-300">
                        <slot name="navigation-links"></slot>
                    </div>
                    <slot name="navigation-dropdown"></slot>
                </nav>
                <div class="flex items-center justify-between px-4 py-10">
                    <slot name="navigation-buttons"></slot>
                </div>
            </div>
        </template>
    </modal>
</template>

<script>
import Modal from "./Modal";

export default {
    components: { Modal },

    props: {
        show: {}
    },
};
</script>
