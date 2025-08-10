<template>
  <div class="min-h-screen  bg-gray-900 text-white">
    <!-- Header -->
    <Header />

    <!-- Main Content Area -->
    <div class="flex flex-row">
      <!-- LeftSpace -->
      <LeftSpace />
      <!-- Content -->
      <div class="max-w-7xl mx-auto px-4 py-6">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
        
          <Table></Table>
        
      <!-- Sidebar -->
        <Sidebar />
      <!-- RightSpace -->
       </div>
       </div>
      <RightSpace />
    </div>

    <!-- Footer -->
    <Footer />
  </div>
</template>

<script setup>
import Header from '../Compenents/Layout/Header.vue'
import Sidebar from '../Compenents/Layout/Sidebar.vue'
import Footer from '../Compenents/Layout/Footer.vue'
import Table from '../Compenents/TorrentTable.vue'
// import LeftSpace from '../components/Layout/LeftSpace.vue';
// import RightSpace from '../components/Layout/RightSpace.vue';
</script>