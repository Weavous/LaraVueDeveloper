<template>
    <table class="min-w-max w-full table-auto">
        <thead>
            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">Developer</th>
                <th class="py-3 px-6 text-center">Tools</th>
                <th class="py-3 px-6 text-center">Hobby</th>
                <th class="py-3 px-6 text-center">Status</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            <tr v-for="(developer, key) in developers" :key="key" class="border-b border-gray-200 hover:bg-gray-100">
                <td class="py-3 px-6 text-left">
                    <div class="flex items-center">
                        <div class="mr-2">
                            <User></User>
                        </div>
                        <span>{{ developer.name }}</span>
                    </div>
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex items-center justify-center">
                        <Tool v-for="(tool, key) in developer.tools" :key="key" :src="tool.url" :alt="tool.name"></Tool>
                    </div>
                </td>
                <td class="py-3 px-6 text-center">
                    <div class="flex items-center justify-center">
                        <User></User>
                        <User></User>
                        <User></User>
                    </div>
                </td>
                <td class="py-3 px-6 text-center">
                    <span v-if="developer.status === `Completed`">
                        <Completed></Completed>
                    </span>
                    <span v-if="developer.status === `Scheduled`">
                        <Scheduled></Scheduled>
                    </span>
                    <span v-if="developer.status === `Pending`">
                        <Pending></Pending>
                    </span>
                    <span v-if="developer.status === `Active`">
                        <Active></Active>
                    </span>
                </td>

                <td class="py-3 px-6 text-center">
                    <div class="flex item-center justify-center">
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                            </svg>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</template>

<script>
import Active from "../components/Status/implementations/Active.vue";
import Completed from "../components/Status/implementations/Completed.vue";
import Pending from "../components/Status/implementations/Pending.vue";
import Scheduled from "../components/Status/implementations/Scheduled.vue";

import User from "../../User.vue";
import Tool from "../../Tool.vue";

import React from "../../images/React.vue";

import developers from "../../../services/developers.js";

export default {
  name: "GenericDisplay",
  components: { Active, Completed, Pending, Scheduled, Tool, User, React },
  data() {
    return {
        developers: [ ]
    }
  },
  created() {
    developers.index().then(response => {
        this.developers = response.data;
    });
  }
};
</script>