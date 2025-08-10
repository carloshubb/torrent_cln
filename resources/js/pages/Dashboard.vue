<script setup>
import AppLayout from './../layouts/AppLayout.vue'
import TorrentTable from '../Compenents/TorrentTable.vue'
import TorrentHead from '../Compenents/TorrentHead.vue'
import { reactive } from 'vue'
// some data in parent
const user = {
  name: 'Maximka',
  age: 25
}
const torrents = reactive([
      {
        name: "Jurassic World Rebirth 2025 1080p WEBRip DD5.1 x264-NeoNoir",
        se: 7,
        le: 4523,
        time: "7am Aug 5th",
        size: "2.5 GB",
        uploader: "NeoNoir"
      },
      {
        name: "Spider-Man Far From Home 2019 1080p x265-RapidX",
        se: 3,
        le: 1516,
        time: "6am Aug 7th",
        size: "3.2 GB",
        uploader: "RapidX"
      },
      {
        name: "Wednesday S02 Season 2 P01 Part 1 2025 1080p NF WEBRip AAC.1 1080x1-RapG",
        se: 2,
        le: 1412,
        time: "11am Aug 4th",
        size: "2.8 GB",
        uploader: "RapGr"
      },
      {
        name: "The Fantastic Four First Steps [2025] 1080p HDCAM x264 DUAL AAC SUBS",
        se: 4,
        le: 448,
        time: "5pm Aug 2nd",
        size: "3.2 GB",
        uploader: "BHDOWNLQZ"
      },
      {
        name: "Together 2025 1080p SCREENER WEB-DL x264 AC3-AOC",
        se: 12,
        le: 796,
        time: "3am Aug 3rd",
        size: "6.5 GB",
        uploader: "atomicfusion"
      }
    ])
const torrents1 = reactive([
      {
        name: "Jurassic World Rebirth 2025 1080p WEBRip DD5.1 x264-NeoNoir",
        se: 7,
        le: 4523,
        time: "7am Aug 5th",
        size: "2.5 GB",
        uploader: "NeoNoir"
      },
      {
        name: "Spider-Man Far From Home 2019 1080p x265-RapidX",
        se: 3,
        le: 1516,
        time: "6am Aug 7th",
        size: "3.2 GB",
        uploader: "RapidX"
      },
      {
        name: "Wednesday S02 Season 2 P01 Part 1 2025 1080p NF WEBRip AAC.1 1080x1-RapG",
        se: 2,
        le: 1412,
        time: "11am Aug 4th",
        size: "2.8 GB",
        uploader: "RapGr"
      },
      {
        name: "The Fantastic Four First Steps [2025] 1080p HDCAM x264 DUAL AAC SUBS",
        se: 4,
        le: 448,
        time: "5pm Aug 2nd",
        size: "3.2 GB",
        uploader: "BHDOWNLQZ"
      },
      {
        name: "Together 2025 1080p SCREENER WEB-DL x264 AC3-AOC",
        se: 12,
        le: 796,
        time: "3am Aug 3rd",
        size: "6.5 GB",
        uploader: "atomicfusion"
      }
    ])
const head_title = "Movie";
const head_title1 = "Movie";
const dashboard_data = [];
dashboard_data.push({data:torrents, title:head_title})
dashboard_data.push({data:torrents1, title:head_title1})
</script>
<template>
  <AppLayout> 
    <TorrentHead />
    <TorrentTable
        v-for="(row, index) in dashboard_data"
        :key="index"
        :torrents="row.data"
        :head_title="row.title"
      />
  </AppLayout>
   
</template>
