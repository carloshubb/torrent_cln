<template>
  <div class="space-y-6 ml-8 w-70 mt-5">
          <!-- Browse Torrents -->
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl">
            <div class="bg-gradient-to-r from-orange-500 to-gray-500 px-4 py-3">
              <h3 class="text-white font-bold">BROWSE TORRENTS</h3>
            </div>
            <div class="p-4 space-y-2">
              <div 
                v-for="(category, index) in browseCategories" 
                :key="index"
                class="flex items-center text-gray-300 hover:text-orange-400 cursor-pointer transition-colors py-1"
                @click="browseCategory(category)"
              >
                
                {{ category }}
              </div>
            </div>
          </div>

          <!-- Links -->
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl">
            <div class="bg-gradient-to-r from-orange-500 to-gray-500 px-4 py-3">
              <h3 class="text-white font-bold">1331X LINKS</h3>
            </div>
            <div class="p-4 space-y-2">
              <div 
                v-for="(link, index) in externalLinks" 
                :key="index"
                class="text-orange-400 hover:text-orange-300 cursor-pointer transition-colors py-1"
                @click="openLink(link)"
              >
                » {{ link }}
              </div>
            </div>
          </div>
        </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'

import { ref, reactive, onMounted } from 'vue'

export default {
  name: 'TorrentSite',
  setup() {
    const searchQuery = ref('')
    
    const navTabs = ['HOME', 'UPLOAD', 'RULES', 'CONTACT', 'ABOUT US']
    
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

    const moviePosters = reactive([
      { title: "The Meg 2", quality: "1080p" },
      { title: "Oppenheimer", quality: "1080p" },
      { title: "The Phoenician", quality: "1080p" },
      { title: "Scream VI", quality: "1080p" },
      { title: "Marc Maron", quality: "1080p" },
      { title: "100 Men and Me", quality: "1080p" },
      { title: "Fantastic Four", quality: "1080p" }
    ])

    const browseCategories = [
      '📈 Trending Torrents',
      '📚 Movie library', 
      '⭐ Top 100 Torrents',
      '📺 Anime',
      '💾 Applications',
      '🎬 Documentaries',
      '🎮 Games',
      '🎬 Movies',
      '🎵 Music',
      '📄 Other',
      '📺 Television',
      '🔞 XXX'
           
    ]

    const externalLinks = [
      '1331x Status',
      '1331x Chat',
      'Torrent9',
      'uTrix',
      'Njalla',
      'PRQ',
      'Limetorrents',
      'TorrentFunk',
      'ThePornDude',
      'Torlock'
    ]

    // Methods
    const handleSearch = () => {
      if (searchQuery.value.trim()) {
        console.log('Searching for:', searchQuery.value)
        // Implement search logic here
        // You can emit an event or call an API
      }
    }

    const viewTorrent = (torrent) => {
      console.log('Viewing torrent:', torrent.name)
      // Implement torrent view logic
      // Navigate to torrent details page
    }

    const browseCategory = (category) => {
      console.log('Browsing category:', category)
      // Implement category browsing logic
      // Navigate to category page or filter torrents
    }

    const openLink = (link) => {
      console.log('Opening link:', link)
      // Implement external link logic
      // Open in new tab or navigate
    }

    onMounted(() => {
      console.log('TorrentSite component mounted')
      // Initialize component, fetch data, etc.
    })

    return {
      searchQuery,
      navTabs,
      torrents,
      moviePosters,
      browseCategories,
      externalLinks,
      handleSearch,
      viewTorrent,
      browseCategory,
      openLink
    }
  }
}
</script>

<style scoped>
/* Add any component-specific styles here if needed */
.bg-gray-750 {
  background-color: rgba(168, 174, 185, 0.5);
}
</style>