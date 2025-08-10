<template>
  <div class="lg:col-span-3">
          <!-- Status Message -->
          <div class="bg-gray-200 border-l-4 border-orange-100 p-4 mb-6 rounded">
            <h3 class="text-red-600 font-semibold mb-2">stream.1s file error</h3>
            <p class="text-gray-700 text-sm mb-2">
              For small number of requests at random cloudflare seems to redirect users and load https://www.cloudflare-terms-of-service-abuse.com/stream.1s
            </p>
            <p class="text-gray-700 text-sm mb-2">This does not seem to be caused by problem on our end.</p>
            <p class="text-gray-700 text-sm mb-2">
              New alternative domain is <span class="font-mono text-orange-600">x1337x.cc</span>
            </p>
            <p class="text-gray-700 text-sm">
              Users affected by domain blocking can start using Tor V3 onion domain (<span class="font-mono">l337xdarkk...</span>)
            </p>
          </div>

          <!-- Movie Posters -->
          <div class="grid grid-cols-7 gap-3 mb-8">
            <div 
              v-for="(movie, index) in moviePosters" 
              :key="index"
              class="relative group cursor-pointer"
            >
              <div class="bg-gray-800 aspect-[3/4] rounded-lg overflow-hidden hover:shadow-lg hover:shadow-orange-500/20 transition-all duration-300 hover:scale-105">
                <div class="w-full h-full bg-gradient-to-br from-orange-700 to-red-800 flex items-center justify-center">
                  <div class="text-white text-center">
                    <div class="text-xs font-bold mb-1">{{ movie.title }}</div>
                    <div class="text-xs opacity-75">{{ movie.quality }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Popular Torrents Section -->
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl mt-6">
            <div class="bg-gradient-to-r from-orange-400 to-red-600 px-4 py-3 flex items-center">
              <svg class="w-5 h-5 mr-2 text-white" fill="black" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <h2 class="text-white font-bold">MOST POPULAR TORRENTS THIS WEEK</h2>
            </div>

            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="bg-gray-700">
                  <tr>
                    <th class="text-left px-4 py-3 text-gray-300 font-semibold">name</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">se</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">le</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">time</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">size</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">uploader</th>
                  </tr>
                </thead>
                <tbody>
                  <tr 
                    v-for="(torrent, index) in torrents" 
                    :key="index"
                    class="border-b border-gray-700 hover:bg-gray-750 transition-colors cursor-pointer"
                    @click="viewTorrent(torrent)"
                  >
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <div class="w-6 h-6 bg-orange-600 rounded mr-3 flex items-center justify-center">
                          <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                          </svg>
                        </div>
                        <span class="text-gray-300 hover:text-orange-400 transition-colors">
                          {{ torrent.name }}
                        </span>
                      </div>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-green-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.se }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-red-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.le }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.time }}
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.size }}
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="text-orange-400 hover:text-orange-300 transition-colors">
                        {{ torrent.uploader }}
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
         
          <div class="bg-gray-700 rounded-lg overflow-hidden shadow-xl mt-6">
            <div class="bg-gradient-to-r from-orange-400 to-red-600 px-4 py-3 flex items-center">
              <svg class="w-5 h-5 mr-2 text-white" fill="black" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <h2 class="text-white font-bold">MOST POPULAR TORRENTS THIS WEEK</h2>
            </div>

            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="bg-gray-700">
                  <tr>
                    <th class="text-left px-4 py-3 text-gray-300 font-semibold">name</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">se</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">le</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">time</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">size</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">uploader</th>
                  </tr>
                </thead>
                <tbody>
                  <tr 
                    v-for="(torrent, index) in torrents" 
                    :key="index"
                    class="border-b border-gray-700 hover:bg-gray-750 transition-colors cursor-pointer"
                    @click="viewTorrent(torrent)"
                  >
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <div class="w-6 h-6 bg-orange-600 rounded mr-3 flex items-center justify-center">
                          <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                          </svg>
                        </div>
                        <span class="text-gray-300 hover:text-orange-400 transition-colors">
                          {{ torrent.name }}
                        </span>
                      </div>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-green-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.se }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-red-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.le }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.time }}
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.size }}
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="text-orange-400 hover:text-orange-300 transition-colors">
                        {{ torrent.uploader }}
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl mt-6">
            <div class="bg-gradient-to-r from-orange-400 to-red-600 px-4 py-3 flex items-center">
              <svg class="w-5 h-5 mr-2 text-white" fill="black" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <h2 class="text-white font-bold">MOST POPULAR TORRENTS THIS WEEK</h2>
            </div>

            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="bg-gray-700">
                  <tr>
                    <th class="text-left px-4 py-3 text-gray-300 font-semibold">name</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">se</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">le</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">time</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">size</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">uploader</th>
                  </tr>
                </thead>
                <tbody>
                  <tr 
                    v-for="(torrent, index) in torrents" 
                    :key="index"
                    class="border-b border-gray-700 hover:bg-gray-750 transition-colors cursor-pointer"
                    @click="viewTorrent(torrent)"
                  >
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <div class="w-6 h-6 bg-orange-600 rounded mr-3 flex items-center justify-center">
                          <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                          </svg>
                        </div>
                        <span class="text-gray-300 hover:text-orange-400 transition-colors">
                          {{ torrent.name }}
                        </span>
                      </div>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-green-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.se }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-red-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.le }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.time }}
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.size }}
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="text-orange-400 hover:text-orange-300 transition-colors">
                        {{ torrent.uploader }}
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="bg-gray-800 rounded-lg overflow-hidden shadow-xl mt-6">
            <div class="bg-gradient-to-r from-orange-400 to-red-600 px-4 py-3 flex items-center">
              <svg class="w-5 h-5 mr-2 text-white" fill="black" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <h2 class="text-white font-bold">MOST POPULAR TORRENTS THIS WEEK</h2>
            </div>

            <div class="overflow-x-auto">
              <table class="w-full">
                <thead class="bg-gray-700">
                  <tr>
                    <th class="text-left px-4 py-3 text-gray-300 font-semibold">name</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">se</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">le</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">time</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">size</th>
                    <th class="text-center px-4 py-3 text-gray-300 font-semibold">uploader</th>
                  </tr>
                </thead>
                <tbody>
                  <tr 
                    v-for="(torrent, index) in torrents" 
                    :key="index"
                    class="border-b border-gray-700 hover:bg-gray-750 transition-colors cursor-pointer"
                    @click="viewTorrent(torrent)"
                  >
                    <td class="px-4 py-3">
                      <div class="flex items-center">
                        <div class="w-6 h-6 bg-orange-600 rounded mr-3 flex items-center justify-center">
                          <svg class="w-3 h-3 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                          </svg>
                        </div>
                        <span class="text-gray-300 hover:text-orange-400 transition-colors">
                          {{ torrent.name }}
                        </span>
                      </div>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-green-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.se }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="bg-red-600 text-white px-2 py-1 rounded text-sm font-bold">
                        {{ torrent.le }}
                      </span>
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.time }}
                    </td>
                    <td class="text-center px-4 py-3 text-gray-400 text-sm">
                      {{ torrent.size }}
                    </td>
                    <td class="text-center px-4 py-3">
                      <span class="text-orange-400 hover:text-orange-300 transition-colors">
                        {{ torrent.uploader }}
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
</template>

<script>
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
      'Trending Torrents',
      'Movie library', 
      'Top 100 Torrents',
      'Anime',
      'Applications',
      'Documentaries',
      'Games',
      'Movies',
      'Music',
      'Other',
      'Television',
      'XXX'
    ]

    const externalLinks = [
      '1337x Status',
      '1337x Chat',
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
  background-color: rgb(55, 65, 81, 0.5);
}
</style>