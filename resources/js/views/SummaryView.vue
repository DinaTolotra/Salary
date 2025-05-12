<template>
    <div>
        <Bar :options="chartOption" :data="barChartData" v-show="false"> Failed to load </Bar>
        <Pie :options="chartOption" :data="pieChartData" v-show="true"> Failed to load</Pie>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import { Bar, Pie } from 'vue-chartjs';
import { Chart, Title, Tooltip, Legend, BarElement, ArcElement, Colors, CategoryScale, LinearScale } from 'chart.js';

Chart.register(Title, Tooltip, Legend, BarElement, ArcElement, Colors, CategoryScale, LinearScale);

const pieLabels = ref(['Minimum', 'Moyenne', 'Maximum'])
const barLabels = ref(['Bilan des salaires'])
const barDatasets = [ { label: 'Minimum', data: [10] }, { label: 'Moyenne', data: [45] }, { label: 'Maximum' ,data: [90] } ];
const pieDatasets = [ {data: [10,45,90] } ];
const pieChartData = ref({ labels: pieLabels, datasets: pieDatasets });
const barChartData = ref({ labels: barLabels, datasets: barDatasets });
const chartOption = ref({ responsive: true, aspectRatio: 2 });

</script>

<style lang="css" scoped>
</style>
